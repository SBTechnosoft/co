// $("#taxmode").on("change", function()
		// {
			// var taxmode    =   $('#taxmode').val();
			// var stax = $('#txtstax').val();
			// var vat = $('#txtvat').val();
			// var txttypedis = $('#txttypedis').val();
			// var disc = $('#txtdisc').val();
			// var clientcharge = $('#txtcharge').val();			
			// var txticomgrp = [];
			// $.each($('.txticomgrp'), function(){            
                 // txticomgrp.push($(this).val());
            // });			
			// var ptxtiamt = [];
			// $.each($('.ptxtiamt'), function(){            
                 // ptxtiamt.push($(this).val());
            // });		
			
			// $.ajax({
				// url : './includes/retailSalesPost.php',
				// type : 'post',
				// async : false,
				// data : {
					// 'caluculate' : 1,
					 // 'taxmode' : taxmode,
					 // 'stax' : stax,
					 // 'vat' : vat,
					 // 'txttypedis' : txttypedis,
					 // 'disc' : disc,
					 // 'clientcharge' : clientcharge,
					// 'txticomgrp' : txticomgrp,
					// 'ptxtiamt' : ptxtiamt,
				// },
				// success : function(r1)
				// {
					// $('#totdata').html(r1);
									
				// }
				
			// });
			
			
		// });
// $("#txtdisc").on("focusout", function()
		// {
			// var taxmode    =  $('#taxmode').val();
			// var stax = $('#txtstax').val();
			// var vat = $('#txtvat').val();
			// var disc = $('#txtdisc').val();
			// var txttypedis = $('#txttypedis').val();
			// var clientcharge = $('#txtcharge').val();			
			// var txticomgrp = [];
			// $.each($('.txticomgrp'), function(){            
                 // txticomgrp.push($(this).val());
            // });			
			// var ptxtiamt = [];
			// $.each($('.ptxtiamt'), function(){            
                 // ptxtiamt.push($(this).val());
            // });		
			
			// $.ajax({
				// url : './includes/retailSalesPost.php',
				// type : 'post',
				// async : false,
				// data : {
					// 'CalDiscount' : 1,
					 // 'taxmode' : taxmode,
					 // 'stax' : stax,
					 // 'vat' : vat,
					 // 'txttypedis' : txttypedis,
					 // 'disc' : disc,
					 // 'clientcharge' : clientcharge,
					// 'txticomgrp' : txticomgrp,
					// 'ptxtiamt' : ptxtiamt,
				// },
				// success : function(r1)
				// {
					// $('#totdata').html(r1);
									
				// }
				
			// });
			
			
		// });

	$("#txtdisc").on("focusout", function()
		{
			var txttypedis = $('#txttypedis').val();
			var txtdisc = $('#txtdisc').val();
			var txttotamt = $('#txttotamt').val();
			
			if(txttypedis == 'Flat')
			{
				var txtfinAmt = parseInt(txttotamt) -  parseInt(txtdisc) ;
				
				$('#txtdiscamt').val(txtdisc);
				$('#txtfinAmt').val(txtfinAmt);
				$('#txtremAmt').val(txtfinAmt);
			}
			else if (txttypedis == 'Percentage')
			{
				var txtdiscamt = (parseInt(txttotamt) * parseInt(txtdisc)) / 100 ;
				var txtfinAmt = parseInt(txttotamt) - parseInt(txtdiscamt);
				$('#txtdiscamt').val(txtdiscamt);
				$('#txtfinAmt').val(txtfinAmt);
				$('#txtremAmt').val(txtfinAmt);
			}
			else
			{
				
			}
			
		});
	
	
	$("#txtpaid").on("focusout", function()
		{
			alert('hi');
			var txtfinAmt = $('#txtfinAmt').val();
			var txtpaid = $('#txtpaid').val();
			var txtremAmt = parseInt(txtfinAmt) - parseInt(txtpaid);
			$('#txtremAmt').val(txtremAmt);
		});

$("#drpProd").on("change", function()
		{
			var prod    =   $('#drpProd').val();
			var taxmode =  $('#taxmode').val();
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
					if(taxmode == 'Yes')
					{
						$('#txtprdrate').val(r.actual_amt);
						$('#txtprdtax').val(r.tax_amt);
						
						$('#htxtprdrate').val(r.actual_amt);
						$('#htxtprdtax').val(r.tax_amt);
						
						$('#txtprdamt').val(r.retail_price);
						$('#txtcomgrp').val(r.commodity_grp);
					}
					else
					{
						$('#txtprdrate').val(r.actual_amt);
						$('#txtprdtax').val('0');
						
						$('#htxtprdrate').val(r.actual_amt);
						$('#htxtprdtax').val('0');
						
						$('#txtprdamt').val(r.actual_amt);
						$('#txtcomgrp').val(r.commodity_grp);
					}
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
			var txtramt = $('#htxtprdrate').val();
			var txttax = $('#htxtprdtax').val();
			var tot = parseInt(qty) * (parseInt(txtramt) + parseInt(txttax)) ;	
			var tottax = parseInt(qty) * parseInt(txttax) ;	
			$('#txtprdamt').val(tot);
			$('#txtprdtax').val(tottax);	
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
			var tax = $('.txtprdtax').val();
			
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
						'<input   type="hidden" id="hdn['+k+'][ptxtitax]" name="hdn['+k+'][ptxtitax]"  class="ptxtitax" value="'+tax+'">'+
						
						'<td>'+ ctgnm+'</td>'+
						'<td>'+ prdnm+'</td>'+
						'<td>'+ comgrp+'</td>'+
						'<td>'+ rate+'</td>'+
						'<td>'+ tax+'</td>'+
						'<td>'+ qty+'</td>'+
						'<td class="amount">'+ amt+'</td>'+						
											
						'<td><a class="prdremove" id="'+k+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';										
					
			$('#prdrec').append(prddiv);
			
			
			var taxmode = $('#taxmode').val();
			if(taxmode == 'Yes')
			{
				
				//total of final amt
				var rgtot = [];
				$.each($('.ptxtiamt'), function(){            
					rgtot.push($(this).val());
				});
				var rtotal_amt = 0;
				$.each(rgtot,function() {
					rtotal_amt += parseInt(this);
				});	
				//exit
				//total of tax
				var tottax = [];
				$.each($('.ptxtitax'), function(){            
					tottax.push($(this).val());
				});
				var rtotal_tax = 0;
				$.each(tottax,function() {
					rtotal_tax += parseInt(this);
				});
				//exit
				
				var client_charge = parseInt(rtotal_amt) - parseInt(rtotal_tax)
				
				$('.txtcharge').val(client_charge);
				$('.txttottax').val(rtotal_tax);
				$('.txttotamt').val(rtotal_amt);
				$('.txtfinAmt').val(rtotal_amt);
				
				// $('.txtrescharge').val(rtotal_amt);
			}
			else
			{
				//total of final amt
				var rgtot = [];
				$.each($('.ptxtiamt'), function(){            
					rgtot.push($(this).val());
				});
				var rtotal_amt = 0;
				$.each(rgtot,function() {
					rtotal_amt += parseInt(this);
				});	
				//exit
				//total of tax
				var tottax = [];
				$.each($('.ptxtitax'), function(){            
					tottax.push($(this).val());
				});
				var rtotal_tax = 0;
				$.each(tottax,function() {
					rtotal_tax += parseInt(this);
				});
				//exit
				
				var client_charge = parseInt(rtotal_amt) - parseInt(rtotal_tax)
				
				$('.txtcharge').val(client_charge);
				$('.txttottax').val('0');
				$('.txttotamt').val(client_charge);
				$('.txtfinAmt').val(client_charge);
				// $('.txtrescharge').val(rtotal_amt);
			}
			$('.prdCtgDrp').val('');
			$('.drpProd').val('');
			$('.txtprdrate').val('');
			$('.txtprdqty').val('1');
			$('.txtprdamt').val('');
			
			
			
		});
		
		$(document).on('click','.prdremove',function(){
			var button_id = $(this).attr("id");
			$("#prdrow"+button_id+"").remove();	

			var taxmode = $('#taxmode').val();
			if(taxmode == 'Yes')
			{
				
				//total of final amt
				var rgtot = [];
				$.each($('.ptxtiamt'), function(){            
					rgtot.push($(this).val());
				});
				var rtotal_amt = 0;
				$.each(rgtot,function() {
					rtotal_amt += parseInt(this);
				});	
				//exit
				//total of tax
				var tottax = [];
				$.each($('.ptxtitax'), function(){            
					tottax.push($(this).val());
				});
				var rtotal_tax = 0;
				$.each(tottax,function() {
					rtotal_tax += parseInt(this);
				});
				//exit
				
				var client_charge = parseInt(rtotal_amt) - parseInt(rtotal_tax)
				
				$('.txtcharge').val(client_charge);
				$('.txttottax').val(rtotal_tax);
				$('.txttotamt').val(rtotal_amt);
				$('.txtfinAmt').val(rtotal_amt);
				
				// $('.txtrescharge').val(rtotal_amt);
			}
			else
			{
				//total of final amt
				var rgtot = [];
				$.each($('.ptxtiamt'), function(){            
					rgtot.push($(this).val());
				});
				var rtotal_amt = 0;
				$.each(rgtot,function() {
					rtotal_amt += parseInt(this);
				});	
				//exit
				//total of tax
				var tottax = [];
				$.each($('.ptxtitax'), function(){            
					tottax.push($(this).val());
				});
				var rtotal_tax = 0;
				$.each(tottax,function() {
					rtotal_tax += parseInt(this);
				});
				//exit
				
				var client_charge = parseInt(rtotal_amt) - parseInt(rtotal_tax)
				
				$('.txtcharge').val(client_charge);
				$('.txttottax').val('0');
				$('.txttotamt').val(client_charge);
				$('.txtfinAmt').val(client_charge);
				// $('.txtrescharge').val(rtotal_amt);
			}
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
	var tt;
	$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					tt=r.retail_sales_day;
				//	alert(t1);
					
				}
				
			});
	
	var end_date=$('#datetimepicker2').data('datetimepicker');
	start_date = new Date(selected.date);
    start_date.setDate(start_date.getDate()+parseInt(tt));
	
	if(start_date.getDay()==1)
	{
		
		start_date.setDate(start_date.getDate()+1);
	}
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
		source: msg,
        select: function( event, ui ) {
			//alert(ui.item.value);
			$.ajax({
				type: 'POST',
				dataType:'json',
				url: './includes/retailSalesPost.php',
				data: { 
					getname:1,
					txtmobno2: ui.item.value
					}
	  
					})
			.done(function(msg2) {
			$('#txtprdnm').val(msg2);
								});
						}
  
			});
   
    });
});
   	

function showInvoice()
		{		
			$.ajax({
				url : './includes/retailSalesPost.php',
				type : 'post',
				async : false,
				data : {
					'showInvoice1' : 1
					
				},
				success : function(r3)
				{
				
					$('#invoice1').val(r3);					
					
				}
				
			});
		}
		showInvoice(); 