
	$( function() 
	{		
		//save data
		$('#addcmp').click(function(){
			var txtcmpnm    =   $('#txtcmpnm').val();
			var txtcmprnno     =   $('#txtcmprnno').val();
			var txtbnrnm     =   $('#txtbnrnm').val();		
			$.ajax({
				url : './includes/addCompanySettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtcmpnm'   : txtcmpnm,
					'txtcmprnno'  : txtcmprnno,	
					'txtbnrnm'  : txtbnrnm,
				},
				success : function(re)
				{
					if(re == 1)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtcmpnm').val('');
						$('#txtcmprnno').val('');
						$('#txtbnrnm').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						window.location.reload();						
					 }					
				}				
			});	
			//showdata();			
		});		
	});	


//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/addCompanySettingsPost.php',
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
$('body').delegate('.default','click',function(){
			var id = $(this).data('id');
			var value=1;
			$.ajax({
				url : 'includes/addCompanySettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'default'  : 1,
					'id' 	: id,
					'value':value					
				},
				success : function(d)
				{
					alert("Default Successfully");
					//window.location.reload();
				}
				
			});
			
		});			