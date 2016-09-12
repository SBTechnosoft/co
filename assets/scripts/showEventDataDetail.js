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
					updateEvent() ;
					//window.location.reload();
					
				}
				
			});	
		
		
		
	});	
//end
//update calendarId
	function updateEvent() 
	{
		var eventResponse = document.getElementById('event-response');
		//alert('df');
		
		
		var id = $('#event_cal_id').val();
		var evnt_name = $('#txteventnm').val();	
		
		var add_resource = {
            "summary": evnt_name,			
		};
		
	   
		gapi.client.load('calendar', 'v3', function () {					// load the calendar api (version 3)
			var request = gapi.client.calendar.events.patch
			({
				'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
				'eventId': id,
				"resource": add_resource			// pass event details with api call
			});
			
			// handle the response from our api call
			request.execute(function (resp) {
			   // alert(resp.htmlLink);
				if (resp.status == 'confirmed') {
				
				  
					alert('updated successfully');
				} else {
					alert('sorry!!!');
				}
			});
		});
    }


//end





//showing vendor detail 1.event_vendor_id and event_id on add click
	$('body').delegate('.vendaddp','click',function(){			
			
			$('#vend_pop_background').fadeIn();
			$('#vend_pop_box').fadeIn();
			var event_vend_id = $(this).data('id');
			//alert(event_vend_id);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'vend_add_edit'  : 1,
					'event_vend_id' 	: event_vend_id,										
				},
				success : function(va)
				{
					$('#txtevent_vend_id').val(va.event_vendor_id);
					$('#txtvend_evnt_id').val(va.event_id);					
					showeventpaidtrn();
				}
				
			});		
		});
		
		
		
	$('#filter_data').click(function()
		{			
			var txtename    =   $('#txtename').val();
			var txtclname    =   $('#txtclname').val();
			var txtfpno    =   $('#txtfpno').val();
			var txtbillno    =   $('#txtbillno').val();
			var txtfromdt    =   $('#txtfromdt').val();
			var txttodt    =   $('#txttodt').val();
			var drpcmpnm  = $('#drpcmpnm').val();
			
			if(txtename == '' && txtclname == '' && txtfpno == '' && txtbillno == '' && txtfromdt == '' && txttodt == '' && drpcmpnm == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'txtename'   : txtename,
					'txtclname' : txtclname,
					'txtfpno' :txtfpno,
					'txtbillno' : txtbillno,
					'txtfromdt' : txtfromdt,
					'txttodt' :txttodt,
					'drpcmpnm' : drpcmpnm,
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#event_detail').html(v);
					
				}				
			});	
						
		});

	function showeventpaidtrn()
	{
		var txtevent_vend_id =  $('#txtevent_vend_id').val();
		var txtvend_evnt_id =  $('#txtvend_evnt_id').val();
		//alert(txtevent_vend_id);
		$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'vend_show_trn'  : 1,
					'txtevent_vend_id' 	: txtevent_vend_id,
					'txtvend_evnt_id' 	: txtvend_evnt_id,
				},
				success : function(va)
				{
					$('#showVendAllpaidtrn').html(va);
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
	
	$('#fullPdf').click(function()
		{
				var eid = $('#eid').val();
				var txteventnm    =   $('#txteventnm').val();
				var txteventds    =   $('#txteventds').val();
				var txtclnm    =   $('#txtclnm').val();
				var txtclcmp    =   $('#txtclcmp').val();
				var txtclemail    =   $('#txtclemail').val();
				var txtworkmob    =   $('#txtworkmob').val();
				var txthmmob    =   $('#txthmmob').val();
				var txtmob    =   $('#txtmob').val();
				var txtstatus    =   $('#txtstatus').val();
				var evfromdt    =   $('#evfromdt').val();
				var evtodt    =   $('#evtodt').val();
				var txtvenue    =   $('#txtvenue').val();
				var txtldmark    =   $('#txtldmark').val();
				
				var eqp = [];
					$.each($("input[name='eqp']"), function(){            
						 eqp.push($(this).val());
					});
				var stf = [];
					$.each($("input[name='stf']"), function(){            
						 stf.push($(this).val());
					});
				var vend = [];
					$.each($("input[name='vend']"), function(){            
						 vend.push($(this).val());
					});
								
				$.ajax({
					url : 'full_invoice.php',
					type : 'POST',
					async : false,
					data : {
						'fullinvoice'  : 1,
						'eid'			: eid,
						'txteventnm'   : txteventnm,
						'txteventds'   : txteventds,
						'txtclnm'   : txtclnm,
						'txtclcmp'   : txtclcmp,
						'txtclemail'   : txtclemail,
						'txtworkmob'   : txtworkmob,
						'txthmmob'   : txthmmob,
						'txtmob'   : txtmob,
						'txtstatus'   : txtstatus,
						'evfromdt'   : evfromdt,
						'evtodt'   : evtodt,
						'txtvenue'   : txtvenue,
						'txtldmark'   : txtldmark,
						'eqp'  : eqp,
						'stf'  : stf,
						'vend' : vend,
						
					},
					success : function(vp)
					{	
						
						//alert( html(vp));
						
						alert(vp);
						alert('successfull pdf generated!!!');
						
						//window.location.href= 'upload/invoice/19700101_95.pdf';
						
						// window.open(
						  // './upload/invoice/20160519_95.pdf',
						  // '_blank' 
						// );
						//return vp;
						

					}				
				});	
						
		});
		
	
	
	
	
	
	$('#submit_vend_paytrn').click(function()
		{
			
				var txtevent_vend_id    =   $('#txtevent_vend_id').val();
				var txtvend_evnt_id    =   $('#txtvend_evnt_id').val();
				var txtvpdate    =   $('#txtvpdate').val();
				var txtvpmode    =   $('#txtvpmode').val();
				
				var txtvpbnm    =   $('#txtvpbnm').val();
				var txtvpchq    =   $('#txtvpchq').val();
				var txtvdpamt    =   $('#txtvdpamt').val();
				
				// alert(txtevent_vend_id);
				// return false;
				if(txtvdpamt == '')
				{
					alert('Amount is empty');
					return false;
				}
				
				//alert(eid);
				$.ajax({
					url : 'includes/eventDetailPost.php',
					type : 'POST',
					async : false,
					data : {
						'AddVendPTrn'  : 1,
						'txtevent_vend_id'   : txtevent_vend_id,
						'txtvend_evnt_id'   : txtvend_evnt_id,	
						'txtvpdate'   : txtvpdate,	
						'txtvpmode'   : txtvpmode,

						'txtvpbnm'   : txtvpbnm,	
						'txtvpchq'   : txtvpchq,	
						'txtvdpamt'   : txtvdpamt,
						
					},
					success : function(vp)
					{	
						if(vp == 11)
						{
							alert('your value is bigger to charge value');
							return false;
						}
						else
						{
						alert('success');
						$('#txtvpdate').val('');
						$('#txtvpbnm').val('');
						$('#txtvpchq').val('');
						$('#txtvdpamt').val('');
						
						//close the popup box
						$('#vend_pop_background').fadeOut();
						$('#vend_pop_box').fadeOut();
						
						//show the inserted data function
						showeventpaidtrn();
						showvendorpaid();
						}
					}				
				});	
						
		});
		
		
		
		
		
		
		
		
		
		
		

//end to show

//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'delete'  : 1,
					'id' 	: id
										
				},
				success : function(d)
				{
					deleteEvent(id);
					alert("Delete Successfully");
					window.location.reload();
					
				}
				
			});
			
		});
//end

//event del from call
	function deleteEvent(id) 
	{
    
	  gapi.client.load('calendar', 'v3', function() {  
	   
	   var request = gapi.client.calendar.events.delete({
		 'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
		 'eventId': id
		  });
		 
		request.execute(function(resp) {
		
	   });
	   });
  
    }

//end



//edit
		$('body').delegate('.edit','click',function()
		{
			//alert('hello Divyesh');
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'edit'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					$('#eid').val(e.event_id);
					$('#event_cal_id').val(e.event_cal_id);
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
					
					//call to display for evend places detail..
					//its old//showeventplaces();
					newshoweventplaces();
					//call of function which show the popup data that get the paid amt detail from event payment trn table					
					showeventpaid();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					showvendorpaid();
					showpdf();
					showfullpdf();
					countRes();
				}
				
			});		
		});		
		//end
		
		
			//removing the resources from the database
			
				$('body').delegate('.resdel','click',function()
				{
					
					var id = $(this).data('id');
					var rtxtiamt = $('#rtxtiamt'+id).val();	
					var rtxtivendprice = $('#rtxtivendprice'+id).val();
					var evnt_id = $('#eid').val();	
					
					var contres = $('#contres').val();
					var clcharge = $('#clcharge').val();
					var clpdcharge = $('#clpdcharge').val();					
					var txmd = $('#txmd').val();
					var txrat = $('#txrat').val();
					var txamt = $('#txamt').val();
					var totammt = $('#totammt').val();	
					var vdcharge = $('#vdcharge').val();
					
					if( contres > 0 )
					{													
						
						clcharge = parseInt(clcharge) - parseInt(rtxtiamt);		
						vdcharge = parseInt(vdcharge) - parseInt(rtxtivendprice);
						if(txmd=='Yes')
						{							
							var servtax  =	(parseInt(rtxtiamt)* parseFloat(txrat))/100;
							txamt =  parseInt(txamt) - parseInt(servtax);
							totammt = parseInt(totammt) - parseInt(rtxtiamt) - parseInt(servtax) ;
						}
						else
						{
							totammt = parseInt(totammt) - parseInt(rtxtiamt);
						}
						
					}
					
					$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'resdel'  : 1,
							'id' 	: id,
							'evnt_id' : evnt_id,
							'totammt'   : totammt,
							'txamt'     : txamt,
							'clcharge' : clcharge,
							'vdcharge' : vdcharge,
						},
						success : function(d)
						{
							alert("Delete Successfully");
							UpdateAcc();
						}
						
						
					});
					$( this ).parent().parent().css( "display", "none" );					
				});
				
				
			//end		
			
			//removing the Equipment from the database
			
				$('body').delegate('.eqpdel','click',function()
				{					
					var id = $(this).data('id');
					var txtiamt = $('#txtiamt'+id).val();
					var txtivendprice = $('#txtivendprice'+id).val();
					var evnt_id = $('#eid').val();					
					var contres = $('#contres').val();
					var clcharge = $('#clcharge').val();
					var clpdcharge = $('#clpdcharge').val();					
					var txmd = $('#txmd').val();
					var txrat = $('#txrat').val();
					var txamt = $('#txamt').val();
					var totammt = $('#totammt').val();	
					var vdcharge = $('#vdcharge').val();			
					
					
					if( contres == 0 )
					{													
						
						clcharge = parseInt(clcharge) - parseInt(txtiamt);						
						vdcharge = parseInt(vdcharge) - parseInt(txtivendprice); 
						
						
						if(txmd=='Yes')
						{							
							var servtax  =	(parseInt(txtiamt)* parseFloat(txrat))/100;
							txamt =  parseInt(txamt) - parseInt(servtax);
							totammt = parseInt(totammt) - parseInt(txtiamt) - parseInt(servtax) ;
						}
						else
						{
							totammt = parseInt(totammt) - parseInt(txtiamt);
						}
						
					}
								
					
					$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'eqpdel'  : 1,
							'id' 	: id,
							'evnt_id' : evnt_id,
							'totammt'   : totammt,
							'txamt'     : txamt,
							'clcharge' : clcharge,
							'vdcharge' : vdcharge,
						},
						success : function(d)
						{
							alert("Delete Successfully");							
						}						
					});
					$( this ).parent().parent().css( "display", "none" );					
				});
				
				
			//end
			
			//removing the equipment places dtl from the database
			
				$('body').delegate('.epddel','click',function()
				{
					//alert('hello Divyesh');
					var id = $(this).data('id');
					
					var event_id = $('#eid').val();
					var contres = $('#contres').val();
					var clcharge = $('#clcharge').val();
					var clpdcharge = $('#clpdcharge').val();					
					var txmd = $('#txmd').val();
					var txrat = $('#txrat').val();
					var txamt = $('#txamt').val();
					var totammt = $('#totammt').val();
					
					var vdcharge = $('#vdcharge').val();
					
					//Resource
					var res_sum = [];
					$.each($('.rtxtallpamt'+id), function(){          
						res_sum.push($(this).val());
					});
					var res_amt = 0;
					$.each(res_sum,function() {
						res_amt += parseInt(this);
					});
					
					//Equipment
					var eqp_sum = [];
					$.each($('.txtallpamt'+id), function(){          
						eqp_sum.push($(this).val());
					});
					
					var eqp_amt = 0;
					$.each(eqp_sum,function() {
						eqp_amt += parseInt(this);
					});
					
					//Vendor
					var ven_sum = [];
					$.each($('.txtallpvendprice'+id), function(){          
						ven_sum.push($(this).val());
					});
					
					var ven_amt = 0;
					$.each(ven_sum,function() {
						ven_amt += parseInt(this);
					});	
					
					//Res Vendor
					var rven_sum = [];
					$.each($('.rtxtallpvendprice'+id), function(){          
						rven_sum.push($(this).val());
					});
					
					var rven_amt = 0;
					$.each(rven_sum,function() {
						rven_amt += parseInt(this);
					});	
					
					$.ajax({
						url : 'includes/eventDetailPost.php',
						type : 'POST',
						async : false,
						data : {
							'epddel'  : 1,
							'id' 	: id,
							'contres' : contres,
							'clcharge' : clcharge,
							'txmd' : txmd,
							'txrat' : txrat,
							'txamt' : txamt,
							'totammt' : totammt,
							'vdcharge' : vdcharge,							
							'res_amt' : res_amt,
							'eqp_amt' : eqp_amt,
							'ven_amt' : ven_amt,
							'rven_amt' : rven_amt,
							'event_id': event_id,
												
						},
						success : function(d)
						{
							alert("Delete Successfully");
							//window.location.reload();
							UpdateAcc();
						}
						
					});
					$( this ).parent().parent().css( "display", "none" );					
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
			//alert(id);
			
			//var id = $('#lasteid').val();
			
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'showlast'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					$('#eid').val(e.event_id);
					$('#event_cal_id').val(e.event_cal_id);
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
					
					//call to display for evend places detail..
					//its old//showeventplaces();
					newshoweventplaces();
					
					//call of function which show the popup data that get the paid amt detail from event payment trn table					
					showeventpaid();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					showvendorpaid();
					showpdf();
					showfullpdf();
					countRes();
				}
				
			});		
		}
		
		
		last_event();
		
		
		//end of the default show data
		
		function countRes()
		{
			var id = $('#eid').val();
			//alert(id);
			
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'countRes'  : 1,
					'id' 	: id,
										
				},
				success : function(e)
				{
					$('#contresn').val(e.Count);
				}
			});
		}
		countRes();
		
		function UpdateAcc()
		{
			var id = $('#eid').val();
			//alert(id);
			
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'UpdateAcc'  : 1,
					'id' 	: id,
										
				},
				success : function(e)
				{
					$('#txtcharge').val(e.total_amt);
					
					$('#clcharge').val(e.client_charges);
					$('#vdcharge').val(e.vendor_charges);
					$('#txamt').val(e.service_tax_amt);
					$('#totammt').val(e.total_amt);
				}
			});
		}
		
		function newshoweventplaces ()
		{
			var eid    =   $('#eid').val();
			
			//alert(eid);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'newshoweventdtl'  : 1,
					'eid'   : eid,				
					
				},
				success : function(rd1)
				{										
					 $('#multiinsert').html(rd1);
					 
						// showdataeqp();
						// showdatastf();
						// showdatavend();
						// showdatavendsel();										
				}				
			});	
					
		}
		
		function showeventplaces ()
		{
			var eid    =   $('#eid').val();
			
			//alert(eid);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'showeventdtl'  : 1,
					'eid'   : eid,				
					
				},
				success : function(rd1)
				{										
					 $('#showplsdtl').html(rd1);
						// $('#epldtl').val(r.event_places_id);
						// $('#txtvenue').val(r.event_vennue);
						// $('#txtldmark').val(r.event_ld_mark);
						// $('#txtfromdate').val(r.event_date);
						// $('#txttodate').val(r.event_to_date);
						
						
						
						showdataeqp();
						showdatastf();
						showdatavend();
						showdatavendsel();										
				}				
			});	
					
		}
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
		function showUpdpaid()
		{	
			var uepid    =   $('#eid').val();			
			//alert(epldtl);
			
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showUpdtrn' : 1,
					'uepid'   : uepid,
					
				},
				success : function(r)
				{
					//$('#showeventpaidtrn').html(r7);					
					$('#txtpaystatus').val(r.payment_status);
					$('#txtpaidamt').val(r.client_paid_amt);
				}
				
			});
		}
		
		//showing the all vendor payment transaction for unique event
		function showvendorpaid()
		{	
			var evpeid    =   $('#eid').val();			
			//alert(epldtl);
			
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showvendpaidtrn' : 1,
					'evpeid'   : evpeid,
					
				},
				success : function(rv7)
				{
					$('#showvendpaidtrn').html(rv7);					
					
				}
				
			});
		}
		
		//displaying in event detail in tab panel
		$('#event_places_dtl').click(function(){
			var eid    =   $('#eid').val();
			
			//alert(eid);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'showeventdtl'  : 1,
					'eid'   : eid,				
					
				},
				success : function(r)
				{										
					 
						$('#epldtl').val(r.event_places_id);
						$('#txtvenue').val(r.event_vennue);
						$('#txtldmark').val(r.event_ld_mark);
						$('#txtfromdate').val(r.event_date);
						$('#txttodate').val(r.event_to_date);
						
						showdataeqp();
						showdatastf();
																
				}				
			});	
					
		});		
		//end of tab panel for places
		
		//attach the vendor on event and its insertion on event_vendor_dtl
		/*
		$('#savevend').click(function(){
			var txtveid    =   $('#txtveid').val();
			var txtvpeid    =   $('#txtvpeid').val();
			var showvendor    =   $('#showvendor').val();
			var txtvendchrg    =   $('#txtvendchrg').val();
			
			
			//alert(eid);
			$.ajax({
				url : 'includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'insVendDtl'  : 1,
					'txtveid'   : txtveid,
					'txtvpeid'   : txtvpeid,	
					'showvendor'   : showvendor,	
					'txtvendchrg'   : txtvendchrg,	
					
				},
				success : function(r)
				{										
					 
						$('#txtveid').val('');
						$('#txtvpeid').val('');
						//$('#showvendor').val('');
						$('#txtvendchrg').val('');
						
						
						// showdataeqp();
						// showdatastf();
																
				}				
			});	
					
		});*/
		
		//displaying in event detail in tab panel for eqpdtl and stf dtl
		//showdata equipment
		function showdataeqp()
		{	
			var epldtl    =   $('#epldtl').val();			
			//alert(epldtl);
			
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showdataeqp' : 1,
					'epldtl'   : epldtl,
					
				},
				success : function(r5)
				{
					$('#showeqp').html(r5);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		
		function showdatastf()
		{	
			var epldtl    =   $('#epldtl').val();
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showdatastf' : 1,
					'epldtl'   : epldtl,
					
				},
				success : function(r2)
				{
					$('#showstf').html(r2);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		function showdatavend()
		{		
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showdatavend' : 1,					
				},
				success : function(v1)
				{
					$('.showvendor').html(v1);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		function showdatavendsel()
			{	
				var evldtl    =   $('#epldtl').val();			
				//alert(epldtl);
				
				$.ajax({
					url : './includes/eventDetailPost.php',
					type : 'post',
					async : false,
					data : {
						'showvendselect' : 1,
						'evldtl'   : evldtl,
						
					},
					success : function(r8)
					{
						$('#showvend').html(r8);
						//initTable1();
						//$("th").removeClass("sorting_asc").addClass("sorting_asc");
						
					}
					
				});
			}
	