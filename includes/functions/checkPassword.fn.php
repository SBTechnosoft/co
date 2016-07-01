<?php 
/**
*	Purpose: This is going to be general purpose used function file.
* 	Created By: Virat Gaywala
*	Created on: 12-JAN-2016
*	Last Modified By: Virat Gaywala
* 	Last Modified Date: 12-JAN-2016
*/

/** To Validate the password
* @author: Virat Gaywala
* @param $plain String
* @param $encrypted String
*/
function validatePassword($plain, $encrypted) 
{
	if (not_null($plain) && not_null($encrypted)) 
	{
		// split apart the hash / salt
		$stack = explode(':', $encrypted);
		if (sizeof($stack) != 2) return false;
		if (md5($stack[1] . $plain) == $stack[0]) 
		{	
			return 1;
		}
	}
	return 0;
}

/** This function makes a new password from a plaintext password. 
* @author Virat Gaywala
* @param $plain String	
*/
function encryptPassword($plain) 
{
	$password = '';
	for ($i=0; $i<10; $i++) 
	{
		$password .= generate_rand();
	}
	$salt = substr(md5($password), 0, 2);
	$password = md5($salt . $plain) . ':' . $salt;
	return $password;
}
?>
