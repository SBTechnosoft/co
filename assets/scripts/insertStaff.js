
	$( function() {		
		//save data
		$('#addstaff').click(function(){
			var txtempid     =   $('#txtempid').val();
			var txtfname     =   $('#txtfname').val();
			var txtlname     =   $('#txtlname').val();
			var txtempmail   =   $('#txtempmail').val();
			var txtmob       =   $('#txtmob').val();
			var txtpass       =   $('#txtpass').val();
			var txtadd1      =   $('#txtadd1').val();
			var txtadd2      =   $('#txtadd2').val();
			var txtcity      =   $('#txtcity').val();
			var txtstate     =   $('#txtstate').val();
			var txtzip       =   $('#txtzip').val();
			var txtrel1		 =   $('#txtrel1').val();
			var txtrel2		 =   $('#txtrel2').val();
			var txtstype     =   $('#txtstype').val();
			/* validation Code for staff detail*/
				if(txtempid == "" )
				{
					alert('Plz Fill Employee Id ');
					return false;
				}			
				var flag=0;
				if(txtfname == "")
				{
					alert('Plz Fill First Name ');
					return false;
				}		
				else
				{
					if(txtfname.length<3)
					{
						txtfname = "";
						alert("Enter atleast 3 characters as Your Name.");				
						return false;
					}
					else
					{
						for(i=0;i<txtfname.length;i++)
						{
							if(txtfname.charAt(0)!=" " && ((txtfname.charAt(i)>='a' && txtfname.charAt(i)<='z') || (txtfname.charAt(i)>='A' && txtfname.charAt(i)<='Z') || txtfname.charAt(i)==" " || txtfname.charAt(i)=='\''))
								continue;
							else
							{
								flag=1;
								break;
							}
						}
					}
				}
				if(flag==1)
				{
					txtfname.value="";
					alert("Enter only Alphabets as your name.");			
					return false;
				}
				if(txtlname == "" )
				{
					alert('Plz Fill Last Name ');
					return false;
				}
				var emailPattern="^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
				var regex=new RegExp(emailPattern);
				
				if(txtempmail != "")
				{
					if(!regex.test(txtempmail))
					{
						txtempmail="";
						alert("Please Enter Valid E-mail Address.");			
						return false;
					}
				}
				if(txtmob!= "")
				{
					if(!txtmob.match(/^\d+/))
					{
						alert("Please only enter numeric characters only for your Age! (Allowed input:0-9)")
						return false;
					}
					if(txtmob.length != 10)
					{
						alert("At least 10 Digit");
						return false;
					}
				}
				if(txtzip != "")
				{
					var cnt =  txtzip.length;
					//alert(cnt);
					if(cnt != 6)
					{
					alert("Enter atleast 6 Digit Pincode.");				
					return false;
					}
				}
				
				/* End of validation Code for staff detail*/
			
			$.ajax({
				url : './includes/addEditStaffPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txtempid'   : txtempid,
					'txtfname'  : txtfname,	
					'txtlname'   : txtlname,
					'txtempmail'  : txtempmail,	
					'txtmob'   : txtmob,
					'txtpass'   : txtpass,
					'txtadd1'  : txtadd1,	
					'txtadd2'   : txtadd2,
					'txtcity'  : txtcity,	
					'txtstate'   : txtstate,
					'txtzip'  : txtzip,
					'txtrel1' : txtrel1,
					'txtrel2' :txtrel2,
					'txtstype' : txtstype,
					
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#txtempid').val('');
						$('#txtfname').val('');
						$('#txtlname').val('');
						$('#txtempmail').val('');
						$('#txtmob').val('');
						$('#txtpass').val('');
						$('#txtadd1').val('');
						$('#txtadd2').val('');
						$('#txtcity').val('');
						$('#txtstate').val('');
						$('#txtzip').val('');
						$('#txtrel1').val('');
						$('#txtrel2').val('');
						$('#txtstype').val('');
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Successfully Subscribed!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');						
						//window.location.reload();						
					 }					
				}				
			});	
			//showdata();			
		});	


		function showstfdetail()
		{
			var stfid =  $('#stfid').val();
			
			 
			
			$.ajax({
					url : 'includes/addEditStaffPost.php',
					type : 'POST',
					async : false,
					data : {
						'stfedit'  : 1,
						'stfid' 	: stfid,
						
					},
					success : function(v)
					{
					
						$('#txtempid').val(v.emp_id);
						$('#txtfname').val(v.first_name);
						$('#txtlname').val(v.last_name);						
						$('#txtempmail').val(v.email);
						$('#txtmob').val(v.mobile);
						
						
						$('#txtpass').val(v.pass);						
						$('#txtadd1').val(v.add1);
						$('#txtadd2').val(v.add2);
						$('#txtcity').val(v.city);						
						$('#txtstate').val(v.state);
						$('#txtzip').val(v.zip);
						$('#txtrel1').val(v.relative1);
						$('#txtrel2').val(v.relative2);
						//$('#txtstype').val(v.staff_type);
						
						
					}
					
				});	
			
		}
		showstfdetail();
		
		$('#updstaff').click(function(){
			var stfid        =   $('#stfid').val();
			var txtempid     =   $('#txtempid').val();
			var txtfname     =   $('#txtfname').val();
			var txtlname     =   $('#txtlname').val();
			var txtempmail   =   $('#txtempmail').val();
			var txtmob       =   $('#txtmob').val();
			var txtpass       =   $('#txtpass').val();
			var txtadd1      =   $('#txtadd1').val();
			var txtadd2      =   $('#txtadd2').val();
			var txtcity      =   $('#txtcity').val();
			var txtstate     =   $('#txtstate').val();
			var txtzip       =   $('#txtzip').val();
			var txtrel1		 =   $('#txtrel1').val();
			var txtrel2		 =   $('#txtrel2').val();
			var txtstype     =   $('#txtstype').val();
			/* validation Code for staff detail*/
			
				if(stfid == "" )
				{
					//alert('Plz Fill Employee Id ');
					return false;
				}
				if(txtempid == "" )
				{
					alert('Plz Fill Employee Id ');
					return false;
				}			
				var flag=0;
				if(txtfname == "")
				{
					alert('Plz Fill First Name ');
					return false;
				}		
				else
				{
					if(txtfname.length<3)
					{
						txtfname = "";
						alert("Enter atleast 3 characters as Your Name.");				
						return false;
					}
					else
					{
						for(i=0;i<txtfname.length;i++)
						{
							if(txtfname.charAt(0)!=" " && ((txtfname.charAt(i)>='a' && txtfname.charAt(i)<='z') || (txtfname.charAt(i)>='A' && txtfname.charAt(i)<='Z') || txtfname.charAt(i)==" " || txtfname.charAt(i)=='\''))
								continue;
							else
							{
								flag=1;
								break;
							}
						}
					}
				}
				if(flag==1)
				{
					txtfname.value="";
					alert("Enter only Alphabets as your name.");			
					return false;
				}
				if(txtlname == "" )
				{
					alert('Plz Fill Last Name ');
					return false;
				}
				var emailPattern="^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
				var regex=new RegExp(emailPattern);
				
				if(txtempmail != "")
				{
					if(!regex.test(txtempmail))
					{
						txtempmail="";
						alert("Please Enter Valid E-mail Address.");			
						return false;
					}
				}
				if(txtmob!= "")
				{
					if(!txtmob.match(/^\d+/))
					{
						alert("Please only enter numeric characters only for your Age! (Allowed input:0-9)")
						return false;
					}
					if(txtmob.length != 10)
					{
						alert("At least 10 Digit");
						return false;
					}
				}
				if(txtzip != "")
				{
					var cnt =  txtzip.length;
					//alert(cnt);
					if(cnt != 6)
					{
					alert("Enter atleast 6 Digit Pincode.");				
					return false;
					}
				}
				
				/* End of validation Code for staff detail*/
			
			$.ajax({
				url : './includes/addEditStaffPost.php',
				type : 'POST',
				async : false,
				data : {
					'updstf'  : 1,
					'txtempid'   : txtempid,
					'txtfname'  : txtfname,	
					'txtlname'   : txtlname,
					'txtempmail'  : txtempmail,	
					'txtmob'   : txtmob,
					'txtpass'   : txtpass,
					'txtadd1'  : txtadd1,	
					'txtadd2'   : txtadd2,
					'txtcity'  : txtcity,	
					'txtstate'   : txtstate,
					'txtzip'  : txtzip,
					'txtrel1' : txtrel1,
					'txtrel2' :txtrel2,
					'txtstype' : txtstype,
					'stfid'    : stfid,
					
				},
				success : function(re)
				{
					if(re == 0)
					 {
						//alert ("Inserted Data Successfully");
						$('#stfid').val('');
						$('#txtempid').val('');
						$('#txtfname').val('');
						$('#txtlname').val('');
						$('#txtempmail').val('');
						$('#txtmob').val('');
						$('#txtpass').val('');
						$('#txtadd1').val('');
						$('#txtadd2').val('');
						$('#txtcity').val('');
						$('#txtstate').val('');
						$('#txtzip').val('');
						$('#txtrel1').val('');
						$('#txtrel2').val('');
						$('#txtstype').val('');
						
						$("#msgs").html("<i class=\"fa fa-check-circle-o\"> Updated Successfully!!!");
						$('#msgs').addClass('fadeInDown').fadeIn('slow');
						$('#msgs').addClass('fadeInDown').fadeOut('slow');
						//window.location.href = 'index.php?url=STA';
						//window.location.reload();						
					 }
					window.location.href = "index.php?url=STA"; 
				}				
			});	
			//showdata();			
		});

		
	});		
			