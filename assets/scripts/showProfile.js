function showStaff()
		{		
			$.ajax({
				url : './includes/myProfilePost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showProfile').html(r);
					
					
				}
				
			});
		}
		showStaff();