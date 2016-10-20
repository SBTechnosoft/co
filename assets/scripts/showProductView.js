//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/productViewPost.php',
				type : 'POST',
				async : false,
				data : {
					'delete'  : 1,
					'id' 	: id
										
				},
				success : function(d)
				{
					alert("Delete Successfully");
					window.location.reload();
				}
				
			});
			
		});
//end 

	function showdata()
		{		
			$.ajax({
				url : './includes/productViewPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showdata').html(r);
									
				}
				
			});
		}
		showdata();	
	$('#filter_data').click(function()
		{			
			var prodname    =   $('#prodname').val();
			
			
			if(prodname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/productViewPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'prodname'   : prodname,
					
					
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