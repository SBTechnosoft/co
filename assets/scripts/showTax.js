function showtax()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showtax' : 1
					
				},
				success : function(r)
				{
					$('#txtstax').val(r.service_tax);	
					
					
				}
				
			});
		}
		
		showtax();