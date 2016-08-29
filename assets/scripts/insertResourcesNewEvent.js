$( function() {		
		//save data
		$('#addResource').click(function(){
			var txtresnm    =   $('#txtresnm').val();
			var txtresprice     =   $('#txtresprice').val();
			
			if(txtresnm == "" )
			{
				alert('Plz Fill Resource Name ');
				return false;
			}
			if(txtresprice == "" )
			{
				alert('Plz Fill Resource Price ');
				return false;
			}
			
			$.ajax({
				url : './includes/resourcesCategoryPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtresnm'   : txtresnm,
					'txtresprice'  : txtresprice,															
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtresnm').val('');
						$('#txtresprice').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Inserted!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');
						shownewRes();
						$('#popup_ins_resource').fadeOut();
						$('#popup_ins_resource_data').fadeOut();
						
					 }					
				}				
			});	
			//showdata();			
		});		
	});	