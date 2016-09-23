$("#taxmode").on("change", function()
		{
			var taxmode    =   $('#taxmode').val();
			var stax = $('#txtstax').val();
			var vat = $('#txtvat').val();
			var disc = $('#txtdisc').val();
			var clientcharge = $('#txtcharge').val();			
			var txticomgrp = [];
			$.each($('.txticomgrp'), function(){            
                 txticomgrp.push($(this).val());
            });			
			var ptxtiamt = [];
			$.each($('.ptxtiamt'), function(){            
                 ptxtiamt.push($(this).val());
            });		
			
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'caluculate' : 1,
					 'taxmode' : taxmode,
					 'stax' : stax,
					 'vat' : vat,
					 'disc' : disc,
					 'clientcharge' : clientcharge,
					'txticomgrp' : txticomgrp,
					'ptxtiamt' : ptxtiamt,
				},
				success : function(r1)
				{
					$('#totdata').html(r1);
									
				}
				
			});
			
			
		});
$("#txtdisc").on("focusout", function()
		{
			var taxmode    =  $('#taxmode').val();
			var stax = $('#txtstax').val();
			var vat = $('#txtvat').val();
			var disc = $('#txtdisc').val();
			var clientcharge = $('#txtcharge').val();			
			var txticomgrp = [];
			$.each($('.txticomgrp'), function(){            
                 txticomgrp.push($(this).val());
            });			
			var ptxtiamt = [];
			$.each($('.ptxtiamt'), function(){            
                 ptxtiamt.push($(this).val());
            });		
			
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'CalDiscount' : 1,
					 'taxmode' : taxmode,
					 'stax' : stax,
					 'vat' : vat,
					 'disc' : disc,
					 'clientcharge' : clientcharge,
					'txticomgrp' : txticomgrp,
					'ptxtiamt' : ptxtiamt,
				},
				success : function(r1)
				{
					$('#totdata').html(r1);
									
				}
				
			});
			
			
		});




$("#drpProd").on("change", function()
		{
			var prod    =   $('#drpProd').val();
			// alert(prod);
			// return false;
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'showProdprice' : 1,
					'prod' : prod,
					
				},
				success : function(r)
				{
					$('#txtprdrate').val(r.retail_price);
					$('#txtprdamt').val(r.retail_price);
					$('#txtcomgrp').val(r.commodity_grp);
									
				}
				
			});
		});
		
		
		$("#txtprdqty").on("focusout", function()
		{
			var qty    =   $('#txtprdqty').val();
			if(qty == "")
			{
				alert("Plz Insert The qty!!!");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}
			var txtramt = $('#txtprdrate').val();			
			var tot = parseInt(qty) * parseInt(txtramt);			
			$('#txtprdamt').val(tot);			
		});
		$("#txtprdrate").on("focusout", function()
		{
					
			var ratechg = $('#txtprdrate').val();		
			if(ratechg == "")
			{
				alert("Plz Insert The Rate!!!");
				return false;
			}
			if(ratechg != "")
			{
				if(isNaN(ratechg))
				{
					alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
					return false;
				}
				if(ratechg == 0)
				{
					alert("Can't GIve rate 0");
					return false;
				}
			}
			var qty    =   $('#txtprdqty').val();			
			var tot = parseInt(qty) * parseInt(ratechg);			
			$('#txtprdamt').val(tot);
			
		});
		
		k=0;
		$('#addpdDtl').on('click',function()
		{
			var ctgid = $('.prdCtgDrp').val();
			var comgrp = $('.txtcomgrp').val();
			var ctgnm = document.getElementById("prdCtgDrp").options[(document.getElementById("prdCtgDrp").options.selectedIndex)].text;		
			var prdid = $('.drpProd').val();
			var prdnm = document.getElementById("drpProd").options[(document.getElementById("drpProd").options.selectedIndex)].text;		
			var qty = $('.txtprdqty').val();
			var rate = $('.txtprdrate').val();
			var amt = $('.txtprdamt').val();
			
			if(ctgid=='')
			{
				alert("Plz Select Equipment.");
				return false;
			}
			if(prdid=='')
			{
				alert("Plz Select Equipment.");
				return false;
			}
			if(rate=='')
			{
				alert("Plz Fill Rate.");
				return false;
			 }
			if(rate != "")
			{
				if(isNaN(rate))
				{
					alert("Please Only Numeric in rate!!! (Allowed input:0-9)");
					return false;
				}
				if(rate == 0)
				{
					alert("Can't Give rate 0");
					return false;
				}
			}
			if(qty=='')
			{
				alert("Plz Fill Qty.");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}		
			
			k++;
			var prddiv=
					
					
					'<tr id="prdrow'+k+'">'+
						'<input   type="hidden"  id="hdn['+k+'][txtictg]" name="hdn['+k+'][txtictg]" value="'+ctgid+'">'+
						'<input   type="hidden"  id="hdn['+k+'][txticomgrp]" name="hdn['+k+'][txticomgrp]"  class="txticomgrp" value="'+comgrp+'">'+
						'<input   type="hidden"  id="hdn['+k+'][txtictgnm]" name="hdn['+k+'][txtictgnm]"  value="'+ctgnm+'">'+
						'<input   type="hidden"  id="hdn['+k+'][txtprdid]" name="hdn['+k+'][txtprdid]" value="'+prdid+'">'+
						'<input  type="hidden"  id="hdn['+k+'][txtiprdnm]" name="hdn['+k+'][txtiprdnm]" value="'+prdnm+'">'+
						'<input  type="hidden"  id="hdn['+k+'][txtiqty]" name="hdn['+k+'][txtiqty]"  value="'+qty+'">'+
						'<input  type="hidden"  id="hdn['+k+'][txtirate]" name="hdn['+k+'][txtirate]"  value="'+rate+'">'+
						'<input   type="hidden" id="hdn['+k+'][ptxtiamt]" name="hdn['+k+'][ptxtiamt]"  class="ptxtiamt" value="'+amt+'">'+
																	
						'<td>'+ ctgnm+'</td>'+
						'<td>'+ prdnm+'</td>'+
						'<td>'+ comgrp+'</td>'+
						'<td>'+ rate+'</td>'+
						'<td>'+ qty+'</td>'+
						'<td class="amount">'+ amt+'</td>'+						
											
						'<td><a class="prdremove" id="'+k+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';										
					
			$('#prdrec').append(prddiv);
			
			var rgtot = [];
			$.each($('.ptxtiamt'), function(){            
				rgtot.push($(this).val());
			});
			var rtotal_amt = 0;
			$.each(rgtot,function() {
				rtotal_amt += parseInt(this);
			});			
			$('.txtcharge').val(rtotal_amt);
			// $('.txtrescharge').val(rtotal_amt);
			
			$('.prdCtgDrp').val('');
			$('.drpProd').val('');
			$('.txtprdrate').val('');
			$('.txtprdqty').val('1');
			$('.txtprdamt').val('');
			
			
			
		});
		
		$(document).on('click','.prdremove',function(){
			var button_id = $(this).attr("id");
			$("#prdrow"+button_id+"").remove();	

			var rgtot = [];
			$.each($('.ptxtiamt'), function(){            
				rgtot.push($(this).val());
			});
			
			var rtotal_amt = 0;
			$.each(rgtot,function() {
				rtotal_amt += parseInt(this);
			});
			
			$('.txtcharge').val(rtotal_amt);
			// $('.txtrescharge').val(rtotal_amt);
		});

function showPrdCtg()
		{		
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'showPrdCtg' : 1
					
				},
				success : function(r1)
				{
					$('#prdCtgDrp').html(r1);					
					
				}
				
			});
		}
		showPrdCtg();
		
$("#prdCtgDrp").on("change", function()
		{
			var ctgprod    =   $('#prdCtgDrp').val();
			// alert(prod);
			// return false;
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'showProduct' : 1,
					'ctgprod' : ctgprod,
					
				},
				success : function(r1)
				{
					 $('#drpProd').html(r1);									
				}
				
			});
		});
		
// function showProduct()
		// {		
			// $.ajax({
				// url : './includes/retailSalesPost.php',
				// type : 'post',
				// async : false,
				// data : {
					// 'showProduct' : 1
					
				// },
				// success : function(r1)
				// {
					// $('#drpProd').html(r1);					
					
				// }
				
			// });
		// }
		// showProduct();
function showtax()
		{		
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'showtax' : 1
					
				},
				success : function(r)
				{
					$('#txtstax').val(r.service_tax);	
					$('#txtvat').val(r.vat);
					
				}
				
			});
		}
		
		showtax();
		
		
		
$('#datetimepicker1').on('changeDate',function(selected){
	var t1;
	$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					t1=r.retail_sales_day;
				//	alert(t1);
					
				}
				
			});
	var end_date=$('#datetimepicker2').data('datetimepicker');
	start_date = new Date(selected.date);
    start_date.setDate(start_date.getDate()+parseInt(t1));
	end_date.setDate(start_date);
   
	
});



$('#txtmobno').keyup(function(){
	
    var txtmobno = $('#txtmobno').val();
	
    $.ajax({
      type: 'POST',
      dataType:'json',
      url: './includes/retailSalesPost.php',
      data: { 
	  txtmobno: txtmobno
	  }
	  
    })
    .done(function(msg) {
	 console.log(msg);
       $('#txtmobno').autocomplete({
    source: msg
           
    });
    //console.log(msg[4]);
     //$('#output').html(msg[5]);
       // $('#total_values').html(msg[2]);
    });
});
 