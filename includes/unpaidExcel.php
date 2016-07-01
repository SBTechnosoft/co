<?php
include_once('./header.php');
// Database Connection
if(isset($_POST['excel']))
{
	$host=TNS;
	$uname=DB_SERVER_USERNAME;
	$pass=DB_SERVER_PASSWORD;
	$database = DB_NAME;	

	$connection=mysql_connect($host,$uname,$pass); 

	echo mysql_error();

	//or die("Database Connection Failed");
	$selectdb=mysql_select_db($database) or die("Database could not be selected");	
	$result=mysql_select_db($database)
	or die("database cannot be selected <br>");

		
	// Fetch Record from Database

	$output			= "";
	$table 			= ""; // Enter Your Table Name
	$sql 			= mysql_query("select `event_id` as 'Event Id',`event_name` as 'Event Name',`client_name` as 'Client Name',`client_work_mob` as 'Mobile #',`client_charges` as 'Client Charge',`client_paid_amt` as 'Client Paid Amt',(client_charges - client_paid_amt) as 'Remaining Amt'  from event_mst where payment_status = \"Unpaid\" order by event_id desc ");
	$columns_total 	= mysql_num_fields($sql);

	// Get The Field Name

	for ($i = 0; $i < $columns_total; $i++) {
		$heading	=	mysql_field_name($sql, $i);
		$output		.= '"'.$heading.'",';
	}
	$output .="\n";

	// Get Records from the table

	while ($row = mysql_fetch_array($sql)) {
	for ($i = 0; $i < $columns_total; $i++) {
	$output .='"'.$row["$i"].'",';
	}
	$output .="\n";
	}

	// Download the file

	// $filename =  "myFile.csv";
	// header('Content-type: application/csv');
	// header('Content-Disposition: attachment; filename=upload/'.$filename);

	$name="../upload/excel/unpaid.csv";
		$f=fopen($name,'wb');				
		fwrite($f,$output,strlen($output));
		fclose($f);
		//header('Location: ../upload/excel/unpaid.csv');
	//echo $output;
	echo 1;
}
	
?>
