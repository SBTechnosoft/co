
	$( function() {		
		//save data
		$('#addinset').click(function(){
			var drpcomp    =   $('#drpcomp').val();
			var txtlabel    =   $('#txtlabel').val();
			var prefix     =  $("input[name='prefix']:checked"). val();	
			var start_at     =   $('#start_at').val();
			
			
			
			$.ajax({
				url : './includes/invoice_SettingPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'drpcomp'   : drpcomp,
					'txtlabel'   : txtlabel,
					'prefix'  : prefix,	
					'start_at'  : start_at,
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#drpcomp').val('');
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
function showCompany()
		{		
			$.ajax({
				url : './includes/invoice_SettingPost.php',
				type : 'post',
				async : false,
				data : {
					'showCompany' : 1,
					
				},
				success : function(r)
				{
					$('#drpcomp').html(r);
					
				}
				
			});
		}
		showCompany();