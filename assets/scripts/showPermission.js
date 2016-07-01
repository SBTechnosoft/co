	
	
	function showPermission()
		{	
			
			$.ajax({
				url : './includes/addEditStaffPost.php',
				type : 'post',
				async : false,
				data : {
					'showPer' : 1
					
				},
				success : function(r)
				{
					//$('#cntstat').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					//alert(r);
				}
				
			});
		}
		showPermission();
	
		