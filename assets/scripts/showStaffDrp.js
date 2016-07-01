function showdataStf()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showStf' : 1
					
				},
				success : function(r1)
				{
					$('.checkboxesStf').html(r1);					
					
				}
				
			});
		}
		showdataStf();