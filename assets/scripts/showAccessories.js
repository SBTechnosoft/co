function showdata()
		{		
			$.ajax({
				url : './includes/accessoriesEquipmentsPost.php',
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
				url : './includes/accessoriesEquipmentsPost.php',
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
	$('#filter_acces').click(function()
		{			
			var txtacces    =   $('#txtacces').val();
			var txtcatid    =   $('#txtcatid').val();
						
			if(txtacces == '' && txtcatid == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
						
			$.ajax({
				url : 'includes/accessoriesEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'txtacces'   : txtacces,
					'txtcatid' : txtcatid,
										
				},
				success : function(v)
				{	
											
					$('#showAcs').html(v);
					
				}				
			});	
						
		});