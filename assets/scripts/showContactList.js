
	function showdata()
		{		
			$.ajax({
				url : './includes/contactListPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showContact').html(r);
									}
				
			});
		}
		showdata();
	$('#search_contact').click(function()
		{			
			var client_name    =   $('#client_name').val();
			var company_name    =   $('#company_name').val();
			var mobile_no    =   $('#mobile_no').val();			
									
			$.ajax({
				url : 'includes/contactListPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'client_name'   : client_name,
					'company_name' : company_name,
					'mobile_no'   : mobile_no,					
				},
				success : function(v)
				{	
						$("#sample_1").dataTable().fnDestroy();						
					$('#showContact').html(v);
					$('#sample_1').dataTable( {
									paging: true,
									searching: true
						} );
				}				
			});	
						
		});