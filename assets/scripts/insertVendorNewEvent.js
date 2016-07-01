
	$( function() {		
		//save data
		$('#addvend').click(function(){
			var txtvendnm     =   $('#txtvendnm').val();
			var drp_cat_vend  =   $('#drp_cat_vend').val();
			var txtvendcmp    =   $('#txtvendcmp').val();
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
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtvendnm').val('');
						$('#txtvendcmp').val('');
						$('#drp_cat_vend').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						//window.location.reload();	
						shownewVend();
						alert('inserted successful !!!');
						$('#popup_ins_vendor').fadeOut();
						$('#popup_ins_vendor_data').fadeOut();
					 }
					
				}				
			});	
			//showdata();			
		});		
	});		
			