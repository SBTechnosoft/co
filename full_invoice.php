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
	
	
	
	$data = showEventDetailInv($conn,$eid);
	
	//$data = showEventDetailInvD($conn,$eid);
	// print_r($data);
	// exit;
	
	$data1 = showEv_Pl_Dtl($conn,$eid);
	$cnt = count($data1);
	
	$data2 = showNewEv_Pl_Dtl($conn,$eid);
	$cnt2 = count($data2);
	
	// print_r($data2);
	// echo $cnt2;
	// exit;
	
	// print_r($data1);
	// exit;
	//echo $data[0]['event_name'];
	//exit;
	
	$html .= '	
	
		<style type="text/css">

		.tg-baqh1{border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-collapse:collapse;border-spacing:0;vertical-align:top}

		.tg-yw4l1{border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-collapse:collapse;border-spacing:0;vertical-align:top;text-align:center;}

		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg .tg-yw4l0{vertical-align:top;}

		.tg  {border-collapse:collapse;border-spacing:0;}
		.tg td{font-family:Arial,font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;}
		.tg th{font-family:Arial,font-size:14px;font-weight:normal;padding:0px 0px;border-style:solid;border-width:1px;}

		.tg .tg-baqh{text-align:center;vertical-align:top;padding:0px 0px;width:100px;}
		.tg .tg-ywh4l{vertical-align:top;}
		.tg .tg-baqhsub{vertical-align:top;}
		.tg .tg-ywh4lsub{vertical-align:top;}

		.tg .tg-baqhsub1{vertical-align:top;width:200px;}
		.tg .tg-baqhsub2{vertical-align:top;width:50px;}
		.tg .tg-baqhsub3{vertical-align:top;width:160px;}
		.tg .tg-baqhsub4{vertical-align:top;width:160px;}
		.tg .tg-baqhsub5{vertical-align:top;width:270px;}


		</style>



		<table class="tg" >		  
		  <tr>
            <th colspan="8"><img src="images/ombanner.jpg" width="1020" height="320" /></th>
          </tr>
		  <tr>
			<td class="tg-ywh4l0" colspan="8"><b>Order Detail</b><br></td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Order Name:<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['event_name'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Order Desc. :<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['event_ds'].'</td>
		  </tr>
		  <tr>
			<td class="tg-yw4l0" colspan="8"><b>Client Detail</b><br></td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Client Name:<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_name'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Client Company:<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_cmp'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Email Id:<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_email'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Work:</td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_work_mob'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Home:</td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_home_mob'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Mobile:</td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['client_mob'].'</td>
		  </tr>
		  <tr>
			<td class="tg-baqhsub" colspan="2">Status<br></td>
			<td class="tg-ywh4lsub" colspan="6">'.$data[0]['status'].'</td>
		  </tr>';
		  
		  for($a=0;$a<$cnt;$a++)
		  {		  
		  $html .= '
			  <tr>
				<td class="tg-ywh4l0" colspan="8"><b>Order Places Detail</b><br></td>
			  </tr>
			  <tr>
				<td class="tg-baqhsub" colspan="2">Vennue:</td>
				<td class="tg-ywh4lsub" colspan="6">'.$data1[$a]['event_vennue'].'</td>
			  </tr>
			  <tr>
				<td class="tg-baqhsub" colspan="2">Hall:</td>
				<td class="tg-ywh4lsub" colspan="6">'.$data1[$a]['event_hall'].'</td>
			  </tr>
			  <tr>
				<td class="tg-baqhsub" colspan="2">From Date<br></td>
				<td class="tg-ywh4lsub" colspan="6">'.$data1[$a]['event_date'].'</td>
			  </tr>
			  <tr>
				<td class="tg-baqhsub" colspan="2">To Date<br></td>
				<td class="tg-ywh4lsub" colspan="6">'.$data1[$a]['event_to_date'].'</td>
			  </tr>
			  <tr>
				<td class="tg-ywh4l0" colspan="8"><b>Equipment Detail</b><br></td>
			  </tr>
			  <tr>
				<td class="tg-baqhsub1" colspan="4">Equipment<br></td>	
				<td class="tg-baqhsub2">Qty</td>
				<td class="tg-baqhsub3">Staff</td>
				<td class="tg-baqhsub4">Vendor</td>
				<td class="tg-baqhsub5">Remark</td>
			  </tr>
			  ';
			  for($b=0;$b<$cnt2;$b++)
			  {
				  
				  if($data1[$a]['event_places_id'] == $data2[$b]['event_places_id'])
				  {
					  $html .= '
					  
					  <tr>
						<td class="" colspan="4">'.$data2[$b]['eq_id'].'</td>
						<td class="">'.$data2[$b]['qty'].'</td>
						<td class="">'.$data2[$b]['staff_id'].'</td>
						<td class="">'.$data2[$b]['vend_id'].'</td>
						<td class="">'.$data2[$b]['remark'].'<br></td>
					  </tr>
					  
					  ';
				  }
			  }
		  }
		  
		  $html .= ' 
		  
		</table>
';
	
	//include("mpdf60/mpdf.php");
	$mpdf = new mPDF();
	$mpdf -> allow_charset_conversion = true;
	$mpdf -> charset_in = 'UTF-8';
	$mpdf -> WriteHTML($html);
	
	//$mpdf -> Output('meu-pdf','I');
	
	$path = DIR_WS_MINV.$fname;								
	$mpdf->Output($path,'F');
	updInvFULL($conn,$eid,$fname);
	header('Location: upload/minvoice/'.$fname);
	exit();
	
	// include("mpdf60/mpdf.php");
	 
	// $mpdf=new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
	 
	// $mpdf->SetDisplayMode('fullpage');
	 
	// $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
	 
	// $mpdf->WriteHTML($html);
			 
	// $mpdf->Output('meu-pdf','I');//this fn on 8174 line in mpdf.php
	
	// header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');

	// exit();
?>


