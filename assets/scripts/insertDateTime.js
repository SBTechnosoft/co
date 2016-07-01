	$( function() {		
		//save data
		$('#add_datetime').click(function(){
			
			
			var insert_date    =   $('#insert_date').val();
			alert(insert_date);

			$.ajax({
				url : './includes/datetimePost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'insert_date'   : insert_date,
					},
				success : function(re)
				{
					// if(re == 0)
					 // {
						alert ("Inserted Data Successfully");
						$('#insert_date').val('');
				}					
								
			});	
					
		});		
	});	