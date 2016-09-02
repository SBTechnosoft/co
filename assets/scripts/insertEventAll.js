	$( function() 
	{		
		//save data
		
		$('#newaddevent').click(function()
		{		
			var txteventnm    =   $('#txteventnm').val();
			
			var drpctgnm = $('#drpctgnm').val();
			var drpsubctgnm = $('#drpsubctgnm').val();
			
			var txteventds     =   $('#txteventds').val();	
			var txtclnm     =   $('#txtclnm').val();
			var txtclcmp    =   $('#txtclcmp').val();
			var txtclemail     =   $('#txtclemail').val();	
			var txtworkmob     =   $('#txtworkmob').val();
			var txthmmob    =   $('#txthmmob').val();
			var txtmob    =   $('#txtmob').val();
			var txtfromdt =	  $('#txtfromdt').val();
			
			var txttodt = 	$('#txttodt').val();
			var drpcmpnm = $('#drpcmpnm').val();

			var txtjobdata1 = $('#txtjobdata1').val();
			var txtjobdata2 = $('#txtjobdata2').val();
			
			
			var taxmode = $('#taxmode').val();
			var txtbillno = $('#txtbillno').val();
			var txtfpno = $('#txtfpno').val();
			
			var txtcharge	= 	$('#txtcharge').val();
			var txtstax =$('#txtstax').val();
			var txtdisc = $('#txtdisc').val();
			
			var hdn = $('input[id^="hdn"]').map(function() {
			  return this.value;
			}).get();
			
			//var hdn = ('#hdn').val();
			
			
			// var values = $("input[id^='hdn']")
              // .map(function(){return $(this).val();}).get();
			  
			
			// var inputs = document.querySelectorAll("#hdn input[name='hdn[]']");
				// alert(inputs);
				// for (i = 0; i < inputs.length; i++) {
					
				// }
			
			alert (hdn);
			return false;
			
			
			
			//now inserting next table			
			var txtvenue = [];
			$.each($("input[name='txtvenue']"), function(){            
                 txtvenue.push($(this).val());
            });
			//alert(txtvenue);
			
			var txthall = [];
			$.each($("input[name='txthall']"), function(){            
                 txthall.push($(this).val());
            });
			
			var txtldmark = [];
			$.each($("input[name='txtldmark']"), function(){            
                 txtldmark.push($(this).val());
            });
			//alert(txtldmark);
			
			var txtfromdate = [];
			$.each($("input[name='txtfromdate']"), function(){            
                 txtfromdate.push($(this).val());
            });
			//alert(txtfromdate);
			
			var txttodate = [];
			$.each($("input[name='txttodate']"), function(){            
                 txttodate.push($(this).val());
            });
			//alert(txttodate);
			
			//return false;
			
			//var txtvenue    =   $('#txtvenue').val();	
			// var txtldmark    =   $('#txtldmark').val();
			// var txtfromdate   =   $('#txtfromdate').val();
			// var txttodate    =   $('#txttodate').val();
			
			
			
			var txtpaid     =   $('#txtpaid').val();
			
			var paymentMode =   $('#paymentMode').val();
			var txtbanknm   =   $('#txtbanknm').val();
			var txtchkno    =   $('#txtchkno').val();
			
			
			
			// now inserting into equip dtl
			
			// var eqp = new Array();
			var eqp = [];
            $.each($("input[name='eqp']:checked"), function(){            
                eqp.push($(this).val());
            });
			
			var stf = [];
            $.each($("input[name='stf']:checked"), function(){            
                stf.push($(this).val());
            });
			
			//new event places detail
			
			var txtieqp = [];
			$.each($("input[name='txtieqp']"), function(){            
                 txtieqp.push($(this).val());
            });
			var txtirate = [];
			$.each($("input[name='txtirate']"), function(){            
                 txtirate.push($(this).val());
            });
			var txtiqty = [];
			$.each($("input[name='txtiqty']"), function(){            
                 txtiqty.push($(this).val());
            });
			var txtiamt = [];
			$.each($("input[name='txtiamt']"), function(){            
                 txtiamt.push($(this).val());
            });
			var txtistf = [];
			$.each($("input[name='txtistf']"), function(){            
                 txtistf.push($(this).val());
            });
			var txtivend = [];
			$.each($("input[name='txtivend']"), function(){            
                 txtivend.push($(this).val());
            });
			
			var txtivendprice = [];
			$.each($("input[name='txtivendprice']"), function(){            
                 txtivendprice.push($(this).val());
            });
			
			var txtiremark = [];
			$.each($("input[name='txtiremark']"), function(){            
                 txtiremark.push($(this).val());
            });
			
						
			var txtilength = [];
			$.each($("input[name='txtilength']"), function(){            
                 txtilength.push($(this).val());
            });
			
			var txtiwidth = [];
			$.each($("input[name='txtiwidth']"), function(){            
                 txtiwidth.push($(this).val());
            });
			
			
			if(txteventnm == "" )
			{
				alert('Plz Fill Event Name ');
				return false;
			}
			var emailPattern="^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
			var regex=new RegExp(emailPattern);
			
			if(txtclemail != "")
			{
				if(!regex.test(txtclemail))
				{
					txtclemail="";
					alert("Please Enter Valid E-mail Address.");			
					return false;
				}
			}
			if(txtworkmob == "" && txthmmob == "" && txtmob	 == "" )
			{
				alert('Plz Provide At Least One Mobile Number.');
				return false;
			}
			if(txtworkmob!= "")
			{
				if(!txtworkmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Work Number! (Allowed input:0-9)")
					return false;
				}
				if(txtworkmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txthmmob!= "")
			{
				if(!txthmmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Home Number! (Allowed input:0-9)")
					return false;
				}
				if(txthmmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txtmob!= "")
			{
				if(!txtmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Mobile Number! (Allowed input:0-9)")
					return false;
				}
				if(txtmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txtcharge=="")
			{
				alert("Plz Insert The Client Charges For Event Mgt!!!");
				return false;
			}
			if(txtcharge != "")
			{
				if(!txtcharge.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Charge! (Allowed input:0-9)")
					return false;
				}
				if(txtcharge == 0)
				{
					alert("Can't GIve Charge 0");
					return false;
				}
			}
			//if(paymentMode == "cheque")
			//{
				//if(txtbanknm == "" || txtchkno == "" )
				//{
					//alert("Fill Bank Detail");
					//return false;
				//}
				//if(!txtchkno.match(/^\d+/))
				//{
					//alert("Please Only Numeric characters For Cheque Number! (Allowed input:0-9)")
					//return false;
				//}
			//}
			if(txtvenue == "")
			{
				alert("Plz Provide Vennue Detail !!!");
				return false;
			}
			if( /[^a-zA-Z0-9\s\-\/]/.test( txtvenue ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if( /[^a-zA-Z0-9\-\/]/.test( txtbillno ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if( /[^a-zA-Z0-9\-\/]/.test( txtfpno ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if(taxmode == 'Yes')
			{
				if(txtdisc=='')
				{
					var tax  =	(parseInt(txtcharge)* parseFloat(txtstax))/100;				
					var gtot =  (parseInt(txtcharge) ) + (parseInt(tax)) ;				
				}
				else
				{
					var tax =  ((parseInt(txtcharge) - parseInt(txtdisc)) * parseFloat(txtstax))/100;
					//var gtot =  (parseInt(txtcharge) + parseInt(tax)) - (parseInt(txtdisc)) ;
					var gtot =  (parseInt(txtcharge) - parseInt(txtdisc) ) + (parseInt(tax)) ;
				}
			}
			else
			{
				if(txtdisc=='')
				{
					var gtot = parseInt(txtcharge);
				}
				else
				{
					
					var gtot =  (parseInt(txtcharge) - parseInt(txtdisc) )  ;
					
				}
					
				
			}
			if( parseInt(gtot)  < parseInt(txtpaid) )
			{
				alert("You can't pay higher value of chargeble amount!!!");
				//return false;
			}
			//return false;
			
			//alert (eqp);
            //alert("My favourite sports are: " + eqp.join(", "));
			
			
			//var eqp = $('#eqp').val();
			//var eqp =  $("input:checked").each(function() {  data['eqp[]'].push($(this).val());	});
			//alert (eqp);
			
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txteventnm'   : txteventnm,
					'txteventds'  : txteventds,	
					'txtclnm'  : txtclnm,
					'txtclcmp'   : txtclcmp,
					'txtclemail'  : txtclemail,	
					'txtworkmob'  : txtworkmob,
					'txthmmob'   : txthmmob,
					'txtmob'  : txtmob,
					
					'txtfpno'  :txtfpno,
					'txtbillno' : txtbillno,
					
					'txtcharge' : txtcharge,
					'txtpaid'   : txtpaid,
					
					'paymentMode': paymentMode,
					'txtbanknm' : txtbanknm,
					'txtchkno'  : txtchkno,
					
					'txtfromdt'	: txtfromdt,
					'txttodt'	: txttodt,
					'drpcmpnm'	:drpcmpnm,
					
					'txtjobdata1' : txtjobdata1,
					'txtjobdata2' : txtjobdata2,
					
					'taxmode'	:taxmode,
					'txtvenue'  : txtvenue,	
					'txtldmark'   : txtldmark,
					'txtfromdate'  : txtfromdate,
					'txttodate'   : txttodate,
					'status' : 'new',
					'eqp' : eqp,
					'stf' : stf,
					'tax' : tax,
					'gtot' : gtot,
					'txtstax' : txtstax,
					'txthall' : txthall,
					
					'txtieqp' : txtieqp,
					'txtirate' : txtirate,
					'txtiqty' : txtiqty,
					'txtiamt' : txtiamt,
					'txtistf' : txtistf,
					'txtivend' : txtivend,
					'txtivendprice' : txtivendprice,
					'txtiremark' : txtiremark,
					'txtilength' : txtilength,
					'txtiwidth'  : txtiwidth,
					'txtdisc'	: txtdisc,
					
					'drpctgnm'	: drpctgnm,
					'drpsubctgnm'	: drpsubctgnm,
					
					
					
					
				},
				success : function(re)
				{
					// if(re == 0)
					 // {
						 
						alert ("Inserted Data Successfully");
						$('#txteventnm').val('');
						$('#txtdisc').val('');
						$('#txteventds').val('');
						
						$('#drpctgnm').val('');
						$('#drpsubctgnm').val('');
						
						$('#txtclnm').val('');
						$('#txtclcmp').val('');
						$('#txtclemail').val('');
						$('#txtworkmob').val('');
						$('#txthmmob').val('');
						$('#txtmob').val('');
						
						$('#txtfpno').val('');
						$('#txtbillno').val('');
						
						$('#txtfromdt').val('');
						$('#txttodt').val('');
						
						$('#txtjobdata1').val();
						$('#txtjobdata2').val();
						
						$('#txtvenue').val('');
						$('#txthall').val('');
						$('#txtldmark').val('');
						$('#txtcharge').val('');
						$('#txtpaid').val('');
						
						$('#paymentMode').val('');
						$('#txtbanknm').val('');
						$('#txtchkno').val('');
						//$('eqp').val('');
						window.location.href = 'index.php?url=EVD';					
				}				
			});	
					
		});	
			
		$('#newaddenquiry').click(function()
		{
			
			
			var txteventnm    =   $('#txteventnm').val();
			var txteventds     =   $('#txteventds').val();	
			
			var drpctgnm = $('#drpctgnm').val();
			var drpsubctgnm = $('#drpsubctgnm').val();
			
			var txtclnm     =   $('#txtclnm').val();
			var txtclcmp    =   $('#txtclcmp').val();
			var txtclemail     =   $('#txtclemail').val();	
			var txtworkmob     =   $('#txtworkmob').val();
			var txthmmob    =   $('#txthmmob').val();
			var txtmob    =   $('#txtmob').val();
			var txtfromdt =	  $('#txtfromdt').val();
			
			var txttodt = 	$('#txttodt').val();
			var drpcmpnm = $('#drpcmpnm').val();
			
			var txtjobdata1 = $('#txtjobdata1').val();
			var txtjobdata2 = $('#txtjobdata2').val();
			
						
			
			var taxmode = $('#taxmode').val();
			var txtbillno = $('#txtbillno').val();
			var txtfpno = $('#txtfpno').val();
			
			var txtcharge	= 	$('#txtcharge').val();
			var txtstax =$('#txtstax').val();
			var txtdisc = $('#txtdisc').val();
			
			
			//now inserting next table			
			var txtvenue = [];
			$.each($("input[name='txtvenue']"), function(){            
                 txtvenue.push($(this).val());
            });
			//alert(txtvenue);
			
			var txthall = [];
			$.each($("input[name='txthall']"), function(){            
                 txthall.push($(this).val());
            });
			
			var txtldmark = [];
			$.each($("input[name='txtldmark']"), function(){            
                 txtldmark.push($(this).val());
            });
			//alert(txtldmark);
			
			var txtfromdate = [];
			$.each($("input[name='txtfromdate']"), function(){            
                 txtfromdate.push($(this).val());
            });
			//alert(txtfromdate);
			
			var txttodate = [];
			$.each($("input[name='txttodate']"), function(){            
                 txttodate.push($(this).val());
            });
			//alert(txttodate);
			
			//return false;
			
			//var txtvenue    =   $('#txtvenue').val();	
			// var txtldmark    =   $('#txtldmark').val();
			// var txtfromdate   =   $('#txtfromdate').val();
			// var txttodate    =   $('#txttodate').val();
			
			
			
			var txtpaid     =   $('#txtpaid').val();
			
			var paymentMode =   $('#paymentMode').val();
			var txtbanknm   =   $('#txtbanknm').val();
			var txtchkno    =   $('#txtchkno').val();
			
			
			
			// now inserting into equip dtl
			
			// var eqp = new Array();
			var eqp = [];
            $.each($("input[name='eqp']:checked"), function(){            
                eqp.push($(this).val());
            });
			
			var stf = [];
            $.each($("input[name='stf']:checked"), function(){            
                stf.push($(this).val());
            });
			
			//new event places detail
			
			var txtieqp = [];
			$.each($("input[name='txtieqp']"), function(){            
                 txtieqp.push($(this).val());
            });
			var txtirate = [];
			$.each($("input[name='txtirate']"), function(){            
                 txtirate.push($(this).val());
            });
			var txtiqty = [];
			$.each($("input[name='txtiqty']"), function(){            
                 txtiqty.push($(this).val());
            });
			var txtiamt = [];
			$.each($("input[name='txtiamt']"), function(){            
                 txtiamt.push($(this).val());
            });
			var txtistf = [];
			$.each($("input[name='txtistf']"), function(){            
                 txtistf.push($(this).val());
            });
			var txtivend = [];
			$.each($("input[name='txtivend']"), function(){            
                 txtivend.push($(this).val());
            });
			
			var txtivendprice = [];
			$.each($("input[name='txtivendprice']"), function(){            
                 txtivendprice.push($(this).val());
            });
			
			var txtiremark = [];
			$.each($("input[name='txtiremark']"), function(){            
                 txtiremark.push($(this).val());
            });
			var txtilength = [];
			$.each($("input[name='txtilength']"), function(){            
                 txtilength.push($(this).val());
            });
			
			var txtiwidth = [];
			$.each($("input[name='txtiwidth']"), function(){            
                 txtiwidth.push($(this).val());
            });
			
			
			if(txteventnm == "" )
			{
				alert('Plz Fill Event Name ');
				return false;
			}
			var emailPattern="^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
			var regex=new RegExp(emailPattern);
			
			if(txtclemail != "")
			{
				if(!regex.test(txtclemail))
				{
					txtclemail="";
					alert("Please Enter Valid E-mail Address.");			
					return false;
				}
			}
			if(txtworkmob == "" && txthmmob == "" && txtmob	 == "" )
			{
				alert('Plz Provide At Least One Mobile Number.');
				return false;
			}
			if(txtworkmob!= "")
			{
				if(!txtworkmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Work Number! (Allowed input:0-9)")
					return false;
				}
				if(txtworkmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txthmmob!= "")
			{
				if(!txthmmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Home Number! (Allowed input:0-9)")
					return false;
				}
				if(txthmmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txtmob!= "")
			{
				if(!txtmob.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Mobile Number! (Allowed input:0-9)")
					return false;
				}
				if(txtmob.length != 10)
				{
					alert("At least 10 Digit");
					return false;
				}
			}
			if(txtcharge=="")
			{
				alert("Plz Insert The Client Charges For Event Mgt!!!");
				return false;
			}
			if(txtcharge != "")
			{
				if(!txtcharge.match(/^\d+/))
				{
					alert("Please Only Numeric characters For Charge! (Allowed input:0-9)")
					return false;
				}
				if(txtcharge == 0)
				{
					alert("Can't GIve Charge 0");
					return false;
				}
			}
			//if(paymentMode == "cheque")
			//{
				//if(txtbanknm == "" || txtchkno == "" )
				//{
					//alert("Fill Bank Detail");
					//return false;
				//}
				//if(!txtchkno.match(/^\d+/))
				//{
					//alert("Please Only Numeric characters For Cheque Number! (Allowed input:0-9)")
					//return false;
				//}
			//}
			if(txtvenue == "")
			{
				alert("Plz Provide Vennue Detail !!!");
				return false;
			}
			if( /[^a-zA-Z0-9\s\-\/]/.test( txtvenue ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if( /[^a-zA-Z0-9\-\/]/.test( txtbillno ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if( /[^a-zA-Z0-9\-\/]/.test( txtfpno ) ) 
			{
				alert('Dont Use Special Character!!! Like!@$');
				return false;
			}
			if(taxmode == 'Yes')
			{
				if(txtdisc=='')
				{
					var tax  =	(parseInt(txtcharge)* parseFloat(txtstax))/100;				
					var gtot =  (parseInt(txtcharge) ) + (parseInt(tax)) ;				
				}
				else
				{
					var tax =  ((parseInt(txtcharge) - parseInt(txtdisc)) * parseFloat(txtstax))/100;
					//var gtot =  (parseInt(txtcharge) + parseInt(tax)) - (parseInt(txtdisc)) ;
					var gtot =  (parseInt(txtcharge) - parseInt(txtdisc) ) + (parseInt(tax)) ;
				}
			}
			else
			{
				if(txtdisc=='')
				{
					var gtot = parseInt(txtcharge);
				}
				else
				{
					//var tax = 0;
					//var gtot =  (parseInt(txtcharge) + parseInt(tax)) - (parseInt(txtdisc)) ;
					var gtot =  (parseInt(txtcharge) - parseInt(txtdisc) )  ;
					//alert(tax);
				}
					
				
			}
			
			if( parseInt(gtot)  < parseInt(txtpaid) )
			{
				alert("You can't pay higher value of chargeble amount!!!");
				return false;
			}
			//return false;
			
			//alert (eqp);
            //alert("My favourite sports are: " + eqp.join(", "));
			
			
			//var eqp = $('#eqp').val();
			//var eqp =  $("input:checked").each(function() {  data['eqp[]'].push($(this).val());	});
			//alert (eqp);
			
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'POST',
				async : false,
				data : {
					'saverecord'  : 1,
					'txteventnm'   : txteventnm,
					'txteventds'  : txteventds,	
					'txtclnm'  : txtclnm,
					'txtclcmp'   : txtclcmp,
					'txtclemail'  : txtclemail,	
					'txtworkmob'  : txtworkmob,
					'txthmmob'   : txthmmob,
					'txtmob'  : txtmob,
					
					'txtfpno'  :txtfpno,
					'txtbillno' : txtbillno,			
						
					'txtjobdata1' : txtjobdata1,
					'txtjobdata2' : txtjobdata2,
					
					'txtcharge' : txtcharge,
					'txtpaid'   : txtpaid,
					
					'paymentMode': paymentMode,
					'txtbanknm' : txtbanknm,
					'txtchkno'  : txtchkno,
					
					'txtfromdt'	: txtfromdt,
					'txttodt'	: txttodt,
					'drpcmpnm'	:drpcmpnm,
					'taxmode'	:taxmode,
					'txtvenue'  : txtvenue,	
					'txtldmark'   : txtldmark,
					'txtfromdate'  : txtfromdate,
					'txttodate'   : txttodate,
					'status' : 'enquiry',
					'eqp' : eqp,
					'stf' : stf,
					'tax' : tax,
					'gtot' : gtot,
					'txtstax' : txtstax,
					'txthall' : txthall,
					
					'txtieqp' : txtieqp,
					'txtirate' : txtirate,
					'txtiqty' : txtiqty,
					'txtiamt' : txtiamt,
					'txtistf' : txtistf,
					'txtivend' : txtivend,
					'txtivendprice' : txtivendprice,
					'txtiremark' : txtiremark,
					'txtilength' : txtilength,
					'txtiwidth'  : txtiwidth,
					'txtdisc'	: txtdisc,
					
					'drpctgnm'  : drpctgnm,
					'drpsubctgnm'	: drpsubctgnm,
					
					
				},
				success : function(re)
				{
					// if(re == 0)
					 // {
						 
						alert ("Inserted Enquiry Successfully");
						$('#txteventnm').val('');
						$('#txtdisc').val('');
						
						$('#drpctgnm').val('');
						$('#drpsubctgnm').val('');
						
						$('#txteventds').val('');
						$('#txtclnm').val('');
						$('#txtclcmp').val('');
						$('#txtclemail').val('');
						$('#txtworkmob').val('');
						$('#txthmmob').val('');
						$('#txtmob').val('');
						
						$('#txtfpno').val('');
						$('#txtbillno').val('');
						
						$('#txtfromdt').val('');
						$('#txttodt').val('');
						
						$('#txtjobdata1').val();
						$('#txtjobdata2').val();
						
						$('#txtvenue').val('');
						$('#txthall').val('');
						$('#txtldmark').val('');
						$('#txtcharge').val('');
						$('#txtpaid').val('');
						
						$('#paymentMode').val('');
						$('#txtbanknm').val('');
						$('#txtchkno').val('');
						//$('eqp').val('');
						window.location.href = 'index.php?url=ENR';					
				}				
			});		
					
		});	
		
		
		

		function shownewEqp()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'shownewEqp' : 1
					
				},
				success : function(r)
				{
					$('#drpneweqp').html(r);	
					
				}
				
			});
		}
		function shownewStf()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'shownewStf' : 1
					
				},
				success : function(r)
				{
					$('#drpnewstf').html(r);	
					
				}
				
			});
		}
		function shownewVend()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'shownewVend' : 1
					
				},
				success : function(r)
				{
					$('#drpnewvend').html(r);	
					$('#drpnewresvend').html(r);
				}
				
			});
		}
		function shownewRes()
		{		
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'shownewRes' : 1
					
				},
				success : function(r)
				{
					$('#drp_resource').html(r);	
					
				}
				
			});
		}
		shownewEqp();
		shownewStf();
		shownewVend();
		shownewRes();
		
		
		
		$("#drpneweqp").on("change", function()
		{
			var eqpid    =   $('#drpneweqp').val();
			
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showeqpprice' : 1,
					'eqpid' : eqpid,
					
				},
				success : function(r)
				{
					$('#txtrate').val(r.price);
					$('#txtamt').val(r.price);
					$('#txthamt').val(r.price);
					$('#txttype').val(r.price_type);
					$('#txtassdtl').val(r.as_name);					
					checkType();
				}
				
			});
		});
		
		$("#drp_resource").on("change", function()
		{
			var resid    =   $('#drp_resource').val();
			
			$.ajax({
				url : './includes/newEventsPost.php',
				type : 'post',
				async : false,
				data : {
					'showresprice' : 1,
					'resid' : resid,
					
				},
				success : function(r)
				{
					$('#txtresrate').val(r.amount);
					$('#txtresamt').val(r.amount);
									
				}
				
			});
		});
		$("#txtresqty").on("focusout", function()
		{
			var qty    =   $('#txtresqty').val();
			if(qty == "")
			{
				alert("Plz Insert The qty!!!");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}
			var txtramt = $('#txtresrate').val();			
			var tot = parseInt(qty) * parseInt(txtramt);			
			$('#txtresamt').val(tot);			
		});
		$("#txtresrate").on("focusout", function()
		{
					
			var ratechg = $('#txtresrate').val();		
			if(ratechg == "")
			{
				alert("Plz Insert The Rate!!!");
				return false;
			}
			if(ratechg != "")
			{
				if(isNaN(ratechg))
				{
					alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
					return false;
				}
				// if(ratechg == 0)
				// {
					// alert("Can't GIve rate 0");
					// return false;
				// }
			}
			var qty    =   $('#txtresqty').val();			
			var tot = parseInt(qty) * parseInt(ratechg);			
			$('#txtresamt').val(tot);
			
		});
		
		$('#labelLT').hide();
		$('#labelWT').hide();
		$('#txtlength').hide();
		$('#txtwidth').hide();
		
		function checkType()
		{	
			var gettype = $('#txttype').val();
			
			if(gettype == 2)
			{
				$('#labelLT').show();
				$('#labelWT').show();
				$('#txtlength').show();
				$('#txtwidth').show();
			}
			else
			{
				$('#labelLT').hide();
				$('#labelWT').hide();
				$('#txtlength').hide();
				$('#txtwidth').hide();
			}
			
			
		}
		
		$("#txtlength").on("focusout", function()
		{
			var txtlength    =   $('#txtlength').val();
			
			// if(gettype == 2 && txtlength=="")
			// {
				// alert("Plz Insert The Length!!!");
				// return false;
			// }
			// if(txtlength != "")
			// {
				// if(isNaN(txtlength))
				// {
					// alert("Please Only Numeric Length!!! (Allowed input:0-9)")
					// return false;
				// }
				// if(txtlength == 0)
				// {
					// alert("Can't GIve length 0");
					// return false;
				// }
			// }
			
						
		});
		
		$("#txtwidth").on("focusout", function(){
			var txtlength    =   $('#txtlength').val();
			var txtwidth    =   $('#txtwidth').val();
			var sqfeet = parseInt(txtlength) * parseInt(txtwidth);
			
			var rate = $('#txtrate').val();	
			
			var tot = parseInt(sqfeet) * parseInt(rate);
			$('#txthamt').val(tot);
			$('#txtamt').val(tot);			
		});
		
		$("#txtrate").on("focusout", function()
		{
			
			var gettype = $('#txttype').val();
			//alert(gettype);
			var rate = $('#txtrate').val();	
			if(rate == "")
			{
				alert("Plz Insert The Rate!!!");
				return false;
			}
			if(rate != "")
			{
				if(isNaN(rate))
				{
					alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");
					return false;
				}
				// if(rate == 0)
				// {
					// alert("Can't GIve rate 0");
					// return false;
				// }
			}
			if(gettype == 2)
			{
				var txtlength    =   $('#txtlength').val();
				var txtwidth    =   $('#txtwidth').val();
				var sqfeet = parseInt(txtlength) * parseInt(txtwidth);
				
				var rate = $('#txtrate').val();	
				
				var tot = parseInt(sqfeet) * parseInt(rate);
				$('#txthamt').val(tot);
				$('#txtamt').val(tot);
			}
			else
			{
				var rate = $('#txtrate').val();	
				$('#txthamt').val(rate);
				$('#txtamt').val(rate);
			}
		});
		
		
		$("#drpqty").on("focusout", function()
		{
			var qty    =   $('#drpqty').val();
			if(qty == "")
			{
				alert("Plz Insert The qty!!!");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}
			var txthamt = $('#txthamt').val();			
			var tot = parseInt(qty) * parseInt(txthamt);			
			$('#txtamt').val(tot);			
		});
		
		
		var i = 0; 
		var k = 0;
		$('#addeqp').on('click',function()
		{
			var eqpid = $('.drpneweqp').val();
			var eqpnm = document.getElementById("drpneweqp").options[(document.getElementById("drpneweqp").options.selectedIndex)].text;
			
			
			var rate = $('.txtrate').val();
			var qty = $('.drpqty').val();
			var amt = $('.txtamt').val();
			var staff = $('.drpnewstf').val();
			var staffnm = document.getElementById("drpnewstf").options[(document.getElementById("drpnewstf").options.selectedIndex)].text;
			var vend = $('.drpnewvend').val();
			var vendnm = document.getElementById("drpnewvend").options[(document.getElementById("drpnewvend").options.selectedIndex)].text;
			var vprice = $('.txtvprice').val();
			var reamrk = $('.txtremark').val();
			
			var length = $('.txtlength').val();
			var width = $('.txtwidth').val();
			var txttype = $('.txttype').val();
			
			var txtassdtl = $('.txtassdtl').val();
			
			if(eqpid=='')
			{
				alert("Plz Select Equipment.");
				return false;
			}
			if(rate=='')
			{
				alert("Plz Fill Rate.");
				return false;
			 }
			if(rate != "")
			{
				if(isNaN(rate))
				{
					alert("Please Only Numeric in rate!!! (Allowed input:0-9)");
					return false;
				}
				// if(rate == 0)
				// {
					// alert("Can't Give rate 0");
					// return false;
				// }
			}
			if(qty=='')
			{
				alert("Plz Fill Qty.");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}
			if(txttype==2)
			{
				if(length=='')
				{
					alert("Plz Fill length.");
					return false;
				}
				if(width=='')
				{
					alert("Plz Fill width.");
					return false;
				}
			}
			if(length != "")
			{
				if(isNaN(length))
				{
					alert("Please Only Numeric in length!!! (Allowed input:0-9)");
					return false;
				}
				if(length == 0)
				{
					alert("Can't GIve length 0");
					return false;
				}
			}
			if(width != "")
			{
				if(isNaN(width))
				{
					alert("Please Only Numeric in width!!! (Allowed input:0-9)");
					return false;
				}
				if(width == 0)
				{
					alert("Can't GIve width 0");
					return false;
				}
			}
			
			
			// alert(eqpid);
			// alert(rate);
			// alert(qty);
			// alert(amt);
			// alert(staff);
			// alert(vend);
			
			i++;
			var div=
					//'<div id="eqrow'+i+'">'+					
					/*'<tr>'+
						'<input   type="hidden"  id="txtieqp" name="txtieqp" value="'+eqpid+'">'+
						'<td><input  type="text"  id="txtieqpnm" name="txtieqpnm" value="'+eqpnm+'"></td>'+
						'<td><input  type="text"  id="txtirate" name="txtirate" value="'+rate+'"></td>'+
						'<td><input  type="text"  id="txtiqty" name="txtiqty" value="'+qty+'"></td>'+
						'<td><input   type="text"  id="txtiamt" name="txtiamt" value="'+amt+'"></td>'+
						'<input   type="hidden"  id="txtistf" name="txtistf" value="'+staff+'">'+
						'<td><input  type="text"  id="txtistfnm" name="txtistfnm" value="'+staffnm+'"></td>'+
						'<input  type="hidden"  id="txtivend" name="txtivend" value="'+vend+'">'+
						'<td><input type="text"  id="txtivendnm" name="txtivendnm" value="'+vendnm+'"></td>'+
						'<td><input  type="text"  id="txtivendprice" name="txtivendprice" value="'+vprice+'"></td>'+
						'<td><input   type="text"  id="txtiremark" name="txtiremark" value="'+reamrk+'"></td>'+						
						'<td><a class="remove" id="'+i+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';*/
					
					'<tr id="eqrow'+i+'">'+
						'<input   type="hidden"  id="hdn[0]['+i+'][equipment][txtieqp]" name="hdn[0]['+i+'][equipment][txtieqp]" value="'+eqpid+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtieqpnm]" name="hdn[0]['+i+'][equipment][txtieqpnm]" value="'+eqpnm+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtirate]" name="hdn[0]['+i+'][equipment][txtirate]" value="'+rate+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtiqty]" name="hdn[0]['+i+'][equipment][txtiqty]" value="'+qty+'">'+
						'<input   type="hidden" id="hdn[0]['+i+'][equipment][txtiamt]" name="hdn[0]['+i+'][equipment][txtiamt]"  class="txtiamt"  value="'+amt+'">'+
						'<input   type="hidden"  id="hdn[0]['+i+'][equipment][txtistf]" name="hdn[0]['+i+'][equipment][txtistf]" value="'+staff+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtistfnm]" name="hdn[0]['+i+'][equipment][txtistfnm]" value="'+staffnm+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtivend]" name="hdn[0]['+i+'][equipment][txtivend]" value="'+vend+'">'+
						'<input type="hidden"  id="hdn[0]['+i+'][equipment][txtivendnm]" name="hdn[0]['+i+'][equipment][txtivendnm]" value="'+vendnm+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtivendprice]" name="hdn[0]['+i+'][equipment][txtivendprice]" class="txtivendprice" value="'+vprice+'">'+
						'<input   type="hidden"  id="hdn[0]['+i+'][equipment][txtiremark]" name="hdn[0]['+i+'][equipment][txtiremark]" value="'+reamrk+'">'+
						'<input  type="hidden"  id="hdn[0]['+i+'][equipment][txtilength]" name="hdn[0]['+i+'][equipment][txtilength]" value="'+length+'">'+
						'<input   type="hidden"  id="hdn[0]['+i+'][equipment][txtiwidth]" name="hdn[0]['+i+'][equipment][txtiwidth]" value="'+width+'">'+
						
						
						
						'<td>'+ eqpnm+'</td>'+
						'<td>'+ txtassdtl+'</td>'+
						'<td>'+ rate+'</td>'+
						'<td>'+ qty+'</td>'+
						'<td class="amount">'+ amt+'</td>'+						
						'<td>'+ staffnm+'</td>'+						
						'<td>'+ vendnm+'</td>'+
						'<td>'+ vprice+'</td>'+
						'<td>'+ reamrk+'</td>'+						
						'<td><a class="remove" id="'+i+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';
					
					
			$('#eqprec').append(div);
			
			var txtrescharge = $('.txtrescharge').val();
			if(txtrescharge == "")
			{			
				var gtot = [];
				$.each($('.txtiamt'), function(){            
					gtot.push($(this).val());
				});
				var total_amt = 0;
				$.each(gtot,function() {
					total_amt += parseInt(this);
				});			
				var vtot = [];
				$.each($('.txtivendprice'), function(){            
					vtot.push($(this).val());
				});
				var total_vamt = 0;
				$.each(vtot,function() {
					total_vamt += parseInt(this);
				});
				$('.txtcharge').val(total_amt);
			    $('.txtvcharge').val(total_vamt);
			}

			$('.drpneweqp').val('');
			$('.txtrate').val('');
			$('.drpqty').val('1');
			$('.txtamt').val('');
			$('.drpnewstf').val('');
			$('.drpnewvend').val('');
			$('.txtvprice').val('');
			$('.txtremark').val('');
			$('.txtlength').val('');
			$('.txtwidth').val('');
			$('#labelLT').hide();
			$('#labelWT').hide();
			$('#txtlength').hide();
			$('#txtwidth').hide();
		   
			
		});
		
		$('#addres').on('click',function()
		{
			var resid = $('.drp_resource').val();
			var resnm = document.getElementById("drp_resource").options[(document.getElementById("drp_resource").options.selectedIndex)].text;		
			var resvend = $('.drpnewresvend').val();
			var resvendnm = document.getElementById("drpnewresvend").options[(document.getElementById("drpnewresvend").options.selectedIndex)].text;
			var resvprice = $('.txtresvprice').val();
			
			var qty = $('.txtresqty').val();
			var rate = $('.txtresrate').val();
			var amt = $('.txtresamt').val();
			var resreamrk = $('.txtresremark').val();		
			
			if(resid=='')
			{
				alert("Plz Select Equipment.");
				return false;
			}
			if(rate=='')
			{
				alert("Plz Fill Rate.");
				return false;
			 }
			if(rate != "")
			{
				if(isNaN(rate))
				{
					alert("Please Only Numeric in rate!!! (Allowed input:0-9)");
					return false;
				}
				// if(rate == 0)
				// {
					// alert("Can't Give rate 0");
					// return false;
				// }
			}
			if(qty=='')
			{
				alert("Plz Fill Qty.");
				return false;
			}
			if(qty != "")
			{
				if(isNaN(qty))
				{
					alert("Please Only Numeric in qty!!! (Allowed input:0-9)");
					return false;
				}
				if(qty == 0)
				{
					alert("Can't GIve qty 0");
					return false;
				}
			}		
			
			k++;
			var resdiv=
					
					
					'<tr id="resrow'+k+'">'+
						'<input   type="hidden"  id="hdn[0]['+k+'][resource][txtires]" name="hdn[0]['+k+'][resource][txtires]" value="'+resid+'">'+
						'<input  type="hidden"  id="hdn[0]['+k+'][resource][txtiresnm]" name="hdn[0]['+k+'][resource][txtiresnm]" value="'+resnm+'">'+
						'<input  type="hidden"  id="hdn[0]['+k+'][resource][txtiqty]" name="hdn[0]['+k+'][resource][txtiqty]" value="'+qty+'">'+
						'<input  type="hidden"  id="hdn[0]['+k+'][resource][txtirate]" name="hdn[0]['+k+'][resource][txtirate]" value="'+rate+'">'+
						'<input   type="hidden" id="hdn[0]['+k+'][resource][rtxtiamt]" name="hdn[0]['+k+'][resource][rtxtiamt]" class="rtxtiamt" value="'+amt+'">'+
						
						'<input  type="hidden"  id="hdn[0]['+k+'][resource][txtivend]" name="hdn[0]['+k+'][resource][txtivend]" value="'+resvend+'">'+
						'<input type="hidden"  id="hdn[0]['+k+'][resource][txtivendnm]" name="hdn[0]['+k+'][resource][txtivendnm]" value="'+resvendnm+'">'+
						'<input  type="hidden"  id="hdn[0]['+k+'][resource][txtiresvendprice]" name="hdn[0]['+k+'][resource][txtiresvendprice]" class="txtiresvendprice" value="'+resvprice+'">'+
						'<input   type="hidden"  id="hdn[0]['+k+'][resource][txtiremark]" name="hdn[0]['+k+'][resource][txtiremark]" value="'+resreamrk+'">'+
						
						'<td>'+ resnm+'</td>'+
						'<td>'+ rate+'</td>'+
						'<td>'+ qty+'</td>'+
						'<td class="amount">'+ amt+'</td>'+	
						'<td>'+ resvendnm+'</td>'+
						'<td>'+ resvprice+'</td>'+						
						'<td>'+ resreamrk+'</td>'+					
						'<td><a class="resremove" id="'+k+'" style= "cursor:pointer; margin-left:15px;">'+
							'<i class="fa fa-times" aria-hidden="true"></i>'+							
						'</a></td>'+
					'</tr>';					
					
			$('#resrec').append(resdiv);
			
			var rgtot = [];
			$.each($('.rtxtiamt'), function(){            
				rgtot.push($(this).val());
			});
			var rtotal_amt = 0;
			$.each(rgtot,function() {
				rtotal_amt += parseInt(this);
			});	
				
			var rvtot = [];
			$.each($('.txtiresvendprice'), function(){            
				rvtot.push($(this).val());
			});
			var total_rvamt = 0;
			$.each(rvtot,function() {
				total_rvamt += parseInt(this);
			});
				
			
			$('.txtvcharge').val(total_rvamt);
			
			$('.txtcharge').val(rtotal_amt);
			$('.txtrescharge').val(rtotal_amt);
			
			
			
			$('.drp_resource').val('');
			$('.txtresrate').val('');
			$('.txtresqty').val('1');
			$('.txtresamt').val('');
			
			$('.drpnewresvend').val('');
			$('.txtresvprice').val('');
			$('.txtresremark').val('');
			
			
		});
		
		$(document).on('click','.resremove',function()
		{
			var button_id = $(this).attr("id");
			$("#resrow"+button_id+"").remove();	

			var rgtot = [];
			$.each($('.rtxtiamt'), function(){            
				rgtot.push($(this).val());
			});		

			var rtotal_amt = 0;
			$.each(rgtot,function() {
				rtotal_amt += parseInt(this);
			});
			
			var rvtot = [];
			$.each($('.txtiresvendprice'), function(){            
				rvtot.push($(this).val());
			});
			var total_rvamt = 0;
			$.each(rvtot,function() {
				total_rvamt += parseInt(this);
			});
				
			
			$('.txtvcharge').val(total_rvamt);
			
			$('.txtcharge').val(rtotal_amt);
			$('.txtrescharge').val(rtotal_amt);
		});
		
		
		
		
		$(document).on('click','.remove',function(){
			var button_id = $(this).attr("id");
			$("#eqrow"+button_id+"").remove();
			var txtrescharge = $('.txtrescharge').val();
			if(txtrescharge == "")
			{
				var gtot = [];
				$.each($('.txtiamt'), function(){            
					gtot.push($(this).val());
				});
				var total_amt = 0;
				$.each(gtot,function() {
					total_amt += parseInt(this);
				});				
				var vtot = [];
				$.each($('.txtivendprice'), function(){            
					vtot.push($(this).val());
				});
				var total_vamt = 0;
				$.each(vtot,function() {
					total_vamt += parseInt(this);
				});				
				$('.txtcharge').val(total_amt);
				$('.txtvcharge').val(total_vamt);
			}
		});
	});	