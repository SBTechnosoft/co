<?php

include_once('./header.php');
if(isset($_POST['show']))
	{	
		
		$dataday = showUpDays($conn);		
		$data = showCntStatus($conn,$dataday[0]['upcoming_days']);
		$data1=showPerm($conn);
		$arr1 = json_decode($data1[0]['permission']);		
?>		
		
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("EALL", $arr1))
			{					
		?>
		
		<li>
			<a href="<?php echo HTTP_SERVER.'index.php?url=EALL';?>">
				<i class="icon-group"></i> All 
				<span class="badge"><?php if(!empty($data)){ echo $data[0]['tot'];}else{echo 0;} ?></span>
			</a>
				
		</li>
		<?php
			}
			if(isset($arr1) && !empty($arr1) && in_array("NEW", $arr1))
			{

		?>
		<li>
			<a href="<?php echo HTTP_SERVER.'index.php?url=NEW';?>">
				<i class="icon-file"></i> New 
				<span class="badge"><?php //echo $data[0]['new1']; ?><?php if(!empty($data)){ echo $data[0]['new1'];}else{echo 0;} ?></span>
			</a>
				
		</li>
		<?php
			}
			if(isset($arr1) && !empty($arr1) && in_array("UPC", $arr1))
			{

		?>
		
		<li class="">
			<a href="<?php echo HTTP_SERVER.'index.php?url=UPC';?>">
				<i class="icon-time"></i> Upcoming
				<span class="badge"><?php //echo $data[0]['upcoming']; ?><?php if(!empty($data)){ echo $data[0]['upcoming'];}else{echo 0;} ?></span>
			</a>
		</li>
		<?php
			}
			if(isset($arr1) && !empty($arr1) && in_array("COM", $arr1))
			{

		?>
		<li class="click">
			<a href="<?php echo HTTP_SERVER.'index.php?url=COM';?>">
				<i class="icon-check"></i> Completed
				<span class="badge"><?php //echo $data[0]['completed']; ?><?php if(!empty($data)){ echo $data[0]['completed'];}else{echo 0;} ?></span>
			</a>
		</li>
		<?php
			}
		?>
	<?php
	}
	
?>