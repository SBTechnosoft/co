<?php
/**
*	Purpose: This is going to be general purpose used function file.
* 	Created By: Virat Gaywala
*	Created on: 12-JAN-2016
*	Last Modified By: Virat Gaywala
* 	Last Modified Date: 12-JAN-2016
*/

/** function to encrypt the string
* @author: Virat Gaywala
* @param $str String
*/ 
function encryptData($str)
{
  for($i=0; $i<5;$i++)
  {
    $str=strrev(base64_encode($str)); 
  }
  return $str;
}

/* function to decrypt the string
* @author: Virat Gaywala
* @param $str String
*/
function decryptData($str)
{
  for($i=0; $i<5;$i++)
  {
    $str=base64_decode(strrev($str)); 
  }
  return $str;
}
?>