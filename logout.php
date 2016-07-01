<?php
include_once('./includes/header.php');
unset($_SESSION['USER_ID']);
session_destroy();

?>
<script type="text/javascript">	
	window.location = "<?php echo HTTP_SERVER.'login.php';?>";
</script>