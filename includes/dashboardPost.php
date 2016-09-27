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
		
	?>
	
	