<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{
		insertExpence($conn,$_POST['showexpctg'],$_POST['showevent'],$_POST['txtfromdt'],$_POST['txtamt'],$_POST['showstf']);
		
	}		
?>