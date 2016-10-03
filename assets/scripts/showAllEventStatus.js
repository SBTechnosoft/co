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

$('#drpcmpnmdtl').on('change',function() 
	{
		var value = $(this).val();
		// alert(value);
		// return false;
		
		$.ajax({
				url : './includes/allEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$('#all_event').html(r);					
				}
				
			});
	});
$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/allEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'showDetailType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$('#all_event').html(r);					
				}
				
			});
	});
function showdata()
		{		
			$.ajax({
				url : './includes/allEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#all_event').html(r);
					
					
				}
				
			});
		}
		showdata();
	$('#alleventexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/alleventExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//alleventexcel.csv';
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
			
			if(txtename == '' && txtclname == '' && txtfpno == '' && txtbillno == '' && txtfromdt == '' && txttodt == '' && drpcmpnm == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/allEventStatusPost.php',
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
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#all_event').html(v);
					
				}				
			});	
						
		});