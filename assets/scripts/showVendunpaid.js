//delete
		$('body').delegate('.delete','click',function(){
			var id = $(this).data('id');
			$.ajax({
				url : 'includes/eventDetailPost.php',
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
		$(document).ready(function() {
		$('#sample_2').dataTable( {
		 iDisplayLength: 20,
		bDestroy: true,
		//paging: true,
		searching: true,
	
        "footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,\-][a-zA-Z]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
						
            };
		          
			pageTotal4 = api
                .column( 3, { page: 'current'} )
                .data()
                .reduce( function (t, y) {
				
                    return intVal(t) + intVal(y);
                }, 0 );


           
            $( api.column( 3).footer() ).html(
			pageTotal4
			);
			
			pageTotal3 = api
                .column( 4, { page: 'current'} )
                .data()
                .reduce( function (q, w) {
				
                    return intVal(q) + intVal(w);
                }, 0 );

 
            $( api.column( 4 ).footer() ).html(
			pageTotal3
			);
			
			
			pageTotal2 = api
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (h, i) {
				
                    return intVal(h) + intVal(i);
                }, 0 );
         
            $( api.column( 5 ).footer() ).html(
			pageTotal2
			);
			
			
			
        },
		fnDrawCallback: function() {
		pageNo = this.fnPagingInfo().iTotalPages;
		
		currentPage= this.fnPagingInfo().iPage+1;  
		if(pageNo==currentPage)
			{
				$('#sample_1 tfoot tr').hide();
			}
			else
			{
				$('#sample_1 tfoot tr').show();
			}
		}
		
    } );	
	 
} );
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