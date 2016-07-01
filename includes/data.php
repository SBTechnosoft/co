<?php
$eventnm = $_POST['txteventnm'];
$eventds = $_POST['txteventds'];
$clnm = $_POST['txtclnm'];
$clcmp = $_POST['txtclcmp'];
$clemail = $_POST['txtclemail'];
$workmob = $_POST['txtworkmob'];
$hmmob = $_POST['txthmmob'];
$mob = $_POST['txtmob'];
$vennue = $_POST['txtvenue'];
$ldmark = $_POST['txtldmark'];
$fromdate = $_POST['txtfromdate'];
$todate = $_POST['txttodate'];

echo "Event name = ".$eventnm. "<br>";
echo "Event descrip = ".$eventds. "<br>";
echo "client name = ".$clnm. "<br>";
echo "clent cmp name = ".$clcmp. "<br>";
echo "client email = ".$clemail. "<br>";
echo "client work mob = ".$workmob. "<br>";
echo "home mob = ".$hmmob. "<br>";
echo "Event venuuue = ".$vennue. "<br>";
echo "Event land mark = ".$ldmark. "<br>";
echo "Event from date = ".$fromdate. "<br>";
echo "Event to date = ".$todate. "<br>";

foreach($_POST['eqp'] as $eqp_id)
	{
        echo "Cheked Product is:= ".$eqp_id." <br>";
    }
foreach($_POST['stf'] as $stf_id)
	{
        echo "Cheked Product is:= ".$stf_id." <br>";
    }


?>