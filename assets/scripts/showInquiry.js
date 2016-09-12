$('#enquiryexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/enquiryExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//enquiryexcel.csv';
					}
				}				
			});	
						
		});

	function showdata()
		{		
			$.ajax({
				url : './includes/enquiryFormPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showInq').html(r);										
				}
				
			});
		}
		showdata();
		
	//edit(update the enquiry as order)
		$('body').delegate('.editenq','click',function(){
			//alert('hello Divyesh');
			var id = $(this).data('id');
			// alert(id);
			// return false;
			
			$.ajax({
				url : 'includes/enquiryFormPost.php',
				type : 'POST',
				async : false,
				data : {
					'edit'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					if(e==12)
					{
					alert("Ordered Successfully!!!");
					}
					else
					{
						alert("ERROR!!!")
					}
					window.location.reload();
				}
				
			});		
		});		
		$('body').delegate('.delete','click',function(){
		
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/enquiryFormPost.php',
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
		
		
		//edit detail with data on evd .
		// $('body').delegate('.editenq','click',function(){
			
			// var id = $(this).data('id');
			
			
			// $.ajax({
				// url : 'includes/enquiryFormPost.php',
				// type : 'POST',
				// async : false,
				// data : {
					// 'edit'  : 1,
					// 'id' 	: id
										
				// },
				// success : function(e)
				// {
					// if(e==12)
					// {
					// alert("Ordered Successfully!!!");
					// }
					// else
					// {
						// alert("ERROR!!!")
					// }
					// window.location.reload();
				// }
				
			// });		
		// });		
		//end