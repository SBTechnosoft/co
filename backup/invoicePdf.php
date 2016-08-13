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
	$fdate= date_format($date,"dS F, Y H:i A");
	$sdate= date_format($date,"dS F, Y");
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
								<img src="ombanner.jpg"> 
							</th>
						  </tr>
						  
						  <tr class="trhw">
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="3">To: '.$cnm.' <br></td>
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="2">'.$sdate.'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order:'.$enm.'</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Quataion No:'.$data[$i]['fp_no'].'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order Date :'.$fdate.' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Vennue:';
							
						
						$vennue = showVennue($conn,$_POST['txteid']);
						$cntven = count($vennue);
						for($t=0;$t<$cntven;$t++)
						{
							if($t== $cntven-1)
							{
								$html .= $vennue[$t]['event_vennue'];
							}
							else
							{
								$html .= $vennue[$t]['event_vennue'].', ';
							}
						}
						
						$html .= '	
							</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Invoice No:'.$id.'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Client:'.$cmp.'</td>
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
						
						$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
						$cnteqp = count($dEqp); 
						
						for($a=0;$a<$cnteqp;$a++)
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$html .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
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
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_charges'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_discount_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['service_tax_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['total_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" rowspan="1" style="background-color:#d9d9d9">
								
							';				
						
						
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
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="3">To: '.$cnm.' <br></td>
							<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="2">'.$sdate.'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order:'.$enm.'</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Quataion No:'.$data[$i]['fp_no'].'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order Date :'.$fdate.' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Vennue:';
							
						
						$vennue = showVennue($conn,$_POST['txteid']);
						$cntven = count($vennue);
						for($t=0;$t<$cntven;$t++)
						{
							if($t== $cntven-1)
							{
								$html .= $vennue[$t]['event_vennue'];
							}
							else
							{
								$html .= $vennue[$t]['event_vennue'].', ';
							}
						}
						
						$html .= '	
							</td>
							<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Invoice No:'.$id.'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Client:'.$cmp.'</td>
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
						
						$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
						$cnteqp = count($dEqp); 
						
						for($a=0;$a<$cnteqp;$a++)
						{
							if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
							{				
							
							$html .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$html .= '
								<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.($a+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['amount'].'</td>
								</tr>
							';
							}
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
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_charges'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_discount_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['service_tax_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['total_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" rowspan="1" style="background-color:#d9d9d9">
								
							';				
						
						
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
									<img src="'.DIR_WS_IMAGES.'smlogo.png">
								</td>
						  </tr>
						 
						</table>
						</body>
					</html>';
					
				$mpdf=new mPDF('c','A4','','GEORGIAN'); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
						 
				// print_r($html);
				// exit;
				
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