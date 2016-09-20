<?php


	ob_start();
	$html = ob_get_clean();
	$html = utf8_encode($html);
	
	include_once('includes/header.php');
	
	require(DIR_WS_MPDF.'mpdf.php');
	require('html_dom/simple_html_dom.php');
	
	// $vennue = showVennue($conn,15);	
	// $cnt = count($vennue);	
	// for($m=0;$m<$cnt;$m++)
	// {
		
		// echo "date=".$vennue[$m]['event_date'];
		// echo "vennue=".$vennue[$m]['event_vennue'];
		// echo "hall=".$vennue[$m]['event_date'];
		// echo "land-mark=".$vennue[$m]['event_date']."<br>";
		
		// $new = $vennue [$m]['event_places_id'];
		
		// $vndtl = showVnDtl($conn,$new);
		// $subcnt = count($vndtl);
		// for($n=0;$n<$subcnt;$n++)
		// {
		// echo $vndtl[$n]['eq_name'];
		// echo $vndtl[$n]['qty'];
		// echo $vndtl[$n]['amount']."<br>";
		// }
	// }
	
	// exit;
	
	$date=date_create($_POST['txtfdate']);
	$inm = date_format($date,"Ymd");
	
	$id = $_POST['txteid'];			
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
		for($i=0;$i<$cnt;$i++)
		{
			
				$newFileName = $inm."-".$_POST['txteid']."_1.pdf";			
						
				$InvBody = showQuotBody($conn);
				$CondBody = showQuotCond($conn);
				$input = showEventDetailQuaD($conn,$_POST['txteid']);
				
				$ResourceDtl = showQuoResource($conn,$_POST['txteid']);
				// print_r($ResourceDtl);
				// exit;
				
				//print_r($ResourceDtl);
				
				if(!empty($ResourceDtl))
				{
					$vennue = $ResourceDtl;
				}
				else
				{
					$vennue = showVennueDtl($conn,$_POST['txteid']);
				}
				//$cnteqp = count($dEqp); 				
				//$vennue = showVennueDtl($conn,$_POST['txteid']);
				
				
				$cnteqp = count($vennue);
				//echo $cnt;
				if($cnteqp<5)
				{
					$cnteqp1 = 5;
				}
				else
				{
					$cnteqp1 = $cnteqp;
				}
				for($m=0;$m<$cnteqp1;$m++)
				{
					if($m < $cnteqp)
					{
						if($m%2==0)
						{
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['event_hall'].','.$vennue[$m]['event_ld_mark'].','.$vennue[$m]['event_vennue'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">';
								$new = $vennue [$m]['event_places_id'];
									
									
									if(!empty($ResourceDtl))
									{
										$vndtl = showResDtl($conn,$new);
									}
									else
									{
										$vndtl = showVnDtl($conn,$new);
									}
									
									
									$subcnt = count($vndtl);
									for($n=0;$n<$subcnt;$n++)
									{
										
										$outputD .='
											'.$vndtl[$n]['eq_name'].':'.$vndtl[$n]['qty'].'<br>
											';							
									}
									$outputD .= '
										</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"><br>'.$vennue[$m]['Amount'].'</td> 
								</tr>
									';
						}
						else
						{
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['event_hall'].','.$vennue[$m]['event_ld_mark'].','.$vennue[$m]['event_vennue'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">';
								$new = $vennue [$m]['event_places_id'];
									
									if(!empty($ResourceDtl))
									{
										$vndtl = showResDtl($conn,$new);
									}
									else
									{
										$vndtl = showVnDtl($conn,$new);
									}
									$subcnt = count($vndtl);
									for($n=0;$n<$subcnt;$n++)
									{
										
										$outputD .= ''.$vndtl[$n]['eq_name'].':'.$vndtl[$n]['qty'].'<br>';							
									}
									$outputD .= '
										</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"><br>'.$vennue[$m]['Amount'].'</td> 
								</tr>
									';
							
						}
					}
					else
					{
						 if($m%2==0)
						   {
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['event_hall'].''.$vennue[$m]['event_ld_mark'].''.$vennue[$m]['event_vennue'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">';
								$new = $vennue [$m]['event_places_id'];
									
									if(!empty($ResourceDtl))
									{
										$vndtl = showResDtl($conn,$new);
									}
									else
									{
										$vndtl = showVnDtl($conn,$new);
									}
									$subcnt = count($vndtl);
									for($n=0;$n<$subcnt;$n++)
									{
										
										$outputD .='
											'.$vndtl[$n]['eq_name'].':'.$vndtl[$n]['qty'].'<br>
											';							
									}
									$outputD .= '
										</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"><br>'.$vennue[$m]['Amount'].'</td> 
								</tr>
									';
							}
						 else
							{
								$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['event_hall'].''.$vennue[$m]['event_ld_mark'].''.$vennue[$m]['event_vennue'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">';
								$new = $vennue [$m]['event_places_id'];
									
									if(!empty($ResourceDtl))
									{
										$vndtl = showResDtl($conn,$new);
									}
									else
									{
										$vndtl = showVnDtl($conn,$new);
									}
									$subcnt = count($vndtl);
									for($n=0;$n<$subcnt;$n++)
									{
										
										$outputD .='
											'.$vndtl[$n]['eq_name'].':'.$vndtl[$n]['qty'].'<br>
											';							
									}
									$outputD .= '
										</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"><br>'.$vennue[$m]['Amount'].'</td> 
								</tr>
									';
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
				
				
				
				$output =array(	
						'Description' => $outputD,
						'Venue' => $VennueD
						);
				
				// print_r($output);
				// print_r($input);
				// exit;
				$htmlbody = $InvBody[0]['template_body'];
			
 
				$htmlData = $htmlbody;
				//$htmlData = str_get_html($htmlbody);			
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
					
				$html1= $CondBody[0]['template_body'];
					
				$mpdf=new mPDF('c','A4','','GEORGIAN'); 
				 
				$mpdf->SetDisplayMode('fullpage');
				 
				$mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
				 
				$mpdf->WriteHTML($html);
				
				$mpdf -> AddPage();
				
				$mpdf->WriteHTML($html1);		 
				
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