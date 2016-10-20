<?php

include_once('includes/header.php');
require(DIR_WS_MPDF.'mpdf.php');
require('html_dom/simple_html_dom.php');

$date=date_create($_POST['payment_date']);
$inm = date_format($date,"Ymd");

	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	$payid = $_POST['txtpayid'];
	
	
	$fname = "Payment_".$inm."-".$payid."_1.pdf";
		
				$InvBody = showPayInvBody($conn);
				$input = showPaymentDetailD($conn,$payid);
				
				//$dEqp = showRtlInvDtl($conn,$eventlast_id);
				//$cnteqp = count($dEqp); 
			   $number = $input[0]['Amount'];
			   
			   $no = round($number);
			   $point = round($number - $no, 2) * 100;
			   $hundred = null;
			   $digits_1 = strlen($no);
			   $i = 0;
			   $str = array();
			   $words = array('0' => '', '1' => 'one', '2' => 'two',
				'3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
				'7' => 'seven', '8' => 'eight', '9' => 'nine',
				'10' => 'ten', '11' => 'eleven', '12' => 'twelve',
				'13' => 'thirteen', '14' => 'fourteen',
				'15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
				'18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
				'30' => 'thirty', '40' => 'forty', '50' => 'fifty',
				'60' => 'sixty', '70' => 'seventy',
				'80' => 'eighty', '90' => 'ninety');
			   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
			   while ($i < $digits_1) {
				 $divider = ($i == 2) ? 10 : 100;
				 $number = floor($no % $divider);
				 $no = floor($no / $divider);
				 $i += ($divider == 10) ? 1 : 2;
				 if ($number) {
					$plural = (($counter = count($str)) && $number > 9) ? 's' : null;
					$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
					$str [] = ($number < 21) ? $words[$number] .
						" " . $digits[$counter] . $plural . " " . $hundred
						:
						$words[floor($number / 10) * 10]
						. " " . $words[$number % 10] . " "
						. $digits[$counter] . $plural . " " . $hundred;
				 } else $str[] = null;
			  }
			  $str = array_reverse($str);
			  $result = implode('', $str);
			  $points = ($point) ?
				"." . $words[$point / 10] . " " . 
					  $words[$point = $point % 10] : '';
			  $result . "Rupees  " . $points . " Paise";
			  
			  $Logo .= '<img style="height:70px;width:70px;" src=" '.DIR_IMAGES.$input[0]['cmp_logo'].' "  />';
			
				$output =array(	
						'AmountWord' => ucfirst($result),
						'CmpLogo' =>  $Logo
						);
				
				$htmlbody = $InvBody[0]['template_body'];
			
 
				
				$htmlData = str_get_html($htmlbody);			
				foreach($input as $key => $value)
				{
					foreach($value as $key =>$value)
					{						
						$htmlData = str_replace('['.$key.']', $value, $htmlData);
					}
				}							
				foreach($output as $key => $value)
				{											
					$htmlData = str_replace('['.$key.']', $value, $htmlData);					
				}
				//$html = str_get_html($htmlData);				
				$html = $htmlData;				
					
				$mpdf=new mPDF('c','A4','','GEORGIAN'); 
				//$mpdf=new mPDF('utf-8', array(190,236)); 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				// print_r($html);
				// exit;
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				$path = DIR_WS_MINV.'Payment/'.$fname;								
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date1 = date('Y-m-d H:i:s');
				updInvPayment($conn,$payid,$fname);
				//insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				//updInvConfig($conn,$cnf_id,$nextval);
				header('Location: upload/minvoice/Payment/'.$fname);
?>