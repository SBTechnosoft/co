<?php
	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	include_once('includes/header.php');	
	require(DIR_WS_MPDF.'mpdf.php');
	require('html_dom/simple_html_dom.php');
	
	$eid = $_POST['txtfpdfeid'];
	$date = $_POST['txtfpdffromdt'];	
	$inm = date_format(new DateTime($date),"Ymd");		
	$fname = $inm."_".$eid.".pdf";
	
	
	$InvBody = showEventInfoBody($conn);	
	$input = showEventDetailInvD($conn,$_POST['txtfpdfeid']);	
	
	$vennue = showVennueDtl($conn,$_POST['txtfpdfeid']);
	$cnteqp = count($vennue);
	for($m=0;$m<$cnteqp;$m++)
	{
		$outputD .= '
		
				 <tr class="trhw">
					<td class="tg-vi9z" style="background-color: #9a9a9a; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #e1e1e1;" colspan="9">Order Places Detail</td>
				 </tr>
				 <tr class="trhw">
					<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="3">Venue:'.$vennue[$m]['event_vennue'].' </td>
					<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="6">Hall: '.$vennue[$m]['event_hall'].' </td>
				 </tr>
				 <tr class="trhw">
					<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="3">Date:'.$vennue[$m]['event_date'].' </td>
					<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="6">To Date:'.$vennue[$m]['event_to_date'].' </td>
				 </tr>		';
				 
				$new = $vennue [$m]['event_places_id'];
				$vndtlRes = showResDtlInfo($conn,$new);				
				$subcnt = count($vndtlRes);
					for($n=0;$n<$subcnt;$n++)
					{
						
						$outputD .= '
								 <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #9a9a9a; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #e1e1e1;" colspan="9">Resources</td>
								 </tr>
								 <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Resource</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Rate</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Qty</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Amount</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Vendor</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Price</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="3">Remark</td>
								 
								 </tr>
								 <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['eq_name'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['rate'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['qty'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['amount'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['vendor_name'].'('.$vndtlRes[$n]['vendor_cmp'].')</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtlRes[$n]['res_vend_price'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="3">'.$vndtlRes[$n]['res_remark'].'</td>
								 
								 </tr>
							
							';							
					}
					$vndtl = showEquipmentDtl($conn,$new);
					$subcnteqp = count($vndtl);
					for($p=0;$p<$subcnteqp;$p++)
					{
						
						$outputD .= '
								 <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #9a9a9a; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #e1e1e1;" colspan="9">Equipment</td>
								 </tr>
								 <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Equipment</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Accessories</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Rate</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Qty</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Amount</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Staff</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Vendor</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Price</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">Remark</td>
								 
								 </tr>
								 
								  <tr class="trhw">
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['eq_name'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['eq_name'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['rate'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['qty'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['amount'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['first_name'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['vendor_name'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri;font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['vend_price'].'</td>
									<td class="tg-vi9z" style="background-color: #d9d9d9; padding: 5px 10px; font-family: Calibri; font-size: 12px; vertical-align: bottom; color: #4e4e4e;" colspan="1">'.$vndtl[$p]['remark'].'</td>
								 
								 </tr>
							
							';							
					}
	}
	
	
	$bnrimg = showBannerImg($conn,$_POST['txtfpdfeid']);
	$cntimg = count($bnrimg);
	for($t=0;$t<$cntimg;$t++)
	{					
		$BnrImg .= '<img width="1020" height="320" src=" '.DIR_IMAGES.$bnrimg[$t]['Banner_Img'].' "  />';				
		
	}
	$output =array(	
			'Description' => $outputD,
			//'Venue' => $VennueD,
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
	
	$html = str_get_html($htmlData);
	
	$html = $htmlData;	
	
	$mpdf=new mPDF('c','A4','','GEORGIAN'); 
	 
	$mpdf->SetDisplayMode('fullpage');
	 
	$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
	 
	$mpdf->WriteHTML($html);
			 
	
	
	//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
	$path = DIR_WS_MINV.$fname;								
	$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
	
	
	$date1 = date('Y-m-d H:i:s');
	updInvFULL($conn,$eid,$fname);
	header('Location: upload/minvoice/'.$fname);
	exit();
	
	
	
	
	// $data = showEventDetailInv($conn,$eid);	
	// $data1 = showEv_Pl_Dtl($conn,$eid);
	// $cnt = count($data1);	
	// $data2 = showNewEv_Pl_Dtl($conn,$eid);
	// $cnt2 = count($data2);	
	// $mpdf = new mPDF();
	// $mpdf -> allow_charset_conversion = true;
	// $mpdf -> charset_in = 'UTF-8';
	// $mpdf -> WriteHTML($html);
	// $path = DIR_WS_MINV.$fname;								
	// $mpdf->Output($path,'F');
	// updInvFULL($conn,$eid,$fname);
	// header('Location: upload/minvoice/'.$fname);
	// exit();
	
	
?>


