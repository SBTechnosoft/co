	function showClientPaidAmt()
		{		
			$.ajax({
				url : './includes/paidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClPaidAmt' : 1
					
				},
				success : function(r)
				{
					$('#showClientPaid').html(r);					
				}
				
			});
		}
		showClientPaidAmt();
		
	$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/paidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClPaidAmtType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$('#showClientPaid').html(r);					
				}
				
			});
	});
		
	
	$('#paidexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/paidExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//paid.csv';
					}
				}				
			});	
						
		});
	
		