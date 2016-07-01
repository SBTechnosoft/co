	
	
	function showcmpdata()
		{		
			$.ajax({
				url : './includes/addCompanySettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showcmpdata').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showcmpdata();
	
		