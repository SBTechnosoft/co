	
	
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