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
function showEventCnt()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',				
				async : false,
				data : {
					'showEventCnt' : 1
					
				},
				success : function(r)
				{
					
					$('#newevents').html(r);
				}
				
			});
		}
function showUPCEventCnt()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',				
				async : false,
				data : {
					'showUPCEventCnt' : 1
					
				},
				success : function(r)
				{
					
					$('#upcevents').html(r);
				}
				
			});
		}
		showEventCnt();
		showUPCEventCnt();
		showdataIncome();
		showdataExpence();
		showdataProfit();
		
		function showDailyBuzz()
		{		
			$.ajax({
				url : './includes/dashboardPost.php',
				type : 'post',
				async : false,
				data : {
					'showDailyDtl' : 1
					
				},
				success : function(r)
				{
					$('#showDailyDetail').html(r);
					
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showDailyBuzz();
		