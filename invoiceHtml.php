<style>
.trhw {height : 35px;}


	.tg  {
		border-collapse:collapse;
		border-spacing:0;
		}
	.tg td{
		font-family:Calibri;
		font-size:12px;
		padding:7px 3px;
		border-style:solid;
		border-width:0px;
		overflow:hidden;
		word-break:normal;
		}
	.tg th{
		font-family:Calibri; 
		font-size:12px;
		font-weight:normal;
		padding:00px 0px;
		border-style:solid;
		border-width:0px;
		overflow:hidden;
		word-break:normal;
		}
	.tg .tg-jtyd{
		font-family:Calibri !important;
		background-color:#9a9a9a;
		text-align:right;
		vertical-align:top
		}
	.tg .tg-3gzm{
		font-family:Calibri !important;
		text-align:right;
		vertical-align:top
		}
	.tg .tg-ullm{
		font-size:13px;
		font-family:Calibri !important;
		background-color:#999999;
		text-align:right;
		vertical-align:top
		}
	.tg .tg-vi9z{
		font-family:Calibri !important;
		vertical-align:top
		}
	.tg .tg-bjj3{
		font-style:italic;
		font-size:22px;
		font-family:Georgia !important;
		background-color:#d9d9d9;
		text-align:center;
		vertical-align:top
		}
	.tg .tg-m36b{
		font-size:13px;
		font-family:Calibri !important;
		background-color:#999999;
		text-align:left;
		vertical-align:top
		}
	
</style>
<html>
	<body> 	
		<table class="tg" height="760" width="1020" >			  
			<tr>
				<th colspan="5">
					<img src="images/ombanner.jpg"> 
				</th>
			</tr>	  
			<tr class="trhw">
				<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="3">To: '.$cnm.' <br></td>
				<td class="tg-vi9z" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;" colspan="2">'.$sdate.'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order:'.$enm.'</td>
				<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Quataion No:'.$data[$i]['fp_no'].'<br></td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Order Date :'.$fdate.' <br></td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="3" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Vennue:';
				</td>
				<td class="tg-vi9z" colspan="2" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Invoice No:'.$id.'<br></td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="5" style="background-color:#d9d9d9;padding:4px 3px;font-family:Calibri;">Client:'.$cmp.'</td>
			</tr>
		  
			<tr class="trhw">
				<td class="tg-vi9z" colspan="5" style="border-width:0px;background-color:#d9d9d9;padding:4px 3px;" > </td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="5" style="border-width:0px;background-color:#d9d9d9;padding:4px 3px;" > </td>
			</tr>		  
			<tr class="trhw" style="background-color:#9a9a9a;font-family:Calibri;">
				<td class="tg-m36b thsrno">Sr.No</td>
				<td class="tg-m36b theqp">Particulars</td>
				<td class="tg-ullm thsrno">Qty.</td>
				<td class="tg-ullm thamt">Unit Cost<br></td>
				<td class="tg-ullm thamt">Amount</td>
			</tr>
			<tr class="trhw" >
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.($a+1).'</td>
				<td class="tg-vi9z" style="background-color:#d9d9d9">'.$dEqp[$a]['eq_name'].'('.$dEqp[$a]['length'].'X'.$dEqp[$a]['width'].')<br></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['qty'].'</td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['rate'].'</td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$dEqp[$a]['amount'].'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
				<td class="tg-vi9z" style="background-color:#d9d9d9"> <br></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9"></td>
			</tr>
							
			<tr class="trhw">
				<td class="tg-jtyd" colspan="4">Charge<br></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_charges'].'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-jtyd" colspan="4">Discount</td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['client_discount_amt'].'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-jtyd" colspan="4">S.Tax '.$data[$i]['service_tax_rate'].'%<br></td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['service_tax_amt'].'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-jtyd" colspan="4">Total</td>
				<td class="tg-3gzm" style="background-color:#d9d9d9">'.$data[$i]['total_amt'].'</td>
			</tr>
			<tr class="trhw">
				<td class="tg-vi9z" colspan="5" rowspan="1" style="background-color:#d9d9d9">
				</td>
			</tr>						  					  
			<tr>
				<td class="tg-3gzm" colspan="1" style="float:left;text-align:center;vertical-align:bottom;background-color:#d9d9d9">
				
				</td>
				<td colspan="2" style="background-color:#d9d9d9;vertical-align:bottom;">Remark </td>
				<td class="tg-3gzm" colspan="2" style="text-align:center;vertical-align:bottom;background-color:#d9d9d9">
				Venture Of
				</td>
			</tr>
			<tr >
				<td class="tg-3gzm" colspan="1" style="float:left;text-align:center;vertical-align:bottom;background-color:#d9d9d9">
					
				</td>
				<td colspan="2" style="background-color:#d9d9d9;vertical-align:bottom;" > E.&.O.E. </td>
				<td class="tg-3gzm" colspan="2" style="text-align:center;background-color:#d9d9d9">
					<img src="smlogo.png">
				</td>
			</tr>
		 
		</table>
	</body>
</html>