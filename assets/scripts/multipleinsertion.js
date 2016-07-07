

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
		var div1 = 		
		'<div id="dynamic_field'+i+'">'+
		'	<h4>'+
		'		Order places '+
		'		<a style="margin-left:75%" name="remove" id='+i+' class="btn blue event"><i class="icon-minus"></i></a> <a  name="add" id="add" class="btn blue btn_remove"><i class="icon-plus"></i></a>'+							
		'	</h4>'+
		'	<hr />'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txtvenue">Venue </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="hdn['+i+'][txtvenue]" name="hdn['+i+'][txtvenue]" type="text"  />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txthall">Hall </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="hdn['+i+'][txthall]" name="hdn['+i+'][txthall]" type="text"  />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<label for="txtldmark">Land Mark </label>'+
		'		<div class="input-icon left">'+
		'			<input class="m-wrap" id="hdn['+i+'][txtldmark]" name="hdn['+i+'][txtldmark]" type="text" />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
		'		<div class="pull-left margin-right-20">'+
		'			<label for="txtfromdate">From Date </label>'+
		'			<div id="datetimepickerPF'+i+'" class="input-append date">'+
		'				<input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap" value="" type="text" name="hdn['+i+'][txtfromdate]" id="hdn['+i+'][txtfromdate]"></input>'+
		'				<span class="add-on">'+
		'				  <i class="icon-time" class="icon-calendar"></i>'+
		'				</span>'+
		'			</div>'+
		'		</div>'+
		'		<div class="pull-right margin-right-20">'+
		'		<label for="txttodate" class="well1">To Date </label>'+
		'		<div id="datetimepickerPT'+i+'" class="input-append date">'+
		'			<input data-format="yyyy-MM-dd hh:mm:ss" type="text" class="m-wrap" value="" name="hdn['+i+'][txttodate]" id="hdn['+i+'][txttodate]"></input>'+
		'			<span class="add-on">'+
		'			  <i class="icon-time" class="icon-calendar"></i>'+
		'			</span>'+
		'		</div>'+
		'		</div>	'+								
		'	</div>	'+						
		'	</br>'+
		'	</br>	'+	
		
		'<style>'+
		
		'#popup_equipment'+i+'{'+
			'position: fixed;'+
			'width: 100%;'+
			'height: 900px;'+
			'top: 0;'+
			'left: 0;'+
			'background: #000;'+
			'opacity: .6;'+
			'z-index: 1000;'+
			
			'display: none;'+
		'}'+
		'#popup_equipment_data'+i+'{'+
			'position: absolute;'+
			'background: #fff;'+
			'width: 76%;'+
			'margin: 0 0 0 0%;'+
			'padding: 10px;'+
			'z-index: 2500;'+
			'display:none;'+
			
		'}'+
		
		'#clse'+i+'{'+
			'width: 30px;'+
			'height: 30px;'+
			'border-radius: 50%;'+
			'border: 1px solid #999;'+
			'text-align: center;'+
			'line-height: 30px;'+
			'font-size: 30px;'+
			'float: right;'+
			'cursor: pointer;'+
			
		'}'+
		
		'</style>'+
		
		'	<div id="popup_equipment'+i+'">	'+							
		'	</div>'+
		
		'	<div id="popup_equipment_data'+i+'">	'+							
		'		<span id="clse'+i+'"> &times; </span>	'+												
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
		'						<input class="m-wrap" type="text" id="txteqpnm'+i+'" name="txteqpnm'+i+'" placeholder="Company or Brand name">'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<div class="pull-left margin-right-20">'+
		'						<label> Serial No. </label>'+
		'						<div class="input-icon left">'+
		'							<input class="m-wrap" type="text" id="txtserno'+i+'" name="txtserno'+i+'" />'+
		'						</div>'+
		'					</div>'+
		'					<div class="pull-left margin-right-20">'+
		'						<label> Model No. </label>'+
		'						<div class="input-icon left">'+
		'							<input class="m-wrap" type="text" id="txtmodel'+i+'" name="txtmodel'+i+'" />'+
		'						</div>'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Category </label>'+
		'					<div class="input-icon left">'+
		'						<select class="large m-wrap" id="txtcateqp'+i+'" name="txtcateqp'+i+'" >'+													   
		'						</select>'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label >Purchase Date</label>'+												
		'						<div class="input-append date" id="datetimepicker3'+i+'">'+
		'							<input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap m-ctrl-medium date-picker" type="text"  id="txtpurdate" name="txtpurdate" value="" /><span class="add-on"><i class="icon-calendar"></i></span>'+
		'						</div>	'+											
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Purchase From </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtpurfrm'+i+'" name="txtpurfrm'+i+'" />'+
		'					</div>'+
		'				</div> '+                                   
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Price </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtprice'+i+'" name="txtprice'+i+'" placeholder="Your Equipment Price" />'+
		'					</div>'+
		'				</div>	'+										
		'				<div class="clearfix margin-bottom-10">'+
		'					<label >Type</label>'+
		'					<div class="input-icon left">'+
		'						<select class="large m-wrap" id="drptype'+i+'" name="drptype'+i+'" >'+
		'							<option selected="select" value="">Select Type </option>'+
		'							<option value="1"> Qty </option>'+
		'							<option value="2">Sq.Feet </option>	'+													
		'						</select>'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Remark </label>'+
		'					<div class="input-icon left">'+
		'						<input class="m-wrap" type="text"  id="txtremk'+i+'" name="txtremk'+i+'" placeholder="Your Remarks here" />'+
		'					</div>'+
		'				</div>	'+									
		'				<div class="right-side">'+
		'					<a class="btn blue" id="addEquip'+i+'">Add</a>'+										
		'					<a class="btn blue" id="closebtn'+i+'">CANCEL</a>'+
		'				</div>'+
		'			</form>'+
		'			<span id="msgs">'+											
		'			</span>'+
		'			<script>'+
		'				function shownewEqp'+i+'()'+
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
		'							$(\'#drpneweqp'+i+'\').html(r);'+		
		'						}	'+	
		'					});'+
		'				}	'+									
		'			</script>'+									
		'		</div>	'+							
		'		<br/>'+								
		'	</div>'+
		
		'<script>'+
		
		//show the dropdown in popup equipment
		
		'function showCatInEqp'+i+'()'+
		'{'	+	
			'$.ajax({'+
				'url : \'./includes/addEditEquipmentsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
					'\'showCategoryEqp\' : 1,'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#txtcateqp'+i+'\').html(r);'+
					
				'}'+
				
			'});'+
		'}'+
		 'showCatInEqp'+i+'();'+
		
		
		
		//popup show and hide script
		
		'$(\'#newinseqp'+i+'\').click(function()'+
		'{'+							
			'$(\'#popup_equipment'+i+'\').fadeIn();'+
			'$(\'#popup_equipment_data'+i+'\').fadeIn();'+
			
			
			'return false;'+
		'});'+
		
		'$(\'#clse'+i+'\').click(function(){'+
							
			'$(\'#popup_equipment'+i+'\').fadeOut();'+
			'$(\'#popup_equipment_data'+i+'\').fadeOut();'+
			
			'return false;'+
			'});'+
			
		'$(\'#closebtn'+i+'\').click(function(){'+
							
			'$(\'#popup_equipment'+i+'\').fadeOut();'+
			'$(\'#popup_equipment_data'+i+'\').fadeOut();'+
			
			'return false;'+
			'});'+
		//date picker for eqp in popup	
		
		 '$(\'#datetimepicker3'+i+'\').datetimepicker({'+
					'language: \'pt-BR\''+
					' });'+
		//add multiple equipment in eve for multiple
		
		'$(\'#addEquip'+i+'\').click(function(){'+
			'var txteqpnm    =   $(\'#txteqpnm'+i+'\').val();'+
			'var txtserno     =   $(\'#txtserno'+i+'\').val();'+
			'var txtmodel    =   $(\'#txtmodel'+i+'\').val();'+
			'var txtcateqp     =   $(\'#txtcateqp'+i+'\').val();'+
			'var txtpurdate    =   $(\'#txtpurdate'+i+'\').val();'+
			'var txtpurfrm     =   $(\'#txtpurfrm'+i+'\').val();'+
			'var txtremk    =   $(\'#txtremk'+i+'\').val();'+
			'var txtprice    =   $(\'#txtprice'+i+'\').val();'+
			'var drptype = $(\'#drptype'+i+'\').val();'+
			
			'if(txteqpnm == "" )'+
			'{'+
				'alert(\'Plz Fill Equpment Name \');'+
				'return false;'+
			'}'+
			'if(txtcateqp == "" )'+
			'{'+
				'alert(\'Plz Fill Equpment category \');'+
				'return false;'+
			'}'+
			'if(txtprice == "" )'+
			'{'+
				'alert(\'Plz Fill Price\');'+
				'return false;'+
			'}'+
			'if(drptype == "" )'+
			'{'+
				'alert(\'Plz Select Type\');'+
				'return false;'+
			'}'+
			
			// 'if(!txtprice.match(/^\d+/))'+
			// '{'+
				// 'alert("Please Only Numeric characters For Price! (Allowed input:0-9)");'+
				// 'return false;'+
			// '}'+
			
			'$.ajax({'+
				'url : \'./includes/addEditEquipmentsPost.php\','+
				'type : \'POST\','+
				'async : false,'+
				'data : {'+
					'\'saverecord\'  : 1,'+
					'\'txteqpnm\'   : txteqpnm,'+
					'\'txtserno\'  : txtserno,'+	
					'\'txtmodel\'   : txtmodel,'+
					'\'txtcateqp\'  : txtcateqp,'+
					'\'txtpurdate\'   : txtpurdate,'+
					'\'txtpurfrm\'  : txtpurfrm,'+
					'\'txtremk\'   : txtremk,'+
					'\'txtprice\'  : txtprice,'+
					'\'drptype\'  : drptype,'+
					
				'},'+
				'success : function(re)'+
				'{'+
					
						'$(\'#txteqpnm'+i+'\').val(\'\');'+
						'$(\'#txtserno'+i+'\').val(\'\');'+
						'$(\'#txtmodel'+i+'\').val(\'\');'+
						'$(\'#txtcateqp'+i+'\').val(\'\');'+
						'$(\'#txtpurdate'+i+'\').val(\'\');'+
						'$(\'#txtpurfrm'+i+'\').val(\'\');'+
						'$(\'#txtremk'+i+'\').val(\'\');'+
						'$(\'#txtprice'+i+'\').val(\'\');'+
						'$(\'#drptype'+i+'\').val(\'\');'+		
						
						'shownewEqp'+i+'();'+
						'alert(\'Inserted Equipemnt\');'+
						
						'$(\'#popup_equipment'+i+'\').fadeOut();'+
						'$(\'#popup_equipment_data'+i+'\').fadeOut();'+											
				'}	'+			
			'});'+	
						
		'});'+
		
		
		
		
		'</script>'+
		
		//popup for vendor
		'<style>'+
		
		'#popup_ins_vendor'+i+'{'+
			'position: fixed;'+
			'width: 100%;'+
			'height: 900px;'+
			'top: 0;'+
			'left: 0;'+
			'background: #000;'+
			'opacity: .6;'+
			'z-index: 1000;'+
			
			'display: none;'+
		'}'+
		'#popup_ins_vendor_data'+i+'{'+
			'position: absolute;'+
			'background: #fff;'+
			'width: 76%;'+
			'margin: 0 0 0 0%;'+
			'padding: 10px;'+
			'z-index: 2500;'+
			'display:none;'+
			
		'}'+
		
		'#closevd'+i+'{'+
			'width: 30px;'+
			'height: 30px;'+
			'border-radius: 50%;'+
			'border: 1px solid #999;'+
			'text-align: center;'+
			'line-height: 30px;'+
			'font-size: 30px;'+
			'float: right;'+
			'cursor: pointer;'+
			
		'}'+
		
		'</style>'+
		
		'	<div id="popup_ins_vendor'+i+'">	'+							
		'	</div>'+
		
		'	<div id="popup_ins_vendor_data'+i+'">'+								
		'		<span id="closevd'+i+'"> &times; </span>	'+												
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
		'						<input type="text" id="txtvendnm'+i+'" name="txtvendnm'+i+'" placeholder="Eg; Name of Vendor ..." class="m-wrap" />'+
		'					</div>'+
		'				</div>'+
		'				<div class="clearfix margin-bottom-10">'+
		'					<label> Vendor Company </label>'+
		'					<div class="input-icon left">'+
		'						<input type="text" id="txtvendcmp'+i+'" name="txtvendcmp'+i+'" placeholder="Eg; Name of the company..." class="m-wrap" />'+
		'					</div>'+
		'				</div>	'+																					
		'				<div class="clearfix margin-bottom-10">'+
		'					<label>Class </label>'+
		'					<div class="input-icon left">'+
		'						<select class="medium m-wrap" id="drp_cat_vend'+i+'" name="drp_cat_vend'+i+'">'+
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
		'					<a class="btn blue" id="addvend'+i+'">Add</a>'+										
		'					<a class="btn blue" id="close1vd'+i+'">CANCEL</a>'+
		'				</div>'+	
		'			</form>'+
		'			<span id="msgs">'+											
		'			</span>'+
		'			<script>'+
		'				function shownewVend'+i+'()'+
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
		'							$(\'#drpnewvend'+i+'\').html(r);'+		
		'						}'+		
		'					});'+
		'				}'+										
		'			</script>'+										
		'		</div>	'+															
		'	</div>'+

		'<script>'+
		
		//popup show and hide script vendor
		
		'$(\'#newinsvd'+i+'\').click(function()'+
		'{'+							
			'$(\'#popup_ins_vendor'+i+'\').fadeIn();'+
			'$(\'#popup_ins_vendor_data'+i+'\').fadeIn();'+
			
			'return false;'+
		'});'+
		
		'$(\'#closevd'+i+'\').click(function(){'+
							
			'$(\'#popup_ins_vendor'+i+'\').fadeOut();'+
			'$(\'#popup_ins_vendor_data'+i+'\').fadeOut();'+
			
			'return false;'+
			'});'+
			
		'$(\'#close1vd'+i+'\').click(function(){'+
							
			'$(\'#popup_ins_vendor'+i+'\').fadeOut();'+
			'$(\'#popup_ins_vendor_data'+i+'\').fadeOut();'+
			
			'return false;'+
			'});'+
			
		//add multiple vendor insertion 
		'$(\'#addvend'+i+'\').click(function(){'+
			'var txtvendnm     =   $(\'#txtvendnm'+i+'\').val();'+
			'var drp_cat_vend  =   $(\'#drp_cat_vend'+i+'\').val();'+
			'var txtvendcmp    =   $(\'#txtvendcmp'+i+'\').val();'+
			
			'alert(txtvendnm);	'+	
			//'return false;'+
			
			'if(txtvendnm == "" )'+
			'{'+
				'alert(\'Plz Fill Vendor Name \');'+
				'return false;'+
			'}'+
			'else if(drp_cat_vend == "" )'+
			'{'+
				'alert(\'Plz Select Class From Drop Down \');'+
				'return false;'+
			'}'+
			
			'$.ajax({'+
				'url : \'./includes/allVendorsPost.php\','+
				'type : \'POST\','+
				'async : false,'+
				'data : {'+
					'\'saverecord\'  : 1,'+
					'\'txtvendnm\'   : txtvendnm,'+
					'\'txtvendcmp\'  : txtvendcmp,'+
					'\'drp_cat_vend\'  : drp_cat_vend,'+															
				'},'+
				'success : function(re)'+
				'{'+
					'if(re == 0)'+
					' {'+
						
						'$(\'#txtvendnm\').val(\'\');'+
						'$(\'#txtvendcmp\').val(\'\');'+
						'$(\'#drp_cat_vend\').val(\'\');'+						
						'$(\'#msgs\').addClass(\'fadeInDown\').fadeIn(\'slow\');'+
						'$(\'#msgs\').addClass(\'fadeInDown\').fadeOut(\'slow\');'+						
						
						'shownewVend'+i+'();'+
						'alert(\'inserted successful\');'+
						'$(\'#popup_ins_vendor'+i+'\').fadeOut();'+
						'$(\'#popup_ins_vendor_data'+i+'\').fadeOut();'+
					 '}'+
					
				'}'	+			
			'});'+	
						
		'});'+
		
		
		
		'</script>'+
		
		
		
		'	<div>'+
		'		<input style="width:190px;" type="text"  value="Equipment" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinseqp'+i+'" data-toggle="tooltip" style="cursor:pointer;"> '+
		'		</i>	'+		
		'		<input style="width:120px;" type="text" id="labelLT'+i+'" name="labelLT'+i+'"  value="Length(FT)" readonly />'+
		'		<input style="width:120px;" type="text" id="labelWT'+i+'" name="labelWT'+i+'" value="Width(FT)" readonly />'+								
		'	</div>'+								
		'	<div>	'+							
		'		<select  name="drpneweqp'+i+'" id="drpneweqp'+i+'" class="medium m-wrap drpneweqp'+i+'">'+											
		'		</select>'+		
		
		'		<input class="small m-wrap txtlength"  type="text"  id="txtlength'+i+'" name="txtlength'+i+'" value=""  />'+
		'		<input class="small m-wrap txtwidth"  type="text"  id="txtwidth'+i+'" name="txtwidth'+i+'" value="" />'+									
		'	</div>'+
		'	<div>'+
		'		<input style="width:120px;" type="text"  value="Rate" readonly />'+									
		'		<input style="width:125px;" type="hidden"  value="Type" readonly />	'+								
		'		<input style="width:123px;" type="text"  value="Qty" readonly />'+
		'		<input style="width:123px;" type="text"  value="Amount" readonly />	'+								
		'		<input style="width:200px;" type="text"  value="Staff" readonly />'+
		'		<input style="width:200px;" type="text"  value="Vendor" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinsvd'+i+'" data-toggle="tooltip" style="cursor:pointer;">'+ 
		'		</i>'+
		'		<input style="width:124px;" type="text"  value="Price" readonly />'+									
		'	</div>'+
		'	<div>'+								
		'		<input class="small m-wrap txtrate'+i+'"  type="text"  id="txtrate'+i+'" name="txtrate'+i+'" value=""  />'+									
		'		<input class="small m-wrap txttype'+i+'"  type="hidden"  id="txttype'+i+'" name="txttype'+i+'" value="" readonly />'+									
		'		<input class="small m-wrap drpqty'+i+'"  type="text"  id="drpqty'+i+'" name="drpqty'+i+'" value="1"  />'+									
		'		<input class="small m-wrap txtamt'+i+'" type="text"  id="txtamt'+i+'" name="txtamt'+i+'" value="" readonly />	'+								
		'		<input class="small m-wrap txthamt'+i+'" type="hidden"  id="txthamt'+i+'" name="txthamt'+i+'" value="" readonly />	'+
		
		'		<select name="drpnewstf'+i+'" id="drpnewstf'+i+'" class="medium m-wrap drpnewstf'+i+'"> '+											
		'		</select>'+
		
		'		<select name="drpnewvend'+i+'" id="drpnewvend'+i+'" class="medium m-wrap drpnewvend'+i+'">'+ 											
		'		</select>'+
		
		'		<input class="small m-wrap txtvprice'+i+'" type="text"  id="txtvprice'+i+'" name="txtvprice'+i+'" value="" />	'+								
		'	</div>	'+							
		'	<div>'+
		'		<input  type="text"  value="Remark" readonly />'+
		'	</div>	'+						
		'	<div>'+
		'		<textarea rows="2" cols="140" id="txtremark'+i+'" class="txtremark'+i+'" name="txtremark'+i+'"></textarea>'+
		'		<a name="addeqp'+i+'" class="btn blue" id="addeqp'+i+'" style="margin-left:15px;" >'+
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
		'				<tbody id="eqprec'+i+'">'+
		'			</tbody>'+
		'			</table>'+
		'		</div>'+
		'	</div>	'+								
		'</div>'+
		
		'<script>'+
		
		
		'$(\'#datetimepickerPF'+i+'\').datetimepicker({'+
				'language: \'pt-BR\''+
			 ' });'+
			   '$(\'#datetimepickerPT'+i+'\').datetimepicker({'+
				'language: \'pt-BR\''+
			  '});'+
			  
		'function shownewEqp'+i+'()'+
		'{	'	+
		'	$.ajax({'+
		'		url : \'./includes/newEventsPost.php\','+
		'		type : \'post\','+
		'		async : false,'+
		'		data : {'+
		'			\'shownewEqp\' : 1'+
					
		'		},'+
				'success : function(r)'+
				'{'+
					'$(\'#drpneweqp'+i+'\').html(r);'+	
					
				'}'+
				
			'});'+
		'}'+
		'function shownewStf'+i+'()'+
		'{		'+
			'$.ajax({'+
				'url : \'./includes/newEventsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
					'\'shownewStf\' : 1'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#drpnewstf'+i+'\').html(r);'+	
					
				'}'+
				
			'});'+
		'}'+
		'function shownewVend'+i+'()'+
		'{'	+	
			'$.ajax({'+
				'url : \'./includes/newEventsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
				'	\'shownewVend\' : 1'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#drpnewvend'+i+'\').html(r);'	+
					
				'}'+
				
			'});'+
		'}'+
		'shownewEqp'+i+'();'+
		'shownewStf'+i+'();'+
		'shownewVend'+i+'();	'+  
		

		'$("#drpneweqp'+i+'").on("change", function(){'+
			'var eqpid    =   $(\'#drpneweqp'+i+'\').val();'+
			
			'$.ajax({'+
				'url : \'./includes/newEventsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
					'\'showeqpprice\' : 1,'+
					'\'eqpid\' : eqpid,'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#txtrate'+i+'\').val(r.price);'+
					'$(\'#txtamt'+i+'\').val(r.price);'+
					'$(\'#txthamt'+i+'\').val(r.price);'+
					'$(\'#txttype'+i+'\').val(r.price_type);'+
					'checkType'+i+'();'+
				'}'+
				
			'});'+
		'});'+
		'$(\'#labelLT'+i+'\').hide();'+
		'$(\'#labelWT'+i+'\').hide();'+
		'$(\'#txtlength'+i+'\').hide();'+
		'$(\'#txtwidth'+i+'\').hide();	'+
		
		'function checkType'+i+'()'+
		'{	'+
			'var gettype = $(\'#txttype'+i+'\').val();'+
			
			'if(gettype == 2)'+
			'{'+
				'$(\'#labelLT'+i+'\').show();'+
				'$(\'#labelWT'+i+'\').show();'+
				'$(\'#txtlength'+i+'\').show();'+
				'$(\'#txtwidth'+i+'\').show();'+
			'}'+
			'else'+
			'{'+
				'$(\'#labelLT'+i+'\').hide();'+
				'$(\'#labelWT'+i+'\').hide();'+
				'$(\'#txtlength'+i+'\').hide();'+
				'$(\'#txtwidth'+i+'\').hide();'+
			'}'+			
		'}'+
		
		
		'$("#txtlength'+i+'").on("focusout", function()'+
		'{'+
			'var txtlength    =   $(\'#txtlength'+i+'\').val();'+							
		'});'+
		
		'$("#txtwidth'+i+'").on("focusout", function(){'+
			'var txtlength    =   $(\'#txtlength'+i+'\').val();'+
			'var txtwidth    =   $(\'#txtwidth'+i+'\').val();'+
			'var sqfeet = parseInt(txtlength) * parseInt(txtwidth);'+
			
			'var rate = $(\'#txtrate'+i+'\').val();'+	
			
			'var tot = parseInt(sqfeet) * parseInt(rate);'+
			'$(\'#txthamt'+i+'\').val(tot);'+
			'$(\'#txtamt'+i+'\').val(tot);'+			
		'});'+
		
		'$("#txtrate'+i+'").on("focusout", function()'+
		'{'+
			
			'var gettype = $(\'#txttype'+i+'\').val();'+
			
			'var rate = $(\'#txtrate'+i+'\').val();'+	
			'if(rate == "")'+
			'{'+
				'alert("Plz Insert The Rate!!!");'+
				'return false;'+
			'}'+
			'if(rate != "")'+
			'{'+
				'if(isNaN(rate))'+
				'{'+
					'alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");'+
					'return false;'+
				'}'+
				'if(rate == 0)'+
				'{'+
					'alert("Can not Give rate 0");'+
					'return false;'+
				'}'+
			'}'+
			'if(gettype == 2)'+
			'{'+
				'var txtlength    =   $(\'#txtlength'+i+'\').val();'+
				'var txtwidth    =   $(\'#txtwidth'+i+'\').val();'+
				'var sqfeet = parseInt(txtlength) * parseInt(txtwidth);'+
				
				'var rate = $(\'#txtrate'+i+'\').val();'+	
				
				'var tot = parseInt(sqfeet) * parseInt(rate);'+
				'$(\'#txthamt'+i+'\').val(tot);'+
				'$(\'#txtamt'+i+'\').val(tot);'+
			'}'+
			'else'+
			'{'+
				'var rate = $(\'#txtrate'+i+'\').val();'+	
				'$(\'#txthamt'+i+'\').val(rate);'+
				'$(\'#txtamt'+i+'\').val(rate);'+
			'}'+
		'});'+
		
		
		'$("#drpqty'+i+'").on("focusout", function()'+
		'{'+
			'var qty    =   $(\'#drpqty'+i+'\').val();'+
			'if(qty == "")'+
			'{'+
				'alert("Plz Insert The qty!!!");'+
				'return false;'+
			'}'+
			'if(qty != "")'+
			'{'+
				'if(isNaN(qty))'+
				'{'+
					'alert("Please Only Numeric in qty!!! (Allowed input:0-9)");'+
					'return false;'+
				'}'+
				'if(qty == 0)'+
				'{'+
					'alert("Can not GIve qty 0");'+
					'return false;'+
				'}'+
			'}'+
			'var txthamt = $(\'#txthamt'+i+'\').val();'+			
			'var tot = parseInt(qty) * parseInt(txthamt);'+			
			'$(\'#txtamt'+i+'\').val(tot);'+			
		'});'+
		
		
		//adding in table for multiple
		
		
		'var j = 0;'+
		
		// 'var col = 0;'+
		 'var row'+i+' = 0;'+
		
		'$(\'#addeqp'+i+'\').on(\'click\',function()'+
		'{'+
			'var eqpid = $(\'.drpneweqp'+i+'\').val();'+
			'var eqpnm = document.getElementById("drpneweqp'+i+'").options[(document.getElementById("drpneweqp'+i+'").options.selectedIndex)].text;'+			
			'var rate = $(\'.txtrate'+i+'\').val();'+
			'var qty = $(\'.drpqty'+i+'\').val();'+
			'var amt = $(\'.txtamt'+i+'\').val();'+
			'var staff = $(\'.drpnewstf'+i+'\').val();'+
			'var staffnm = document.getElementById("drpnewstf'+i+'").options[(document.getElementById("drpnewstf'+i+'").options.selectedIndex)].text;'+
			'var vend = $(\'.drpnewvend'+i+'\').val();'+
			'var vendnm = document.getElementById("drpnewvend'+i+'").options[(document.getElementById("drpnewvend'+i+'").options.selectedIndex)].text;'+
			'var vprice = $(\'.txtvprice'+i+'\').val();'+
			'var reamrk = $(\'.txtremark'+i+'\').val();'+
			
			'var length = $(\'.txtlength'+i+'\').val();'+
			'var width = $(\'.txtwidth'+i+'\').val();'+
			'var txttype = $(\'.txttype'+i+'\').val();'+
			'var col = '+i+';'+
			
			'if(eqpid==\'\')'+
			'{'+
				'alert("Plz Select Equipment.");'+
				'return false;'+
			'}'+
			'if(rate==\'\')'+
			'{'+
				'alert("Plz Fill Rate.");'+
				'return false;'+
			 '}'+
			'if(rate != "")'+
			'{'+
				'if(isNaN(rate))'+
				'{'+
					'alert("Please Only Numeric in rate!!! (Allowed input:0-9)");'+
					'return false;'+
				'}'+
				'if(rate == 0)'+
				'{'+
					'alert("Can not Give rate 0");'+
					'return false;'+
				'}'+
			'}'+
			'if(qty==\'\')'+
			'{'+
				'alert("Plz Fill Qty.");'+
				'return false;'+
			'}'+
			'if(qty != "")'+
			'{'+
				'if(isNaN(qty))'+
				'{'+
					'alert("Please Only Numeric in qty!!! (Allowed input:0-9)");'+
					'return false;'+
				'}'+
				'if(qty == 0)'+
				'{'+
					'alert("Can not GIve qty 0");'+
					'return false;'+
				'}'+
			'}'+
			
			
			
			// 'if(txttype==2)'+
			// '{'+
				
				// 'if(length == "")'+
				// '{'+
					// 'alert(txttype);'+
					// 'alert("Plz Fill length.");'+
					// 'return false;'+
				// '}'+
				// 'if(width == "")'+
				// '{'+
					// 'alert("Plz Fill width.");'+
					// 'return false;'+
				// '}'+
			// '}'+
			
			// 'if(txttype==2)'+
			// '{'+
			
				// 'if(length != "")'+
				// '{'+
					// 'if(isNaN(length))'+
					// '{'+
						// 'alert("Please Only Numeric in length!!!");'+
						// 'return false;'+
					// '}'+
					// 'if(length == 0)'+
					// '{'+
						// 'alert("Can not GIve length 0");'+
						// 'return false;'+
					// '}'+
				// '}'+
				// 'if(width != "")'+
				// '{'+
					// 'if(isNaN(width))'+
					// '{'+
						// 'alert("Please Only Numeric in width!!! (Allowed input:0-9)");'+
						// 'return false;'+
					// '}'+
					// 'if(width == 0)'+
					// '{'+
						// 'alert("Can not GIve width 0");'+
						// 'return false;'+
					// '}'+
				// '}'+
			// '}'+
		
			
			'j++;'+
			
			'row'+i+'++;'+
			
			'var div =	'+				
					
					'\'<tr id="eqrow\'+i+\'\'+j+\'">\'+'+
						//'\'<input   type="hidden"  id= "hdn[\'+col+\'][\'+row'+i+'+\'][txtieqp]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtieqp]" value="\'+eqpid+\'">\'+'+
						
						// '\'<input   type="hidden"  id="txtieqp" name="txtieqp" value="\'+eqpid+\'">\'+'+
						// '\'<input  type="hidden"  id="txtieqpnm" name="txtieqpnm" value="\'+eqpnm+\'">\'+'+
						// '\'<input  type="hidden"  id="txtirate" name="txtirate" value="\'+rate+\'">\'+'+
						// '\'<input  type="hidden"  id="txtiqty" name="txtiqty" value="\'+qty+\'">\'+'+
						// '\'<input   type="hidden" class="txtiamt"  id="txtiamt" name="txtiamt" value="\'+amt+\'">\'+'+
						// '\'<input   type="hidden"  id="txtistf" name="txtistf" value="\'+staff+\'">\'+'+
						// '\'<input  type="hidden"  id="txtistfnm" name="txtistfnm" value="\'+staffnm+\'">\'+'+
						// '\'<input  type="hidden"  id="txtivend" name="txtivend" value="\'+vend+\'">\'+'+
						// '\'<input type="hidden"  id="txtivendnm" name="txtivendnm" value="\'+vendnm+\'">\'+'+
						// '\'<input  type="hidden"  id="txtivendprice" name="txtivendprice" value="\'+vprice+\'">\'+'+
						// '\'<input   type="hidden"  id="txtiremark" name="txtiremark" value="\'+reamrk+\'">\'+'+
						// '\'<input  type="hidden"  id="txtilength" name="txtilength" value="\'+length+\'">\'+'+
						// '\'<input   type="hidden"  id="txtiwidth" name="txtiwidth" value="\'+width+\'">\'+'+
						
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtieqp]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtieqp]" value="\'+eqpid+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtieqpnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtieqpnm]" value="\'+eqpnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtirate]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtirate]" value="\'+rate+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtiqty]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtiqty]" value="\'+qty+\'">\'+'+
						'\'<input   type="hidden" class="txtiamt"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtiamt]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtiamt]" value="\'+amt+\'">\'+'+
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtistf]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtistf]" value="\'+staff+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtistfnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtistfnm]" value="\'+staffnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtivend]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtivend]" value="\'+vend+\'">\'+'+
						'\'<input type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtivendnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtivendnm]" value="\'+vendnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtivendprice]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtivendprice]" value="\'+vprice+\'">\'+'+
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtiremark]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtiremark]" value="\'+reamrk+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtilength]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtilength]" value="\'+length+\'">\'+'+
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][txtiwidth]" name="hdn[\'+col+\'][\'+row'+i+'+\'][txtiwidth]" value="\'+width+\'">\'+'+
						
						
						'\'<td>\'+ eqpnm+\'</td>\'+'+
						'\'<td>\'+ rate+\'</td>\'+'+
						'\'<td>\'+ qty+\'</td>\'+'+
						'\'<td class="amount">\'+ amt+\'</td>\'+	'+					
						'\'<td>\'+ staffnm+\'</td>\'+	'+					
						'\'<td>\'+ vendnm+\'</td>\'+'+
						'\'<td>\'+ vprice+\'</td>\'+'+
						'\'<td>\'+ reamrk+\'</td>\'+'+						
						'\'<td><a class="remove'+i+'" id="\'+i+\'\'+j+\'" style= "cursor:pointer; margin-left:15px;">\'+'+
							'\'<i class="fa fa-times" aria-hidden="true"></i>\'+'+							
						'\'</a></td>\'+'+
					'\'</tr>\';	'+	
					
			'$(\'#eqprec'+i+'\').append(div);'+	
			
			
			
			'var gtot = [];'+
            '$.each($(\'.txtiamt\'), function(){  '+          
                'gtot.push($(this).val());'+
            '});'+
			
			'var total_amt = 0;'+
			'$.each(gtot,function() {'+
				'total_amt += parseInt(this);'+
			'});'+
			
			'$(\'.drpneweqp'+i+'\').val(\'\');'+
			'$(\'.txtrate'+i+'\').val(\'\');'+
			'$(\'.drpqty'+i+'\').val(\'1\');'+
			'$(\'.txtamt'+i+'\').val(\'\');'+
			'$(\'.drpnewstf'+i+'\').val(\'\');'+
			'$(\'.drpnewvend'+i+'\').val(\'\');'+
			'$(\'.txtvprice'+i+'\').val(\'\');'+
			'$(\'.txtremark'+i+'\').val(\'\');'+
			'$(\'.txtlength'+i+'\').val(\'\');'+
			'$(\'.txtwidth'+i+'\').val(\'\');'+
			'$(\'#labelLT'+i+'\').hide();'+
			'$(\'#labelWT'+i+'\').hide();'+
			'$(\'#txtlength'+i+'\').hide();'+
			'$(\'#txtwidth'+i+'\').hide();'+
		   '$(\'.txtcharge\').val(total_amt);'+
			
		'});'+
		'$(document).on(\'click\',\'.remove'+i+'\',function(){'+
			'var button_id = $(this).attr("id");'+
			'$("#eqrow"+button_id+"").remove();'+
			 'var gtot = [];'+
				'$.each($(\'.txtiamt\'), function(){ '+           
					'gtot.push($(this).val());'+
				'});'+
				
				'var total_amt = 0;'+
				'$.each(gtot,function() {'+
					'total_amt += parseInt(this);'+
				'});'+
				
			'$(\'.txtcharge\').val(total_amt);'+
		'});'+
		
			 
		'</script>';
		
	
		$('#multiinsert').append(div1);
		
		

	}