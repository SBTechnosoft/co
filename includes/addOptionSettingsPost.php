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
	if(isset($_POST['saveDelv']))
	{		
		insOptionDelv($conn,$_POST['txtdelv']);	
	}
	
   	if(isset($_POST['saveResEqu']))
	{		
		insOptionResEqu($conn,$_POST['txtres_equ']);	
	}
	if(isset($_POST['saveAutoSetDate']))
	{		
		$Auto=json_encode($_REQUEST['txtAutoSet']);
		insOptionAutoSetDate($conn,$Auto);	
	}
	if(isset($_POST['saveApp']))
	{		
		
		insOptionApp($conn,$_POST['txtApp']);	
	}
	
	if(isset($_POST['saveEmail']))
	{		
		
		insOptionEmail($conn,$_POST['txtemail']);	
	}
	if(isset($_POST['emailpass1']))
	{		
		
		insOptionEmailPass1($conn,$_POST['email1'],$_POST['password1']);	
	}
	
	if(isset($_POST['emailpass2']))
	{		
		
		insOptionEmailPass2($conn,$_POST['email2'],$_POST['password2']);	
	}
	if(isset($_POST['emailpass3']))
	{		
		
		insOptionEmailPass3($conn,$_POST['email3'],$_POST['password3']);	
	}
	
	if(isset($_POST['configemailperson']))
	{		
		
		updconfigperson($conn,$_POST['name'],$_POST['id']);	
	}
	if(isset($_POST['showset']))
	{	
		$q = mysql_query("SELECT `retail_sales_day` from setting ");
		
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		$var = json_encode($row[0]);
		echo $var1 =  json_decode($var);
		
	}
	if(isset($_POST['show']))
	{	
		$q = mysql_query("SELECT `service_tax`,`upcoming_days`,`vat`,`retail_sales`,`resorce`,`retail_sales_day`,`deliverable`,`app_configuration`,
		`email_config` from setting ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showemail1']))
	{	
		$q = mysql_query("SELECT `email_id`,`email`,`password` from email_setting where `email_id` = 1");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showemail2']))
	{	
		$q = mysql_query("SELECT `email_id`,`email`,`password` from email_setting where `email_id` = 2");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showemail3']))
	{	
		$q = mysql_query("SELECT `email_id`,`email`,`password` from email_setting where `email_id` = 3");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
	if(isset($_POST['showneworder']))
	{	
		$q = mysql_query("SELECT `email_id` from email_setting where `neworder` = 0");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showenquiry']))
	{	
		$q = mysql_query("SELECT `email_id` from email_setting where `enquiry` = 0");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showpayment']))
	{	
		$q = mysql_query("SELECT `email_id` from email_setting where `payment` = 0");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showqutation']))
	{	
		$q = mysql_query("SELECT `email_id` from email_setting where `quotation` = 0");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['showinvoice']))
	{	
		$q = mysql_query("SELECT `email_id` from email_setting where `invoice` = 0");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	if(isset($_POST['hours']))
	{	
		
		?>
		
		<option select="select" value ="">Select Hours </option>
		<?php
		
		 for($i=1;$i<=24;$i++)
		 {
		?>
			<option  value = "<?php echo $i; ?>"> <?php echo $i; ?> </option>
						
		 <?php	
		 
		}
		
	}
	if(isset($_POST['minutes']))
	{	
		
		?>
		
		<option select="select" value ="">Select Minutes</option>
		<?php
		
		 for($i=1;$i<=60;$i++)
		 {
		?>
			<option  value = "<?php echo $i; ?>"> <?php echo $i; ?> </option>
						
		 <?php	
		 
		}
		
	}
?>				