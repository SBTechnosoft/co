<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	if(isset($_POST['showChkList']))
	{
		$zip = new ZipArchive;
		if ($zip->open('../upload/invoice/myzip.zip',  ZipArchive::CREATE)) 
		{
			foreach($_POST['chkinv'] as $chkinv)
				{
					// echo "Cheked Product is:= ".$eqp_id." <br>";			
					//insertEqpDrp ($conn,$eventplaces_id,$event_id_pdtl,$eqp_id);
					
					$zip->addFile('../upload/invoice/'.$chkinv, $chkinv);
				}
			
			//$zip->addFile('zip/test.txt', 'test.txt');
			//$zip->addFile('zip/test2.txt', 'test2.txt');
			$zip->close();
			//echo 'Archive created!';
		} 
		else 
		{
			//echo 'Failed!';
		}
		//header('location : upload/invoice/myzip.zip');
	}
	if(isset($_POST['showClInv']))
	{	
		$ClInv = showClientInv ($conn);
		
		$showClInvCnt = count($ClInv);	
		for($i=0;$i<$showClInvCnt;$i++)
		{
		?>
			<tr>
				
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClInv[$i]['event_id'];?>" 
					data-id="<?php echo $ClInv[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo $ClInv[$i]['event_id'];?>
					</a>
					<?php //echo $ClInv[$i]['event_id'];?>
				</td>
				<td>
					<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ClInv[$i]['event_id'];?>" 
					data-id="<?php echo $ClInv[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
						<?php echo ucfirst($ClInv[$i]['event_name']);?>
					</a>
					<?php// echo ucfirst($ClInv[$i]['event_name']);?>
				</td>
				<td><?php echo ucfirst($ClInv[$i]['client_name']);?></td>
				<td><?php echo $ClInv[$i]['client_work_mob'];?></td>
				<td><?php echo $ClInv[$i]['client_charges'];?></td>
				<td><?php echo $ClInv[$i]['client_paid_amt'];?></td>
				
				<td style="color:red;"><?php echo $ClInv[$i]['client_charges'] - $ClInv[$i]['client_paid_amt'];?></td>
				<td> <input type="checkbox" id="chkinv" name="chkinv" class="chkinv" value="<?php echo $ClInv[$i]['inv_file_name'];?>" /></td>
			</tr>
		<?php	
		}
		?>
		
		<!--tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>			
			<td>Check All</td>
			<td> <input type="checkbox" id="chall" name="chall" class="chall"></td>	
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>			
			<td></td>
			<td> <a style="cursor:pointer;" class="btn blue" id="selchkitm" target="_blank"> Submit </a></td>	
		</tr-->
	<?php	
	}
?>