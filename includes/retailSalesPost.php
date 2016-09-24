<?php
	include_once('./header.php');
	//include_once('./footer.php');
if(isset($_POST['caluculate']))
{	
	$txmode =  $_POST['taxmode'];		
	$txrt = $_POST['stax'];
	$vtrt =  $_POST['vat'];
	$txttypedis =  $_POST['txttypedis'];
	$dic =  $_POST['disc'];
	$clcharge =  $_POST['clientcharge'];
	$txticomgrp = $_POST['txticomgrp'];
	$ptxtiamt = $_POST['ptxtiamt'];
	$cnt = count($txticomgrp);
		if($txmode == 'Yes')
		{
			if($txttypedis == 'Flat')
			{
				$tax = 0;
				$vat = 0;
				for($i=0;$i<$cnt;$i++)
				{
					if($txticomgrp[$i] == 'Services')
					{
						$tax += round(($ptxtiamt[$i]*$txrt)/100);
					}
					else
					{
						$vat += round(($ptxtiamt[$i] * $vtrt)/100);
					}
				}
				$totamt = round($clcharge - $dic ) + $tax + $vat ;
?>
				<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "<?php echo $tax; ?>" readonly />	
				<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "<?php echo $vat; ?>" readonly />														
				<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />											
<?php						
			}
			else
			{
				$tax = 0;
				$vat = 0;
				for($i=0;$i<$cnt;$i++)
				{
					if($txticomgrp[$i] == 'Services')
					{
						$tax += round(($ptxtiamt[$i]*$txrt)/100);
					}
					else
					{
						$vat += round(($ptxtiamt[$i] * $vtrt)/100);
					}
				}
				$per=$clcharge*($dic/100);
				$totamt = round($clcharge - $per ) + $tax + $vat ;
			
?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "<?php echo $tax; ?>" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "<?php echo $vat; ?>" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />	
<?php
		}
		}
		else
		{
			if($txttypedis == 'Flat')
			{
				$totamt = round($clcharge - $dic )  ;
?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "0" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "0" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />											
<?php
			}
			else
			{
				$per=$clcharge*($disc/100);
				$totamt = round($clcharge - $per )  ;
?>
				<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "0" readonly />	
				<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "0" readonly />																	
				<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />	
<?php
			}
		}
}

if(isset($_POST['CalDiscount']))
{	
	$txmode =  $_POST['taxmode'];		
	$txrt = $_POST['stax'];
	$vtrt =  $_POST['vat'];
	$txttypedis =  $_POST['txttypedis'];
	$dic =  $_POST['disc'];
	$clcharge =  $_POST['clientcharge'];
	$txticomgrp = $_POST['txticomgrp'];
	$ptxtiamt = $_POST['ptxtiamt'];
	$cnt = count($txticomgrp);
	if($txmode == 'Yes')
	{
		if($txttypedis== 'Flat')
		{
			$tax = 0;
			$vat = 0;
			for($i=0;$i<$cnt;$i++)
			{
				if($txticomgrp[$i] == 'Services')
				{
					$tax += round(($ptxtiamt[$i]*$txrt)/100);
				}
				else
				{
					$vat += round(($ptxtiamt[$i] * $vtrt)/100);
				}
			}
		$totamt = round($clcharge - $dic ) + $tax + $vat ;
			
?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "<?php echo $tax; ?>" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "<?php echo $vat; ?>" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />											
			<?php						
		}
		else
		{
			$tax = 0;
			$vat = 0;
			for($i=0;$i<$cnt;$i++)
			{
				
				if($txticomgrp[$i] == 'Services')
				{
					$tax += round(($ptxtiamt[$i]*$txrt)/100);
				}
				else
				{
					$vat += round(($ptxtiamt[$i] * $vtrt)/100);
				}
				
			}
			
			$per=$clcharge*($dic/100);
			$totamt = round($clcharge - $per ) + $tax + $vat ;
		
			?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "<?php echo $tax; ?>" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "<?php echo $vat; ?>" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />	
			<?php
			}
	}
	else
	{
		if($txttypedis== 'Flat')
		{
			$totamt = round($clcharge - $dic )  ;
			?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "0" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "0" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />											
			
			<?php
		}
		else
		{
				$per=$clcharge*($dic/100);
				$totamt = round($clcharge - $per )  ;
		
			?>
			<input style="border: 1px solid #ccc;" class="medium m-wrap txttaxamt"  type="text"  id="txttaxamt" name="txttaxamt" value = "0" readonly />	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtvatamt"  type="text"  id="txtvatamt" name="txtvatamt" value = "0" readonly />																	
			<input style="border: 1px solid #ccc;" class="medium m-wrap txtgtotamt" type="text"  id="txtgtotamt" name="txtgtotamt" value = "<?php echo $totamt; ?>" readonly />											
			
			<?php
			}
	}
		
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
		$ctg = showProductMst($conn,$_POST['ctgprod']);
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
	if(isset($_POST['txtmobno']))
	{	
		$s = $_POST['txtmobno'];
		$a=array();
		if(strlen($s)>0)
		{
			$query="SELECT `mobile_no` from contact_dtl where `mobile_no` LIKE '%". $s ."%'";
			$res=mysql_query($query);
			if(mysql_num_rows($res)>0)
			{
				$i=0;
				while($row2=mysql_fetch_array($res))
				{
					$a[$i] = $row2['mobile_no'];
					$i++;
				}
			}
			echo json_encode($a);
		}
	}
?>
				