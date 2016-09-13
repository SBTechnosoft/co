function showdata()
		{		
			$.ajax({
				url : './includes/invoice_SettingPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showINS').html(r);
										
				}
				
			});
		}
		showdata();