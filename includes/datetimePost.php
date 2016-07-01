<?php 
include_once('./header.php');
if(isset($_POST['saverecord']))
	{			
		// inserted in event_mst
		insertDateTime($conn,$_POST['insert_date']);
	}
?>