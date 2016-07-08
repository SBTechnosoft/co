<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{
		insertExpence($conn,$_POST['showexpctg'],$_POST['showevent'],$_POST['txtfromdt'],$_POST['txtamt'],$_POST['showstf']);
		
	}		
	
	if(isset($_POST['showTrnDtl']))
	{	
		$ETrnDtl = showTransDtl ($conn);
		
		$VTrnDtl = showTransVend($conn);
		
		
		$showTrnVend = count($VTrnDtl);
		
		
		print_r($VTrnDtl);
		
		$showTrnCnt = count($ETrnDtl);	
		for($i=0;$i<$showTrnCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo $ETrnDtl[$i]['event_id'];?></td>
				<td><?php echo ucfirst($ETrnDtl[$i]['event_name']);?></td>
				<td><?php echo ucfirst($ETrnDtl[$i]['client_name']);?></td>
				
				<td>
					<span class="label label-success">
						<?php echo $ETrnDtl[$i]['client_charges'];?>
					</span>
				</td>
				<td>
					<span class="label label-warning">
					
						<?php 
						for($j=0;$j<$showTrnVend;$j++)
						{
							if($ETrnDtl[$i]['event_id'] == $VTrnDtl[$j]['event_id'] )
							{
								echo $VTrnDtl[$j]['vtot'];
							}
							
						}
						?>
					</span>
				</td>
				
				
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['showExpCtg']))
	{
		$data = showExpCtg($conn);
		$showCtgCnt = count($data);
		?>
			<optgroup label="Event" >
				<option select="selected" value="">Select Category</option>				
		<?php
		for($i=0;$i<$showCtgCnt;$i++)
		{	
			if($data[$i]['cat_type'] == 'event')
			{
		?>		
			<option  value="<?php echo $data[$i]['exp_cat_id'];?>"><?php echo $data[$i]['cat_name'];?></option>
		<?php
			}
		}
		?>
		</optgroup>
		<optgroup label="Other" >
		<?php
		for($i=0;$i<$showCtgCnt;$i++)
		{	
			if($data[$i]['cat_type'] == 'other')
			{
		?>		
			<option  value="<?php echo $data[$i]['exp_cat_id'];?>"><?php echo $data[$i]['cat_name'];?></option>
		<?php
			}
		}
		?>
		</optgroup>
	<?php	
	}
	if(isset($_POST['showEvent']))
	{
		$data = showEvent($conn);
		$showEvntCnt = count($data);
		?>
		<option select="selected" value="">Select Event</option>
		<?php
		for($i=0;$i<$showEvntCnt;$i++)
		{
			?>
			<option  value="<?php echo $data[$i]['event_id'];?>"><?php echo $data[$i]['event_name'];?></option>
			<?php
		}
	}
	if(isset($_POST['showStaffDrp']))
	{
		$data = showStaffDrp($conn);
		$showStfCnt = count($data);
		?>
		<option select="selected" value="">Select Staff</option>
		<?php
		for($i=0;$i<$showStfCnt;$i++)
		{
			?>
			<option  value="<?php echo $data[$i]['staff_id'];?>"><?php echo $data[$i]['first_name'];?></option>
			<?php
		}
	}
	?>