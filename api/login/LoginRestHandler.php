<?php
include_once('../../includes/header.php');	
require_once("SimpleLoginRest.php");
require_once("login.php");
		
class LoginRestHandler extends SimpleLoginRest 
{

	/*function getAllusers() {	

		$users = new login();
		$rawData = $users->getAlluser();
		

		if(empty($rawData)) {
			$statusCode = 404;
			$rawData = array('error' => 'No mobiles found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') == false){
			$response = $this->encodeJson($rawData);
			echo $response;
		} //else if(strpos($requestContentType,'text/html') !== false){
			// $response = $this->encodeHtml($rawData);
			// echo $response;
		// } else if(strpos($requestContentType,'application/xml') !== false){
			// $response = $this->encodeXml($rawData);
			// echo $response;
		// }
	}*/
	
	// public function encodeHtml($responseData) {
	
		// $htmlResponse = "<table border='1'>";
		// foreach($responseData as $key=>$value) {
    			// $htmlResponse .= "<tr><td>". $key. "</td><td>". $value. "</td></tr>";
		// }
		// $htmlResponse .= "</table>";
		// return $responseData;		
	// }
	
	public function encodeJson($responseData) {
		
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
	
	/*public function encodeXml($responseData) {
		// creating object of SimpleXMLElement
		$xml = new SimpleXMLElement('<?xml version="1.0"?><mobile></mobile>');
		foreach($responseData as $key=>$value) {
			$xml->addChild($key, $value);
		}
		return $xml->asXML();
	}*/
	
	public function getuser($conn,$id,$pass) 
	{

		
			$users = new login();
			$rawData = $users->getuser($conn,$id,$pass);

				if(empty($rawData)) {
					$statusCode = 401;
					$rawData = array('error' => 'No User found!');		
				} 
				else {
						$statusCode = 200;
					}
				$requestContentType = $_SERVER['HTTP_ACCEPT'];
				$this ->setHttpHeaders($requestContentType, $statusCode);
				if(strpos($requestContentType,'application/json') == false){
					$response = $this->encodeJson($rawData);
					echo $response;
				} /*else if(strpos($requestContentType,'text/html') !== false){
					$response = $this->encodeHtml($rawData);
					echo $response;
					} else if(strpos($requestContentType,'application/xml') !== false){
					$response = $this->encodeXml($rawData);
					echo $response;
					}*/
	}
}
?>