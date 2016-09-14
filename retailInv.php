<?php

include_once('includes/header.php');
require(DIR_WS_MPDF.'mpdf.php');
require('html_dom/simple_html_dom.php');

$date=date_create($_POST['txtfromdt']);
$inm = date_format($date,"Ymd");


	if(isset($_POST['txtprdnm']))
	{	
		
		// if($_POST['taxmode'] == 'Yes')
		// {
			// if($_POST['txtdisc']=='')
			// {
				// $tax  =	round(($_POST['txtcharge'])* ($_POST['txtstax'])/100);				
				// $gtot =  ($_POST['txtcharge'] ) + ($tax) ;				
			// }
			// else
			// {
				// $tax =  round(((($_POST['txtcharge']) - ($_POST['txtdisc'])) * ($_POST['txtstax']))/100);				
				// $gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) ) + ($tax) ;
			// }
		// }
		// else
		// {
			// if($_POST['txtdisc'] == '')
			// {
				// $gtot = ($_POST['txtcharge']);
			// }
			// else
			// {
				
				// $gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) )  ;
				
			// }
				
			
		// }
		
		$gtot = $_POST['txtgtotamt'];
		$tax =  $_POST['txttaxamt'];
		$vat =  $_POST['txtvatamt'];
		
		
		$hdn_ary = $_POST['hdn'];
		$cur_date = date('Y-m-d H:i:s');
		
		
		
		$paid_amt = $_POST['txtpaid'];
		
		
		
		if($tot_amt - $paid_amt != 0)
		{
			$pay_status = "Unpaid";
		}
		else
		{
			$pay_status = "Paid";
		}
		
		if($_POST['txtpaid']=='')
		{
			$txtpaid = 0;
		}
		else
		{
			$txtpaid = $_POST['txtpaid'];
		}	
		
		$frdt = $_POST['txtfromdt'];
		$trdt = $_POST['txttodt'];
		
		$nfrdt = date_format(new DateTime($frdt),'Y-m-d H:i:s');
		$ntrdt = date_format(new DateTime($trdt),'Y-m-d H:i:s');

		insertRetailAdd($conn,$_POST['txtprdnm'],$_POST['txtmobno'],$_POST['drpcmpnm'],
		$_POST['txtcharge'],$_POST['txtpaid'],$_POST['txtdisc'],$nfrdt,$ntrdt,$cur_date,
		$pay_status,$tax,$gtot,$_POST['txtstax'],$vat);
		
		
		
		
		//select last record inserted from event_mst	
		$eventlast_id = mysql_insert_id();;
		//now inserted in event_places_id
		
		
		//here is loop coming for multiple record//
		foreach($hdn_ary as $value )
		{				
			insertRetailDtl($conn,$eventlast_id,$value['txtictg'],$value['txtprdid'],$value['txticomgrp'],$value['txtirate'],$value['txtiqty'],$value['ptxtiamt']);		
		}			
			
		$client_charge = $_POST['txtcharge'];
		$cur_date = date('Ymd');
		if($_POST['txtpaid'] != '' && $_POST['txtpaid'] != 0 )
		{
			insertPaymentTrn($conn,$eventlast_id,$cur_date,$_POST['txtpaid'],$_POST['paymentMode'],$_POST['txtbanknm'],$_POST['txtchkno']);
		}
			
	}
	
	
	

	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	
	$fname = $inm."-".$eventlast_id."_1.pdf";
		
				$InvBody = showRtlInvBody($conn);
				$input = showEventDetailInvD($conn,$eventlast_id);
				
				// $ResourceDtl = showEqpResource($conn,$_POST['txteid']);	
				
				
				// if(!empty($ResourceDtl))
				// {
					// $dEqp = $ResourceDtl;
				// }
				// else
				// {
					// $dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				// }
				
				$dEqp = showRtlInvDtl($conn,$eventlast_id);
				$cnteqp = count($dEqp); 
				if($cnteqp<11)
				{
					$cnteqp1 = 11;
				}
				else
				{
					$cnteqp1 = $cnteqp;
				}
				for($a=0;$a<$cnteqp1;$a++)
				{
					if($a < $cnteqp)
					{
						if($a%2==0)
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$outputD .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($a+1).'</td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$outputD .= '
								<tr class="trhw">
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($a+1).'</td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
						}
						else
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$outputD .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>';
							}
						}
					}
					else
					{
						if($a%2==0)
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>';
						}
						else
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$dEqp[$a]['amount'].'</td>
								</tr>';
						}
					}					
				}
				$vennue = showVennue($conn,$_POST['txteid']);
				$cntven = count($vennue);
				for($t=0;$t<$cntven;$t++)
				{
					if($t== $cntven-1)
					{
						$VennueD .= $vennue[$t]['event_vennue'];
					}
					else
					{
						$VennueD .= $vennue[$t]['event_vennue'].', ';
					}
				}
				
				$bnrimg = showBannerImg($conn,$eventlast_id);
				$cntimg = count($bnrimg);
				for($t=0;$t<$cntimg;$t++)
				{					
					$BnrImg .= '<img width="1020" height="320" src=" '.DIR_IMAGES.$bnrimg[$t]['Banner_Img'].' "  />';				
					
				}
				
				$output =array(	
						'Description' => $outputD,
						'Venue' => $VennueD,
						'Banner_Img' => $BnrImg
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
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				$path = DIR_WS_MINV.$fname;								
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date1 = date('Y-m-d H:i:s');
				updInvEM($conn,$id,$fname);
				//insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				
				header('Location: upload/minvoice/'.$fname);
?>


