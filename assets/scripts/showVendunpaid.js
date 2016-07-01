function showVendorUnpaidAmt()
		{		
			$.ajax({
				url : './includes/vendorUnpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showVdUnpaidAmt' : 1					
				},
				success : function(r)
				{
					$('#show_unpaid_trn').html(r);					
				}				
			});
		}
		showVendorUnpaidAmt();
		
	$('#vunpaidexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/vunpaidExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//vunpaid.csv';
					}
				}				
			});	
						
		});