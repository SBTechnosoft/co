function showdataCmp()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showCmp' : 1
					
				},
				success : function(r1)
				{
					$('#drpcmpnm').html(r1);					
					
				}
				
			});
		}
		showdataCmp();
function showdataCmpDtl()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showCmpDtl' : 1
					
				},
				success : function(r1)
				{
					$('#drpcmpnmdtl').html(r1);					
					
				}
				
			});
		}
		showdataCmpDtl();