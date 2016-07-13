<?php
	include_once('./header.php');
	//include_once('./footer.php');
			
	
	if(isset($_POST['showVdUnpaidAmt']))
	{	
		$VdUnPaid = showVendorUnPaidAmt ($conn);
		
		$showVdUnPaidCnt = count($VdUnPaid);	
		for($i=0;$i<$showVdUnPaidCnt;$i++)
		{
		?>
			<?php
				if($i == ($showVdUnPaidCnt-1))
				{
					?>
					<tr>
						
						<!--td><?php// echo $VdUnPaid[$i]['event_vendor_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdUnPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdUnPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $VdUnPaid[$i]['event_id'];?>
							</a>
						   <?php //echo $VdUnPaid[$i]['event_id'];?>	
						   <input type="checkbox" id="mpay" name="mpay" class="mpay" value="<?php echo $VdUnPaid[$i]['event_vendor_id'];?>" /> 
						</td>
						<!--td><?php //echo $VdUnPaid[$i]['event_places_id'];?></td>
						<td><?php //echo $VdUnPaid[$i]['vend_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdUnPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdUnPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($VdUnPaid[$i]['vendor_name']);?>
							</a>
							<?php //echo ucfirst($VdUnPaid[$i]['vendor_name']);?>
						</td>
						<td><?php echo ucfirst($VdUnPaid[$i]['vendor_cmp']);?></td>
						<td><span style="float:right;"><?php echo $VdUnPaid[$i]['vendor_charges'];?></span></td>
						<td><span style="float:right;"><?php if($VdUnPaid[$i]['vendor_paid_amt']==''){ echo 0;} else {echo $VdUnPaid[$i]['vendor_paid_amt'];}?></span></td>
						<td style="color:red;"><span style="float:right;"><?php echo $VdUnPaid[$i]['vendor_charges']-$VdUnPaid[$i]['vendor_paid_amt'] ;?></span></td>
						
					</tr>					
					<tr>
						<td></td>
						<td></td>
						<td><b>Grand Total </b></td>
						<td><span style="float:right;"><b><?php echo $VdUnPaid[$i]['vtotal'];?></span></td>
						<td><span style="float:right;"><b><?php echo $VdUnPaid[$i]['ptotal'];?></span></td>
						<td style="color:red;"><span style="float:right;"><b><?php echo $VdUnPaid[$i]['rtotal'];?></span></td>
					</tr>
					
					<?php
				}
				else
				{?>
					<tr>
						
						<!--td><?php// echo $VdUnPaid[$i]['event_vendor_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdUnPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdUnPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $VdUnPaid[$i]['event_id'];?>
							</a>
						   <?php //echo $VdUnPaid[$i]['event_id'];?>	
						   <input type="checkbox" id="mpay" name="mpay" class="mpay" value="<?php echo $VdUnPaid[$i]['event_vendor_id'];?>" /> 
						</td>
						<!--td><?php //echo $VdUnPaid[$i]['event_places_id'];?></td>
						<td><?php //echo $VdUnPaid[$i]['vend_id'];?></td-->
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $VdUnPaid[$i]['event_id'];?>" 
							data-id="<?php echo $VdUnPaid[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($VdUnPaid[$i]['vendor_name']);?>
							</a>
							<?php //echo ucfirst($VdUnPaid[$i]['vendor_name']);?>
						</td>
						<td><?php echo ucfirst($VdUnPaid[$i]['vendor_cmp']);?></td>
						<td><span style="float:right;"><?php echo $VdUnPaid[$i]['vendor_charges'];?></span></td>
						<td><span style="float:right;"><?php if($VdUnPaid[$i]['vendor_paid_amt']==''){ echo 0;} else {echo $VdUnPaid[$i]['vendor_paid_amt'];}?></span></td>
						<td style="color:red;"><span style="float:right;"><?php echo $VdUnPaid[$i]['vendor_charges']-$VdUnPaid[$i]['vendor_paid_amt'] ;?></span></td>
						
					</tr>
		<?php	
				}
		}
		
	}
	
	if(isset($_POST['showMaskPay']))
	{		
		
		$arrVal = $_POST['val'];
		$cnt = count($_POST['val']);
		
		//print_r($arrVal);
		$sum = 0;
		for($i=0;$i<$cnt;$i++)
		{
			$data = showRemainVAmt ($conn,$arrVal[$i]);
			
			//print_r($data);
			$sum = $sum + $data[0]['remain_amt'];
			
			
		}			
		//print_r($sum);
		echo $sum;
		// foreach($_POST['val'] as $vamt)
		// {			
			// $cnt = count($_POST['val']);
			
			// for($i=0;$i<$cnt;$i++)
			// {
				// $data[$i] = showRemainVAmt ($conn,$vamt);
							
			
			// }
			// print_r($data[$i]);	
			?>
			
			<?php
			
				// $sum = 0;
			// foreach(intval($data[0]['remain_amt']) as $amt)
			// {
			   // $sum+= $amt;
			// }
			// echo $sum;
			
				//print_r($data);
				//echo array_sum($data[0]['remain_amt']);
				// for($i=0;$i<$cnt;$i++)
				// {
					
					
					//echo $data[0]['remain_amt'];
					
					
					//$a=array(intval($data[0]['remain_amt']));
					//print_r($a);
					
					//echo array_sum($a);
				//}
			?>
			
			<?php
		//}
		
	}
	
	if(isset($_POST['MaskPayTrn']))
	{		
		
		
		$arrVal = $_POST['val'];
		$json = json_encode($_POST['val']);
		$cur_date = date('Y-m-d H:i:s');
		$cur_date1 = date('Y-m-d');
		$pay_mode = $_POST['paymentMode'];
		$bk_nm = $_POST['txtbanknm'];
		$chk_no = $_POST['txtchkno'];
		$mass_amt = $_POST['totvamt'];
		
		insertMassPayTrn($conn,$json,$cur_date,$pay_mode,$bk_nm,$chk_no,$mass_amt);		
		$last_id  =  mysql_insert_id();
		
		$cnt = count($_POST['val']);
		
		for($i=0;$i<$cnt;$i++)
		{
			$data = showVUPDetail ($conn,$arrVal[$i]);
			//echo $data[0]['event_id'];
			//echo $data[0]['remain_amt'];			
			insert_mass_vend_pay_trn($conn,$arrVal[$i], $data[0]['event_id'],$cur_date1,$pay_mode,$bk_nm,$chk_no,$data[0]['remain_amt'],$last_id);
			//print_r($data);
			upd_vend_dtl($conn,$arrVal[$i],$data[0]['vendor_charges']);
			
		}		
		
	}
?>