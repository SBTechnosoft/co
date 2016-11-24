<?php

	include_once('./header.php');

	if(isset($_POST['showAcc']))
		{	
			$data = showAccNum($conn);		
			$percent = ceil ((intval($data[0]['paid']) * 100 ) / intval($data[0]['total']) );	
			
	?>			
		<div class="number transactions"  data-percent="<?php echo $percent;?>"><span>+<?php echo $percent;?></span>%</div>	
		
	<?php
		}
		
	if(isset($_POST['showAccExp']))
		{
			$data = showAccExp($conn);		
			$percent = ceil ((intval($data[0]['paid']) * 100 ) / intval($data[0]['total']) );
		?>
			<div class="number visits"  data-percent="<?php echo $percent;?>"><span>-<?php echo $percent;?></span>%</div>
		<?php
		}
		
		if(isset($_POST['showEventCnt']))
			{
				$dataday = showUpDays($conn);
				$data = showCntStatus($conn,$dataday[0]['upcoming_days']);
				?>
				<b><?php echo $data[0]['enquiry'];?></b>				
			<?php
			}
		if(isset($_POST['showUPCEventCnt']))
			{
				$dataday = showUpDays($conn);
				$data = showCntStatus($conn,$dataday[0]['upcoming_days']);
				?>
				<b><?php echo $data[0]['upcoming'];?></b>				
			<?php
			}
		
	if(isset($_POST['showAccProfit']))
		{
			$client = showAccNum($conn);
			$vend = showAccExp($conn);
			
			$tot = intval($client[0]['total']) - intval($vend[0]['total']);
			$paid = intval($client[0]['paid']) - intval($vend[0]['paid']);
			
			$percent = ceil((intval($paid) * 100) / intval($tot));
			
			?>
				<div class="number bounce"  data-percent="<?php echo $percent; ?>"><span>+<?php echo $percent; ?></span>%</div>
			<?php
			//print_r($client);
			//print_r($vend);
			
		}
		if(isset($_POST['showDailyDtl']))
		{
			$recieve=showRecieve($conn);
			$recieveEvent=showRecieveEvent($conn);
		?>
			<tr>
                                        <td>Retail Sales</td>
                                        <td>
											<span class="label label-success" style="float:right;"><?php echo $recieve[0]['clientpaid'];?></span>
										</td>
                                        <td><span class="label label-warning"  style="float:right;"><?php echo $recieve[0]['totalamt']-$recieve[0]['clientpaid'];?></span></td>
                                        <td><span class="label label-inverse"  style="float:right;"><?php echo $recieve[0]['totalamt'];?></span></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>OutDoor</td>
                                        <td>
											<span class="label label-success"  style="float:right;"><?php echo $recieveEvent[0]['clienteventpaid'];?></span>
										</td>
                                        <td><span class="label label-warning"  style="float:right;"><?php echo $recieveEvent[0]['totaleventamt']-$recieveEvent[0]['clienteventpaid'];?></span></td>
                                        <td><span class="label label-inverse"  style="float:right;"><?php echo $recieveEvent[0]['totaleventamt'];?></span></td>
                                        
                                    </tr>
									<tr>
                                        <td>Total</td>
                                        <td>
											<span class="label label-success"  style="float:right;"><?php echo $recieve[0]['clientpaid']+$recieveEvent[0]['clienteventpaid'];?></span>
										</td>
                                        <td><span class="label label-warning"  style="float:right;"><?php echo ($recieve[0]['totalamt']-$recieve[0]['clientpaid'])+($recieveEvent[0]['totaleventamt']-$recieveEvent[0]['clienteventpaid']);?></span></td>
                                        <td><span class="label label-inverse"  style="float:right;"><?php echo $recieve[0]['totalamt']+$recieveEvent[0]['totaleventamt'];?></span></td>
                                        
                                    </tr>
		<?php	
		}
	?>
	
	