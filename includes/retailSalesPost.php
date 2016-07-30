<?php
	include_once('./header.php');
	//include_once('./footer.php');
	if(isset($_POST['saverecord']))
	{	
		$cur_date = date('Y-m-d H:i:s');
		insResource($conn,$_POST['txtresnm'],$_POST['txtresprice'],$cur_date);	
	}		
	
	
	if(isset($_POST['delete']))
	{	
		$del_date = date('Y-m-d H:i:s');
		delProductAdd($conn,$_POST['id'],$del_date);	
	}
	if(isset($_POST['showPrdCtg']))
	{	
		$ctg = showPrdCtgdrp($conn);
		?>
		
		<option select="select" value = "">Select the Category </option>
		<?php
		$showctgCnt = count($ctg);	
		 for($i=0;$i<$showctgCnt;$i++)
		 {
		?>
			<option  value = "<?php echo $ctg[$i]['prd_cat_id'];?>"> <?php echo $ctg[$i]['prd_cat_name']?> </option>
						
		 <?php	
		}
		
	}
	if(isset($_POST['showProduct']))
	{	
		$ctg = showProductMst($conn);
		?>
		
		<option select="select" value = "">Select the Product</option>
		<?php
		$showctgCnt = count($ctg);	
		 for($i=0;$i<$showctgCnt;$i++)
		 {
		?>
			<option  value = "<?php echo $ctg[$i]['prod_id'];?>"> <?php echo $ctg[$i]['disp_nm']?> </option>
						
		 <?php	
		}
		
	}
	if(isset($_POST['showProdprice']))
	{			
		$q = mysql_query("select `retail_price`,`commodity_grp` from  product_mst where `prod_id` = '".$_POST['prod']."' ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
	}
	if(isset($_POST['showtax']))
	{	
		$q = mysql_query("SELECT `service_tax`,`vat` from setting ");
		$row = mysql_fetch_array($q);
		header("Content-type: text/x-json");
		echo json_encode($row);
		exit();	
		
	}
	
?>
				