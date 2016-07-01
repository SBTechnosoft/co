
	$( function() {		
		//save data
		$('#addcatg').click(function(){
			var txtcatgnm    =   $('#txtcatgnm').val();
			var txtcatgdes     =   $('#txtcatgdes').val();
			
			if(txtcatgnm == "" )
			{
				alert('Plz Fill Category Name ');
				return false;
			}
			
			$.ajax({
				url : './includes/categoryEquipmentsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtcatgnm'   : txtcatgnm,
					'txtcatgdes'  : txtcatgdes,															
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtcatgnm').val('');
						$('#txtcatgdes').val('');
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
				url : 'includes/categoryEquipmentsPost.php',
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
			