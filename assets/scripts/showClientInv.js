




function showClientInv()
		{		
			$.ajax({
				url : './includes/invoiceListPost.php',
				type : 'post',
				async : false,
				data : {
					'showClInv' : 1
					
				},
				success : function(r)
				{
					$('#showClientInv').html(r);
					//initTable1();
					//$("th").removeClass("sorting_asc").addClass("sorting_asc");
					
				}
				
			});
		}
		showClientInv();
		
			$('#selchkitm').click(function(){
				
				var chkinv = [];
				$.each($("input[name='chkinv']:checked"), function(){            
					 chkinv.push($(this).val());
				});
				
				//alert(chkinv);
				//return false;
				
				$.ajax({
					url : './includes/invoiceListPost.php',
					type : 'post',
					async : false,
					data : {
						'showChkList' : 1,
						'chkinv' : chkinv,
						
					},
					success : function(r)
					{
						//$('#showClientInv').html(r);
						//initTable1();
						//$("th").removeClass("sorting_asc").addClass("sorting_asc");
						window.open(
						  './upload/invoice/myzip.zip',
						  '_blank' 
						);
						
					}
					
				});
			});

$("#chall").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});