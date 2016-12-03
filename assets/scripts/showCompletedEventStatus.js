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
	$('.event_type').on('change',function() 
	{
		var value = $(this).val();
		$.ajax({
				url : './includes/completedEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'showDetailType' : 1,
					'value': value,
					
				},
				success : function(r)
				{
					$("#sample_1").dataTable().fnDestroy();
					$('#completed_event').html(r);	
						 $.getScript('assets/scripts/showCompletedEventStatus.js');
					$('#sample_1').dataTable( {
									paging: true,
									searching: true
						} );
				}
				
			});
	});
function showdata()
		{		
			$.ajax({
				url : './includes/completedEventStatusPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#completed_event').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showdata();
		$(document).ready(function() {
		$('#sample_1').dataTable( {
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
                .column( 5, { page: 'current'} )
                .data()
                .reduce( function (t, y) {
				
                    return intVal(t) + intVal(y);
                }, 0 );


           
            $( api.column( 5).footer() ).html(
			pageTotal4
			);
			
			pageTotal3 = api
                .column( 6, { page: 'current'} )
                .data()
                .reduce( function (q, w) {
				
                    return intVal(q) + intVal(w);
                }, 0 );

 
            $( api.column( 6 ).footer() ).html(
			pageTotal3
			);
			
			
			pageTotal2 = api
                .column( 7, { page: 'current'} )
                .data()
                .reduce( function (h, i) {
				
                    return intVal(h) + intVal(i);
                }, 0 );
         
            $( api.column( 7 ).footer() ).html(
			pageTotal2
			);
			
			pageTotal1 = api
                .column( 8, { page: 'current'} )
                .data()
                .reduce( function (c, d) {
				
                    return intVal(c) + intVal(d);
                }, 0 );

            $( api.column( 8 ).footer() ).html(
			pageTotal1
			);
			
            pageTotal = api
                .column( 9, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
				
                    return intVal(a) + intVal(b);
                }, 0 );

 
            // Update footer
            $( api.column( 9 ).footer() ).html(
	pageTotal
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
	$('#completedexcel').click(function()
		{	
			// alert(" use for excel");
			// return false;
			$.ajax({
				url : 'includes/completedExcel.php',
				type : 'POST',
				async : false,
				data : {
					'excel'  : 1,				
				},
				success : function(vp)
				{	
					if(vp==1)
					{
					window.location.href = 'upload//excel//completedexcel.csv';
					}
				}				
			});	
						
		});
	$('#filter_data').click(function()
		{			
			var txtename    =   $('#txtename').val();
			var txtclname    =   $('#txtclname').val();
			var txtInv    =   $('#txtinv').val();
			var txtfromdt    =   $('#txtfromdt').val();
			var txttodt    =   $('#txttodt').val();
			var drpcmpnm  = $('#drpcmpnm').val();
			
			if(txtename == '' && txtclname == '' && txtInv == '' && txtfromdt == '' && txttodt == '' && drpcmpnm == '' )
			{
				alert('All Fields are empty!!!');
				return false;
			}
			
			//alert(eid);
			$.ajax({
				url : 'includes/completedEventStatusPost.php',
				type : 'POST',
				async : false,
				data : {
					'search'  : 1,
					'txtename'   : txtename,
					'txtclname' : txtclname,
					'txtInv' :txtInv,
					'txtfromdt' : txtfromdt,
					'txttodt' :txttodt,
					'drpcmpnm' : drpcmpnm,
					
				},
				success : function(v)
				{	
						// $('#txtename').val('');
						// $('#txtclname').val('');
						// $('#txtfpno').val('');
						// $('#txtbillno').val('');
						// $('#txtfromdt').val('');
						// $('#txttodt').val('');
					 $("#sample_1").dataTable().fnDestroy();
					$('#completed_event').html(v);
					$.getScript('assets/scripts/showCompletedEventStatus.js');
					$('#sample_1').dataTable( {
									paging: true,
									searching: true
						} );
				}				
			});	
						
		});