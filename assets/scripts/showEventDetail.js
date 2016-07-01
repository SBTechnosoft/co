	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#event_detail').html(r);
					
					
				}
				
			});
		}
		showdata();
	
		       
		    
	
		
	
		