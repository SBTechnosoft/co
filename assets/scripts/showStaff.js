	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/addEditStaffPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showstaff').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
	$('#filter_data').click(function()
		{			
			var sname    =   $('#sname').val();
			
			
			if(sname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/addEditStaffPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'sname'   : sname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#showstaff').html(v);
					
				}				
			});	
						
		});
	