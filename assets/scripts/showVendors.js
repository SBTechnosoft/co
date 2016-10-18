	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/allVendorsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showvendors').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
	
		$('#filter_data').click(function()
		{			
			var vendname    =   $('#vendname').val();
			
			
			if(vendname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/allVendorsPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'vendname'   : vendname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#showvendors').html(v);
					
				}				
			});	
						
		});	
		