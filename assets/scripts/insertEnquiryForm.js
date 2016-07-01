
	$( function() {		
		//save data
		$('#btn_ins_ok').click(function(){
			var txtclnm        =   $('#txtclnm').val();
			var txtcladd       =   $('#txtcladd').val();
			var txtclmail      =   $('#txtclmail').val();
			var txtclmob       =   $('#txtclmob').val();
			var txtclenqdate   =   $('#txtclenqdate').val();
			var txtenqtime     =   $('#txtenqtime').val();
			var txt_type_event =   $('#txt_type_event').val();
			var txtfrom_dt     =   $('#txtfrom_dt').val();
			var txt_to_dt      =   $('#txt_to_dt').val();
			var txt_event_add  =   $('#txt_event_add').val();
			var drp_remainder  =   $('#drp_remainder').val();
			
			$.ajax({
				url : './includes/enquiryFormPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'    : 1,
					'txtclnm'       : txtclnm,
					'txtcladd'      : txtcladd,	
					'txtclmail'     : txtclmail,
					'txtclmob'      : txtclmob,
					'txtclenqdate'  : txtclenqdate,
					'txtenqtime'    : txtenqtime,
					'txt_type_event': txt_type_event,
					'txtfrom_dt'    : txtfrom_dt,
					'txt_to_dt'     : txt_to_dt,
					'txt_event_add' : txt_event_add,
					'drp_remainder' : drp_remainder,
					
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtclnm').val('');
						$('#txtcladd').val('');
						$('#txtclmail').val('');
						$('#txtclmob').val('');
						$('#txtclenqdate').val('');
						$('#txtenqtime').val('');
						$('#txt_type_event').val('');
						$('#txtfrom_dt').val('');
						$('#txt_to_dt').val('');
						$('#txt_event_add').val('');
						$('#drp_remainder').val('');
						
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						window.location.reload();						
					}					
				}				
			});	
					
		});		
	});		
			