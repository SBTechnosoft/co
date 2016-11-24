	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/categoryEquipmentsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showdata').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
	
		$('#filter_data').click(function()
		{			
			var cat    =   $('#cat').val();
			
			
			if(cat == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/categoryEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'cat'   : cat,
					
					
				},
				success : function(v)
				{	
					$("#sample_2").dataTable().fnDestroy();
					$('#showdata').html(v);
					$('#sample_2').dataTable( {
									paging: true,
									searching: true
						} );
				}				
			});	
						
		});