
	$( function() {		
		//save data
		$('#addprod').click(function(){
			var txtprdnm    =   $('#txtprdnm').val();
			var txtprdid     =   $('#txtprdid').val();
			var txtitmcd    =   $('#txtitmcd').val();
			var txtdispnm     =   $('#txtdispnm').val();
			var txtcgrp    =   $('#txtcgrp').val();
			var drpprdctg     =   $('#drpprdctg').val();
			var txtrprice    =   $('#txtrprice').val();
			var txtpprice     =   $('#txtpprice').val();
			var drptype    =   $('#drptype').val();
						
			if(txtprdnm == "" )
			{
				alert('Plz Fill Resource Name ');
				return false;
			}
			
			
			$.ajax({
				url : './includes/productAddPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtprdnm'   : txtprdnm,
					'txtprdid'  : txtprdid,
					'txtitmcd'   : txtitmcd,
					'txtdispnm'  : txtdispnm,	
					'txtcgrp'   : txtcgrp,
					'drpprdctg'  : drpprdctg,	
					'txtrprice'   : txtrprice,					
					'txtpprice'   : txtpprice,
					'drptype'  : drptype,	
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtprdnm').val('');
						$('#txtprdid').val('');
						$('#txtitmcd').val('');
						$('#txtdispnm').val('');						
						$('#txtcgrp').val('');
						$('#txtrprice').val('');
						$('#txtpprice').val('');
						$('#drptype').val('');
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
												
					 }					
				}				
			});	
			//showdata();			
		});		
	});	


		
	function showCtg()
		{		
			$.ajax({
				url : './includes/productAddPost.php',
				type : 'post',
				async : false,
				data : {
					'showCtg' : 1
					
				},
				success : function(r1)
				{
					$('#drpprdctg').html(r1);					
					
				}
				
			});
		}
		showCtg();
			