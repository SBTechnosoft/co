function showdataIncome()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',
				async : false,
				data : {
					'showAcc' : 1
					
				},
				success : function(r)
				{
					$('#incper').html(r);					
				}
				
			});
		}
function showdataExpence()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',
				async : false,
				data : {
					'showAccExp' : 1
					
				},
				success : function(r)
				{
					$('#expper').html(r);					
				}
				
			});
		}
function showdataProfit()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',
				async : false,
				data : {
					'showAccProfit' : 1
					
				},
				success : function(r)
				{
					$('#profper').html(r);					
				}
				
			});
		}
		
		showdataIncome();
		showdataExpence();
		showdataProfit();