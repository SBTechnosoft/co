<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		 if(isset($_POST['mobileNo']))
		{
			 
			$data = showContactMobile ($conn,$_POST['mobileNo']);
			$showCntm = count($data);
			  if($showCntm!= '')
			 {
				
			 }
			 else
			 {
				$result=insContactList($conn,$_POST['clientName'],$_POST['companyName'],$_POST['mobileNo'],$_POST['workNo'],$_POST['emailId'],$_POST['address']);
			}
		 }
		 
	}			
	
	if(isset($_POST['show']))
	{	
		$data = showContactList ($conn);
		$showCnt = count($data);	
		for($i=0;$i<$showCnt;$i++)
		{
		?>
			<tr>
				
				<td><?php echo ucfirst($data[$i]['client_name']);?></td>
				<td><?php echo ucfirst($data[$i]['company_name']);?></td>
				<td><?php echo ucfirst($data[$i]['mobile_no']);?></td>
				<td><?php echo ucfirst($data[$i]['work_no']);?></td>
				<td><?php echo ucfirst($data[$i]['email_id']);?></td>
				<td><?php echo ucfirst($data[$i]['address']);?></td>
				<td><?php echo ucfirst($data[$i]['client_type']);?></td>
			</tr>
		<?php	
		}
		
	}
	
	if(isset($_POST['search']))
	{	
		$s2 = '';$s3 = '';;$s4 = '';
		if($_POST['client_name']!='')
		{
			$s2 = " `client_name` like '%".$_POST['client_name']."%' ";
		}
		 if($_POST['company_name']!='')
		{
			$s3 = " `company_name` like '%".$_POST['company_name']."%' ";
		}
		if($_POST['mobile_no']!='')
		{
			$s3 = " `mobile_no` like '%".$_POST['mobile_no']."%' ";
		}
		$arr= array($s2,$s3,$s4);
		$cnt= count($arr);
			for($i=0;$i<$cnt;$i++)
			{		
				if($arr[$i]!= '')
				{			
					$narry[] = $arr[$i];
				}		
			}
		$cnt1= count($narry);
		for($a=0;$a<$cnt1;$a++)
		{
			//$str1 = array();
			if($a == ($cnt1 - 1))
			{
				$str2[] =  $narry[$a];
			}
			else
			{
				$str1[] =  $narry[$a]."or";
			}
		}
		if(!empty($str1))
		{	
			$where = implode(array_merge($str1,$str2));
			//echo $where;
		}
		else
		{
			$where = implode ($str2);
			//echo $where;
		}
		$data = searchCoantactDetail ($conn,$where);
		
		$searchCnt = count($data);	
		for($i=0;$i<$searchCnt;$i++)
		{
?>
		<tr>
				<td></td>
				<td><?php echo ucfirst($data[$i]['client_name']);?></td>
				<td><?php echo ucfirst($data[$i]['company_name']);?></td>
				<td><?php echo ucfirst($data[$i]['mobile_no']);?></td>
				<td><?php echo ucfirst($data[$i]['work_no']);?></td>
				<td><?php echo ucfirst($data[$i]['email_id']);?></td>
				<td><?php echo ucfirst($data[$i]['address']);?></td>
				
		</tr>		
		<?php	
		}
		
	}
?>