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
		//end
		
		
		//edit detail with data on evd .
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
		//end