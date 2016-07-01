
	$( function() {		
		//save data
		$('#addAcs').click(function(){
			var txtcatid    =   $('#txtcatid').val();
			var txtacsnm     =   $('#txtacsnm').val();	
			var txtacsremk     =   $('#txtacsremk').val();
			
			if(txtcatid == "" || txtacsnm == "" )
			{
				alert('Plz Fill the Accessory name and category');
				return false;
			}
			
			$.ajax({
				url : './includes/accessoriesEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtcatid'   : txtcatid,
					'txtacsnm'  : txtacsnm,	
					'txtacsremk'  : txtacsremk,
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtcatid').val('');
						$('#txtacsnm').val('');
						$('#txtacsremk').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Inserted!!");
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
				url : 'includes/accessoriesEquipmentsPost.php',
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