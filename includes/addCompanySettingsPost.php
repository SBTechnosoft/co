<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insCmpNew($conn,$_POST['txtcmpnm'],$_POST['txtcmprnno'],$_POST['txtbnrnm'],$cur_date);	
	}		
	if(isset($_POST['default']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		Updatecmpdisplay($conn,$_POST['id'],$_POST['value'],$cur_date);	
	}
	if(isset($_POST['show']))
	{	
		$data = showCmp($conn);
		$showCmpCnt = count($data);	
		for($i=0;$i<$showCmpCnt;$i++)
		{
		?>
			<tr>				
				<td><?php echo ucfirst($data[$i]['cmp_name']);?></td>
				<td><?php echo $data[$i]['cmp_reg_no'];?></td>
				<td><?php echo $data[$i]['banner_img'];?></td>
				<td><?php echo $data[$i]['cmp_logo'];?></td>
				<td><input name="txtdefault" id="txtdefault" type="radio" <?php if($data[$i]['cmp_default'] == 1){?>checked="checked"<?php } ?> data-id="<?php echo $data[$i]['cmp_id']; ?>" class="default"/></td>
				<td>				
					<a data-toggle="tooltip" title="Delete" data-id="<?php echo $data[$i]['cmp_id']; ?>" class="delete"> <i class="fa fa-trash-o"></i> </a> 
				</td>
			</tr>
		<?php	
		}
		
	}
	
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delCmpNew($conn,$_POST['id'],$del_date);	
	}
	
	if(isset($_FILES["file"]["type"]))
	{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["file"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
		) && ($_FILES["file"]["size"] < 1000000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions))
		{
			if ($_FILES["file"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
			}
			else
			{
				if (file_exists("upload/" . $_FILES["file"]["name"])) 
				{
					echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
				}
				else
				{
					$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = "../images/".$_FILES['file']['name']; // Target path where file is to be stored
					move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file				
					
					$cur_date = date('Y-m-d H:i:s');					
					
					
					echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
					echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
					echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
					echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					//echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
				}
			}
		}
		else
		{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
		}
		
		if ((($_FILES["logo"]["type"] == "image/png") || ($_FILES["logo"]["type"] == "image/jpg") || ($_FILES["logo"]["type"] == "image/jpeg")
		) && ($_FILES["logo"]["size"] < 1000000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions))
		{
			if ($_FILES["logo"]["error"] > 0)
			{
				echo "Return Code: " . $_FILES["logo"]["error"] . "<br/><br/>";
			}
			else
			{
				if (file_exists("upload/" . $_FILES["logo"]["name"])) 
				{
					echo $_FILES["logo"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
				}
				else
				{
					$sourcePath = $_FILES['logo']['tmp_name']; // Storing source path of the file in a variable
					$targetPath = "../images/".$_FILES['logo']['name']; // Target path where file is to be stored
					move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file				
					
					$cur_date = date('Y-m-d H:i:s');					
					
					
					echo "<span id='success'>Image Uploaded Successfully...!!</span><br/>";
					echo "<br/><b>File Name:</b> " . $_FILES["logo"]["name"] . "<br>";
					echo "<b>Type:</b> " . $_FILES["logo"]["type"] . "<br>";
					echo "<b>Size:</b> " . ($_FILES["logo"]["size"] / 1024) . " kB<br>";
					//echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
				}
			}
		}
		else
		{
		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
		}
		insCmpNew($conn,$_POST['txtcmpnm'],$_POST['txtcmprnno'],$_FILES["file"]["name"],$_FILES["logo"]["name"],$cur_date);
	}
?>
				