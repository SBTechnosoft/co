<?php
 
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$getdata = mysql_query("SELECT `cmp_name`,`password`,`address`,`mobile`,`purchase_from`,`remark` FROM cmp_info where `id` = 2 ");
		$row = mysql_fetch_array($getdata);
		$cntdata = count($row);
		// echo $cntdata;
		// exit;
		//echo $cntdata;
		
		
		if($cntdata==0)
		{
			insCmp($conn,$_POST['txtcmpnm'],$_POST['txtpass'] ,$_POST['txtcmpadd'],$_POST['txtcmpcont'],$_POST['txtpur'],$_POST['txtrmrk']);	
		}		
		elseif($cntdata>=0)
		{
			mysql_query("UPDATE cmp_info SET `cmp_name`       = '".$_POST['txtcmpnm']."',
											 `password`       = '".$_POST['txtpass']."',
											 `address`        = '".$_POST['txtcmpadd']."',
											 `mobile`         = '".$_POST['txtcmpcont']."',
											 `purchase_from`  = '".$_POST['txtpur']."',
											 `remark`         = '".$_POST['txtrmrk']."'
											  WHERE  `id`     = 2 ");
			echo 0;
			exit;
		}
	
	
	}
	
	/*function showCmpInfo($conn)
	{
		$sqlShowCmpInfo = "select `cmp_name`,`address`,`mobile`,`purchase_from`,`remark` from 
		cmp_info where `id` = 1 "; 
		$conn->getResultArray($sqlShowCmpInfo);
		header("Content-type: text/x-json");
		return json_encode($conn);
		//exit();
		// $q = mysql_query("SELECT `cmp_name`,`address`,`mobile`,`purchase_from`,`remark` FROM cmp_info where `id` = 1 ");
		// $row = mysql_fetch_array($q);
		// header("Content-type: text/x-json");
		// echo json_encode($row);
		// exit();
	}*/
	
	/*if(isset($_POST['showdetail']))
	{		
		$data = showCmpInfo($conn);	
		print_r($data);
		// $row = mysql_fetch_object($data);
		// header("Content-type: text/x-json");
		// echo json_encode($row);
		// exit();
	}*/
	
	if(isset($_POST['showdetail']))
	{
		$q = mysql_query("SELECT `cmp_name`,`password` ,`address`,`mobile`,`purchase_from`,`remark` FROM cmp_info where `id` = 2 ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();
		
	}
	

?>
				