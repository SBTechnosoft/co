
	$( function() {		
		//save data
		$('#addprd').click(function(){
			var txtprdnm    =   $('#txtprdnm').val();
			var txtcatid     =   $('#txtcatid').val();
			
			if(txtprdnm == "" )
			{
				alert('Plz Fill Resource Name ');
				return false;
			}
			
			
			$.ajax({
				url : './includes/productCategoryPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtprdnm'   : txtprdnm,
					'txtcatid'  : txtcatid,															
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtprdnm').val('');
						$('#txtcatid').val('');
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
				url : 'includes/productCategoryPost.php',
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
				url : './includes/productCategoryPost.php',
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
		
	function showCtg()
		{		
			$.ajax({
				url : './includes/productCategoryPost.php',
				type : 'post',
				async : false,
				data : {
					'showCtg' : 1
					
				},
				success : function(r1)
				{
					$('#txtcatid').html(r1);					
					
				}
				
			});
		}
		showCtg();
			