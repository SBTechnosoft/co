
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
			var hours    =   $('#hours').val();
			var minutes    =   $('#minutes').val();
			var txtset=[];
			for(var i=1;i<2;i++)
			{
				txtset.push($('#txtAutoSet').val());
				txtset.push($('#hours').val());
				txtset.push($('#minutes').val());
			}
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveAutoSetDate'  : 1,
					'txtAutoSet'   : txtAutoSet,
					'txtAutoSet'   : txtset,
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
				   //$('#txtAutoSet').val(r.retail_sales_day);
				   $('#txtdelv').val(r.deliverable);
				    $('#txtApp').val(r.app_configuration);
					 $('#txtemail').val(r.email_config);
					 $abc=r.email_config;
					 if($abc=='Enable')
					 {
						 $('#emailsetting').show();
					 }
					 else
					 {
						 $('#emailsetting').hide();
					 }
				}
				
			});
		}
		
		showdata();
	});		
	function showset()
		{	
var str;	
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showset' : 1
					
				},
				success : function(r)
				{
					 str = String(r);
					 arr = str.split(",");
						// i;
					// alert(arr[0]);
					// for(i in arr){
						// alert(arr[i]);
					
					// }
					$('#txtAutoSet').val(arr[0]);
					$('#hours').val(arr[1]);
					 $('#minutes').val(arr[2]);
					
					
				}
				
			});
		}
		
		showset();
function showHours()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'hours' : 1
					
				},
				success : function(r)
				{
				
					$('#hours').html(r);					
					
				}
				
			});
		}
		showHours();	
function showMin()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'minutes' : 1
					
				},
				success : function(r)
				{
				
					$('#minutes').html(r);					
					
				}
				
			});
		}
		showMin();		

$('#updApp').click(function(){
			var txtApp    =   $('#txtApp').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveApp'  : 1,
					'txtApp'   : txtApp,																			
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
		
$('#updEmail').click(function(){
			var txtemail    =   $('#txtemail').val();
					
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saveEmail'  : 1,
					'txtemail'   : txtemail,																			
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
		
	$('#btnemail').click(function(){
			var email1    =   $('#email1').val();
			var password1   =   $('#password1').val();	
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'emailpass1'  : 1,
					'email1' : email1,
					'password1'   : password1,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdataemail1();
					window.location.reload();
					
				}				
			});	
				
		});		
	$('#btnemail2').click(function(){
			var email2    =   $('#email2').val();
			var password2   =   $('#password2').val();	
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'emailpass2'  : 1,
					'email2' : email2,
					'password2'   : password2,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdataemail2();
					window.location.reload();
					
				}				
			});	
				
		});		
	$('#btnemail3').click(function(){
			var email3    =   $('#email3').val();
			var password3   =   $('#password3').val();	
			alert(password3);
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'emailpass3'  : 1,
					'email3' : email3,
					'password3'   : password3,																			
				},
				success : function(re)
				{
					if(re == 1)
					 {
						alert ("Inserted Data Successfully");
								
					 }
					showdataemail3();
					window.location.reload();
					
				}				
			});	
				
		});	
function showdataemail1()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showemail1' : 1
					
				},
				success : function(r)
				{
					$('#email1').val(r.email);					
					$('#password1').val(r.password);
					
				}
				
			});
		}
		showdataemail1();	

function showdataemail2()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showemail2' : 1
					
				},
				success : function(r)
				{
					$('#email2').val(r.email);					
					$('#password2').val(r.password);
					
				}
				
			});
		}
		showdataemail2();		


function showdataemail3()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showemail3' : 1
					
				},
				success : function(r)
				{
					$('#email3').val(r.email);					
					$('#password3').val(r.password);
					
				}
				
			});
		}
		showdataemail3();	

$(".neworder").change(function()
{
	 $(".neworder").prop('checked',false);
	  $(this).prop('checked',true);
	 var eid=$(this).prop('value');
	  showemailconfiguration('neworder',eid);
 });
 
 $(".enquiry").change(function()
{
	 $(".enquiry").prop('checked',false);
	  $(this).prop('checked',true);
	   var eid=$(this).prop('value');
	  showemailconfiguration('enquiry',eid);
 });
 
 $(".payment").change(function()
{
	 $(".payment").prop('checked',false);
	  $(this).prop('checked',true);
	   var eid=$(this).prop('value');
	   showemailconfiguration('payment',eid);
	
 });
 
 $(".quotation").change(function()
{
	 $(".quotation").prop('checked',false);
	  $(this).prop('checked',true);
	   var eid=$(this).prop('value');
	   showemailconfiguration('quotation',eid);
	  
 });
 
 $(".invoice").change(function()
{
	 $(".invoice").prop('checked',false);
	  $(this).prop('checked',true);
	   var eid=$(this).prop('value');
	   showemailconfiguration('invoice',eid);
	  //alert($(this).prop('value'));
 });
 
 function showemailconfiguration(name,id)
		{		
		//alert(name);
			//alert(id);
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'configemailperson' : 1,
					'name' :name,
					'id' :id,
					
				},
				success : function(r)
				{
					
				}
				
			});
		}
function showdataneworder()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showneworder' : 1
					
				},
				success : function(r)
				{
					
					$('.neworder[value='+r.email_id+']').prop('checked', true);
					
				}
				
			});
		}
		showdataneworder();		
function showdataenquiry()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showenquiry' : 1
					
				},
				success : function(r)
				{
					
					$('.enquiry[value='+r.email_id+']').prop('checked', true);
					
				}
				
			});
		}
		showdataenquiry();		
function showdatapayment()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showpayment' : 1
					
				},
				success : function(r)
				{
					
					$('.payment[value='+r.email_id+']').prop('checked', true);
					
				}
				
			});
		}
		showdatapayment();		
function showdataqutation()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showqutation' : 1
					
				},
				success : function(r)
				{
					
					$('.quotation[value='+r.email_id+']').prop('checked', true);
					
				}
				
			});
		}
		showdataqutation();		
function showdatainvoice()
		{		
			$.ajax({
				url : './includes/addOptionSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'showinvoice' : 1
					
				},
				success : function(r)
				{
					
					$('.invoice[value='+r.email_id+']').prop('checked', true);
					
				}
				
			});
		}
		showdatainvoice();				
		