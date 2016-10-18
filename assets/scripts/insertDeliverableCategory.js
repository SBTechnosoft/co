
	$( function() {		
		//save data
		$('#addDelv').click(function(){
			var txtdelvnm    =   $('#txtdelvnm').val();
			var drptype     =   $('#drptype').val();
			var txtdelvPrice    =   $('#txtdelvPrice').val();
			if(txtdelvnm == "" )
			{
				alert('Plz Fill Resource Name ');
				return false;
			}
			if(txtdelvPrice == "" )
			{
				alert('Plz Fill Resource Price ');
				return false;
			}
			
			$.ajax({
				url : './includes/deliverableCategoryPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtdelvnm'   : txtdelvnm,
					'drptype'  : drptype,	
					'txtdelvPrice'  : txtdelvPrice,
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtdelvnm').val('');
						$('#drptype').val('');
						$('#txtdelvPrice').val('');
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						window.location.reload();	
						//showdata();
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
				url : 'includes/deliverableCategoryPost.php',
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
				url : './includes/deliverableCategoryPost.php',
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
		$('#filter_data').click(function()
		{			
			var delname    =   $('#delname').val();
			
			
			if(delname == '')
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/deliverableCategoryPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'delname'   : delname,
					
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					
					$('#showdata').html(v);
					
				}				
			});	
						
		});	