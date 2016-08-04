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
function showVendorPaidAmt()
		{		
			$.ajax({
				url : './includes/vendorPaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showVdPaidAmt' : 1					
				},
				success : function(r)
				{
					$('#show_paid_trn').html(r);					
				}				
			});
		}
		showVendorPaidAmt();
		
	$('#vpaidexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/vpaidExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//vpaid.csv';
					}
				}				
			});	
						
		});