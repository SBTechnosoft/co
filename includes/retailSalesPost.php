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
	if(isset($_POST['getname']))
	{	
		$s1 = $_POST['txtmobno2'];
		$a1=array();
		if(strlen($s1)>0)
		{
			$query="SELECT `client_name`,`address` from contact_dtl where mobile_no='".$s1."'";
			$res=mysql_query($query);
			if(mysql_num_rows($res)>0)
			{
				$i=0;
				while($row2=mysql_fetch_array($res))
				{
					$a1[$i] = $row2['client_name'];
					$i++;
					$a1[$i]=$row2['address'];
					
				}
			}
			echo json_encode($a1);
		}
	}
	
	if(isset($_POST['getnid']))
	{	
		$s1 = $_POST['txtclient'];
		$a1=array();
		if(strlen($s1)>0)
		{
			$query="select event_id from event_mst where client_work_mob='".$s1."'";
			$res=mysql_query($query);
			if(mysql_num_rows($res)>0)
			{
				$i=0;
				while($row2=mysql_fetch_array($res))
				{
					$a1[$i] = $row2['event_id'];
					$i++;
				}
			}
			echo json_encode($a1);
		}
	}
	if(isset($_POST['showInvoice1']))
	{	
		$abc=showInvoiceSet1($conn);
		if($abc[0]["type"]=='prefix')
		{
		$inv2=$abc[0]["label"].$abc[0]["next_val"];
			print_r($inv2);
		}
		else
		{
			$inv3=$abc[0]["next_val"].$abc[0]["label"];
			print_r($inv3);
		}
	
	}
	if(isset($_POST['showInvoiceCmp']))
	{	
		
		$abc1=showInvoiceSet2($conn,$_POST['cmp']);
		if($abc1[0]["type"]=='prefix')
		{
		$inv=$abc1[0]["label"].$abc1[0]["next_val"];
			print_r($inv);
		}
		else
		{
			$inv1=$abc1[0]["next_val"].$abc1[0]["label"];
			print_r($inv1);
		}
				
	}
	if(isset($_POST['Show_Client']))
	{		
		
		$ShowClient = showClient($conn,$_POST['client1']);		
		
		$showCli = count($ShowClient);
		?>
		
		<div class="Heading">			
			<div class="Cell">Event Id</div>
			<div class="Cell">Order Name</div>
			<div class="Cell">Order Date</div>
			<div class="Cell">Client Charge</div>
			<div class="Cell">Payment Status</div>
						
		</div>
		<?php
		for($a=0;$a<$showCli;$a++)
		{
		 ?>	
			
			<div class="Row" >			
				<div class="Cell"><?php echo $ShowClient[$a]['event_id'];?></div>
				<div class="Cell"><?php echo $ShowClient[$a]['event_name'];?></div>
				<?php $from_date=date_create($ShowClient[$a]['from_date']);
						$inm1= date_format($from_date,dateFormat);  
				?>
				<div class="Cell"><?php echo $inm1;?></div>
				<div class="Cell"><?php echo $ShowClient[$a]['client_charges']; ?></div>
				<div class="Cell"><?php echo $ShowClient[$a]['payment_status']; ?></div>
				
				
				
			</div>
            
		 <?php	
		}	
		
	}
	
?>
				