function showdataEqp()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showEqp' : 1
					
				},
				success : function(r)
				{
					$('.checkboxesEqp').html(r);	
					
				}
				
			});
		}
		showdataEqp();
		
	