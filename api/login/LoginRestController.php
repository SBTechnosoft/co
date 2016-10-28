<?php
include_once('../../includes/header.php');	
require_once("LoginRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
/*
controls the RESTful services
URL mapping
*/
$AppConfig=getAppConfiguration($conn);

if($AppConfig[0]['app_configuration']=="Enable")
{
	switch($view)
	{

	/*case "all":
		// to handle REST Url /mobile/list/
		$LoginRestHandler = new LoginRestHandler();
		$LoginRestHandler->getAllusers();
		break;
		
	case "single":
		// to handle REST Url /mobile/show/<id>/
		$LoginRestHandler = new LoginRestHandler();
		
		$LoginRestHandler->getuser($_GET["id"]);
		break;*/
		case "login":
		// to handle REST Url /mobile/show/<id>/
			$LoginRestHandler = new LoginRestHandler();
		if($_POST["email_id"]!="" && $_POST["password"]!="")
		{
			$LoginRestHandler->getuser($conn,$_POST["email_id"],$_POST["password"]);
		}
		else
		{
			echo "Invalid User";
		}
		break;

		case "" :
		//404 - not found;
		break;
	}
}
else
{
	echo "Bad Request";
}
?>
