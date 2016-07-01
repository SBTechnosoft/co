<?php
	include_once('./header.php');

	
	if(isset($_POST['saverecord1']))
	{			
		
		insertEventAdd($conn,$_POST['txteventnm']);
		
	}		
	
	
?>