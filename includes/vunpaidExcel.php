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
$sql 			= mysql_query("select evd.event_id as 'Event Id',vm.vendor_name as 'Vendor Name',vm.vendor_cmp as 'Company Name',evd.vendor_charges as 'Vendor Charge',evd.vendor_paid_amt as 'Vendor Paid',(evd.vendor_charges - evd.vendor_paid_amt) as `Remainig Amount`  from event_vendor_dtl evd inner join vendor_mst vm on evd.vend_id = vm.vend_id where evd.vendor_paid_status = 'unpaid'" );
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

$name="../upload/excel/vunpaid.csv";
	$f=fopen($name,'wb');				
	fwrite($f,$output,strlen($output));
	fclose($f);
	//header('Location: ../upload/excel/vunpaid.csv');
//echo $output;
//exit;
echo 1;
exit;
}	
?>
