<?php
/**
* @Author Virat Gaywala
* Created on 19-JAN-2016
* Purpose: Common header file for iValuation
* Last Modified By: Virat Gaywala
* Last Modified Date: 19-JAN-2016
*/
include_once('includes/header.php');
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php
if(isset($_SESSION['USER_ID']) && ($_SESSION['USER_ID']!='') && !empty($_SESSION['USER_ID']))
{
?>
<head>
	<meta charset="utf-8" />
	<title > Welcome to Creative Office</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<?php include FILENAME_LINK; ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed ">
	<!-- BEGIN HEADER -->
	<?php  include FILENAME_TOP_BANNER;?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
        <?php  include FILENAME_SIDEBAR;?>
        <!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
        <?php include FILENAME_CENTER; ?>
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
    <?php include FILENAME_FOOTER;?> 
</body>
<?php	
}
else
{
	?>
	<script type="text/javascript">
		//alert("Logout successfully.");
		window.location = "<?php echo HTTP_SERVER.'login.php';?>";
	</script>
	<?php
	//header('location:'.HTTP_SERVER.'login.php');
	//exit;
}

?>
<!-- END BODY -->
</html>