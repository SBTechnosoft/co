<?php

include_once('includes/header.php');
require(DIR_WS_MPDF.'mpdf.php');
require('html_dom/simple_html_dom.php');

$date=date_create($_POST['txtfromdt']);
$inm = date_format($date,"Ymd");

	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	
	$fname = "Payment".$inm."-1"."_1.pdf";
		
				$InvBody = showPayInvBody($conn);
				$input = showPaymentDetailD($conn,1);
				
				//$dEqp = showRtlInvDtl($conn,$eventlast_id);
				//$cnteqp = count($dEqp); 
								
				
				
				$htmlbody = $InvBody[0]['template_body'];
			
 
				
				$htmlData = str_get_html($htmlbody);			
				foreach($input as $key => $value)
				{
					foreach($value as $key =>$value)
					{						
						$htmlData = str_replace('['.$key.']', $value, $htmlData);
					}
				}							
				
				//$html = str_get_html($htmlData);				
				$html = $htmlData;				
					
				$mpdf=new mPDF('c','A4','','GEORGIAN'); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				$path = DIR_WS_MINV.$fname;								
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date1 = date('Y-m-d H:i:s');
				//updInvEM($conn,$eventlast_id,$fname,$INVID);
				//insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				//updInvConfig($conn,$cnf_id,$nextval);
				header('Location: upload/minvoice/'.$fname);
?>