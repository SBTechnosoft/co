 <?php
	include_once('./includes/header.php');
	
	//echo "helloo";
	if(isset($_POST['username']))
	{
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		
		$pass = base64_encode($_POST['password']);		
		$data = login($conn,$_POST['username'],$pass);	
		$cnt = count($data);
		// echo "<pre>";
			// print_r($data);
		// echo "</pre>";
		//echo $cnt;
		//if($cnt == 1)
		if($data[0]['tot'] == 1)
		{
			$_SESSION['USER_ID'] = $_POST['username'];
			$_SESSION['F_Name'] = $data[0]['first_name'];
			$_SESSION['L_Name'] = $data[0]['last_name'];
			//echo $_SESSION['USER_ID'];
			//echo $_SESSION['F_Name'];
			//exit;
		?>			
			<script type="text/javascript">				
				window.location = "<?php echo HTTP_SERVER.'index.php';?>";
			</script>
		<?php
		}
		else
		{
		?>
			<script type="text/javascript">				
				window.location = "<?php echo HTTP_SERVER.'login.php';?>";
			</script>
			
		<?php
		}
	
	}
	
	if(isset($_POST['auth']))
	{	
		$pass = base64_encode($_POST['pass']);
		$data = login($conn,$_POST['userid'],$pass);	
		$cnt = count($data);
		// echo "<pre>";
			// print_r($data);
		// echo "</pre>";
		//echo $cnt;
		//if($cnt == 1)
		if($data[0]['tot'] == 1)
		{
			$_SESSION['USER_ID'] = $_POST['userid'];
			echo 1;
		}
		else
		{
			echo 2;
		}
	}		
	
	
?>
