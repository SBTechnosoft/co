<?php

include_once('includes/header.php');
require(DIR_WS_MPDF.'mpdf.php');

$date=date_create($_POST['txtfromdt']);
$inm = date_format($date,"Ymd");


	if(isset($_POST['txtprdnm']))
	{	
		
		if($_POST['taxmode'] == 'Yes')
		{
			if($_POST['txtdisc']=='')
			{
				$tax  =	round(($_POST['txtcharge'])* ($_POST['txtstax'])/100);				
				$gtot =  ($_POST['txtcharge'] ) + ($tax) ;				
			}
			else
			{
				$tax =  round(((($_POST['txtcharge']) - ($_POST['txtdisc'])) * ($_POST['txtstax']))/100);				
				$gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) ) + ($tax) ;
			}
		}
		else
		{
			if($_POST['txtdisc'] == '')
			{
				$gtot = ($_POST['txtcharge']);
			}
			else
			{
				
				$gtot =  (($_POST['txtcharge']) - ($_POST['txtdisc']) )  ;
				
			}
				
			
		}
		
		
		$hdn_ary = $_POST['hdn'];
		$cur_date = date('Y-m-d H:i:s');
		
		
		$tot_amt = $gtot;
		
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
		
		
		$gtot = $tot_amt;
		
		
		$frdt = $_POST['txtfromdt'];
		$trdt = $_POST['txttodt'];
		
		$nfrdt = date_format(new DateTime($frdt),'Y-m-d H:i:s');
		$ntrdt = date_format(new DateTime($frdt),'Y-m-d H:i:s');

		insertRetailAdd($conn,$_POST['txtprdnm'],$_POST['txtmobno'],$_POST['drpcmpnm'],
		$_POST['txtcharge'],$_POST['txtpaid'],$_POST['txtdisc'],$nfrdt,$ntrdt,$cur_date,
		$pay_status,$tax,$gtot,$_POST['txtstax']);
		
		
		
		
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
		
				
				
				
				$html .= '

					<style>
					.trhw {height : 35px;}

					</style>
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Calibri; sans-serif;font-size:12px;padding:7px 3px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
					.tg th{font-family:Calibri; sans-serif;font-size:12px;font-weight:normal;padding:00px 0px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
					.tg .tg-jtyd{font-family:Calibri; serif !important;;background-color:#9a9a9a;text-align:right;vertical-align:top}
					.tg .tg-3gzm{font-family:Calibri; serif !important;;text-align:right;vertical-align:top}
					.tg .tg-ullm{font-size:13px;font-family:Calibri; serif !important;;background-color:#999999;text-align:right;vertical-align:top}
					.tg .tg-vi9z{font-family:Calibri; serif !important;;vertical-align:top}
					.tg .tg-bjj3{font-style:italic;font-size:22px;font-family:Georgia, serif !important;;background-color:#d9d9d9;text-align:center;vertical-align:top}
					.tg .tg-m36b{font-size:13px;font-family:Calibri; serif !important;;background-color:#999999;text-align:left;vertical-align:top}
					.thsrno {width:50px;}
					.theqp {width:400px;}
					.thamt {width:90px;}
					</style>

					<html>
						<body> 						
						
						<table class="tg" >							
						  
						  <tr>
							<th colspan="5">
								<img src="'.DIR_WS_IMAGES.'ombanner.jpg"> 
							</th>
						  </tr>
						  
						  <tr class="trhw">
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="3">To: '.$_POST['txtprdnm'].' <br></td>
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="2"></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order:'.$_POST['txtfromdt'].'</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Retail No:<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Delivery Date :'.$_POST['txttodt'].' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">	</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Invoice No:<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Client:</td>
						  </tr>
						  
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="border-width:0px;background-color:#d9d9d9;padding:4px 3px;" > </td>
						  </tr>
						   <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="border-width:0px;background-color:#d9d9d9;padding:4px 3px;" > </td>
						  </tr>
						  
						  
						  <tr class="trhw" style="background-color:#9a9a9a;font-family:Calibri;">
							<td class="tg-m36b thsrno">Sr.No</td>
							<td class="tg-m36b theqp">Particulars</td>
							<td class="tg-ullm thsrno">Qty.</td>
							<td class="tg-ullm thamt">Unit Cost<br></td>
							<td class="tg-ullm thamt">Amount</td>
						  </tr>';
						
						$dEqp = $_POST['hdn'];
						$a=1;
						foreach($dEqp as $value)
						{
							
							$html .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$a.'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9">'.$value['txtiprdnm'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$value['txtiqty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$value['txtirate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$value['ptxtiamt'].'</td>
								</tr>
							';
							$a++;
						}
						  
						  
						$html .= '  
						
						  <tr class="trhw">
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
							<td class="tg-vi9z" style="background-color:#d9d9d9"> <br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
						  </tr>
						
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Charge<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$_POST['txtcharge'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax %<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$_POST['txtcharge'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" rowspan="1" style="background-color:#d9d9d9">							
							</td>
						  </tr>						  					  
						  <tr >
							<td class="tg-3gzm" colspan="1" style="float:left;text-align:center;vertical-align:bottom;background-color:#d9d9d9">
								
							</td>
							<td colspan="2" style="background-color:#d9d9d9;vertical-align:bottom;">Remark </td>
							<td class="tg-3gzm" colspan="2" style="text-align:center;vertical-align:bottom;background-color:#d9d9d9">
								Venture Of
							</td>
						  </tr>
						  <tr >
								<td class="tg-3gzm" colspan="1" style="float:left;text-align:center;vertical-align:bottom;background-color:#d9d9d9">
									
								</td>
								<td colspan="2" style="background-color:#d9d9d9;vertical-align:bottom;" > E.&.O.E. </td>
								<td class="tg-3gzm" colspan="2" style="text-align:center;background-color:#d9d9d9">
									<img src="smlogo.png">
								</td>
						  </tr>
						 
						</table>
						</body>
					</html>';
					
				// print_r($html);
				// exit;
					
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


