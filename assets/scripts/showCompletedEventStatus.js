//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/eventDetailPost.php',
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
	$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/completedEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'showDetailType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$("#sample_1").dataTable().fnDestroy();
					$('#completed_event').html(r);	
					$('#sample_1').dataTable( {
									paging: true,
									searching: true
						} );
				}
				
			});
	});
function showdata()
		{		
			$.ajax({
				url : './includes/completedEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#completed_event').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
	$('#completedexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/completedExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//completedexcel.csv';
					}
				}				
			});	
						
		});
	$('#filter_data').click(function()
		{			
			var txtename    =   $('#txtename').val();
			var txtclname    =   $('#txtclname').val();
			var txtInv    =   $('#txtinv').val();
			var txtfromdt    =   $('#txtfromdt').val();
			var txttodt    =   $('#txttodt').val();
			var drpcmpnm  = $('#drpcmpnm').val();
			
			if(txtename == '' && txtclname == '' && txtInv == '' && txtfromdt == '' && txttodt == '' && drpcmpnm == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/completedEventStatusPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'txtename'   : txtename,
					'txtclname' : txtclname,
					'txtInv' :txtInv,
					'txtfromdt' : txtfromdt,
					'txttodt' :txttodt,
					'drpcmpnm' : drpcmpnm,
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					 $("#sample_1").dataTable().fnDestroy();
					$('#completed_event').html(v);
					$('#sample_1').dataTable( {
									paging: true,
									searching: true
						} );
				}				
			});	
						
		});