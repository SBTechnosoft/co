

$(document).on('click','#add',function()
	{
		addnewdiv();		
	});

	$(document).on('click','.event',function(){
		var button_id = $(this).attr("id");
		$("#dynamic_field"+button_id+"").remove();
	});
	var i = 0;
	function addnewdiv()
	{
		i++;
		var div = 
		'<div id="dynamic_field'+i+'">'+
		  '<h5>'+
			'Event places' +
			// '<a  name="add" id="add" class="btn blue event">'+
			  // '<i class="icon-plus">'+
			  // '</i>'+							
			// '</a>'+	
			// '<a style="margin-left:75%" name="add" id="add" class="btn blue event">'+
			  // '<i class="icon-plus">'+
			  // '</i>'+							
			// '</a>'+
			'<a style="margin-left:75%" name="remove" id='+i+' class="btn blue event"><i class="icon-minus"></i></a> <a  name="add" id="add" class="btn blue btn_remove"><i class="icon-plus"></i></a>'+
			
			
		  '</h5>'+
		  '<hr>'+
		  '<div class="tab-content">'+
			'<table>'+
			  '<div class="input-icon left">'+
				'<tr>'+
				  '<td class="names">Venue'+ 
				  '</td>'+
				  '<td>'+
					'<input class="small-box" id="txtvenue" name="txtvenue" type="text" />'+
				  '</td>'+
				'</tr>'+
			  '</div>'+
			  '<div class="input-icon left">'+
				'<tr>'+
				  '<td class="names">Land Mark'+
				  '</td>'+
				  '<td>'+
					'<input class="small-box" id="txtldmark" name="txtldmark" type="text" />'+
				  '</td>'+
				'</tr>'+
			  '</div>'+
			  '<div class="input-icon left">'+
				'<div class="controls">'+
				  '<tr>'+
					'<td>From Date </td>'+
					'<td><div id="datetimepickerPF'+i+'" class="input-append date">'+
						'<input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="txtfromdate" id="txtfromdate"></input>'+
						'<span class="add-on">'+
						  '<i class="icon-time" class="icon-calendar">'+
						  '</i>'+
						'</span>'+
					  '</div>'+
					'</td>'+
					'<td><div class="well1">To Date </div> </td>'+
					'<td><div id="datetimepickerPT'+i+'" class="input-append date">'+
						'<input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="txttodate" id="txttodate"></input>'+
						'<span class="add-on">'+
						  '<i class="icon-time" class="icon-calendar">'+
						  '</i>'+
						'</span>'+
					  '</div>'+
					'</td>'+									
				'</tr>'+
				'</div>'+
			  '</div>'+
			  '<div class="input-icon left">'+
				'<div class="controls">'+
				  '<tr>'+
					'<td class="names">Equipment'+
					'</td>'+
					'<td>'+
					  '<div class="multiselect">'+
						'<div class="selectBox" id="eqpdrp'+i+'" >'+
						  '<select>'+
							'<option>Select an option'+
							'</option>'+
						  '</select>'+
						  '<div class="overSelect">'+
						  '</div>'+
						'</div>'+
						'<div id="checkboxEqp'+i+'" class="checkboxesEqp'+i+'" style="display : none;" >'+																	
						'</div>'+
					  '</div>'+
					'</td>'+
				  '</tr>'+
				'</div>'+
			  '</div>'+
			  '<div class="input-icon left">'+
				'<div class="controls">'+
				  '<tr>'+
					'<td>Staff'+
					'</td>'+
					'<td>'+
					  '<div class="multiselect">'+
						'<div class="selectBox" id="stfdrp'+i+'" >'+
						  '<select>'+
							'<option>Select an option'+
							'</option>'+
						  '</select>'+
						  '<div class="overSelect">'+
						  '</div>'+
						'</div>'+
						'<div id="checkboxStf'+i+'" class="checkboxesStf'+i+'" style="display : none;">'+																	
						'</div>'+
					  '</div>'+
					'</td>'+
				  '</tr>'+
				'</div>'+
			  '</div>'+
			'</table>'+
		  '</div>'+
		'</div>'+
		'<script>'+
			'var expandedEqp'+i+' = false;'+
				'$(document).on(\'click\',\'#eqpdrp'+i+'\',function()'+
				'{'	+												
					'var checkboxesEqp = document.getElementById("checkboxEqp'+i+'");'+
					'if (!expandedEqp'+i+') {'+
						'checkboxesEqp.style.display = "block";'+
						'expandedEqp'+i+' = true;'+
					'} else {'+
						'checkboxesEqp.style.display = "none";'+
						'expandedEqp'+i+' = false;'+
					'}'	+						
				'});'+				
				
			'var expandedStf'+i+' = false;'+
				'$(document).on(\'click\',\'#stfdrp'+i+'\',function()'+
				'{'+
					
					'var checkboxesStf = document.getElementById("checkboxStf'+i+'");'+
					'if (!expandedStf'+i+') {'+
						'checkboxesStf.style.display = "block";'+
						'expandedStf'+i+' = true;'+
					'} else {'+
						'checkboxesStf.style.display = "none";'+
						'expandedStf'+i+' = false;'+
					'}	'+						
				'});'+	
				
			'function showdataEqp'+i+'()'+
			'{'	+	
				'$.ajax({'+
					'url : \'./includes/newEventsPost.php\','+
					'type : \'post\','+
					'async : false,'+
					'data : {'+
						'\'showEqp\' : 1'+
						
					'},'+
					'success : function(r)'+
					'{'+
						'$(\'.checkboxesEqp'+i+'\').html(r);'+	
						
					'}'+
					
				'});'+
			'}'+	
				
				
			'showdataEqp'+i+'();'+
			
			'function showdataStf'+i+'()'+
			'{'	+	
				'$.ajax({'+
					'url : \'./includes/newEventsPost.php\','+
					'type : \'post\','+
					'async : false,'+
					'data : {'+
						'\'showStf\' : 1'+
						
					'},'+
					'success : function(r1)'+
					'{'+
						'$(\'.checkboxesStf'+i+'\').html(r1);	'+				
						
					'}'+
					
				'});'+
			'}'+
			
			
			'showdataStf'+i+'();'+
			
			'$(\'#datetimepickerPF'+i+'\').datetimepicker({'+
				'language: \'pt-BR\''+
			 ' });'+
			   '$(\'#datetimepickerPT'+i+'\').datetimepicker({'+
				'language: \'pt-BR\''+
			  '});'+
		'</script>';
		
		
		var div1 = 		
		'<div id="dynamic_field">'+
		'	<h4>'+
		'		Order places '+
		'		<a name="add" id="add" class="btn blue event">'+
		'			<i class="icon-plus"></i>'+								
		'		</a>	'+								
		'	</h4>'+
		'	<hr />'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txtvenue">Venue </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="txtvenue" name="txtvenue" type="text"  />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txthall">Hall </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="txthall" name="txthall" type="text"  />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txtldmark">Land Mark </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="txtldmark" name="txtldmark" type="text" />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<div class="pull-left margin-right-20">'+
		'			<label for="txtfromdate">From Date </label>'+
		'			<div id="datetimepickerPF" class="input-append date">'+
		'				<input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap" value="<?php echo Date;?>" type="text" name="txtfromdate" id="txtfromdate"></input>'+
		'				<span class="add-on">'+
		'				  <i class="icon-time" class="icon-calendar"></i>'+
		'				</span>'+
		'			</div>'+
		'		</div>'+
		'		<div class="pull-right margin-right-20">'+
		'		<label for="txttodate" class="well1">To Date </label>'+
		'		<div id="datetimepickerPT" class="input-append date">'+
		'			<input data-format="yyyy-MM-dd hh:mm:ss" type="text" class="m-wrap" value="<?php echo Date;?>" name="txttodate" id="txttodate"></input>'+
		'			<span class="add-on">'+
		'			  <i class="icon-time" class="icon-calendar"></i>'+
		'			</span>'+
		'		</div>'+
		'		</div>	'+								
		'	</div>	'+						
		'	</br>'+
		'	</br>	'+							
		'	<div id="popup_equipment">	'+							
		'	</div>'+
		'	<div id="popup_equipment_data">	'+							
		'		<span id="close"> &times; </span>	'+												
		'		<h4 align="center" style= "font-weight:bold;"> Add Equipemnt Detail </h4>'+
		'		<br>			'+							
		'		<div class="TableRowing">'+
		'			&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>'+
		'			<strong >Add Equipemnt</strong>'+
		'		</div>'+
		'		</br></br>'+
		'		<div class="span8 booking-search">'+
		'			<form action="#">'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Name </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text" id="txteqpnm" name="txteqpnm" placeholder="Company or Brand name">'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<div class="pull-left margin-right-20">'+
		'						<label> Serial No. </label>'+
		'						<div class="input-icon left">'+
		'							<input class="m-wrap" type="text" id="txtserno" name="txtserno" />'+
		'						</div>'+
		'					</div>'+
		'					<div class="pull-left margin-right-20">'+
		'						<label> Model No. </label>'+
		'						<div class="input-icon left">'+
		'							<input class="m-wrap" type="text" id="txtmodel" name="txtmodel" />'+
		'						</div>'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Category </label>'+
		'					<div class="input-icon left">'+
		'						<select class="large m-wrap" id="txtcateqp" name="txtcateqp" >'+													   
		'						</select>'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label >Purchase Date</label>'+												
		'						<div class="input-append date" id="datetimepicker3">'+
		'							<input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap m-ctrl-medium date-picker" type="text"  id="txtpurdate" name="txtpurdate" value="<?php echo Date;?>" /><span class="add-on"><i class="icon-calendar"></i></span>'+
		'						</div>	'+											
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Purchase From </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtpurfrm" name="txtpurfrm" />'+
		'					</div>'+
		'				</div> '+                                   
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Price </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtprice" name="txtprice" placeholder="Your Equipment Price" />'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label >Type</label>'+
		'					<div class="input-icon left">'+
		'						<select class="large m-wrap" id="drptype" name="drptype" >'+
		'							<option selected="select" value="">Select Type </option>'+
		'							<option value="1"> Qty </option>'+
		'							<option value="2">Sq.Feet </option>	'+													
		'						</select>'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Remark </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtremk" name="txtremk" placeholder="Your Remarks here" />'+
		'					</div>'+
		'				</div>	'+									
		'				<div class="right-side">'+
		'					<a class="btn blue" id="addEquip">Add</a>'+										
		'					<a class="btn blue" id="close1">CANCEL</a>'+
		'				</div>'+
		'			</form>'+
		'			<span id="msgs">'+											
		'			</span>'+
		'			<script>'+
		'				function shownewEqp()'+
		'				{		'+
		'					$.ajax({'+
		'						url : \'./includes/newEventsPost.php\','+
		'						type : \'post\','+
		'						async : false,'+
		'						data : {'+
		'							\'shownewEqp\' : 1'+									
		'						},'+
		'						success : function(r)'+
		'						{'+
		'							$(\'#drpneweqp\').html(r);'+		
		'						}	'+	
		'					});'+
		'				}	'+									
		'			</script>'+									
		'		</div>	'+							
		'		<br/>'+								
		'	</div>'+								
		'	<div id="popup_ins_vendor">	'+							
		'	</div>'+
		'	<div id="popup_ins_vendor_data">'+								
		'		<span id="closevd"> &times; </span>	'+												
		'		<h4 align="center" style= "font-weight:bold;"> Add Vendor Detail </h4>'+
		'		<br>	'+								
		'		<div class="TableRowing">'+
		'			&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>'+
		'			<strong >Add Vendor</strong>'+
		'		</div>'+
		'		</br></br>'+
		'		<div class="span8 booking-search">'+
		'			<form action="#">'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Vendor Name </label>'+
		'					<div class="input-icon left">'+
		'						<input type="text" id="txtvendnm" name="txtvendnm" placeholder="Eg; Name of Vendor ..." class="m-wrap" />'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Vendor Company </label>'+
		'					<div class="input-icon left">'+
		'						<input type="text" id="txtvendcmp" name="txtvendcmp" placeholder="Eg; Name of the company..." class="m-wrap" />'+
		'					</div>'+
		'				</div>	'+																					
		'				<div class="clearfix margin-bottom-10">'+
		'					<label>Class </label>'+
		'					<div class="input-icon left">'+
		'						<select class="medium m-wrap" id="drp_cat_vend" name="drp_cat_vend">'+
		'							<option select="selected" value="">'+
		'								Select Class'+
		'							</option>'+
		'							<option  value="1">'+
		'								Class 1'+
		'							</option>'+
		'							<option value="2">'+
		'								Class 2'+
		'							</option>'+
		'							<option value="3">'+
		'							   Class 3'+
		'							</option>'+
		'							<option value="4">'+
		'								Class 4'+
		'							</option>'+
		'						</select>'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="right-side">'+
		'					<a class="btn blue" id="addvend">Add</a>'+										
		'					<a class="btn blue" id="close1vd">CANCEL</a>'+
		'				</div>'+	
		'			</form>'+
		'			<span id="msgs">'+											
		'			</span>'+
		'			<script>'+
		'				function shownewVend()'+
		'				{	'+	
		'					$.ajax({'+
		'						url : \'./includes/newEventsPost.php\','+
		'						type : \'post\','+
		'						async : false,'+
		'						data : {'+
		'							\'shownewVend\' : 1'+							
		'						},'+
		'						success : function(r)'+
		'						{'+
		'							$(\'#drpnewvend\').html(r);'+		
		'						}'+		
		'					});'+
		'				}'+										
		'			</script>'+										
		'		</div>	'+															
		'	</div>'+														
		'	<div>'+
		'		<input style="width:190px;" type="text"  value="Equipment" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> '+
		'		</i>	'+		
		'		<input style="width:120px;" type="text" id="label1" name="label1"  value="Length(FT)" readonly />'+
		'		<input style="width:120px;" type="text" id="label2" name="label2" value="Width(FT)" readonly />'+								
		'	</div>'+								
		'	<div>	'+							
		'		<select  name="drpneweqp" id="drpneweqp" class="medium m-wrap drpneweqp">'+											
		'		</select>'+									
		'		<input class="small m-wrap txtlength"  type="text"  id="txtlength" name="txtlength" value=""  />'+
		'		<input class="small m-wrap txtwidth"  type="text"  id="txtwidth" name="txtwidth" value="" />'+									
		'	</div>'+
		'	<div>'+
		'		<input style="width:120px;" type="text"  value="Rate" readonly />'+									
		'		<input style="width:125px;" type="hidden"  value="Type" readonly />	'+								
		'		<input style="width:123px;" type="text"  value="Qty" readonly />'+
		'		<input style="width:123px;" type="text"  value="Amount" readonly />	'+								
		'		<input style="width:200px;" type="text"  value="Staff" readonly />'+
		'		<input style="width:200px;" type="text"  value="Vendor" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;">'+ 
		'		</i>'+
		'		<input style="width:124px;" type="text"  value="Price" readonly />'+									
		'	</div>'+
		'	<div>'+								
		'		<input class="small m-wrap txtrate"  type="text"  id="txtrate" name="txtrate" value=""  />'+									
		'		<input class="small m-wrap txttype"  type="hidden"  id="txttype" name="txttype" value="" readonly />'+									
		'		<input class="small m-wrap drpqty"  type="text"  id="drpqty" name="drpqty" value="1"  />'+									
		'		<input class="small m-wrap txtamt" type="text"  id="txtamt" name="txtamt" value="" readonly />	'+								
		'		<input class="small m-wrap txthamt" type="hidden"  id="txthamt" name="txthamt" value="" readonly />	'+								
		'		<select name="drpnewstf" id="drpnewstf" class="medium m-wrap drpnewstf"> '+											
		'		</select>'+
		'		<select name="drpnewvend" id="drpnewvend" class="medium m-wrap drpnewvend">'+ 											
		'		</select>'+
		'		<input class="small m-wrap txtvprice" type="text"  id="txtvprice" name="txtvprice" value="" />	'+								
		'	</div>	'+							
		'	<div>'+
		'		<input  type="text"  value="Remark" readonly />'+
		'	</div>	'+						
		'	<div>'+
		'		<textarea rows="2" cols="140" id="txtremark" class="txtremark" name="txtremark"></textarea>'+
		'		<a name="addeqp" class="btn blue" id="addeqp" style="margin-left:15px;" >'+
		'			Add	'+							
		'		</a>'+
		'	</div>'+
		'	<br/>'+								
		'	<div class="portlet box green">'+
		'		<div class="portlet-title">'+
		'			<div class="caption"><i class="icon-reorder"></i>Equipments</div>'+
		'		</div>'+
		'		<div class="portlet-body">'+
		'			<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">'+
		'				<thead>'+
		'					<tr>'+
		'						<th> Equipment</th>'+
		'						<th> Rate</th>'+
		'						<th> Qty</th>'+
		'						<th> Amount</th>'+
		'						<th> Staff</th>'+
		'						<th> Vendor</th>'+
		'						<th> Price</th>'+
		'						<th> Remark</th>'+
		'						<th> Action</th>'+													 
		'					</tr>'+
		'				</thead>'+
		'				<tbody id="eqprec">'+
		'			</tbody>'+
		'			</table>'+
		'		</div>'+
		'	</div>	'+								
		'</div>';
		
	
		$('#multiinsert').append(div1);
		
		

	}