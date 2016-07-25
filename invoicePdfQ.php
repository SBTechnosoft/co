<?php
	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	include_once('includes/header.php');
	
	require(DIR_WS_MPDF.'mpdf.php');
	
	
	$date=date_create($_POST['txtfdate']);
	$inm = date_format($date,"Ymd");
	
	$id = $_POST['txteid'];	
	//$cmp = $_POST['txtcmpnm'];	
	if($_POST['txtcmpnm']== '')
	{
		$cmp = "NA";
	}
	else
	{
		$cmp = $_POST['txtcmpnm'];
	}
	$enm = $_POST['txtenm'];	
	$fdate= date_format($date,"dS F , Y H:i A");
	$sdate= date_format($date,"dS F , Y");
	$cnm = $_POST['txtcnm'];
	$charge = $_POST['txtcharge1'];
	$cpaid = $_POST['txtpaid'];
	$ramt = $charge - $cpaid;
	
	
	
	if(isset($_POST['txteid']))
	{		
		$data = showInvName($conn,$_POST['txteid']);
		$cnt = count($data);
		//echo $cnt."<br>";
		
		for($i=0;$i<$cnt;$i++)
		{
			if($data[$i]['inv_file_name']=='')
			{				
				$fname = $inm."-".$_POST['txteid']."_1.pdf";
		
			
				$html .= '

					<style>
					.trhw {height : 35px;}

					</style>
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:0px 0px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg .tg-jtyd{font-weight:bold;font-family:Georgia, serif !important;;background-color:#9a9a9a;text-align:right;vertical-align:top}
					.tg .tg-3gzm{font-weight:bold;font-family:Georgia, serif !important;;text-align:right;vertical-align:top}
					.tg .tg-ullm{font-weight:bold;font-size:13px;font-family:Georgia, serif !important;;background-color:#999999;text-align:right;vertical-align:top}
					.tg .tg-vi9z{font-weight:bold;font-family:Georgia, serif !important;;vertical-align:top}
					.tg .tg-bjj3{font-weight:bold;font-style:italic;font-size:22px;font-family:Georgia, serif !important;;background-color:#d9d9d9;text-align:center;vertical-align:top}
					.tg .tg-m36b{font-weight:bold;font-size:13px;font-family:Georgia, serif !important;;background-color:#999999;text-align:center;vertical-align:top}
					.thsrno {width:50px;}
					.theqp {width:400px;}
					.thamt {width:90px;}
					</style>

					<html>
						<body> 
						
						<table class="tg" >						
						  <tr>
							<th class="tg-bjj3" colspan="1"><img style="height:50px;width:100px;"src="assets/img/sblogo.png"> </th>
							<th class="tg-bjj3" style="padding:10px 5px;" colspan="4">QUATATION <br></th>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">To.: '.$cmp.' <br></td>
							<td class="tg-vi9z" colspan="2">'.$sdate.'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">Order Name:'.$enm.'</td>
							<td class="tg-vi9z" colspan="2">FP No.:'.$data[$i]['fp_no'].'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5">Order Date :'.$fdate.' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">Vennue.:</td>
							<td class="tg-vi9z" colspan="2">Quatation No.:'.$id.'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5">Client.:'.$cnm.'</td>
						  </tr>	  
						  <tr class="trhw">
							<td class="tg-m36b thsrno">Sr.No</td>
							<td class="tg-m36b theqp">Equipment</td>
							<td class="tg-ullm thsrno">Qty.</td>
							<td class="tg-ullm thamt">Unit Cost<br></td>
							<td class="tg-ullm thamt">Amount</td>
						  </tr>';
						
						$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
						$cnteqp = count($dEqp); 
						
						for($a=0;$a<$cnteqp;$a++)
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm">'.($a+1).'</td>
									<td class="tg-vi9z">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm">'.($a+1).'</td>
									<td class="tg-vi9z">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
						}
						  
						  
						$html .= '  
						
						  <tr class="trhw">
							<td class="tg-3gzm"></td>
							<td class="tg-vi9z"> <br></td>
							<td class="tg-3gzm"></td>
							<td class="tg-3gzm"></td>
							<td class="tg-3gzm"></td>
						  </tr>
						
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Charge<br></td>
							<td class="tg-3gzm">'.$data[$i]['client_charges'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm">'.$data[$i]['client_discount_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
							<td class="tg-3gzm">'.$data[$i]['service_tax_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm">'.$data[$i]['total_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" rowspan="1">
								Terms & Condition <br/>
							';
							
						$cond = showInvCond($conn);				
						$cnt = count($cond);	
						for($b=0;$b<$cnt;$b++)
						{
							$allcond = json_decode($cond[$b]['inv_cond_json']);
							$cntjsn = count($allcond);
							for($k=0;$k<$cntjsn;$k++)
							{						
								$html .= $allcond[$k].'<br>';
							}
						}
						
						if($data[$i]['cmp_name']!='')
						{
							$company=ucfirst($data[$i]['cmp_name']);
						}
						else
						{
							$company="-";
						}
						
					$html .= '
							</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-3gzm" colspan="5" rowspan="1">'.$company.'&nbsp;&nbsp;   <br>abc@gmail.com </td>
						  </tr>
						 
						</table>
						</body>
					</html>';
					
				$mpdf=new mPDF('c','A4','','GEORGIAN' , 25 , 25 , 30 , 15 , 0 , 0); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				$path = DIR_WS_MINV.$fname;								
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date1 = date('Y-m-d H:i:s');
				updInvEM($conn,$id,$fname);
				insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				
				header('Location: upload/minvoice/'.$fname);
				//exit();
					
			}
			else
			{
				
				$pos = substr($data[$i]['inv_file_name'],(strpos($data[$i]['inv_file_name'],"_") + 1),1);
				$pos = $pos+ 1;
				$newFileName = substr($data[$i]['inv_file_name'],0,strpos($data[$i]['inv_file_name'],"_") + 1) . (int)$pos . ".pdf" ;
				
			
				$html .= '

					<style>
					.trhw {height : 35px;}

					</style>
					<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:0px 0px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg .tg-jtyd{font-weight:bold;font-family:Georgia, serif !important;;background-color:#9a9a9a;text-align:right;vertical-align:top}
					.tg .tg-3gzm{font-weight:bold;font-family:Georgia, serif !important;;text-align:right;vertical-align:top}
					.tg .tg-ullm{font-weight:bold;font-size:13px;font-family:Georgia, serif !important;;background-color:#999999;text-align:right;vertical-align:top}
					.tg .tg-vi9z{font-weight:bold;font-family:Georgia, serif !important;;vertical-align:top}
					.tg .tg-bjj3{font-weight:bold;font-style:italic;font-size:22px;font-family:Georgia, serif !important;;background-color:#d9d9d9;text-align:center;vertical-align:top}
					.tg .tg-m36b{font-weight:bold;font-size:13px;font-family:Georgia, serif !important;;background-color:#999999;text-align:center;vertical-align:top}
					.thsrno {width:50px;}
					.theqp {width:400px;}
					.thamt {width:90px;}
					</style>

					<html>
						<body> 						
						
						<table class="tg" >							
						  <tr>
							
							<th class="tg-bjj3" colspan="1"><img style="height:50px;width:100px;"src="assets/img/sblogo.png"> </th>
							<th class="tg-bjj3" style="padding:10px 5px;" colspan="4">QUATATION <br></th>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">To.: '.$cmp.' <br></td>
							<td class="tg-vi9z" colspan="2">'.$sdate.'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">Order Name:'.$enm.'</td>
							<td class="tg-vi9z" colspan="2">FP No.:'.$data[$i]['fp_no'].'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5">Order Date :'.$fdate.' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3">Vennue.:</td>
							<td class="tg-vi9z" colspan="2">Quatation No.:'.$id.'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5">Client.:'.$cnm.'</td>
						  </tr>	  
						  <tr class="trhw">
							<td class="tg-m36b thsrno">Sr.No</td>
							<td class="tg-m36b theqp">Equipment</td>
							<td class="tg-ullm thsrno">Qty.</td>
							<td class="tg-ullm thamt">Unit Cost<br></td>
							<td class="tg-ullm thamt">Amount</td>
						  </tr>';
						
						$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
						$cnteqp = count($dEqp); 
						
						for($a=0;$a<$cnteqp;$a++)
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm">'.($a+1).'</td>
									<td class="tg-vi9z">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm">'.($a+1).'</td>
									<td class="tg-vi9z">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
						}
						  
						  
						$html .= '  
						
						  <tr class="trhw">
							<td class="tg-3gzm"></td>
							<td class="tg-vi9z"> <br></td>
							<td class="tg-3gzm"></td>
							<td class="tg-3gzm"></td>
							<td class="tg-3gzm"></td>
						  </tr>
						
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Charge<br></td>
							<td class="tg-3gzm">'.$data[$i]['client_charges'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm">'.$data[$i]['client_discount_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
							<td class="tg-3gzm">'.$data[$i]['service_tax_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm">'.$data[$i]['total_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" rowspan="1">
								Terms & Condition <br/>
							';
							
						$cond = showInvCond($conn);				
						$cnt = count($cond);	
						for($b=0;$b<$cnt;$b++)
						{
							$allcond = json_decode($cond[$b]['inv_cond_json']);
							$cntjsn = count($allcond);
							for($k=0;$k<$cntjsn;$k++)
							{						
								$html .= $allcond[$k].'<br>';
							}
						}
						
						if($data[$i]['cmp_name']!='')
						{
							$company=ucfirst($data[$i]['cmp_name']);
						}
						else
						{
							$company="-";
						}
						
					$html .= '
							</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-3gzm" colspan="5" rowspan="1">'.$company.'&nbsp;&nbsp;   <br>abc@gmail.com </td>
						  </tr>
						 
						</table>
						</body>
					</html>';
					
				$mpdf=new mPDF('c','A4','','GEORGIAN' , 25 , 25 , 30 , 15 , 0 , 0); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				
				$path = DIR_WS_MINV.$newFileName;								
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date = date('Y-m-d H:i:s');
				
				updInvEM($conn,$id,$newFileName);
				insInvECID($conn,$id,$newFileName,$date,$_SESSION['USER_ID']);		
				
				header('Location: upload/minvoice/'.$newFileName);
				//exit();
			}
		}
	}
	
	// include("mpdf60/mpdf.php");
	// $mpdf = new mPDF();
	// $mpdf -> allow_charset_conversion = true;
	// $mpdf -> charset_in = 'UTF-8';
	// $mpdf -> WriteHTML($html);
	// $mpdf -> Output('meu-pdf','I');
	// exit();
	
	//include("mpdf/mpdf.php");
	 
	

?>