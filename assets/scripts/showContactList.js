	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/contactListPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showContact').html(r);
									}
				
			});
		}
		showdata();
	
		