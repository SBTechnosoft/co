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
							<td class="tg-vi9z" style="padding:4px 3px;font-family:Calibri;" colspan="4">To: '.$cnm.' <br></td>
							<td class="tg-vi9z" style="padding:4px 3px;font-family:Calibri;" colspan="1">'.$sdate.'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="4" style="padding:4px 3px;font-family:Calibri;">Order:'.$enm.'</td>
							<td class="tg-vi9z" colspan="1" style="padding:4px 3px;font-family:Calibri;">Quataion No:'.$data[$i]['fp_no'].'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="padding:4px 3px;font-family:Calibri;">Order Date :'.$fdate.' <br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="4" style="padding:4px 3px;font-family:Calibri;">Vennue:';
							
						
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
							<td class="tg-vi9z" colspan="1" style="padding:4px 3px;font-family:Calibri;">Invoice No:'.$id.'<br></td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-vi9z" colspan="5" style="padding:4px 3px;font-family:Calibri;">Client:'.$cmp.'</td>
						  </tr>
						  
						 
						  
						  
						  <tr class="" style="font-family:Calibri;">
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Day1</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Date</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Event Detail</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">No. Of Photographers:<br>No. Of Cinematographers:</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Final Amount</td>
						  </tr>
						  <tr class="" style="font-family:Calibri;">
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Day1</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Date</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Event Detail</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">No. Of Photographers:<br>No. Of Cinematographers:</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Final Amount</td>
						  </tr>
						  <tr class="" style="font-family:Calibri;">
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Day1</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Date</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Event Detail</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">No. Of Photographers:<br>No. Of Cinematographers:</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Final Amount</td>
						  </tr>
						  <tr class="" style="font-family:Calibri;">
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Day1</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Date</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Event Detail</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">No. Of Photographers:<br>No. Of Cinematographers:</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Final Amount</td>
						  </tr>
						  <tr class="" style="font-family:Calibri;">
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Day1</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Date</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Event Detail</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">No. Of Photographers:<br>No. Of Cinematographers:</td>
							<td class=" " style="font-family:Calibri;border-style:solid;border-width:1px;vertical-align:top;height:65px;">Final Amount</td>
						  </tr>
						  	  ';
						
						
						  
						  
						$html .= '  
						
						  
						
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Charge<br></td>
							<td class="tg-3gzm" style="">'.$data[$i]['client_charges'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Discount</td>
							<td class="tg-3gzm" style="">'.$data[$i]['client_discount_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
							<td class="tg-3gzm" style="">'.$data[$i]['service_tax_amt'].'</td>
						  </tr>
						  <tr class="trhw">
							<td class="tg-jtyd" colspan="4">Total</td>
							<td class="tg-3gzm" style="">'.$data[$i]['total_amt'].'</td>
						  </tr>
						  <tr>
							<td colspan="5"> </td>
						  </tr>
						  					  					  
						  <tr>
							<td colspan="5" style="height:30px;vertical-align:bottom;">
							I have carefully read and agreed on the final quotation with all terms & conditions mentioned.
							</td>
						  </tr>
						  <tr>
							<td colspan="4">Signature <br>(Client) </td>
							<td colspan="4">Signature <br>(50mm) </td>
							
						  </tr>
						 
						</table>
						</body>
					</html>';
					
				$html1 .= '
				<table>
					 <tr>
						<th colspan="2">
							<img src="'.DIR_WS_IMAGES.'ombanner.jpg"> 
						</th>
					  </tr>
					<tr>
						<td colspan="2" style="height:50px;font-size:16px;vertical-align:bottom;">
							<b>Terms & Conditions related to Wedding or Event Photography & Filmmaking Project</b>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="height:200px; font-size:13px;border-style:solid;padding:7px 3px; border-width:1px;">
							(1) Album Printing Cost is Not included into this quotation.<br>
							(2) In case of any film corrections,changes should be communicated by the client within 20 days after the submission.<br>
							(3) Movie editing cost is included into this quotation.<br>
							(4) 2 sets od DVDs & 1 set of HD/Blu-ray-Disk is includedin the quotation.<br>
							(5) Raw data of the project will be handed over to the client only when the payment is paid.<br>
							(6) Album Printing Cost will be required on the delivery of the album.<br>
							(7) Delivery time of the Wedding Film will be minimum60 days after post production advanced is received.<br>
							(8) Delivery time of the albums will be minimum 50 days after the final selection of pictures from the client\'s end.<br>
							(9) Stage set-up or Back-drop arrangement will be managed by the event manager or by the client\'s decoration agency.<br>
							(10)We shall not be able to shoot on the other than the dates mentioned in the final quotation.<br>
							(11)For events outside the surat city; Accomodation & Food will be arranged by the client at same venue.<br>
							(12)For events outside the surat city; Travelling & Transportation will be arranged by the client or charges will be at actuals.<br>
							(13)Album design correction and film correction will be managed only once & at a time.<br>
							(14)Final wedding film includes 1 trailer up to 5 minutes & event wise full edited films.<br>
							(15)Any additional cuts for the wedding films will be charged as per the requirments.<br>
							(16)Any type of advance amount is no refundable.<br>
							(17)Any amount related to LED Screens,Mixer,Instant printing will be required well in advance.<br>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" style="height:50px;font-size:16px;vertical-align:bottom;">
							Terms & Conditions related to Payment
						</td>
					</tr>
					
					<tr>
						<td colspan="2" style="height:100px; font-size:13px;border-style:solid;padding:7px 3px; border-width:1px;">
							(1) 40% Advance amount is required to block the dates.<br>
							(2) 40% Pending amount is to be paid on completion of shoot.<br>
							(3) 10% Pending amount is to be paid to start the editing process.<br>
							(4) 10% Pending amount is to be paid at the end of editing process.<br>
						</td>
					</tr>
					
					<tr>
						<td colspan="2" style="height:30px;vertical-align:bottom;">
							I have carefully read and agreed on the final quotation with all terms & conditions mentioned.
						</td>
					 </tr>
					 
					<tr>
					  
						<td colspan="1" style="height:100px;vertical-align:bottom;">Signature <br>(Client) </td>
						<td colspan="1" style="height:100px;vertical-align:bottom;float:right;">Signature <br>(50mm) </td>
						
					</tr>
					
				</table>
				
				';
					
				$mpdf=new mPDF('c','A4','','GEORGIAN'); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
				
				$mpdf -> AddPage();
				
				$mpdf->WriteHTML($html1);		 
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
	

?>