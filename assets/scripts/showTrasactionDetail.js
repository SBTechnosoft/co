function showTrnDtl()
		{		
			$.ajax({
				url : './includes/transactionDetailPost.php',
				type : 'post',
				async : false,
				data : {
					'showTrnDtl' : 1
					
				},
				success : function(r)
				{
					$('#showTrnDetail').html(r);
					
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showTrnDtl();