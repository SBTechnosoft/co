<?php
/**
*	Purpose: This is going to be general purpose used function file.
* 	Created By: Virat Gaywala
*	Created on: 12-JAN-2016
*	Last Modified By: Virat Gaywala
* 	Last Modified Date: 12-JAN-2016
*/

/** Check for the null, empty values
* @author Virat Gaywala
* @param $value String | Integer
*/
function checkNotNull($value) 
{
	if (is_array($value)) 
	{
		if (sizeof($value) > 0) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	} 
	else 
	{
		if ( (is_string($value) || is_int($value)) && ($value != '') && ($value != 'NULL') && (strlen(trim($value)) > 0)) 
		{
			return true;
		} 
		else 
		{
			return false;
		}
	}
}

/** to be used while inserting/updating records in the database
* @author Virat Gaywala
* @param String
*/
function dbPrepareInput($string) 
{
	if (is_string($string)) 
	{
		$string=trim(addslashes($string));
		$string=str_replace(array("&"), array("''&''"), $string);
		return trim($string);
	} 
	elseif (is_array($string)) 
	{
		reset($string);
		while (list($key, $value) = each($string)) 
		{
			$string[$key] = db_prepare_input($value);
		}
		return $string;
	} 
	else 
{
		return $string;
	}
}

/** To clean input string while displying data on web
* @author Virat Gaywala
* @param String
*/
function cleanInput($string) 
{
	if (is_string($string)) 
	{
		$string= trim(stripslashes($string));
		$string=str_replace(array("''&''", '¿'), array("&", ''), $string);
		return trim($string);
	} 
	elseif (is_array($string)) 
	{
		reset($string);
		while (list($key, $value) = each($string)) 	
		{
			$string[$key] = clean_input($value);
		}
		return $string;
	} 
	else 
	{
		return $string;
	}
}

/** Return a random value
* @author Virat Gaywala
* @param $min Integer
* @param $max Integer
*/
function generate_rand($min = null, $max = null) 
{
	if (isset($min) && isset($max)) 
	{
		if ($min >= $max) 
		{
			return $min;
		} 
		else 
		{
			return mt_rand($min, $max);
		}
	} 
	else 
	{
		return mt_rand();
	}
}
?>