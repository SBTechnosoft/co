
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
			
			//for tax call
			var txtrtaxmode     =   $('#txtrtaxmode').val();
			var txttaxrt    =   $('#txttaxrt').val();
			var txttaxamt     =   $('#txttaxamt').val();
			var txtactAmt    =   $('#txtactAmt').val();
			//exit
						
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
					
					'txtrtaxmode'  : txtrtaxmode,	
					'txttaxrt'   : txttaxrt,					
					'txttaxamt'   : txttaxamt,
					'txtactAmt'  : txtactAmt,
					
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
						
						$('#txtrtaxmode').val('');
						
						$('#txttaxamt').val('0');
						$('#txtactAmt').val('0');
						
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
												
					 }					
				}				
			});	
			//showdata();			
		});	

		$('#txtrprice').on('focusout', function()
		{
					
			var txtrprice = $('#txtrprice').val();
			var txtrtaxmode  = $('#txtrtaxmode').val();//tax mode yes  or no
			var txttaxrt = $('#txttaxrt').val(); //tax rate
			
			if(txtrprice == "")
			{
				alert("Plz Insert The Price!!!");
				return false;
			}
			if(txtrprice != "")
			{
				if(isNaN(txtrprice))
				{
					alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
					return false;
				}
				
			}
			if(txtrtaxmode == 'Yes')
			{
				var taxamt = Math.round((parseInt(txtrprice)* parseInt(txttaxrt))/(100 + parseInt(txttaxrt)));
				var actAmt = Math.round(parseInt(txtrprice) - parseInt(taxamt));
				$('#txttaxamt').val(taxamt);
				$('#txtactAmt').val(actAmt);
			}
			else
			{
				$('#txtactAmt').val(txtrprice);
				$('#txtrprice').val(txtrprice);
			}
			
		});		
		
		$("#txtrtaxmode").on("change", function(){
		
			var txtrtaxmode  = $('#txtrtaxmode').val();//tax mode yes  or no
			var txtrprice = $('#txtrprice').val(); //with tax valuue
			var txttaxrt = $('#txttaxrt').val(); //tax rate
			if(txtrtaxmode == 'Yes')
			{
				var taxamt = Math.round((parseInt(txtrprice)* parseInt(txttaxrt))/(100 + parseInt(txttaxrt)));
				var actAmt = Math.round(parseInt(txtrprice) - parseInt(taxamt));
				$('#txttaxamt').val(taxamt);
				$('#txtactAmt').val(actAmt);
			}
			else
			{
				$('#txtactAmt').val(txtrprice);
				$('#txtrprice').val(txtrprice);
				$('#txttaxamt').val('0');
			}
			
					
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
						$('#drpprdctg').val('');
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
	function fetchtax()
	{
		$.ajax({
					url : 'includes/productAddPost.php',
					type : 'POST',
					async : false,
					data : {
						'fetch_tax'  : 1,					
						
					},
					success : function(v)
					{					
						$('#txttaxrt').val(v.service_tax);						
					}
					
				});	
	}
	fetchtax();