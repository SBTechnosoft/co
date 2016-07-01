
	$( function() {		
		//save data
		$('#addcmpinfo').click(function(){
			var txtcmpnm    =   $('#txtcmpnm').val();
			var txtpass     =   $('#txtpass').val();
			var txtcmpadd     =   $('#txtcmpadd').val();	
			var txtcmpcont    =   $('#txtcmpcont').val();
			var txtpur     =   $('#txtpur').val();
			var txtrmrk    =   $('#txtrmrk').val();
			
			$.ajax({
				url : './includes/companyInfoSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtcmpnm'   : txtcmpnm,
					'txtpass'   : txtpass,
					'txtcmpadd'  : txtcmpadd,	
					'txtcmpcont'   : txtcmpcont,
					'txtpur'  : txtpur,
					'txtrmrk'   : txtrmrk,
					
				},
				success : function(re)
				{
					// if(re == 0)
					 // {
						//alert ("Inserted Data Successfully");
						
						$('#txtcmpnm').val('');
						$('#txtpass').val('');
						$('#txtcmpadd').val('');
						$('#txtcmpcont').val('');
						$('#txtpur').val('');
						$('#txtrmrk').val('');
						
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Updated!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');	
						showdetail();
												
					// }					
				}				
			});	
			//showdata();			
		});		
	});	
	showdetail();
	function showdetail()
	{		
			$.ajax({
				url : './includes/companyInfoSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'showdetail'  : 1,				
				},
				success : function(re)
				{
					// if(re == 0)
					 // {
						//alert ("Inserted Data Successfully");
						//alert(data);
						$('#txtcmpnm').val(re.cmp_name);
						$('#txtpass').val(re.password);
						$('#txtcmpadd').val(re.address);
						$('#txtcmpcont').val(re.mobile);
						$('#txtpur').val(re.purchase_from);
						$('#txtrmrk').val(re.remark);
						
						
						// $("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						// $('#msgs').addClass('fadeInDown').fadeIn('slow');
						// $('#msgs').addClass('fadeInDown').fadeOut('slow');						
												
					// }					
				}				
			});	
	}	
			