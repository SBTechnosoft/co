<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{		
		insOption($conn,$_POST['txtservicetax']);	
	}
	if(isset($_POST['saveDays']))
	{		
		insOptionDays($conn,$_POST['txtdays']);	
	}
	if(isset($_POST['saveVat']))
	{		
		insOptionVat($conn,$_POST['txtvat']);	
	}
	if(isset($_POST['saveRtl']))
	{		
		insOptionRtl($conn,$_POST['txtrtl']);	
	}
	if(isset($_POST['saveResEqu']))
	{		
		insOptionResEqu($conn,$_POST['txtres_equ']);	
	}
	
	if(isset($_POST['show']))
	{	
		$q = mysql_query("SELECT `service_tax`,`upcoming_days`,`vat`,`retail_sales`,`resorce` from setting ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
?>				