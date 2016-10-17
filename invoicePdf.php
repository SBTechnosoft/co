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
		
		$invSetting = showSettingInv($conn);
		$defaultqua = $invSetting[0]['set_as_quatation'];
		
		for($i=0;$i<$cnt;$i++)
		{
			if($data[$i]['inv_file_name']=='')
			{				
				$fname = $inm."-".$_POST['txteid']."_1.pdf";
				
				$InvBody = showInvBody($conn);
				$input = showEventDetailInvD($conn,$_POST['txteid']);			
				
				$ResourceDtl = showEqpResource($conn,$_POST['txteid']);
				
				$DeliverableDtl = showdeliverabledtl($conn,$_POST['txteid']);
				
				// print_r($ResourceDtl);
				// exit;
				
			if($defaultqua == 'Yes')
			{
				//start
				// echo "divyesh";
				// exit;
				
				$ResourceDtl = showQuoResource($conn,$_POST['txteid']);
				$counter =0;
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
				if($cnteqp<3)
				{
					$cnteqp1 = 3;
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
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['function'].','.$vennue[$m]['event_hall'].','.$vennue[$m]['event_vennue'].'</td>
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
								$counter++;
						}
						else
						{
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['function'].','.$vennue[$m]['event_hall'].','.$vennue[$m]['event_vennue'].'</td>
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
							$counter++;
						}
					}
					else
					{
						 if($m%2==0)
						   {
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
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
								$counter++;
							}
						 else
							{
								$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
									<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
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
								$counter++;
							}
					}					
				}
				// echo $counter;
				// exit;
				$DeliverableDtl = showdeliverabledtl($conn,$_POST['txteid']);
				if(!empty($DeliverableDtl))
				{
					if($counter%2 == 0)
					{
						$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Deliverable </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"></td> 
								</tr>
									';
						
						
						$delvcnt = count($DeliverableDtl);
						for($delv=0;$delv<$delvcnt;$delv++)
						{
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">'.$DeliverableDtl[$delv]['delv_name'].' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;">'.$DeliverableDtl[$delv]['amount'].'</td> 
								</tr>
									';
						}
					}
					else
					{
						$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Deliverable </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"></td> 
								</tr>
									';
						
						
						$delvcnt = count($DeliverableDtl);
						for($delv=0;$delv<$delvcnt;$delv++)
						{
							$outputD .= '
							
								<tr class="" style="font-family:Calibri;">
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">'.$DeliverableDtl[$delv]['delv_name'].' </td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
									<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;">'.$DeliverableDtl[$delv]['amount'].'</td> 
								</tr>
									';
						}
					}
				}
				//end
				
			}
			else
			{
				if(!empty($ResourceDtl))
				{
					$dEqp = $ResourceDtl;
				}
				else
				{
					$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
				}
				$cnteqp = count($dEqp);
				
				if($cnteqp < $cnteqp+1)
				{
					$cnteqp1 = $cnteqp+1;
				}
				else
				{
					$cnteqp1 = $cnteqp;
				}
				
				
				$count = 0;
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
					
					
					$count++;
				}
				
				$DelvDtl = showdeliverabledtl($conn,$_POST['txteid']);
				$cntdelv = count($DelvDtl);
				
				if($count % 2 == 0)
				{
					$outputD .= '
					<tr class="trhw" >
						<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
						<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">Deliverable<br></td>
						<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
						<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
						<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
					</tr>				';
					$count ++;
				}
				else
				{
					$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">Deliverable<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								</tr>';
					$count ++;
				}
				for($b=0;$b<=$cntdelv;$b++)
				{
					if($b < $cntdelv)
					{
						if($count % 2 == 0)
						{
							if($DelvDtl[$b]['width']!='' && $DelvDtl[$b]['width']!='undefined' && $DelvDtl[$b]['width']!=0)
							{				
							
							$outputD .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'('.$DelvDtl[$b]['width'].'X'.$DelvDtl[$b]['height'].')<br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$outputD .= '
								<tr class="trhw">
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'<br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
								</tr>
							';
							}
						}
						else
						{
							if($DelvDtl[$b]['width']!='' && $DelvDtl[$b]['width']!='undefined' && $DelvDtl[$b]['width']!=0)
							{				
							
							$outputD .= '
								<tr class="trhw" >
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'('.$DelvDtl[$b]['width'].'X'.$DelvDtl[$b]['height'].')<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
								</tr>
							';
							}
							else
							{				
							
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'<br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
								</tr>';
							}
						}
					}
					else
					{
						if($count%2==0)
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								</tr>';
						}
						else
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								</tr>';
						}
					}
					$count++;
				}
				
				while($count<9)
				{
					if($count%2==0)
					{
						$outputD .= '<tr class="trhw">
								<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
								<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
							</tr>';
					}
					else
					{
						$outputD .= '<tr class="trhw">
								<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
								<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
							</tr>';
					}
					$count++;
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
				for($t=0;$t<$cntven;$t++)
				{
					if($t== $cntven-1)
					{
						$ADATE .= $vennue[$t]['event_date'];
					}
					else
					{
						$ADATE .= date_format(date_create($vennue[$t]['event_date']),"d M").', ';
					}
				}
				$bnrimg = showBannerImg($conn,$_POST['txteid']);
				$cntimg = count($bnrimg);
				for($t=0;$t<$cntimg;$t++)
				{					
					$BnrImg .= '<img width="1020" height="320" src=" '.DIR_IMAGES.$bnrimg[$t]['Banner_Img'].' "  />';
					$CmpLogo .= '<img src=" '.DIR_IMAGES.$bnrimg[$t]['CMPLOGO'].' "  />';
					
				}
				
				$inv_id = showInvoiceId($conn,$input[0]['cmp_id']);
				$cnf_id = $inv_id[0]['invoice_conf_id'];
				if($inv_id[0]['type'] == 'prefix')
				{
					$INVID = $inv_id[0]['label'].$inv_id[0]['next_val'];
					$nextval = $inv_id[0]['next_val'] + 1;
				}
				else
				{
					$INVID = $inv_id[0]['next_val'].$inv_id[0]['label'];
					$nextval = $inv_id[0]['next_val'] + 1;
				}
				
				
				
				$output =array(	
						'Description' => $outputD,
						'Venue' => $VennueD,
						'ADATE' => $ADATE,
						'INVID' => $INVID,
						'Banner_Img' => $BnrImg,
						'CMPLOGO' => $CmpLogo
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
				updInvEM($conn,$id,$fname,$INVID);
				
				updInvConfig($conn,$cnf_id,$nextval);
				
				insInvECID($conn,$id,$fname,$date1,$_SESSION['USER_ID']);
				
				header('Location: upload/minvoice/'.$fname);
				//exit();
					
			}
			else
			{
				
				$pos = substr($data[$i]['inv_file_name'],(strpos($data[$i]['inv_file_name'],"_") + 1),1);
				$pos = $pos + 1;
				$newFileName = substr($data[$i]['inv_file_name'],0,strpos($data[$i]['inv_file_name'],"_") + 1) . (int)$pos . ".pdf" ;
				
				$InvBody = showInvBody($conn);
				$input = showEventDetailInvD($conn,$_POST['txteid']);				
				
				$ResourceDtl = showEqpResource($conn,$_POST['txteid']);
				// print_r($ResourceDtl);
				// exit;
			
				if($defaultqua == 'Yes')
				{
					//start
					// echo "divyesh";
					// exit;
					$ResourceDtl = showQuoResource($conn,$_POST['txteid']);
					$counter =0;
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
					if($cnteqp<3)
					{
						$cnteqp1 = 3;
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
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['function'].','.$vennue[$m]['event_hall'].','.$vennue[$m]['event_vennue'].'</td>
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
									$counter++;
							}
							else
							{
								$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Day'.($m+1).' </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Date<br> '.$vennue[$m]['event_date'].'</td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Event Detail <br> '.$vennue[$m]['function'].','.$vennue[$m]['event_hall'].','.$vennue[$m]['event_vennue'].'</td>
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
								$counter++;
							}
						}
						else
						{
							 if($m%2==0)
							   {
								$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
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
									$counter++;
								}
							 else
								{
									$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
										<td class=" " style="font-family:Calibri;vertical-align:top;height:65px;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"></td>
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
									$counter++;
								}
						}					
					}
					// echo $counter;
					// exit;
					$DeliverableDtl = showdeliverabledtl($conn,$_POST['txteid']);
					if(!empty($DeliverableDtl))
					{
						if($counter%2 == 0)
						{
							$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Deliverable </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"></td> 
									</tr>
										';
							
							
							$delvcnt = count($DeliverableDtl);
							for($delv=0;$delv<$delvcnt;$delv++)
							{
								$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">'.$DeliverableDtl[$delv]['delv_name'].' </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
										<td class=" " style="font-family:Calibri;vertical-align:top;background-color: #d9d9d9;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;">'.$DeliverableDtl[$delv]['amount'].'</td> 
									</tr>
										';
							}
						}
						else
						{
							$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">Deliverable </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;"></td> 
									</tr>
										';
							
							
							$delvcnt = count($DeliverableDtl);
							for($delv=0;$delv<$delvcnt;$delv++)
							{
								$outputD .= '
								
									<tr class="" style="font-family:Calibri;">
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;"> </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">'.$DeliverableDtl[$delv]['delv_name'].' </td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;padding: 5px 5px;">	</td>
										<td class=" " style="font-family:Calibri;vertical-align:top;font-size:12px;color:#4e4e4e;border-color:#4e4e4e;text-align:right;padding: 5px 5px;">'.$DeliverableDtl[$delv]['amount'].'</td> 
									</tr>
										';
							}
						}
					}
					//end
				}
				else
				{
					if(!empty($ResourceDtl))
					{
						$dEqp = $ResourceDtl;
					}
					else
					{
						$dEqp = showEqpRsDtl($conn,$_POST['txteid']);
					}
					$cnteqp = count($dEqp);
					
					if($cnteqp < $cnteqp+1)
					{
						$cnteqp1 = $cnteqp+1;
					}
					else
					{
						$cnteqp1 = $cnteqp;
					}
					
					
					$count = 0;
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
						
						
						$count++;
					}
					
					$DelvDtl = showdeliverabledtl($conn,$_POST['txteid']);
					$cntdelv = count($DelvDtl);
					
					if($count % 2 == 0)
					{
						$outputD .= '
						<tr class="trhw" >
							<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
							<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">Deliverable<br></td>
							<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
							<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
							<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
						</tr>				';
						$count ++;
					}
					else
					{
						$outputD .= '<tr class="trhw">
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">Deliverable<br></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									</tr>';
						$count ++;
					}
					for($b=0;$b<=$cntdelv;$b++)
					{
						if($b < $cntdelv)
						{
							if($count % 2 == 0)
							{
								if($DelvDtl[$b]['width']!='' && $DelvDtl[$b]['width']!='undefined' && $DelvDtl[$b]['width']!=0)
								{				
								
								$outputD .= '
									<tr class="trhw" >
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
										<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'('.$DelvDtl[$b]['width'].'X'.$DelvDtl[$b]['height'].')<br></td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
									</tr>
								';
								}
								else
								{				
								
								$outputD .= '
									<tr class="trhw">
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
										<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'<br></td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
									</tr>
								';
								}
							}
							else
							{
								if($DelvDtl[$b]['width']!='' && $DelvDtl[$b]['width']!='undefined' && $DelvDtl[$b]['width']!=0)
								{				
								
								$outputD .= '
									<tr class="trhw" >
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
										<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'('.$DelvDtl[$b]['width'].'X'.$DelvDtl[$b]['height'].')<br></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
									</tr>
								';
								}
								else
								{				
								
								$outputD .= '<tr class="trhw">
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.($b+1).'</td>
										<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['delv_name'].'<br></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['qty'].'</td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['rate'].'</td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;">'.$DelvDtl[$b]['amount'].'</td>
									</tr>';
								}
							}
						}
						else
						{
							if($count%2==0)
							{
								$outputD .= '<tr class="trhw">
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									</tr>';
							}
							else
							{
								$outputD .= '<tr class="trhw">
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
										<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									</tr>';
							}
						}
						$count++;
					}
					
					while($count<9)
					{
						if($count%2==0)
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								</tr>';
						}
						else
						{
							$outputD .= '<tr class="trhw">
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-vi9z" style="background-color:#d9d9d9;font-size:12px;padding: 5px 5px;color:#4e4e4e;"><br></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
									<td class="tg-3gzm" style="background-color:#d9d9d9;text-align:right;font-size:12px;padding: 5px 5px;color:#4e4e4e;"></td>
								</tr>';
						}
						$count++;
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
				for($t=0;$t<$cntven;$t++)
				{
					if($t== $cntven-1)
					{
						$ADATE .= $vennue[$t]['event_date'];
					}
					else
					{
						$ADATE .= date_format(date_create($vennue[$t]['event_date']),"d M").', ';
					}
				}
				$bnrimg = showBannerImg($conn,$_POST['txteid']);
				$cntimg = count($bnrimg);
				for($t=0;$t<$cntimg;$t++)
				{					
					$BnrImg .= '<img width="1020" height="320" src=" '.DIR_IMAGES.$bnrimg[$t]['Banner_Img'].' "  />';
					$CmpLogo .= '<img src=" '.DIR_IMAGES.$bnrimg[$t]['CMPLOGO'].' "  />';
					
				}
				$INVID = $input[0]['inv_file_id'];
				// print_r($input);
				// echo $INVID;
				// exit;
				$output =array(	
						'Description' => $outputD,
						'Venue' => $VennueD,
						'ADATE' => $ADATE,
						'INVID' => $INVID,
						'Banner_Img' => $BnrImg,
						'CMPLOGO' => $CmpLogo
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
				$mpdf->Output($path,'F');//this fn on 8174 line in mpdf.php
				$date = date('Y-m-d H:i:s');
				
				updInvEM($conn,$id,$newFileName,$INVID);
				insInvECID($conn,$id,$newFileName,$date,$_SESSION['USER_ID']);		
				
				header('Location: upload/minvoice/'.$newFileName);
				//exit();
			}
		}
	}
	


?>