	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/categoryNewPost.php',
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
			var catname    =   $('#catname').val();
			
			
			if(catname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/categoryNewPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'catname'   : catname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#showdata').html(v);
					
				}				
			});	
						
		});	
	