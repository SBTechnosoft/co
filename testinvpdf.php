<?php
	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	include_once('includes/header.php');	
	require(DIR_WS_MPDF.'mpdf.php');
	require('html_dom/simple_html_dom.php');
	
	
	
	
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
				
				$InvBody = showInvBody($conn);
				$input = showEventDetailInvD($conn,$_POST['txteid']);
				
				$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				$cnteqp = count($dEqp); 
				
				for($a=0;$a<$cnteqp;$a++)
				{
					if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
					{				
					
					$outputD .= '
						<tr class="trhw" >
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.($a+1).'</td>
							<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['qty'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['rate'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['amount'].'</td>
						</tr>
					';
					}
					else
					{				
					
					$outputD .= '
						<tr class="trhw">
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.($a+1).'</td>
							<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['qty'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['rate'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['amount'].'</td>
						</tr>
					';
					}
				}
				$output =array(	
						'Description' => $outputD
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
				
				$InvBody = showInvBody($conn);
				$input = showEventDetailInvD($conn,$_POST['txteid']);
				
				$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				$cnteqp = count($dEqp); 
				
				for($a=0;$a<$cnteqp;$a++)
				{
					if($dEqp[$a]['length']!='' && $dEqp[$a]['length']!='undefined')
					{				
					
					$outputD .= '
						<tr class="trhw" >
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.($a+1).'</td>
							<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['qty'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['rate'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['amount'].'</td>
						</tr>
					';
					}
					else
					{				
					
					$outputD .= '
						<tr class="trhw">
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.($a+1).'</td>
							<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'<br></td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['qty'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['rate'].'</td>
							<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;">'.$dEqp[$a]['amount'].'</td>
						</tr>
					';
					}
				}
				$output =array(	
						'Description' => $outputD
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
						 
				// print_r($html);
				// exit;
				
				//header('location : D:\xampp\htdocs\mpdf\invoice\meu-pdf.pdf');
				
				$path = DIR_WS_MINV.$newFileName;								
				$mpdf->Output($path,'I');//this fn on 8174 line in mpdf.php
				$date = date('Y-m-d H:i:s');
				
				updInvEM($conn,$id,$newFileName);
				insInvECID($conn,$id,$newFileName,$date,$_SESSION['USER_ID']);		
				
				header('Location: upload/minvoice/'.$newFileName);
				//exit();
			}
		}
	}
	


?>