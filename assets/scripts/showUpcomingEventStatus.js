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

function showdata()
		{	
			var txtupdays = $('#txtupdays').val();
			$.ajax({
				url : './includes/upcomingEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1,
					'txtupdays' : txtupdays,
					
				},
				success : function(r)
				{
					$('#upcoming_event').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
function showdays()
		{		
			$.ajax({
				url : './includes/upcomingEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'showdays' : 1
					
				},
				success : function(r)
				{
					$('#upc_days').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					showdata();
				}
				
			});
		}
		showdays();
		
		
	$('#upcomingexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/upcomingExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//upcomingexcel.csv';
					}
				}				
			});	
						
		});
	$('#filter_data').click(function()
		{			
			var txtename    =   $('#txtename').val();
			var txtclname    =   $('#txtclname').val();
			var txtfpno    =   $('#txtfpno').val();
			var txtbillno    =   $('#txtbillno').val();
			var txtfromdt    =   $('#txtfromdt').val();
			var txttodt    =   $('#txttodt').val();
			var drpcmpnm  = $('#drpcmpnm').val();
			var txtupdays = $('#txtupdays').val();
			
			if(txtename == '' && txtclname == '' && txtfpno == '' && txtbillno == '' && txtfromdt == '' && txttodt == '' && drpcmpnm == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : './includes/upcomingEventStatusPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'txtename'   : txtename,
					'txtclname' : txtclname,
					'txtfpno' :txtfpno,
					'txtbillno' : txtbillno,
					'txtfromdt' : txtfromdt,
					'txttodt' :txttodt,
					'drpcmpnm' : drpcmpnm,
					'txtupdays' : txtupdays,
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#upcoming_event').html(v);
					
				}				
			});	
						
		});
		
		$('.event_type').on('change',function() 
		{
			
		var value = $(this).val();
		
		$.ajax({
			
				url : './includes/upcomingEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'showDetailType' : 1,
					'txtupdays' : txtupdays,
					'value': value
					
					
				},
				success : function(r)
				{
					$('#upcoming_event').html(r);					
				}
				
			});
	});