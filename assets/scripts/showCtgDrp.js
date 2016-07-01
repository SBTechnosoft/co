function showdataCtg()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showCtg' : 1
					
				},
				success : function(r1)
				{
					$('#drpctgnm').html(r1);					
					
				}
				
			});
		}
		showdataCtg();
		
	$("#drpctgnm").on("change", function()
	{
		var ctgid    =   $('#drpctgnm').val();
		//alert( ctgid );
		$.ajax({
			url : './includes/newEventsPost.php',
			type : 'post',
			async : false,
			data : {
				'showsubctg' : 1,
				'ctgid' : ctgid,
				
			},
			success : function(r)
			{
				$('#drpsubctgnm').html(r);
			}
			
		});
	});