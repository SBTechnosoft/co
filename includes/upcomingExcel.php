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
	$sql 			= mysql_query("select `event_id` as Id,`event_name` as 'Event Name',`client_name` as 'Client Name',`fp_no` as 'FP No.',`bill_no` as 'Bill No.',`from_date` as 'Event Date',`client_charges` as 'Charged Amount',`service_tax_amt` as 'S. Tax',`total_amt` as 'Tot. Amount',`client_paid_amt` as 'Rec. Amount',`payment_status` as 'Payment Status' from  `event_mst` where `status` = 'upcoming' and  deleted_at = '0000-00-00 00:00:00' ");
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

	$name="../upload/excel/upcomingexcel.csv";
		$f=fopen($name,'wb');				
		fwrite($f,$output,strlen($output));
		fclose($f);
		//header('Location: ../upload/excel/unpaid.csv');
	//echo $output;
	echo 1;
}
	
?>
