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
			<?php
				if($i == ($showClInvCnt-1))
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
						<td>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClInv[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClInv[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClInv[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClInv[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClInv[$i]['client_name']);?>
						</td>	
						
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_paid_amt'];?></span></td>				
						<td style="color:red;"><span style="float:right;"><?php echo $ClInv[$i]['remain_amt'] ?></span></td>
						<td> <input type="checkbox" id="chkinv" name="chkinv" class="chkinv" value="<?php echo $ClInv[$i]['inv_file_name'];?>" /></span></td>
					</tr>
					
					<tr>
						
						<td></td>
						<td></td>						
						<td><b> Grand Total</b></td>
						<td><span style="float:right;"><b><?php echo $ClInv[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClInv[$i]['dtotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClInv[$i]['stotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClInv[$i]['ttotal'];?> </b></span></td>
						<td><span style="float:right;"><b><?php echo $ClInv[$i]['ptotal'];?></b> </span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $ClInv[$i]['rtotal'];?></b></span></td>
						<td></td>
					</tr>
					
					<?php
				}
				else
				{?>
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
						<td>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ClInv[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ClInv[$i]['client_email'];?><br>
							Mobile1:<?php echo $ClInv[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ClInv[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ClInv[$i]['client_name']);?>
						</td>	
						
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_charges'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_discount_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['service_tax_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['total_amt'];?></span></td>
						<td><span style="float:right;"><?php echo $ClInv[$i]['client_paid_amt'];?></span></td>				
						<td style="color:red;"><span style="float:right;"><?php echo $ClInv[$i]['remain_amt'] ?></span></td>
						<td> <input type="checkbox" id="chkinv" name="chkinv" class="chkinv" value="<?php echo $ClInv[$i]['inv_file_name'];?>" /></span></td>
					</tr>
		<?php	
				}
		}
		?>
		
		
	<?php	
	}
?>