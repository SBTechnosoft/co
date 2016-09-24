<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{
		$frdt = $_POST['txtfromdt'];		
		$nfrdt = date_format(new DateTime($frdt),'Y-m-d H:i:s');
		insertExpence($conn,$_POST['showexpctg'],$_POST['showevent'],$nfrdt,$_POST['txtamt'],$_POST['showstf'],$_POST['showvnd']);
		
	}	
	if(isset($_POST['delete']))
	{			
		deltranc($conn,$_POST['id']);	
	}	
	
	if(isset($_POST['showTrnDtl']))
	{	
		$ETrnDtl = showTransDtl ($conn);
		
		
		$VTrnDtl = showTransVend($conn);
		
		
		$showTrnVend = count($VTrnDtl);
		
		
		
		
		$showTrnCnt = count($ETrnDtl);	
		for($i=0;$i<$showTrnCnt;$i++)
		{
		?>
			<?php
				if($i == ($showTrnCnt-1))
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['service_tax_amt'];?>
							</span>
						</td>
						
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
						
					</tr>
					<!--tr>
						<td></td>	
 						<td></td>
 						<td></td>
 						<td><b> Grand Total</b></td>							
						<td><span style="float:right;" class="label label-success"><b><?php //echo $ETrnDtl[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['vtotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['etotal'];?></b> </span></td>
					</tr-->
					
					<?php
					
				}
				else
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >														
								<?php if($ETrnDtl[$i]['service_tax_amt']!=''){?>
								<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
								title="Tax Rate:<?php echo $ETrnDtl[$i]['service_tax_rate']."%";?>">
								</i>&nbsp;&nbsp;<?php echo $ETrnDtl[$i]['service_tax_amt'];}?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0 ){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
					</tr>
					
					
		<?php	
				}
		}
		?>
					<script>
					
					$('.closec').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					$('#close1').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					</script>
		<?php
		
	}
	
	if(isset($_POST['showTrnDetailType']))
	{	
		
		
		if($_POST['value']=='All')
		{
			$ETrnDtl = showTransDtl($conn);
		}
		else
		{
			$ETrnDtl = showTransDtlType ($conn,$_POST['value']);
		}
		// print_r($ETrnDtl);
		// exit;
		
		$VTrnDtl = showTransVend($conn);	
		$showTrnVend = count($VTrnDtl);
		
		
		
		
		$showTrnCnt = count($ETrnDtl);	
		for($i=0;$i<$showTrnCnt;$i++)
		{
		?>
			<?php
				if($i == ($showTrnCnt-1))
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['service_tax_amt'];?>
							</span>
						</td>
						
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
						
					</tr>
					<!--tr>
						<td></td>	
 						<td></td>
 						<td></td>
 						<td><b> Grand Total</b></td>							
						<td><span style="float:right;" class="label label-success"><b><?php //echo $ETrnDtl[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['vtotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['etotal'];?></b> </span></td>
					</tr-->
					
					<?php
					
				}
				else
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >														
								<?php if($ETrnDtl[$i]['service_tax_amt']!=''){?>
								<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
								title="Tax Rate:<?php echo $ETrnDtl[$i]['service_tax_rate']."%";?>">
								</i>&nbsp;&nbsp;<?php echo $ETrnDtl[$i]['service_tax_amt'];}?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0 ){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
					</tr>
					
					<script>
					
					$('.closec').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					$('#close1').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					</script>
		<?php	
				}
		}
		
	}
	
	if(isset($_POST['showTrnDetailCmpType']))
	{	
		
		
		if($_POST['value']=='')
		{
			$ETrnDtl = showTransDtl($conn);
		}
		else
		{
			$ETrnDtl = showTransDtlCmpType ($conn,$_POST['value']);
		}
		// print_r($ETrnDtl);
		// exit;
		
		$VTrnDtl = showTransVend($conn);	
		$showTrnVend = count($VTrnDtl);
		
		
		
		
		$showTrnCnt = count($ETrnDtl);	
		for($i=0;$i<$showTrnCnt;$i++)
		{
		?>
			<?php
				if($i == ($showTrnCnt-1))
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['service_tax_amt'];?>
							</span>
						</td>
						
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
						
					</tr>
					<!--tr>
						<td></td>	
 						<td></td>
 						<td></td>
 						<td><b> Grand Total</b></td>							
						<td><span style="float:right;" class="label label-success"><b><?php //echo $ETrnDtl[$i]['ctotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['vtotal'];?> </b></span></td>
						<td><span style="float:right;" class="label label-warning"><b><?php //echo $ETrnDtl[$i]['etotal'];?></b> </span></td>
					</tr-->
					
					<?php
					
				}
				else
				{
					?>
					<tr>
						
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo $ETrnDtl[$i]['event_id'];?>
							</a>
							<?php //echo $ETrnDtl[$i]['event_id'];?>
						</td>
						<td> <?php echo $ETrnDtl[$i]['Event Expense']; ?></td>
						<td>
							<a href="<?php echo HTTP_SERVER ; ?>index.php?url=EVD&id=<?php echo $ETrnDtl[$i]['event_id'];?>" 
							data-id="<?php echo $ETrnDtl[$i]['event_id']; ?>" class="edit" data-toggle="tooltip" title="">						
								<?php echo ucfirst($ETrnDtl[$i]['event_name']);?>
							</a>
							<?php //echo ucfirst($ETrnDtl[$i]['event_name']);?>
						</td>				
						
						<td>
							<?php if($ETrnDtl[$i]['client_name']!= '') {?>
							<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Client Comapany:<?php echo $ETrnDtl[$i]['client_cmp'];?><br>
							Client Email:<?php echo $ETrnDtl[$i]['client_email'];?><br>
							Mobile1:<?php echo $ETrnDtl[$i]['client_work_mob'];?><br>
							Mobile2:<?php echo $ETrnDtl[$i]['client_home_mob'];?>">
							</i>&nbsp;&nbsp;<?php echo ucfirst($ETrnDtl[$i]['client_name']); }else {echo "-";}?>
						</td>
						<?php 
							$from_date=date_create($ETrnDtl[$i]['from_date']);
							$inm1= date_format($from_date,dateFormat);  
						?>
						<td>					
							<?php echo $inm1;?>
						</td>
						
						<td>					
							<?php echo $ETrnDtl[$i]['NULL'];?>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_charges'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >
								<?php echo $ETrnDtl[$i]['client_discount_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" >														
								<?php if($ETrnDtl[$i]['service_tax_amt']!=''){?>
								<i class="fa fa-info-circle" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
								title="Tax Rate:<?php echo $ETrnDtl[$i]['service_tax_rate']."%";?>">
								</i>&nbsp;&nbsp;<?php echo $ETrnDtl[$i]['service_tax_amt'];}?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-success">
								<?php echo $ETrnDtl[$i]['total_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:green;" >
								<?php echo $ETrnDtl[$i]['client_paid_amt'];?>
							</span>
						</td>
						<td>
							<span style="float:right;color:red;" >
								<?php echo $ETrnDtl[$i]['client_unpaid'];?>
							</span>
						</td>
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['vendor_charges']!=''){echo $ETrnDtl[$i]['vendor_charges'];}else {echo "";}?>
							</span>
						</td>				
						<td>
							<span style="float:right;" class="label label-warning">
								<?php if($ETrnDtl[$i]['amount']!=''){echo $ETrnDtl[$i]['amount'];}else {echo "";}?>
							</span>
							<?php 
							if($ETrnDtl[$i]['amount']!='' && $ETrnDtl[$i]['event_id']!=0 ){?>								
								<a class="expopen" data-id ="<?php echo $ETrnDtl[$i]['event_id']; ?>" style="cursor:pointer; float:right;">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</a>
							<?php } ?>
						</td>
						<?php
							$pl = ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']);
							?>
						<td  style= "<?php if($pl > 0){ echo "color:green;"; }else{ echo "color:red;";} ?>">
							
							<span style="float:right;" >
								<?php echo $pl; //echo  ($ETrnDtl[$i]['client_charges'] - $ETrnDtl[$i]['client_discount_amt'] )- ($ETrnDtl[$i]['vendor_charges'] + $ETrnDtl[$i]['amount']) ;?>
							</span>
						</td>
						
					</tr>
					
					<script>
					
					$('.closec').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					$('#close1').click(function(){
						
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						return false;
						});
					</script>
		<?php	
				}
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
	
	if(isset($_POST['showVendDrp']))
	{
		$data = showVendName($conn);
		$showStfCnt = count($data);
		?>
		<option select="selected" value="">Select Vendor</option>
		<?php
		for($i=0;$i<$showStfCnt;$i++)
		{
			?>
			<option  value="<?php echo $data[$i]['vend_id'];?>"><?php echo $data[$i]['vendor_name']."(".$data[$i]['vendor_cmp'] .")";?></option>
			<?php
		}
	}
	//show the popup detail of expence detail.
	if(isset($_POST['ExpDtl']))
	{			
		$expdtl = showExpDtl($conn,$_POST['event_id']);		
		
		$cntexpdtl = count($expdtl);
		?>
		
		<div class="Heading">
			<div class="Cell"><span style="float:left;">Event Name</span></div>
			<div class="Cell"><span style="float:left;">Exp.Type</span></div>
			<div class="Cell"><span style="float:left;">Exp date</span></div>
			<div class="Cell"><span style="float:left;">Exp By</span></div>	
			<div class="Cell"><span style="float:left;">Exp By Vendor</span></div>				
			<div class="Cell"><span style="float:left;">Amount</span></div>	
			<div class="Cell"><span style="float:left;">Action</span></div>	
		</div>
		<?php
		for($a=0;$a<$cntexpdtl;$a++)
		{
		 ?>	
			
			<div class="Row" >			
				
				<div class="Cell">
					<span style="float:left;">
					<?php if($expdtl[$a]['event_name']== ''){echo "-";}else{echo $expdtl[$a]['event_name']; } ?>
					</span>
				</div>
				<div class="Cell">
					<span style="float:left;">
					<?php if($expdtl[$a]['cat_name']== ''){echo "-";}else{echo $expdtl[$a]['cat_name']; } ?>
					</span>
				</div>
				<div class="Cell">
					<span style="float:left;">
					<?php if($expdtl[$a]['exp_date']== ''){echo "-";}else{echo $expdtl[$a]['exp_date']; } ?>
					</span>
				</div>
				<div class="Cell">
					<span style="float:left;">
					<?php  if($expdtl[$a]['first_name']== ''){echo "-";}else{echo $expdtl[$a]['first_name']; } ?>
					</span>
				</div>
				<div class="Cell">
					<span style="float:left;">
					<?php  if($expdtl[$a]['vendor_name']== ''){echo "-";}else{echo $expdtl[$a]['vendor_name']."(".$expdtl[$a]['vendor_cmp'].")"; } ?>
					</span>
				</div>
				<div class="Cell">
					<span style="float:right;">
					<?php if($expdtl[$a]['amount']== ''){echo "-";}else{echo $expdtl[$a]['amount']; }  ?>
					</span>
				</div>
				<div class="Cell">								
					<a data-id="<?php echo $expdtl[$a]['exp_id']; ?>" class="edit" data-toggle="tooltip" title="View">
						<i class="fa fa-pencil-square-o"></i>
					</a> &nbsp;&nbsp;&nbsp;
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $expdtl[$a]['exp_id']; ?>" class="delete1"> <i class="fa fa-trash-o"></i> 
					</a> 
				</div>
				
			</div>
            
		 <?php	
		}	
		
	}
	?>