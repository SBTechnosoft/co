<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$pass = base64_encode($_POST['txtpass']);
		
		insStaff($conn,$_POST['txtempid'],$_POST['txtfname'],$_POST['txtlname'],$_POST['txtempmail'],$_POST['txtmob'],$_POST['txtrel1'],$_POST['txtrel2'],$pass,$_POST['txtadd1'],$_POST['txtadd2'],$_POST['txtcity'],$_POST['txtstate'],$_POST['txtzip'],$_POST['txtstype']);	
	}
	if(isset($_POST['updstf']))
	{	
		$pass = base64_encode($_POST['txtpass']);
		
		updStaff($conn,$_POST['txtempid'],$_POST['txtfname'],$_POST['txtlname'],$_POST['txtempmail'],$_POST['txtmob'],$_POST['txtrel1'],$_POST['txtrel2'],$pass,$_POST['txtadd1'],$_POST['txtadd2'],$_POST['txtcity'],$_POST['txtstate'],$_POST['txtzip'],$_POST['txtstype'],$_POST['stfid']);	
	}
	
	if(isset($_POST['insPermission']))
	{	
		$json =  json_encode($_POST['permission']);
		insPermission($conn,$_POST['stf_id'],$json);	
	}
	
	if(isset($_POST['showPer']))
	{	
		$data = showPerm ($conn);
		$showPermCnt = count($data);
		$jary = json_decode($data[0]['permission']);
		//print_r($jd);
	}
	
	if(isset($_POST['show']))
	{	
		$data = showStaff ($conn);
		$showStaffCnt = count($data);	
		for($i=0;$i<$showStaffCnt;$i++)
		{
		?>
			<tr>
				<td>
					<form id="<?php echo "id".$data[$i]['staff_id']; ?>"  method="post" action= "index.php?url=STF">
						<input type="hidden" id="stf_id" name="stf_id" value="<?php echo $data[$i]['staff_id']; ?>" />						
						<a class="edit" data-toggle="tooltip" title="Edit" onclick="document.getElementById('id<?php echo $data[$i]['staff_id']; ?>').submit();">
							<?php echo ucfirst($data[$i]['staff_id']);?>
						</a>
					</form>
					
				</td>
				<td>
					<form id="<?php echo "eid".$data[$i]['staff_id']; ?>"  method="post" action= "index.php?url=STF">
						<input type="hidden" id="stf_id" name="stf_id" value="<?php echo $data[$i]['staff_id']; ?>" />						
						<a class="edit" data-toggle="tooltip" title="Edit" onclick="document.getElementById('eid<?php echo $data[$i]['staff_id']; ?>').submit();">
							<?php echo ucfirst($data[$i]['emp_id']);?>
						</a>
					</form>
					<?php //echo ucfirst($data[$i]['emp_id']);?>
				</td>				
				<td><?php echo ucfirst($data[$i]['first_name']);?></td>
				<td><?php echo ucfirst($data[$i]['last_name']);?></td>
				<td>
					<a style="cursor:pointer;">
						<i class="fa fa-lock" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Permission">
						</i>&nbsp;&nbsp;
					</a><?php echo $data[$i]['email'];?>
					
				</td>
				<td>
					<a style="cursor:pointer;">
						<i class="fa fa-lock" style="cursor:pointer;" data-toggle="tooltip" data-html="true" 
							title="Permission">
						</i>&nbsp;&nbsp;
					</a><?php echo $data[$i]['mobile'];?>
					
				</td>
				<td><?php echo $data[$i]['relative1'];?></td>
				<td><?php echo $data[$i]['relative2'];?></td>
				<td><?php echo base64_decode($data[$i]['password']);?></td>
				<td><?php echo ucfirst($data[$i]['staff_type']);?></td>
				
				<td> 
					<form id="<?php echo $data[$i]['staff_id']; ?>"  method="post" action= "index.php?url=STF">
						<input type="hidden" id="stf_id" name="stf_id" value="<?php echo $data[$i]['staff_id']; ?>" />						
						<a class="edit" data-toggle="tooltip" title="Edit" 
						onclick="document.getElementById('<?php echo $data[$i]['staff_id']; ?>').submit();">
							<i class="fa fa-pencil-square-o"></i>
						</a>
						<a style="cursor:pointer; padding: 5px;" data-id="<?php echo $data[$i]['emp_id']; ?>" data-toggle="tooltip" title="Permission" class="newperadd" >
							<i class="fa fa-lock" aria-hidden="true"></i>
						</a>
					</form>
					
				</td>
				
				
			</tr>
		<?php	
		}
		
	}
	if(isset($_POST['stfedit']))
	{	 
		$q = mysql_query("select `emp_id`,`first_name`,`last_name`,`email`,`mobile`,`relative1`,`relative2`, FROM_BASE64(`password`) as 'pass',`add1`,`add2`,`city`,`state`,`zip`,`staff_type` from  `staff_mst` where `staff_id` = '".$_POST['stfid']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		
		exit();	
		
	}
	if(isset($_POST['editStaffPer']))
	{	 
		$q = mysql_query("select `permission` from  `staff_permission` where `user_id` = '".$_POST['id']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		
		exit();	
		
	}
?>
				