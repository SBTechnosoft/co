// $('#addtemp').click(function() 
// {
// var txttemplate = tinyMCE.get('txttemplate').getContent();
// var data1= '<table class="tg" height = "780" width ="1020" border="1">  <tr>    <th class="tg-baqh"><img style="height:40px; width:100px;" src="images/sblogo.png" ></th>    <th class="tg-ywh4l0" colspan="7"><b>Event information</b><br></th>  </tr>  <tr>    <td class="tg-ywh4l0" colspan="8"><b>Event Detail</b><br></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Event Name:<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Event Desc. :<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-yw4l0" colspan="8"><b>Client Detail</b><br></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Client Name:<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr> <tr>    <td class="tg-baqhsub" colspan="2">Client Company:<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Email Id:<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Work:</td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Home:</td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Mobile:</td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Status<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-ywh4l0" colspan="8"><b>Event Places Detail</b><br></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Vennue:</td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">Hall:</td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">From Date<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-baqhsub" colspan="2">To Date<br></td>    <td class="tg-ywh4lsub" colspan="6"></td>  </tr>  <tr>    <td class="tg-ywh4l0" colspan="8"><b>Equipment Detail</b><br></td>  </tr>  <tr>    <td class="tg-baqhsub1" colspan="4">Equipment<br></td>	    <td class="tg-baqhsub2">Qty</td>    <td class="tg-baqhsub3">Staff</td>    <td class="tg-baqhsub4">Vendor</td>    <td class="tg-baqhsub5">Remark</td>  </tr>  <tr>    <td class="" colspan="4">camera</td>    <td class="">5</td>    <td class="">divyesh</td>    <td class="">rajesh</td>    <td class="">its testing<br></td>  </tr>  </table>';
// tinyMCE.get('txttemplate').setContent(data1);

// });

$('#updtemp').click(function() 
	{
		var txttempid = $('#txttempid').val();
		var txtename = $('#txtename').val();
		var txttemplate = tinyMCE.get('txttemplate').getContent();
		//alert (txttemplate);
		$.ajax({
				url : './includes/templateSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'update' : 1,
					'txttempid' : txttempid,
					'txtename' : txtename,
					'txttemplate' : txttemplate,
					
				},
				success : function(r)
				{
					//$('#showTemplate').html(r);
					
						alert("Update Successfully!!!")
					
					
				}
				
			});
	});

function showdata()
		{		
			$.ajax({
				url : './includes/templateSettingsPost.php',
				type : 'post',
				async : false,
				data : {
					'show' : 1
					
				},
				success : function(r)
				{
					$('#showTemplate').html(r);
					
					
				}
				
			});
		}
		showdata();
//edit
		$('body').delegate('.edit','click',function()
		{
			//alert('hello Divyesh');
			var id = $(this).data('id');
			// alert (id);
			// return false;
			
			$.ajax({
				url : 'includes/templateSettingsPost.php',
				type : 'POST',
				async : false,
				data : {
					'edit'  : 1,
					'id' 	: id
										
				},
				success : function(e)
				{
					$('#txttempid').val(e.template_id);
					$('#txtename').val(e.template_name);					
					tinyMCE.get('txttemplate').setContent(e.template_body);
				}
				
			});		
		});		
		//end