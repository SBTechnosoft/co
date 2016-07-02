function showVendorUnpaidAmt()
		{		
			$.ajax({
				url : './includes/vendorUnpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showVdUnpaidAmt' : 1					
				},
				success : function(r)
				{
					$('#show_unpaid_trn').html(r);					
				}				
			});
		}
		showVendorUnpaidAmt();
		
	$('#vunpaidexcel').click(function()
	{	
		// alert(" use for excel");
		// return false;
		$.ajax({
			url : 'includes/vunpaidExcel.php',
			type : 'POST',
			async : false,
			data : {
				'excel'  : 1,				
			},
			success : function(vp)
			{	
				if(vp==1)
				{
				window.location.href = 'upload//excel//vunpaid.csv';
				}
			}				
		});	
					
	});
	
	$('.mpay').click(function()
	{
        // var val = [];		
        // $(':checkbox:checked').each(function(i){
          // val[i] = $(this).val();
		  
		 // });		
		var val = [];
				$.each($("input[name='mpay']:checked"), function(){            
					 val.push($(this).val());
				});
		  //alert(val);
		  
		  $.ajax({
				url : './includes/vendorUnpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showMaskPay' : 1,
					'val' : val,
				},
				success : function(r1)
				{
					$('#totvamt').val(r1);					
				}				
			});     
	});
	
	$('#massPay').click(function()
	{
        		
		var val = [];
				$.each($("input[name='mpay']:checked"), function(){            
					 val.push($(this).val());
				});		
		var  totvamt = $('#totvamt').val();
		var paymentMode = $('#paymentMode').val();
		var txtbanknm = $('#txtbanknm').val();
		var txtchkno = $('#txtchkno').val();
		// alert(val);
		// alert(totvamt);
		// alert(paymentMode);
		// alert(txtbanknm);
		// alert(txtchkno);
		// return false;
		
		  $.ajax({
				url : './includes/vendorUnpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'MaskPayTrn' : 1,
					'val' : val,
					'totvamt' : totvamt,
					'paymentMode' : paymentMode,
					'txtbanknm' : txtbanknm,
					'txtchkno' : txtchkno,
				},
				success : function(r1)
				{
					//$('#totvamt').val(r1);
					alert("success");
				}				
			});     
	});