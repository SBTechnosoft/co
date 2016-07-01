<?php
	include_once('./header.php');	
	
	if(isset($_POST['show']))
	{	
		$data = showProfile ($conn);
		
		$showProfCnt = count($data);	
		for($i=0;$i<$showProfCnt;$i++)
		{
		?>
			<li><span>User Name:</span><?php echo $data[$i]['emp_id'] ?></li>
			<li><span>First Name:</span> <?php echo $data[$i]['first_name'] ?> </li>
			<li><span>Last Name:</span> <?php echo $data[$i]['last_name'] ?></li>
			<li><span>Address 1:</span> <?php echo $data[$i]['add1'] ?></li>
			<li><span>Address 2:</span> <?php echo $data[$i]['add2'] ?></li>
			<li><span>Pincode:</span> <?php echo $data[$i]['zip'] ?></li>
			<li><span>State:</span> <?php echo $data[$i]['state'] ?></li>
			<li><span>City:</span> <?php echo $data[$i]['city'] ?></li>
			<!--li><span>Birthday:</span> 18 Jan 1982</li>
			<li><span>Occupation:</span> Web Developer</li-->
			<li><span>Email:</span> <a href="#"><?php echo $data[$i]['email'] ?></a></li>
			<!--li><span>Interests:</span> Design, Web etc.</li>
			<li><span>Website Url:</span> <a href="#">http://www.mywebsite.com</a></li-->
			<li><span>Mobile Number:</span> +91<?php echo $data[$i]['mobile'] ?></li>
		<?php
			//print_r($data);
		}
		
	}
	
?>