
	$( function() {		
		//save data
		$('#submit_paytrn').click(function(){
			var txtpdate    =   $('#txtpdate').val();
			var txtpeid    =   $('#txtpeid').val();
			var txtpamt     =   $('#txtpamt').val();	
			var txtpmode     =   $('#txtpmode').val();
			var txtpbnm    =   $('#txtpbnm').val();
			var txtpchq     =   $('#txtpchq').val();	
			var txtptrn     =   $('#txtptrn').val();
			
			if(txtpamt == '')
			{
				alert('Amount is empty');
				return false;
			}
			$.ajax({
				url : './includes/eventDetailPost.php',
				type : 'POST',
				async : false,
				data : {
					'savepaytrn'  : 1,
					'txtpdate'   : txtpdate,
					'txtpeid'  : txtpeid,	
					'txtpamt'  : txtpamt,
					'txtpmode'   : txtpmode,
					'txtpbnm'  : txtpbnm,	
					'txtpchq'  : txtpchq,
					'txtptrn'   : txtptrn,
					
				},
				success : function(re)
				{
					//alert(re);
					if(re == 10)
					{
						alert('your value is bigger to charge value');
						return false;
					}
					else
					{
						alert ("Inserted Data Successfully");
						$('#txtpdate').val('');
						$('#txtpeid').val('');
						$('#txtpamt').val('');
						$('#txtpmode').val('');
						$('#txtpbnm').val('');
						$('#txtpchq').val('');
						$('#txtptrn').val('');
						
						//close the popup box
						$('#pop_background').fadeOut();
						$('#pop_box').fadeOut();
						
						// remove the iserted row and show the add button for insertion row
						$('#add_div').fadeIn();							
						$('#insrow').fadeOut();
						showeventpaid();
						showUpdpaid();
						//$('#txtpaidamt').html(re);
						
						// $("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Inserted!!");
						// $('#msgs').addClass('fadeInDown').fadeIn('slow');
						// $('#msgs').addClass('fadeInDown').fadeOut('slow');						
						//window.location.reload();						
					}					
				}				
			});	
			//showdata();			
		});		
	});		
			