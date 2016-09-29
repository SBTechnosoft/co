
	$( function() {		
		//save data
		$('#savetax').click(function(){
			var txtservicetax    =   $('#txtservicetax').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtservicetax'   : txtservicetax,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					$("#default").show();
					$("#hide1").hide();
				}				
			});	
				
		});	
		
		$('#updays').click(function(){
			var txtdays    =   $('#txtdays').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveDays'  : 1,
					'txtdays'   : txtdays,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					$('#txtdays').attr('readonly','txtdays');
					
					$("#editdays").show();
					$("#updays").hide();
				}				
			});	
				
		});

		$('#updvat').click(function(){
			var txtvat    =   $('#txtvat').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveVat'  : 1,
					'txtvat'   : txtvat,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					$('#txtvat').attr('readonly','txtvat');
					
					$("#editvat").show();
					$("#updvat").hide();
				}				
			});	
				
		});
		
		$('#updrtl').click(function(){
			var txtrtl    =   $('#txtrtl').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveRtl'  : 1,
					'txtrtl'   : txtrtl,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					window.location.reload();
					
				}				
			});	
				
		});
		
		//this setting for deliverable
		$('#upddelv').click(function(){
			var txtdelv    =   $('#txtdelv').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveDelv'  : 1,
					'txtdelv'   : txtdelv,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					window.location.reload();
					
				}				
			});	
				
		});
		//exit
 $('#updres_equ').click(function(){
			
			var txtres_equ    =   $('#txtres_equ').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveResEqu'  : 1,
					'txtres_equ'   : txtres_equ,																			
				},
				success : function(re)
				{
					
						alert ("Inserted Data Successfully");
								
					 
					showdata();
					//window.location.reload();
					
				}				
			});	
				
		});
		
		$('#updAutoSet').click(function(){
			
			var txtAutoSet    =   $('#txtAutoSet').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveAutoSetDate'  : 1,
					'txtAutoSet'   : txtAutoSet,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdata();
					window.location.reload();
					
				}				
			});	
				
		});
		
		function showdata()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#txtservicetax').val(r.service_tax);					
					$('#txtservicetax1').val(r.service_tax);
					$('#txtdays').val(r.upcoming_days);
					$('#txtvat').val(r.vat);
					$('#txtrtl').val(r.retail_sales);
				   $('#txtres_equ').val(r.resorce);
				   $('#txtAutoSet').val(r.retail_sales_day);
				   $('#txtdelv').val(r.deliverable);
				}
				
			});
		}
		
		showdata();
	});		
			