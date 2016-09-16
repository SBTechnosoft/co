$( function() {		
		//save data
		$('#addinset').click(function(){
			var txtlabel    =   $('#txtlabel').val();			
			var prefix     =  $("input[name='prefix']:checked"). val();		
			var start_at     =   $('#start_at').val();
			
			if(txtlabel == "" || start_at == "" )
			{
				alert('Plz Fill the Accessory name and category');
				return false;
			}
			
			$.ajax({
				url : './includes/invoice_SettingPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtlabel'   : txtlabel,
					'prefix'  : prefix,	
					'start_at'  : start_at,
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtlabel').val('');
						$('#prefix').val('');
						$('#start_at').val('');
											
						window.location.reload();						
					 }					
				}				
			});	
			//showdata();			
		});		
	});	