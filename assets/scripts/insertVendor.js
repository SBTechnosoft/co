
	$( function() {		
		//save data
		$('#addvend').click(function(){
			var txtvendnm     =   $('#txtvendnm').val();
			var drp_cat_vend  =   $('#drp_cat_vend').val();
			var txtvendcmp    =   $('#txtvendcmp').val();
			var txtvendemail  =   $('#txtvendemail').val();
			var txtContact  =   $('#txtContact').val();
			if(txtvendnm == "" )
			{
				alert('Plz Fill Vendor Name ');
				return false;
			}
			else if(drp_cat_vend == "" )
			{
				alert('Plz Select Class From Drop Down ');
				return false;
			}
			
			$.ajax({
				url : './includes/allVendorsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtvendnm'   : txtvendnm,
					'txtvendcmp'  : txtvendcmp,
					'drp_cat_vend'  : drp_cat_vend,
					'txtvendemail'  : txtvendemail,	
					'txtContact'  : txtContact,	
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtvendnm').val('');
						$('#txtvendcmp').val('');
						$('#drp_cat_vend').val('');
						$('#txtvendemail').val('');
						$('#txtContact').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						window.location.reload();	
						//shownewVend();
						//alert('inserted successful !!!');
					 }
					
				}				
			});	
			//showdata();			
		});		
	});	

//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/allVendorsPost.php',
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
	$( function() {	
	$('#editvend').hide();
			$('body').delegate('.edit','click',function(){
				$('#addvend').hide();
				$('#add_form').show();
				$('#editvend').show();
				var id = $(this).data('id');
				
			$.ajax({
				url : 'includes/allVendorsPost.php',
				type : 'POST',
				async : false,
				data : {
					'editshow'  : 1,
					'id' 	: id
										
				},
				success : function(d)
				{
					
					$('#txtvendnm').val(d[0].vendor_name);
					$('#txtvendcmp').val(d[0].vendor_cmp);
					$('#drp_cat_vend').val(d[0].cat_id);
					$('#txtvendemail').val(d[0].vendor_email);
					$('#txtContact').val(d[0].vendor_contact);
					$('#txthidden').val(d[0].vend_id);
				}
				
				});
			
			});
			
			$('#editvend').click(function(){
				var txtid  =   $('#txthidden').val();
				
			var txtvendnm     =   $('#txtvendnm').val();
			
			var drp_cat_vend  =   $('#drp_cat_vend').val();
			var txtvendcmp    =   $('#txtvendcmp').val();
			var txtvendemail  =   $('#txtvendemail').val();
			var txtContact  =   $('#txtContact').val();
			if(txtvendnm == "" )
			{
				alert('Plz Fill Vendor Name ');
				return false;
			}
			else if(drp_cat_vend == "" )
			{
				alert('Plz Select Class From Drop Down ');
				return false;
			}
			
			$.ajax({
				url : './includes/allVendorsPost.php',
				type : 'POST',
				async : false,
				data : {
					'editrecord'  : 1,
					'txtid'  :txtid,
					'txtvendnm'   : txtvendnm,
					'txtvendcmp'  : txtvendcmp,
					'drp_cat_vend'  : drp_cat_vend,
					'txtvendemail'  : txtvendemail,	
					'txtContact'  : txtContact,	
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtvendnm').val('');
						$('#txtvendcmp').val('');
						$('#drp_cat_vend').val('');
						$('#txtvendemail').val('');
						$('#txtContact').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Update Successfully!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						window.location.reload();	
						//shownewVend();
						//alert('inserted successful !!!');
					 }
					
				}				
			});	
			//showdata();			
		});		
			
	});