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
	
		$('#multiinsert').append(div);
		
		

	}