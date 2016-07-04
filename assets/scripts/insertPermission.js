$("#addper").click(function() {  
		
		var stf_id = $('#txtid').val();
		//alert(stf_id);
		var permission = [];
            $.each($("input[name='myCheckbox']:checked"), function(){            
                permission.push($(this).val());
            });
		//alert(permission);
		//return false;
		//var json = JSON.stringify(permission);
		//alert (json);
			
        $.ajax({
				url : './includes/addEditStaffPost.php',
				type : 'post',
				async : false,
				data : {
					'insPermission' : 1,
					'stf_id'   : stf_id,
					'permission'   : permission,
					
				},
				success : function(r7)
				{
					//$('#showeventpaidtrn').html(r7);					
					alert("inserted successfully!!!");					
					$('#popup_staff_per').fadeOut();
					$('#popup_staff_per_data').fadeOut();
				}
				
			});
       

	   
});