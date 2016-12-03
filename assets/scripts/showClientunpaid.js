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
	
	function showClientUnpaidAmt()
		{		
			$.ajax({
				url : './includes/unpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClUnpaidAmt' : 1
					
				},
				success : function(r)
				{
					$('#showClientUnpaid').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showClientUnpaidAmt();
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
			pageTotal1 = api
                .column( 6, { page: 'current'} )
                .data()
                .reduce( function (c, d) {
				
                    return intVal(c) + intVal(d);
                }, 0 );

 
        
            $( api.column( 6 ).footer() ).html(
			pageTotal1
			);
            pageTotal = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
				
                    return intVal(a) + intVal(b);
                }, 0 );

 
            // Update footer
            $( api.column( 7 ).footer() ).html(
			pageTotal
			);
			 pageTotal = api
                .column( 8, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
				
                    return intVal(a) + intVal(b);
                }, 0 );

 
            // Update footer
            $( api.column( 8 ).footer() ).html(
			pageTotal
			);
		
        },
		fnDrawCallback: function() {
		pageNo = this.fnPagingInfo().iTotalPages;
		currentPage= this.fnPagingInfo().iPage+1;  
		if(pageNo==currentPage)
			{
				$('#sample_2 tfoot tr').hide();
			}
			else
			{
				$('#sample_2 tfoot tr').show();
			}
		}
		
    } );	
	 
} );
	$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/unpaidAccountingPost.php',
				type : 'post',
				async : false,
				data : {
					'showClientUnpaidAmtType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$('#showClientUnpaid').html(r);
	 $.getScript('assets/scripts/showClientunpaid.js');					
				}
				
			});
	});
	
	$('#drpcmpnmdtl').on('change',function() 
		{
			var value = $(this).val();
			// alert(value);
			// return false;
			
			$.ajax({
					url : './includes/unpaidAccountingPost.php',
					type : 'post',
					async : false,
					data : {
						'showClientUnpaidAmtCmpType' : 1,
						'value': value,
						
					},
					success : function(r)
					{
						$('#showClientUnpaid').html(r);	
 $.getScript('assets/scripts/showClientunpaid.js');							
					}
					
				});
		});
	
	$('#unpaidexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/unpaidExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//unpaid.csv';
					}
				}				
			});	
						
		});	