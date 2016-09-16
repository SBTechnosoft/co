
	$( function() {		
		//save data
		$('#addClient').click(function(){
			var clientName    =   $('#clientName').val();
			var companyName     =   $('#companyName').val();
			var mobileNo     =   $('#mobileNo').val();
			var workNo     =   $('#workNo').val();
			var emailId     =   $('#emailId').val();
			var address     =   $('#address').val();
			
			
			$.ajax({
				url : './includes/contactListPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'clientName'   : clientName,
					'companyName'  : companyName,	
					'mobileNo'   : mobileNo,
					'workNo'  : workNo,	
					'emailId'   : emailId,
					'address'  : address,																				
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#clientName').val('');
						$('#companyName').val('');
						$('#mobileNo').val('');
						$('#workNo').val('');
						$('#emailId').val('');
						$('#address').val('');
											
						window.location.reload();						
					 }					
				}				
			});	
			//showdata();			
		});		
	});	
