
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

	
	$( function() {		
		//save data
		$('#updprod').click(function(){
			var txtprdnm    =   $('#txtprdnm').val();
			var txtprdid     =   $('#txtprdid').val();
			var txtitmcd    =   $('#txtitmcd').val();
			var txtdispnm     =   $('#txtdispnm').val();
			var txtcgrp    =   $('#txtcgrp').val();
			var drpprdctg     =   $('#drpprdctg').val();
			var txtrprice    =   $('#txtrprice').val();
			var txtpprice     =   $('#txtpprice').val();
			var drptype    =   $('#drptype').val();
			var prod_id = $('#prod_id').val();			
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
					'updprod'  : 1,
					'txtprdnm'   : txtprdnm,
					'txtprdid'  : txtprdid,
					'txtitmcd'   : txtitmcd,
					'txtdispnm'  : txtdispnm,	
					'txtcgrp'   : txtcgrp,
					'drpprdctg'  : drpprdctg,	
					'txtrprice'   : txtrprice,					
					'txtpprice'   : txtpprice,
					'drptype'  : drptype,	
					'prod_id'     : prod_id,
				},
				success : function(re)
				{
					
						//alert ("Inserted Data Successfully");
						$('#prod_id').val('');
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
												
					window.location.href = "index.php?url=PVIW";				
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
		function showproddetail()
		{
			var prod_id =  $('#prod_id').val();
			
			 
			
			$.ajax({
					url : 'includes/productViewPost.php',
					type : 'POST',
					async : false,
					data : {
						'prodEdit'  : 1,
						'prod_id' 	: prod_id,
						
					},
					success : function(v)
					{
					
						$('#prod_id').val(v.prod_id);
						$('#txtprdnm').val(v.prod_nm);
						$('#txtprdid').val(v.prd_id);						
						$('#txtitmcd').val(v.item_code);
						$('#txtdispnm').val(v.disp_nm);						
						
						$('#txtcgrp').val(v.commodity_grp);						
						$('#txtrprice').val(v.retail_price);
						$('#txtpprice').val(v.pur_price);
						$('#drptype').val(v.type);						
											
						
					}
					
				});	
			
		}
		showproddetail();			