

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
		'		<div class="pull-left margin-right-10">'+
		'			<div class="input-icon input-append">'+
		'				<label for="txtvenue">Venue: </label>'+
		'			</div>'+	
		'			<input class="venuetxt m-wrap" id="hdn['+i+'][txtvenue]" name="hdn['+i+'][txtvenue]" type="text"  />'+	
		'		</div>'+
		'		<div class="pull-left margin-right-10">'+
		'			<div class="input-icon input-append abc1">'+
		'				<label for="txthall">Hall: </label>'+
		'			</div>'+
		'			<input class="venuetxt m-wrap" id="hdn['+i+'][txthall]" name="hdn['+i+'][txthall]" type="text"  />'+
		'		</div>'+
		'		<div class="pull-right margin-right-10">'+
		'			<div class="input-icon input-append">'+
		'				<label for="txtldmark">Land Mark: </label>'+
		'			</div>'+
		'			<input class="venuetxt m-wrap" id="hdn['+i+'][txtldmark]" name="hdn['+i+'][txtldmark]" type="text" />'+
		'		</div>'+
		'	</div>'+
		'	<div class="clearfix margin-bottom-10">'+
	    '		<div class="pull-left margin-right-10">'+
		'			<div class="input-icon input-append">'+
		'				<label for="txtfunction">Function: </label>'+
		'			</div>'+
		'			<select name="hdn['+i+'][txtfunction]" id="hdn['+i+'][txtfunction]" class="medium m-wrap">'+
		'				<option value="Mahendi">Mahendi</option>'+
		'				<option value="Sangit">Sangit</option>'+
		'				<option value="Reception">Reception</option>'+
		'				<option value="Ghruhshanti">Ghruhshanti</option>'+
		'			</select>'+
		'		</div>'+
		'		<div class="pull-left margin-right-10" style="margin-left:40px;">'+
		'			<div class="input-icon input-append">'+
		'			<label for="txtfromdate">From Date: </label>'+
		'	</div>'+
		'			<div id="datetimepickerPF'+i+'" class="input-append date">'+
		'				<input data-format="dd-MM-yyyy HH:mm PP" class="fdate1 m-wrap" value="" type="text" name="hdn['+i+'][txtfromdate]" id="hdn['+i+'][txtfromdate]"></input>'+
		'				<span class="add-on">'+
		'				  <i class="icon-time" class="icon-calendar"></i>'+
		'				</span>'+
		'			</div>'+
		'		</div>'+
		'		<div class="pull-right margin-right-10">'+
		'			<div class="input-icon input-append">'+
		'		<label for="txttodate" class="well1">To Date: </label>'+
		'		</div>'+
		'		<div id="datetimepickerPT'+i+'" class="input-append date">'+
		'			<input data-format="dd-MM-yyyy HH:mm PP" type="text" class="fdate1 m-wrap" value="" name="hdn['+i+'][txttodate]" id="hdn['+i+'][txttodate]"></input>'+
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
		'var hiddenres=$(\'#hiddenresource\').val();'+
		'if(hiddenres=="resource")'+
		'{'+
		 '$(\'#a1'+i+'\').show();'+
		 '+$(\'#b2'+i+'\').hide();'+
		'}'+
		'else if(hiddenres=="equipment")'+
		'{'+
		 '$(\'#a1'+i+'\').hide();'+
		 '+$(\'#b2'+i+'\').show();'+
		'}'+
		'else'+
		'{'+
		 '$(\'#a1'+i+'\').show();'+
		 '+$(\'#b2'+i+'\').show();'+
	     '}'+
		 ' $(\'#datetimepickerPF'+i+'\').datetimepicker({'+
         'format: \'dd/MM/yyyy HH:mm PP\','+
         'language: \'en\','+
         'pick12HourFormat: true,'+
        
         '});'+
		 ' $(\'#datetimepickerPT'+i+'\').datetimepicker({'+
         'format: \'dd/MM/yyyy HH:mm PP\','+
         'language: \'en\','+
         'pick12HourFormat: true,'+
        
         '});'+
		' var picker3 = $(\'#datetimepickerPF'+i+'\').data(\'datetimepicker\');'+
		'picker3.setDate($(\'#datetimepicker1\').data(\'datetimepicker\')._date);'+
		'var picker4 = $(\'#datetimepickerPT'+i+'\').data(\'datetimepicker\');'+
		'picker4.setDate($(\'#datetimepicker1\').data(\'datetimepicker\')._date);'+
		'</script>'+
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
				'alert(\'Plz Fill Equipment Name \');'+
				'return false;'+
			'}'+
			'if(txtcateqp == "" )'+
			'{'+
				'alert(\'Plz Fill Equipment category \');'+
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
		
		//inserting resourses
		'<style>'+
			'#popup_ins_resource'+i+'{'+
				'position: fixed;'+
				'width: 100%;'+
				'height: 900px;'+
				'top: 0;'+
				'left: 0;'+
				'background: #000;'+
				'opacity: .6;'+
				'z-index: 1000;	'+			
				'display: none;'+
			'}'+
			'#popup_ins_resource_data'+i+'{'+
				'position: absolute;'+
				'background: #fff;'+
				'width: 76%;'+
				'margin: 0 0 0 0%;'+
				'padding: 10px;'+
				'z-index: 2500;'+
				'display:none;'+				
			'}'+
			'#closeres'+i+'{'+
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
		
			'<div id="popup_ins_resource'+i+'">'+							
			'</div>'+
			'<div id="popup_ins_resource_data'+i+'">	'+							
				'<span id="closeres'+i+'"> &times; </span>'+													
				'<h4 align="center" style= "font-weight:bold;"> Add Resource Detail </h4>'+
				'<br>'+									
				'<div class="TableRowing">'+
					'&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>'+
					'<strong >Add Resource</strong>'+
				'</div>'+
				'</br></br>'+
				'<div class="span8 booking-search">'+					
						'<div class="clearfix margin-bottom-10">'+
							'<label> Resource Name </label>'+
							'<div class="input-icon left">'+
								'<input type="text" id="txtresnm'+i+'" name="txtresnm'+i+'" placeholder="Eg; Name of Resource ..." class="m-wrap" />'+
							'</div>'+
						'</div>'+
						'<div class="clearfix margin-bottom-10">'+
							'<label> Resource Price </label>'+
							'<div class="input-icon left">'+
								'<input type="text" id="txtresprice'+i+'" name="txtresprice'+i+'" placeholder="Eg; Price of the Resource..." class="m-wrap" />'+
							'</div>'+
						'</div>'+						
						'<div class="right-side">'+
							'<a class="btn blue" id="addResource'+i+'">Add</a>'+										
							'<a class="btn blue" id="close1res'+i+'">CANCEL</a>'+
						'</div>'+					
					'<span id="msgs">'+						
					'</span>'+
					'<script>'+
						'function shownewRes'+i+'()'+
						'{	'+	
							'$.ajax({'+
								'url : \'./includes/newEventsPost.php\','+
								'type : \'post\','+
								'async : false,'+
								'data : {'+
									'\'shownewRes\' : 1'+
									
								'},'+
								'success : function(r)'+
								'{'+
									'$(\'#drp_resource'+i+'\').html(r);'+	
									
								'}'+
								
							'});'+
						'}	'+									
					'</script>'+				
				'</div>'+																
			'</div>'+
			'<script>'+
				'$(\'#newinsres'+i+'\').click(function(){'+							
					'$(\'#popup_ins_resource'+i+'\').fadeIn();'+
					'$(\'#popup_ins_resource_data'+i+'\').fadeIn();'+					
					'return false;'+
					'});'+
				'$(\'#closeres'+i+'\').click(function(){'+					
					'$(\'#popup_ins_resource'+i+'\').fadeOut();'+
					'$(\'#popup_ins_resource_data'+i+'\').fadeOut();'+					
					'return false;'+
					'});'+
				'$(\'#close1res'+i+'\').click(function(){'+					
					'$(\'#popup_ins_resource'+i+'\').fadeOut();'+
					'$(\'#popup_ins_resource_data'+i+'\').fadeOut();'+					
					'return false;'+
					'});'+
			'</script>'+
			'<script>'+				
				'$(\'#addResource'+i+'\').click(function(){'+
					'var txtresnm    =   $(\'#txtresnm'+i+'\').val();'+
					'var txtresprice     =   $(\'#txtresprice'+i+'\').val();'+					
					'if(txtresnm == "" )'+
					'{'+
						'alert(\'Plz Fill Resource Name \');'+
						'return false;'+
					'}'+
					'if(txtresprice == "" )'+
					'{'+
						'alert(\'Plz Fill Resource Price \');'+
						'return false;'+
					'}'+					
					'$.ajax({'+
						'url : \'./includes/resourcesCategoryPost.php\','+
						'type : \'POST\','+
						'async : false,'+
						'data : {'+
							'\'saverecord\'  : 1,'+
							'\'txtresnm\'   : txtresnm,'+
							'\'txtresprice\'  : txtresprice,'+															
						'},'+
						'success : function(re)'+
						'{'+
							'if(re == 0)'+
							' {	'+							
								'$(\'#txtresnm'+i+'\').val(\'\');'+
								'$(\'#txtresprice'+i+'\').val(\'\');'+								
								'$(\'#msgs\').addClass(\'fadeInDown\').fadeIn(\'slow\');'+
								'$(\'#msgs\').addClass(\'fadeInDown\').fadeOut(\'slow\');'+
								'shownewRes'+i+'();'+
								'$(\'#popup_ins_resource'+i+'\').fadeOut();'+
								'$(\'#popup_ins_resource_data'+i+'\').fadeOut();'+
								
							' }	'+				
						'}'+				
					'});'+	
								
				'});'+	
			'</script>'+
			
		'<div id="a1'+i+'">'+
		'<div>'+
			'<input style="width:207px;" type="text"  value="Resources" readonly />	'+								
				'<i class="fa fa-info-circle" title="New" id="newinsres'+i+'" data-toggle="tooltip" style="cursor:pointer;"></i>	'+							
			'<input style="width:121px;" type="text"  value="Rate" readonly />'+
			'<input style="width:123px;" type="text"  value="Qty" readonly />'+
			'<input style="width:120px;" type="text"  value="Amount" readonly />'+	
			'<input style="width:205px;" type="text"  value="Vendor" readonly />'+	
			'<input style="width:124px;" type="text"  value="Price" readonly />'+
		'</div>'+
		'<div>'+
		
			'<select  name="drp_resource'+i+'" id="drp_resource'+i+'" class="medium m-wrap drp_resource'+i+'">'+											
			'</select>'	+
			'<input class="small m-wrap txtresrate'+i+'"  type="text"  id="txtresrate'+i+'" name="txtresrate'+i+'" value=""  />'+	
			'<input class="small m-wrap txtresqty'+i+'"  type="text"  id="txtresqty'+i+'" name="txtresqty'+i+'" value="1" />'+																	
			'<input class="small m-wrap txtresamt'+i+'" type="text"  id="txtresamt'+i+'" name="txtresamt'+i+'" value="" readonly />'+	
			
			'<select name="drpnewresvend'+i+'" id="drpnewresvend'+i+'" class="medium m-wrap drpnewresvend'+i+'"> '+											
			'</select>'+
			'<input class="small m-wrap txtresvprice'+i+'" type="text"  id="txtresvprice'+i+'" name="txtresvprice'+i+'" value="" />'+
									
			
			
		'</div>'+
		
		'<div>'+
			'<input  type="text"  value="Remark" readonly />'+
		'</div>'+
		
		'<div>'+
			'<textarea rows="2" cols="140" id="txtresremark'+i+'" class="txtresremark'+i+'" name="txtresremark'+i+'"></textarea>'+
			'<a name="addres'+i+'" class="btn blue" id="addres'+i+'" style="margin-left:15px;" >'+
				'Add'+								
			'</a>'+
		'</div>'+
		
		'<div class="portlet box green">'+
			'<div class="portlet-title">'+
				'<div class="caption"><i class="icon-reorder"></i>Resources</div>'+

			'</div>'+
			'<div class="portlet-body">'+
				'<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">'+
					'<thead>'+
						'<tr>'+
							'<th> Resource</th>	'+												
							'<th> Rate</th>'+
							'<th> Qty</th>'+
							'<th> Amount</th>'+	
							'<th> Vendor</th>'+
							'<th> Price</th>'+
							'<th> Remark</th>'+							
							'<th> Action</th>'	+												 
						'</tr>'+
					'</thead>'+
					'<tbody id="resrec'+i+'">'+

					'</tbody>'+
				'</table>'+
			'</div>'+
		'</div>'+
		'</div>'+
		
		'<div id="b2'+i+'">'+
		'	<div>'+
		'		<input class="xyz" type="text"  value="Equipment" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinseqp'+i+'" data-toggle="tooltip" style="cursor:pointer;"> '+
		'		</i>	'+		
		'		<input class="xyz123" type="text" id="labelLT'+i+'" name="labelLT'+i+'"  value="Length(FT)" readonly />'+
		'		<input class="xyz123" type="text" id="labelWT'+i+'" name="labelWT'+i+'" value="Width(FT)" readonly />'+	'		<input class="xyz123" type="text"  value="Rate" readonly />'+									
		'		<input class="xyz123" type="hidden"  value="Type" readonly />	'+								
		'		<input class="xyz123" type="text"  value="Qty" readonly />'+
		'		<input class="xyz123" type="text"  value="Amount" readonly />	'+								
		'		<input class="xyz123" type="text"  value="Staff" readonly />'+
		'		<input class="xyz" type="text"  value="Vendor" readonly />'+
		'		<i class="fa fa-info-circle" title="New" id="newinsvd'+i+'" data-toggle="tooltip" style="cursor:pointer;">'+ 
		'		</i>'+
		'		<input class="xyz123" type="text"  value="Price" readonly />'+								
		'	</div>'+								
		'	<div>	'+							
		'		<select  name="drpneweqp'+i+'" id="drpneweqp'+i+'" class="small set1 m-wrap drpneweqp'+i+'">'+											
		'		</select>'+		
		'		<input class="xyz m-wrap txtlength"  type="text"  id="txtlength'+i+'" name="txtlength'+i+'" value=""  />'+
		'		<input class="xyz m-wrap txtwidth"  type="text"  id="txtwidth'+i+'" name="txtwidth'+i+'" value="" />'+		
		'		<input class="xyz m-wrap txtrate'+i+'"  type="text"  id="txtrate'+i+'" name="txtrate'+i+'" value=""  />'+									
		'		<input class="xyz m-wrap txttype'+i+'"  type="hidden"  id="txttype'+i+'" name="txttype'+i+'" value="" readonly />'+									
		'		<input class="xyz m-wrap txtassdtl'+i+'"  type="hidden"  id="txtassdtl'+i+'" name="txtassdtl'+i+'" value="" readonly />'+
		'		<input class="xyz m-wrap drpqty'+i+'"  type="text"  id="drpqty'+i+'" name="drpqty'+i+'" value="1"  />'+									
		'		<input class="xyz m-wrap txtamt'+i+'" type="text"  id="txtamt'+i+'" name="txtamt'+i+'" value="" readonly />	'+								
		'		<input class="xyz m-wrap txthamt'+i+'" type="hidden"  id="txthamt'+i+'" name="txthamt'+i+'" value="" readonly />	'+
		
		'		<select name="drpnewstf'+i+'" id="drpnewstf'+i+'" class="set3 m-wrap drpnewstf'+i+'"> '+											
		'		</select>'+
		
		'		<select name="drpnewvend'+i+'" id="drpnewvend'+i+'" class="set3 m-wrap drpnewvend'+i+'">'+ 											
		'		</select>'+
		
		'		<input class="xyz m-wrap txtvprice'+i+'" type="text"  id="txtvprice'+i+'" name="txtvprice'+i+'" value="" />	'+								
		'	</div>	'+
		'<p></p>'+		
		'	<div>'+
		'		<input  type="text"  value="Remark" readonly />'+
		'	</div>	'+	
		'<p></p>'+
		'	<div>'+
		'		<textarea rows="2" cols="122" id="txtremark'+i+'" class="txtremark'+i+'" name="txtremark'+i+'"></textarea>'+
		'	</div>'+
		'	<br/>'+	
		'<p>'+		
		'		<a name="addeqp'+i+'" class="btn blue" id="addeqp'+i+'" style="margin-left:15px;" >'+
		'			Add	'+							
		'		</a>'+
		'</p>'+	
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
		'						<th> Asseccories</th>'+
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
					'$(\'#drpnewresvend'+i+'\').html(r);'+
					
				'}'+
				
			'});'+
		'}'+
		
		'function shownewRes'+i+'()'+
		'{'	+	
			'$.ajax({'+
				'url : \'./includes/newEventsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
				'\'shownewRes\' : 1'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#drp_resource'+i+'\').html(r);'	+
					
				'}'+
				
			'});'+
		'}'+
		'shownewEqp'+i+'();'+
		'shownewStf'+i+'();'+
		'shownewVend'+i+'();	'+  
		'shownewRes'+i+'();'+

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
					'$(\'#txtassdtl'+i+'\').val(r.as_name);'+
					'checkType'+i+'();'+
				'}'+
				
			'});'+
		'});'+
		
		
		'$("#drp_resource'+i+'").on("change", function(){'+
			'var resid    =   $(\'#drp_resource'+i+'\').val();'+
			
			'$.ajax({'+
				'url : \'./includes/newEventsPost.php\','+
				'type : \'post\','+
				'async : false,'+
				'data : {'+
					'\'showresprice\' : 1,'+
					'\'resid\' : resid,'+
					
				'},'+
				'success : function(r)'+
				'{'+
					'$(\'#txtresrate'+i+'\').val(r.amount);'+
					'$(\'#txtresamt'+i+'\').val(r.amount);'+
									
				'}'+
				
			'});'+
		'});'+
		'$("#txtresqty'+i+'").on("focusout", function()'+
		'{'+
			'var qty    =   $(\'#txtresqty'+i+'\').val();'+
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
					'alert("Cant GIve qty 0");'+
					'return false;'+
				'}'+
			'}'+
			'var txtramt = $(\'#txtresrate'+i+'\').val();	'+		
			'var tot = parseInt(qty) * parseInt(txtramt);'+			
			'$(\'#txtresamt'+i+'\').val(tot);	'+		
		'});'+
		'$("#txtresrate'+i+'").on("focusout", function()'+
		'{'+
					
			'var ratechg = $(\'#txtresrate'+i+'\').val();'	+	
			'if(ratechg == "")'+
			'{'+
				'alert("Plz Insert The Rate!!!");'+
				'return false;'+
			'}'+
			'if(ratechg != "")'+
			'{'+
				'if(isNaN(ratechg))'+
				'{'+
					'alert("Please Only Numeric in Rate!!! (Allowed input:0-9)");'+
					'return false;'+
				'}'+
				'if(ratechg == 0)'+
				'{'+
					'alert("Cant GIve rate 0");'+
					'return false;'+
				'}'+
			'}'+
			'var qty    =   $(\'#txtresqty'+i+'\').val();'	+		
			'var tot = parseInt(qty) * parseInt(ratechg);'+			
			'$(\'#txtresamt'+i+'\').val(tot);'+
			
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
				// 'if(rate == 0)'+
				// '{'+
					// 'alert("Can not Give rate 0");'+
					// 'return false;'+
				// '}'+
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
		
		'var k = 0;'+
		
		// 'var col = 0;'+
		 'var row'+i+' = 0;'+
		 'var rrow'+i+' = 0;'+
		
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
			'var txtassdtl = $(\'.txtassdtl'+i+'\').val();'+
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
				// 'if(rate == 0)'+
				// '{'+
					// 'alert("Can not Give rate 0");'+
					// 'return false;'+
				// '}'+
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
			
			
			'j++;'+
			
			'row'+i+'++;'+
			
			'var div =	'+				
					
					'\'<tr id="eqrow\'+i+\'\'+j+\'">\'+'+
						
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtieqp]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtieqp]" value="\'+eqpid+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtieqpnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtieqpnm]" value="\'+eqpnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtirate]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtirate]" value="\'+rate+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiqty]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiqty]" value="\'+qty+\'">\'+'+
						'\'<input   type="hidden" id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiamt]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiamt]" class="txtiamt" value="\'+amt+\'">\'+'+
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtistf]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtistf]" value="\'+staff+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtistfnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtistfnm]" value="\'+staffnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivend]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivend]" value="\'+vend+\'">\'+'+
						'\'<input type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivendnm]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivendnm]" value="\'+vendnm+\'">\'+'+
						'\'<input  type="hidden" id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivendprice]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtivendprice]" class="txtivendprice" value="\'+vprice+\'">\'+'+
						'\'<input   type="hidden" id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiremark]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiremark]" value="\'+reamrk+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtilength]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtilength]" value="\'+length+\'">\'+'+
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiwidth]" name="hdn[\'+col+\'][\'+row'+i+'+\'][equipment][txtiwidth]" value="\'+width+\'">\'+'+
						
						
						'\'<td>\'+ eqpnm+\'</td>\'+'+
						'\'<td>\'+ txtassdtl+\'</td>\'+'+
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
			
			
			'var txtrescharge = $(\'.txtrescharge\').val();'+
			'if(txtrescharge == "")'+
			'{'+
				'var gtot = [];'+
				'$.each($(\'.txtiamt\'), function(){  '+          
					'gtot.push($(this).val());'+
				'});'+
				
				'var total_amt = 0;'+
				'$.each(gtot,function() {'+
					'total_amt += parseInt(this);'+
				'});'+
				
				'var vtot = [];'+
				'$.each($(\'.txtivendprice\'), function(){  ' +         
					'vtot.push($(this).val());'+
				'});'+
				'var total_vamt = 0;'+
				'$.each(vtot,function() {'+
					'total_vamt += parseInt(this);'+
				'});'+
				'$(\'.txtcharge\').val(total_amt);'+
				'$(\'.txtvcharge\').val(total_vamt);'+
			'}'+
			
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
		   
			
		'});'+
		
		
		'$(\'#addres'+i+'\').on(\'click\',function()'+
		'{'+
			'var resid = $(\'.drp_resource'+i+'\').val();'+
			'var resnm = document.getElementById("drp_resource'+i+'").options[(document.getElementById("drp_resource'+i+'").options.selectedIndex)].text;'+
			
			'var resvend = $(\'.drpnewresvend'+i+'\').val();'+
			'var resvendnm = document.getElementById("drpnewresvend'+i+'").options[(document.getElementById("drpnewresvend'+i+'").options.selectedIndex)].text;'+
			'var resvprice = $(\'.txtresvprice'+i+'\').val();'+
 			
			
			'var qty = $(\'.txtresqty'+i+'\').val();'+
			'var rate = $(\'.txtresrate'+i+'\').val();'+
			'var amt = $(\'.txtresamt'+i+'\').val();'+
			'var resreamrk = $(\'.txtresremark'+i+'\').val();'+	
			
			'var col = '+i+';'+
			'if(resid=="")'+
			'{'+
				'alert("Plz Select Equipment.");'+
				'return false;'+
			'}'+
			'if(rate=="")'+
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
					'alert("Cant Give rate 0");'+
					'return false;'+
				'}'+
			'}'+
			'if(qty=="")'+
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
					'alert("Cant GIve qty 0");'+
					'return false;'+
				'}'+
			'}'	+	
			
			'k++;'+
			'rrow'+i+'++;'+
			'var resdiv='+
					
					
					'\'<tr id="resrow\'+i+\'\'+k+\'">\'+'+
						
						'\'<input   type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtires]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtires]" value="\'+resid+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiresnm]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiresnm]" value="\'+resnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiqty]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiqty]" value="\'+qty+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtirate]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtirate]" value="\'+rate+\'">\'+'+
						'\'<input   type="hidden" id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][rtxtiamt]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][rtxtiamt]" class="rtxtiamt" value="\'+amt+\'">\'+'+			
						
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtivend]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtivend]" value="\'+resvend+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtivendnm]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtivendnm]" value="\'+resvendnm+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiresvendprice]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiresvendprice]" class="txtiresvendprice" value="\'+resvprice+\'">\'+'+
						'\'<input  type="hidden"  id="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiremark]" name="hdn[\'+col+\'][\'+rrow'+i+'+\'][resource][txtiremark]" value="\'+resreamrk+\'">\'+'+
						
						'\'<td>\'+ resnm+\'</td>\'+'+
						'\'<td>\'+ rate+\'</td>\'+'+
						'\'<td>\'+ qty+\'</td>\'+'+
						'\'<td class="amount">\'+ amt+\'</td>\'+'+	
						
						'\'<td>\'+ resvendnm+\'</td>\'+'+
						'\'<td>\'+ resvprice+\'</td>\'+'+
						'\'<td>\'+ resreamrk+\'</td>\'+'+
						
											
						'\'<td><a class="resremove'+i+'" id="\'+i+\'\'+k+\'" style= "cursor:pointer; margin-left:15px;">\'+'+
							'\'<i class="fa fa-times" aria-hidden="true"></i>\'+	'+						
						'\'</a></td>\'+'+
					'\'</tr>\';'+					
					
			'$(\'#resrec'+i+'\').append(resdiv);'+	
			
			'var rgtot = [];'+
			'$.each($(\'.rtxtiamt\'), function(){ ' +          
				'rgtot.push($(this).val());'+
			'});'+
			'var rtotal_amt = 0;'+
			'$.each(rgtot,function() {'+
				'rtotal_amt += parseInt(this);'+
			'});'	+	

			'var rvtot = [];'+
			'$.each($(\'.txtiresvendprice\'), function(){  ' +         
				'rvtot.push($(this).val());'+
			'});'+
			'var total_rvamt = 0;'+
			'$.each(rvtot,function() {'+
				'total_rvamt += parseInt(this);'+
			'});'+
				
			
			'$(\'.txtvcharge\').val(total_rvamt);'+
			
			'$(\'.txtcharge\').val(rtotal_amt);'+

			'$(\'.drp_resource'+i+'\').val(\'\');'+
			'$(\'.txtresrate'+i+'\').val(\'\');'+
			'$(\'.txtresqty'+i+'\').val(\'1\');'+
			'$(\'.txtresamt'+i+'\').val(\'\');'+
			
			'$(\'.drpnewresvend'+i+'\').val(\'\');'+
			'$(\'.txtresvprice'+i+'\').val(\'\');'+
			'$(\'.txtresremark'+i+'\').val(\'\');'+
			
			
			
		'});'+
		
		'$(document).on(\'click\',\'.resremove'+i+'\',function(){'+
			'var button_id = $(this).attr("id");'+
			'$("#resrow"+button_id+"").remove();'+	
			
			'var rgtot = [];'+
			'$.each($(\'.rtxtiamt\'), function(){ ' +          
				'rgtot.push($(this).val());'+
			'});'+
			'var rtotal_amt = 0;'+
			'$.each(rgtot,function() {'+
				'rtotal_amt += parseInt(this);'+
			'});'	+	
			
			'var rvtot = [];'+
			'$.each($(\'.txtiresvendprice\'), function(){' +           
				'rvtot.push($(this).val());'+
			'});'+
			'var total_rvamt = 0;'+
			'$.each(rvtot,function() {'+
				'total_rvamt += parseInt(this);'+
			'});'+
				
			
			'$(\'.txtvcharge\').val(total_rvamt);'+
				
			'$(\'.txtcharge\').val(rtotal_amt);'+
			
		'});'+
		
		'$(document).on(\'click\',\'.remove'+i+'\',function(){'+
			'var button_id = $(this).attr("id");'+
			'$("#eqrow"+button_id+"").remove();'+
			
			'var txtrescharge = $(\'.txtrescharge\').val();'+
			'if(txtrescharge == "")'+
			'{'+
				'var gtot = [];'+
				'$.each($(\'.txtiamt\'), function(){ '+           
					'gtot.push($(this).val());'+
				'});'+
				
				'var total_amt = 0;'+
				'$.each(gtot,function() {'+
					'total_amt += parseInt(this);'+
				'});'+
				
				'var vtot = [];'+
				'$.each($(\'.txtivendprice\'), function(){  ' +         
					'vtot.push($(this).val());'+
				'});'+
				'var total_vamt = 0;'+
				'$.each(vtot,function() {'+
					'total_vamt += parseInt(this);'+
				'});'+				
				'$(\'.txtcharge\').val(total_amt);'+
				'$(\'.txtvcharge\').val(total_vamt);'+
			'}	'+
		'});'+
		
			 
		'</script>';
		
	
		$('#multiinsert').append(div1);
		
		

	}