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
	
	function showClientUnpaidAmt()
		{		
			$.ajax({
				url : './includes/unpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClUnpaidAmt' : 1
					
				},
				success : function(r)
				{
					$('#showClientUnpaid').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showClientUnpaidAmt();
		
	$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/unpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClientUnpaidAmtType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$('#showClientUnpaid').html(r);					
				}
				
			});
	});
	
	$('#drpcmpnmdtl').on('change',function() 
		{
			var value = $(this).val();
			// alert(value);
			// return false;
			
			$.ajax({
					url : './includes/unpaidAccountingPost.php',
					type : 'post',
					async : false,
					data : {
						'showClientUnpaidAmtCmpType' : 1,
						'value': value,
						
					},
					success : function(r)
					{
						$('#showClientUnpaid').html(r);					
					}
					
				});
		});
	
	$('#unpaidexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/unpaidExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//unpaid.csv';
					}
				}				
			});	
						
		});	