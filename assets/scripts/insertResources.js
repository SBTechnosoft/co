
	$( function() {		
		//save data
		$('#addresc').click(function(){
			var txtresnm    =   $('#txtresnm').val();
			var txtresprice     =   $('#txtresprice').val();
			
			if(txtresnm == "" )
			{
				alert('Plz Fill Resource Name ');
				return false;
			}
			if(txtresprice == "" )
			{
				alert('Plz Fill Resource Price ');
				return false;
			}
			
			$.ajax({
				url : './includes/resourcesCategoryPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtresnm'   : txtresnm,
					'txtresprice'  : txtresprice,															
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtresnm').val('');
						$('#txtresprice').val('');
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
				url : 'includes/resourcesCategoryPost.php',
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

	function showdata()
		{		
			$.ajax({
				url : './includes/resourcesCategoryPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showdata').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();	
			