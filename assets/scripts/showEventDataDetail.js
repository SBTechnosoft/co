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
					
					//window.location.reload();
					
				}
				
			});	
		
		
		
	});	
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
					alert("Delete Successfully");
					window.location.reload();
				}
				
			});
			
		});
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
					$('#txtenm').val(e.event_name);
					$('#txtfdate').val(e.from_date);
					$('#txtcnm').val(e.client_name);
					$('#txtcmpnm').val(e.client_cmp);
					$('#txtcharge1').val(e.total_amt);
					$('#txtpaid').val(e.client_paid_amt);
					//end of invoice data
					
					//call to display for evend places detail..
					showeventplaces();
					
					//call of function which show the popup data that get the paid amt detail from event payment trn table					
					showeventpaid();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					showvendorpaid();
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
			var id = $('#lasteid').val();
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
					$('#txtenm').val(e.event_name);
					$('#txtfdate').val(e.from_date);
					$('#txtcnm').val(e.client_name);
					$('#txtcmpnm').val(e.client_cmp);
					$('#txtcharge1').val(e.total_amt);
					$('#txtpaid').val(e.client_paid_amt);
					//end of invoice data
					
					//call to display for evend places detail..
					showeventplaces();
					
					//call of function which show the popup data that get the paid amt detail from event payment trn table					
					showeventpaid();
					$('#txtpeid').val(e.event_id);
					//call of the function to show vendor paid transaction
					showvendorpaid();
					showpdf();
					showfullpdf();
				}
				
			});		
		}
		
		last_event();
		
		
		
		//end of the default show data
		
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
	