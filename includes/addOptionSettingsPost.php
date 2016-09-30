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
	
	if(isset($_POST['saveAutoSetDate']))
	{		
		$Auto=json_encode($_REQUEST['txtAutoSet']);
		insOptionAutoSetDate($conn,$Auto);	
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
		$q = mysql_query("SELECT `service_tax`,`upcoming_days`,`vat`,`retail_sales`,`resorce`,`retail_sales_day` from setting ");
		
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