function showdata()
		{		
			$.ajax({
				url : './includes/categorySubPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showAcs').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
	function showCtgAcc()
		{		
			$.ajax({
				url : './includes/categorySubPost.php',
				type : 'post',
				async : false,
				data : {
					'showCtg' : 1
					
				},
				success : function(r1)
				{
					$('#txtcatid').html(r1);					
					
				}
				
			});
		}
		showCtgAcc();
		$('#filter_data').click(function()
		{			
			var subcatname    =   $('#subcatname').val();
			
			
			if(subcatname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/categorySubPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'subcatname'   : subcatname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#showAcs').html(v);
					
				}				
			});	
						
		});	
		