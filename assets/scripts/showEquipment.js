	
	
	function showdata()
		{		
			$.ajax({
				url : './includes/allEquipmentsPost.php',
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
	
	//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/addEditEquipmentsPost.php',
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
$('#filter_data').click(function()
		{			
			var enqname    =   $('#enqname').val();
			
			
			if(enqname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/allEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'enqname'   : enqname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					$("#sample_2").dataTable().fnDestroy();
					$('#showdata').html(v);
					$('#sample_2').dataTable( {
									paging: true,
									searching: true
						} );
				}				
			});	
						
		});