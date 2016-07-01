
function showCatInEqp()
		{		
			$.ajax({
				url : './includes/addEditEquipmentsPost.php',
				type : 'post',
				async : false,
				data : {
					'showCategoryEqp' : 1,
					
				},
				success : function(r)
				{
					$('#txtcateqp').html(r);
					
				}
				
			});
		}
		showCatInEqp();

	$( function() {		
		//save data
		$('#addEquip').click(function(){
			var txteqpnm    =   $('#txteqpnm').val();
			var txtserno     =   $('#txtserno').val();
			var txtmodel    =   $('#txtmodel').val();
			var txtcateqp     =   $('#txtcateqp').val();
			var txtpurdate    =   $('#txtpurdate').val();
			var txtpurfrm     =   $('#txtpurfrm').val();
			var txtremk    =   $('#txtremk').val();
			var txtprice    =   $('#txtprice').val();
			var drptype = $('#drptype').val();
			
			if(txteqpnm == "" )
			{
				alert('Plz Fill Equpment Name ');
				return false;
			}
			if(txtcateqp == "" )
			{
				alert('Plz Fill Equpment category ');
				return false;
			}
			if(txtprice == "" )
			{
				alert('Plz Fill Price');
				return false;
			}
			if(drptype == "" )
			{
				alert('Plz Select Type');
				return false;
			}
			if(!txtprice.match(/^\d+/))
			{
				alert("Please Only Numeric characters For Price! (Allowed input:0-9)")
				return false;
			}
			
			$.ajax({
				url : './includes/addEditEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txteqpnm'   : txteqpnm,
					'txtserno'  : txtserno,	
					'txtmodel'   : txtmodel,
					'txtcateqp'  : txtcateqp,
					'txtpurdate'   : txtpurdate,
					'txtpurfrm'  : txtpurfrm,
					'txtremk'   : txtremk,
					'txtprice'  : txtprice,
					'drptype'  : drptype,
					
				},
				success : function(re)
				{
					// if(re == 0)
					 // {
						//alert ("Inserted Data Successfully");
						$('#txteqpnm').val('');
						$('#txtserno').val('');
						$('#txtmodel').val('');
						$('#txtcateqp').val('');
						$('#txtpurdate').val('');
						$('#txtpurfrm').val('');
						$('#txtremk').val('');
						$('#txtprice').val('');
						$('#drptype').val('');
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						//window.location.reload();						
					 //}					
				}				
			});	
			//showdata();			
		});		
	});


	
			