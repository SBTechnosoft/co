<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
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
?>