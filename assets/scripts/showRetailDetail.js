	function showdata()
		{		
			$.ajax({
				url : './includes/retailDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#event_detail').html(r);
					
					
				}
				
			});
		}
	showdata();
	//edit
		$('body').delegate('.edit','click',function()
		{
			//alert('hello Divyesh');
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/retailDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'edit'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					$('#eid').val(e.event_id);
					//$('#event_cal_id').val(e.event_cal_id);
					$('#txteventnm').val(e.event_name);
					$('#txteventds').val(e.event_ds);
					$('#txtclnm').val(e.client_name);
					$('#txtclcmp').val(e.client_cmp);
					$('#txtclemail').val(e.client_email);
					$('#txtworkmob').val(e.client_work_mob);
					$('#txthmmob').val(e.client_home_mob);
					$('#txtmob').val(e.client_mob);
					
					$('#txtjobdata1').val(e.job_data_1);
					$('#txtjobdata2').val(e.job_data_2);
					
					$('#txtstatus').val(e.status);
					
					$('#txtpaystatus').val(e.payment_status);
					$('#txtcharge').val(e.total_amt);
					$('#txtpaidamt').val(e.client_paid_amt);
					$('#txtcldesc').val(e.client_discount_amt);
					
					//this for invoice
					$('#txteid').val(e.event_id);
					$('#txtfpdfeid').val(e.event_id);
					$('#txtfpdffromdt').val(e.from_date);
					
					$('#txtenm').val(e.event_name);
					$('#txtfdate').val(e.from_date);
					$('#txtcnm').val(e.client_name);
					$('#txtcmpnm').val(e.client_cmp);
					$('#txtcharge1').val(e.total_amt);
					$('#txtpaid').val(e.client_paid_amt);
					$('#client_charges').val(e.client_charges);
					$('#st').val(e.service_tax_amt);
					var cli_charge=$('#client_charges').val();
					var cli_disc=$('#txtcldesc').val();
					var disamt=cli_charge-cli_disc;
					$('#disamt').val(disamt);
					//end of invoice data
					
					//this for update
					$('#clchargen').val(e.client_charges);
					$('#clpdchargen').val(e.client_paid_amt);
					$('#vdchargen').val(e.vendor_charges);
					$('#vdpdchargen').val(e.vd_paid_amt);
					$('#txmdn').val(e.taxmode);
					$('#txratn').val(e.service_tax_rate);
					$('#txamtn').val(e.service_tax_amt);
					$('#totammtn').val(e.total_amt);
					//end
					//this update for retail
					$('#clientchargesR').val(e.client_charges);
					$('#taxmoder').val(e.taxmode);
					$('#staxR').val(e.service_tax_amt);
					$('#totalAmtR').val(e.total_amt);
					
					//end
					 newshowretailplaces ();
					//call of function which show the popup data that get the paid amt detail from event payment trn table					
					//showeventpaid();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					//showvendorpaid();
					showpdf();
					showfullpdf();
					
				}
				
			});		
		});		
		//end
		//default show data in edit mode
		function last_event()
		{
			//alert('hello Divyesh');
			
			var enqid = $('#txtenqid').val();
			if(enqid == '')
			{
				var id = $('#lasteid').val();
			}
			else
			{
				var id = $('#txtenqid').val();
			}
			
			
			$.ajax({
				url : 'includes/retailDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'showlast'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					$('#eid').val(e.event_id);
					//$('#event_cal_id').val(e.event_cal_id);
					$('#txteventnm').val(e.event_name);
					$('#txteventds').val(e.event_ds);
					$('#txtclnm').val(e.client_name);
					$('#txtclcmp').val(e.client_cmp);
					$('#txtclemail').val(e.client_email);
					$('#txtworkmob').val(e.client_work_mob);
					$('#txthmmob').val(e.client_home_mob);
					$('#txtmob').val(e.client_mob);
					
					$('#txtjobdata1').val(e.job_data_1);
					$('#txtjobdata2').val(e.job_data_2);
					
					$('#txtstatus').val(e.status);
					
					$('#txtpaystatus').val(e.payment_status);
					$('#txtcharge').val(e.total_amt);
					$('#txtpaidamt').val(e.client_paid_amt);
					$('#txtcldesc').val(e.client_discount_amt);
					
					//this for invoice
					$('#txteid').val(e.event_id);
					$('#txtfpdfeid').val(e.event_id);
					$('#txtfpdffromdt').val(e.from_date);
					
					$('#txtenm').val(e.event_name);
					$('#txtfdate').val(e.from_date);
					$('#txtcnm').val(e.client_name);
					$('#txtcmpnm').val(e.client_cmp);
					$('#txtcharge1').val(e.total_amt);
					$('#txtpaid').val(e.client_paid_amt);
					$('#client_charges').val(e.client_charges);
					$('#st').val(e.service_tax_amt);
					var cli_charge=$('#client_charges').val();
					var cli_disc=$('#txtcldesc').val();
					var disamt=cli_charge-cli_disc;
					$('#disamt').val(disamt);
					//end of invoice data
					
					//this for update
					$('#clchargen').val(e.client_charges);
					$('#clpdchargen').val(e.client_paid_amt);
					$('#vdchargen').val(e.vendor_charges);
					$('#vdpdchargen').val(e.vd_paid_amt);
					$('#txmdn').val(e.taxmode);
					$('#txratn').val(e.service_tax_rate);
					$('#txamtn').val(e.service_tax_amt);
					$('#totammtn').val(e.total_amt);
					//end
					//this update for retail
					$('#clientchargesR').val(e.client_charges);
					$('#taxmoder').val(e.taxmode);
					$('#staxR').val(e.service_tax_amt);
					$('#totalAmtR').val(e.total_amt);
					
					//end
					//call to display for evend places detail..
					//its old//showeventplaces();
					 newshowretailplaces ();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					
					showpdf();
					showfullpdf();
					
				}
				
			});		
		}
		
		
		last_event();
		//end
		//edit functionality on order detail

		$('#editdetail').click(function(){
			
			//alert("working");
			//var eid    =   $('#eid').val();
			
			
			$('#txteventnm').removeAttr('readonly');
			$('#txteventds').removeAttr('readonly');
			
			$('#txtclnm').removeAttr('readonly');
			$('#txtclcmp').removeAttr('readonly');
			$('#txtclemail').removeAttr('readonly');
			$('#txtworkmob').removeAttr('readonly');
			$('#txthmmob').removeAttr('readonly');
			$('#txtmob').removeAttr('readonly');
			
			$('#txtjobdata1').removeAttr('readonly');
			$('#txtjobdata2').removeAttr('readonly');
			
			$("#showeditbtn").fadeIn();
			
		});
		
		//on cancel button fade out and add attribute read only onfields
			$('#btncancel').click(function(){
				
				$('#txteventnm').attr('readonly','txteventnm');
				$('#txteventds').attr('readonly','txteventds');
				
				$('#txtclnm').attr('readonly','txtclnm');
				$('#txtclcmp').attr('readonly','txtclcmp');
				$('#txtclemail').attr('readonly','txtclemail');
				$('#txtworkmob').attr('readonly','txtworkmob');
				$('#txthmmob').attr('readonly','txthmmob');
				$('#txtmob').attr('readonly','txtmob');
				
				$('#txtjobdata1').attr('readonly','txtjobdata1');
				$('#txtjobdata2').attr('readonly','txtjobdata2');
				
				$("#showeditbtn").fadeOut();	
			});
			
			//on btnupdate click it will update the data
			
			$('#btnupdate').click(function(){
				
				var eid    =  $('#eid').val();
				
				//var eid    =  $('#eid').val();	
				
				var txteventnm    =  $('#txteventnm').val();
				var txteventds    =  $('#txteventds').val();
				var txtclnm    =  $('#txtclnm').val();
				var txtclcmp    =  $('#txtclcmp').val();
				var txtclemail    =  $('#txtclemail').val();
				var txtworkmob    =  $('#txtworkmob').val();
				
				var txthmmob    =  $('#txthmmob').val();
				var txtmob    =  $('#txtmob').val();
				var txtjobdata1    =  $('#txtjobdata1').val();
				var txtjobdata2    =  $('#txtjobdata2').val();
				
				$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'btnUpdate'  : 1,
							
							'eid' 	: eid,	
							'txteventnm' 	: txteventnm,
							'txteventds' 	: txteventds,
							'txtclnm' 	: txtclnm,
							'txtclcmp' 	: txtclcmp,
							'txtclemail' 	: txtclemail,
							'txtworkmob' 	: txtworkmob,
							
							'txthmmob' 	: txthmmob,
							'txtmob' 	: txtmob,
							'txtjobdata1' 	: txtjobdata1,
							'txtjobdata2' 	: txtjobdata2,
							
						},
						success : function(v)
						{
							// $('#txtevent_vend_id').val(va.event_vendor_id);
							// $('#txtvend_evnt_id').val(va.event_id);					
							// showeventpaidtrn();
							
							$('#txteventnm').attr('readonly','txteventnm');
							$('#txteventds').attr('readonly','txteventds');
							
							$('#txtclnm').attr('readonly','txtclnm');
							$('#txtclcmp').attr('readonly','txtclcmp');
							$('#txtclemail').attr('readonly','txtclemail');
							$('#txtworkmob').attr('readonly','txtworkmob');
							$('#txthmmob').attr('readonly','txthmmob');
							$('#txtmob').attr('readonly','txtmob');
							
							$('#txtjobdata1').attr('readonly','txtjobdata1');
							$('#txtjobdata2').attr('readonly','txtjobdata2');
							
							$("#showeditbtn").fadeOut();
							//updateEvent() ;
							//window.location.reload();
							
						}
						
					});	
				
				
				
			});	
		//end
		//edit retail
		$('#edtretail').click(function()
			{
									
				$("#edtretail").hide();
				$("#shwRetail").show();
				$("#retailInfo").show();
			});
		
		$("#shwRetail").hide();
		$("#retailInfo").hide();
		//exit 
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
		
		$("#drpProd").on("change", function()
		{
			var prod    =   $('#drpProd').val();
			var taxmode =  $('#taxmoder').val();
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
			var txtphotoId = $('.txtphotoId').val();
			
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
						'<input   type="hidden"  id="txtictg" name="txtictg" value="'+ctgid+'">'+
						'<input   type="hidden"  id="txticomgrp" name="txticomgrp"  class="txticomgrp" value="'+comgrp+'">'+
						'<input   type="hidden"  id="txtictgnm" name="txtictgnm"  value="'+ctgnm+'">'+
						'<input   type="hidden"  id="txtprdid" name="txtprdid" value="'+prdid+'">'+
						'<input  type="hidden"  id="txtiprdnm" name="txtiprdnm" value="'+prdnm+'">'+
						'<input  type="hidden"  id="txtiqty" name="txtiqty"  value="'+qty+'">'+
						'<input  type="hidden"  id="txtirate" name="txtirate"  value="'+rate+'">'+
						'<input   type="hidden" id="ptxtiamt" name="ptxtiamt"  class="ptxtiamt" value="'+amt+'">'+
						'<input   type="hidden" id="ptxtitax" name="ptxtitax"  class="ptxtitax" value="'+tax+'">'+
						'<input   type="hidden" id="txtphotoId" name="txtphotoId"   value="'+txtphotoId+'">'+
						
						
						'<td>'+ prdnm+'</td>'+
						'<td>'+ txtphotoId+'</td>'+
						'<td>'+ rate+'</td>'+
						'<td>'+ qty+'</td>'+
						'<td>'+ tax+'</td>'+
						
						'<td class="amount">'+ amt+'</td>'+						
											
						'<td><a class="prdremove" id="'+k+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';										
					
			$('#rtldtl').append(prddiv);
			
			
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
				
				$('.insclientchargesR').val(client_charge);
				$('.insstaxR').val(rtotal_tax);				
				$('.instotalAmtR').val(rtotal_amt);
				
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
				$('.insclientchargesR').val(client_charge);
				$('.insstaxR').val(rtotal_tax);				
				$('.instotalAmtR').val(rtotal_amt);
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
				
				$('.insclientchargesR').val(client_charge);
				$('.insstaxR').val(rtotal_tax);				
				$('.instotalAmtR').val(rtotal_amt);
				
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
				
				$('.insclientchargesR').val(client_charge);
				$('.insstaxR').val(rtotal_tax);				
				$('.instotalAmtR').val(rtotal_amt);
				// $('.txtrescharge').val(rtotal_amt);
			}
		});
		
		//insert the Deliverable detail
				$('#updRetail').click(function()
				{									
					//var contres = $('#contres').val();
					
					
					var clcharge = $('#clientchargesR').val();				
					var txamt = $('#staxR').val();
					var totammt = $('#totalAmtR').val();	
					
					var nclcharge = $('#insclientchargesR').val();				
					var ntxamt = $('#insstaxR').val();
					var ntotammt = $('#instotalAmtR').val();
					
					var totclcharge = parseInt(clcharge) + parseInt(nclcharge);
					var tottaxamt = parseInt(txamt) + parseInt(ntxamt);
					var totfinalAmt = parseInt(totammt) + parseInt(ntotammt);
					
					//var epldtlid = $('#epldtlid').val();
					var evntid = $('#eid').val();
					
					
					// alert (totclcharge);
					// alert (tottaxamt);
					// alert (totfinalAmt);
					// return false;
					           
					
					var txtictg = [];
					$.each($("input[name='txtictg']"), function(){            
						 txtictg.push($(this).val());
					});
					var txtprdid = [];
					$.each($("input[name='txtprdid']"), function(){            
						 txtprdid.push($(this).val());
					});
					var txticomgrp = [];
					$.each($("input[name='txticomgrp']"), function(){            
						 txticomgrp.push($(this).val());
					});					
					var txtirate = [];
					$.each($("input[name='txtirate']"), function(){            
						 txtirate.push($(this).val());
					});	
					
					
					var txtiqty = [];
					$.each($("input[name='txtiqty']"), function(){            
						 txtiqty.push($(this).val());
					});
					var ptxtiamt = [];
					$.each($("input[name='ptxtiamt']"), function(){            
						 ptxtiamt.push($(this).val());
					});
					var ptxtitax = [];
					$.each($("input[name='ptxtitax']"), function(){            
						 ptxtitax.push($(this).val());
					});	

					var txtphotoId = [];
					$.each($("input[name='txtphotoId']"), function(){            
						 txtphotoId.push($(this).val());
					});	
					
					
					
					
					
					$.ajax({
							url : 'includes/retailDetailPost.php',
							type : 'POST',
							async : false,
							data : {
								'RetailIns'  : 1,								
								//'epldtlid' 	: epldtlid,	
								'evntid' 	: evntid,				    				
								'txtictg' 	: txtictg,
								'txtprdid' 	: txtprdid,
								'txticomgrp' 	: txticomgrp,								
								'txtirate' 	: txtirate,						     
								'txtiqty' 	: txtiqty,
								'ptxtiamt' 	: ptxtiamt,								
								'ptxtitax' 	: ptxtitax,
								'txtphotoId' 	: txtphotoId,
								
								
								'totclcharge'     : totclcharge,
								'tottaxamt' : tottaxamt,
								'totfinalAmt' : totfinalAmt,
								
							},
							success : function(v)
							{
								alert('Updated Retail Sales!!!');
								$("#shwRetail").hide();
								$("#retailInfo").hide();
								$("#edtretail").show();								
								//UpdateAcc();
							}
							
						});			
				});
				//end
				
				//removing the RetailSales from the database
			
				$('body').delegate('.retaildel','click',function()
				{
					
					var id = $(this).data('id');
					
					var retailRate = $('#retailRate'+id).val();	
					var retailTax = $('#retailTax'+id).val();
					var retailTotal = $('#retailTotal'+id).val();
					
					var evnt_id = $('#eid').val();	
					
					//var contres = $('#contres').val();
					var clientchargesR = $('#clientchargesR').val();
					var staxR = $('#staxR').val();					
					var totalAmtR = $('#totalAmtR').val();
					
					var clcharge = parseInt(clientchargesR)	- parseInt(retailRate);	
					var evtax = parseInt(staxR)	- parseInt(retailTax);
					var totalAmt = parseInt(totalAmtR)	- parseInt(retailTotal);
						
						
					
					$.ajax({
						url : 'includes/retailDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'retaildel'  : 1,
							'id' 	: id,
							'evnt_id' : evnt_id,
							
							'clcharge'   : clcharge,
							'evtax'     : evtax,
							'totalAmt' : totalAmt,
							
						},
						success : function(d)
						{
							alert("Delete Successfully");
							//UpdateAcc();
						}
						
						
					});
					$( this ).parent().parent().css( "display", "none" );					
				});
				
				
				
				
				
				
				
				
		
		function showeventpaid()
		{	
			var epid    =   $('#eid').val();			
			//alert(epldtl);
			
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showpaidtrn' : 1,
					'epid'   : epid,
					
				},
				success : function(r7)
				{
					$('#showeventpaidtrn').html(r7);					
					
				}
				
			});
		}
		function showpdf()
		{	
			var eid = $('#eid').val();
			//alert (eid);
			//return false;
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showPdf' : 1,
					'eid' : eid,
				},
				success : function(r)
				{
					$('#showpdf').html(r);				
					
				}
				
			});
		}
		function showfullpdf()
		{	
			var eid = $('#eid').val();
			//alert (eid);
			//return false;
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showfullPdf' : 1,
					'eid' : eid,
				},
				success : function(r)
				{
					$('#showfullpdf').html(r);				
					
				}
				
			});
		}
		function newshowretailplaces ()
		{
			var eid    =   $('#eid').val();
			
			//alert(eid);
			$.ajax({
				url : 'includes/retailDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'newshowretaildtl'  : 1,
					'eid'   : eid,				
					
				},
				success : function(rd1)
				{										
					 $('#rtldtl').html(rd1);					 
																
				}				
			});	
					
		}