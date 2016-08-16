<div id= "multiinsert">
	<div id="dynamic_field">
		<h4>
			Order places 
			<a name="add" id="add" class="btn blue event">
				<i class="icon-plus"></i>								
			</a>									
		</h4>
		<hr />
		<div class="clearfix margin-bottom-10">
			<label for="txtvenue">Venue </label>
			<div class="input-icon left">
				<input class="m-wrap" id="hdn[0][txtvenue]" name="hdn[0][txtvenue]" type="text"  />
			</div>
		</div>
		<div class="clearfix margin-bottom-10">
			<label for="txthall">Hall </label>
			<div class="input-icon left">
				<input class="m-wrap" id="hdn[0][txthall]" name="hdn[0][txthall]" type="text"  />
			</div>
		</div>
		<div class="clearfix margin-bottom-10">
			<label for="txtldmark">Land Mark </label>
			<div class="input-icon left">
				<input class="m-wrap" id="hdn[0][txtldmark]" name="hdn[0][txtldmark]" type="text" />
			</div>
		</div>
		<div class="clearfix margin-bottom-10">
			<div class="pull-left margin-right-20">
				<label for="txtfromdate">From Date </label>
				<div id="datetimepickerPF" class="input-append date">
					<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap" value="<?php echo Date;?>" type="text" name="hdn[0][txtfromdate]" id="hdn[0][txtfromdate]"></input>
					<span class="add-on">
					  <i class="icon-time" class="icon-calendar"></i>
					</span>
				</div>
			</div>
			<div class="pull-right margin-right-20">
			<label for="txttodate" class="well1">To Date </label>
			<div id="datetimepickerPT" class="input-append date">
				<input data-format="dd-MM-yyyy HH:mm PP" type="text" class="m-wrap" value="<?php echo Date;?>" name="hdn[0][txttodate]" id="hdn[0][txttodate]"></input>
				<span class="add-on">
				  <i class="icon-time" class="icon-calendar"></i>
				</span>
			</div>
			</div>									
		</div>
		
		<!-- new drop down for the eqp stf and vendor --->
		</br>
		</br>
		
		<!--New pop up for insert the equipment -->
		<div id="popup_equipment">
		
		</div>
		<div id="popup_equipment_data">								
			<span id="close"> &times; </span>													
			<h4 align="center" style= "font-weight:bold;"> Add Equipemnt Detail </h4>
			<br>										
			<div class="TableRowing">
				&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
				<strong >Add Equipemnt</strong>
			</div>
			</br></br>
			<div class="span8 booking-search">
				
					<div class="clearfix margin-bottom-10">
						<label> Name </label>
						<div class="input-icon left">

							<input class="m-wrap" type="text" id="txteqpnm" name="txteqpnm" placeholder="Company or Brand name">
						</div>
					</div>
					<div class="clearfix margin-bottom-10">
						<div class="pull-left margin-right-20">
							<label> Serial No. </label>
							<div class="input-icon left">
								<input class="m-wrap" type="text" id="txtserno" name="txtserno" />
							</div>
						</div>
						<div class="pull-left margin-right-20">
							<label> Model No. </label>
							<div class="input-icon left">
								<input class="m-wrap" type="text" id="txtmodel" name="txtmodel" />
							</div>
						</div>
					</div>											
					<div class="clearfix margin-bottom-10">
						<label> Category </label>
						<div class="input-icon left">
							<select class="large m-wrap" id="txtcateqp" name="txtcateqp" >													   
							</select>
						</div>
					</div>											
					<div class="clearfix margin-bottom-10">
						<label >Purchase Date</label>
						
							<div class="input-append date" id="datetimepicker3">
								<input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap m-ctrl-medium date-picker" type="text"  id="txtpurdate" name="txtpurdate" value="<?php echo Date;?>" /><span class="add-on"><i class="icon-calendar"></i></span>
							</div>
						
					</div>
					<div class="clearfix margin-bottom-10">
						<label> Purchase From </label>
						<div class="input-icon left">

							<input class="m-wrap" type="text"  id="txtpurfrm" name="txtpurfrm" />
						</div>
					</div>                                    
					<div class="clearfix margin-bottom-10">
						<label> Price </label>
						<div class="input-icon left">
							<input class="m-wrap" type="text"  id="txtprice" name="txtprice" placeholder="Your Equipment Price" />
						</div>
					</div>
					
					<div class="clearfix margin-bottom-10">
						<label >Type</label>
						<div class="input-icon left">
							<select class="large m-wrap" id="drptype" name="drptype" >
								<option selected="select" value="">Select Type </option>
								<option value="1"> Qty </option>
								<option value="2">Sq.Feet </option>
								
							</select>
						</div>
					</div>
					<div class="clearfix margin-bottom-10">
						<label> Remark </label>
						<div class="input-icon left">
							<input class="m-wrap" type="text"  id="txtremk" name="txtremk" placeholder="Your Remarks here" />
						</div>
					</div>

					<!--button class="btn blue right-side">SAVE <i class="icon-download"></i></button-->
					<div class="right-side">
						<a class="btn blue" id="addEquip">Add</a>										
						<a class="btn blue" id="close1">CANCEL</a>
					</div>
				
				<span id="msgs">
					
				</span>
				<script>
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
				
				</script>

				<!--end booking-search-->
			</div>								
			<br/>								
		</div>
		
		<!-- end of the popup for insert equipment -->
		
<!--New pop up for insert the vendor -->
		<div id="popup_ins_vendor">
		
		</div>
		<div id="popup_ins_vendor_data">								
			<span id="closevd"> &times; </span>													
			<h4 align="center" style= "font-weight:bold;"> Add Vendor Detail </h4>
			<br>									
			<div class="TableRowing">
				&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
				<strong >Add Vendor</strong>
			</div>
			</br></br>
			<div class="span8 booking-search">
				
					<div class="clearfix margin-bottom-10">
						<label> Vendor Name </label>
						<div class="input-icon left">
							<input type="text" id="txtvendnm" name="txtvendnm" placeholder="Eg; Name of Vendor ..." class="m-wrap" />
						</div>
					</div>
					<div class="clearfix margin-bottom-10">
						<label> Vendor Company </label>
						<div class="input-icon left">
							<input type="text" id="txtvendcmp" name="txtvendcmp" placeholder="Eg; Name of the company..." class="m-wrap" />
						</div>
					</div>
																
					<div class="clearfix margin-bottom-10">
						<label>Class </label>
						<div class="input-icon left">
							<select class="medium m-wrap" id="drp_cat_vend" name="drp_cat_vend">
								<option select="selected" value="">
									Select Class
								</option>
								<option  value="1">
									Class 1
								</option>
								<option value="2">
									Class 2
								</option>
								<option value="3">
								   Class 3
								</option>
								<option value="4">
									Class 4
								</option>
							</select>
						</div>
					</div>											
					
					<div class="right-side">
						<a class="btn blue" id="addvend">Add</a>										
						<a class="btn blue" id="close1vd">CANCEL</a>
					</div>	
				
				<span id="msgs">
					
				</span>
				<script>
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
								
							}
							
						});
					}										
				</script>

				<!--end booking-search-->
			</div>																
		</div>
		
		<!-- end of the popup for insert vendor -->
		
		
		<div>
			<input style="width:207px;" type="text"  value="Resources" readonly />									
												
			<input style="width:121px;" type="text"  value="Rate" readonly />
			<input style="width:123px;" type="text"  value="Qty" readonly />
			<input style="width:120px;" type="text"  value="Amount" readonly />									
		</div>
		<div>
		
			<select  name="drp_resource" id="drp_resource" class="medium m-wrap drp_resource">											
			</select>	
			<input class="small m-wrap txtresrate"  type="text"  id="txtresrate" name="txtresrate" value=""  />	
			<input class="small m-wrap txtresqty"  type="text"  id="txtresqty" name="txtresqty" value="1" />																	
			<input class="small m-wrap txtresamt" type="text"  id="txtresamt" name="txtresamt" value="" readonly />	
			
			<a name="addres" class="btn blue" id="addres" style="margin-left:15px;" >
				Add								
			</a>
		</div>
		</br>
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="icon-reorder"></i>Resources</div>

			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
					<thead>
						<tr>
							<th> Resource</th>													
							<th> Rate</th>
							<th> Qty</th>
							<th> Amount</th>													
							<th> Action</th>													 
						</tr>
					</thead>
					<tbody id="resrec">

					</tbody>
				</table>
			</div>
		</div>
		
		
		<div>
			<input style="width:190px;" type="text"  value="Equipment" readonly />
			<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
			</i>							
			
			
			<input style="width:120px;" type="text" id="labelLT" name="labelLT"  value="Length(FT)" readonly />
			<input style="width:120px;" type="text" id="labelWT" name="labelWT" value="Width(FT)" readonly />
			
			
			
		</div>
		
		<div>
		
			
		
			<select  name="drpneweqp" id="drpneweqp" class="medium m-wrap drpneweqp">											
			</select>
			
			
			<input class="small m-wrap txtlength"  type="text"  id="txtlength" name="txtlength" value=""  />
			<input class="small m-wrap txtwidth"  type="text"  id="txtwidth" name="txtwidth" value="" />
			
		</div>
		<div>
			<input style="width:120px;" type="text"  value="Rate" readonly />
			
			<input style="width:125px;" type="hidden"  value="Type" readonly />
			
			<input style="width:123px;" type="text"  value="Qty" readonly />
			<input style="width:123px;" type="text"  value="Amount" readonly />
			
			<input style="width:200px;" type="text"  value="Staff" readonly />
			<input style="width:200px;" type="text"  value="Vendor" readonly />
			<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
			</i>
			<input style="width:124px;" type="text"  value="Price" readonly />
		
			
		</div>
		<div>
		
			<input class="small m-wrap txtrate"  type="text"  id="txtrate" name="txtrate" value=""  />
			
			<input class="small m-wrap txttype"  type="hidden"  id="txttype" name="txttype" value="" readonly />
			
			<input class="small m-wrap drpqty"  type="text"  id="drpqty" name="drpqty" value="1"  />
			
			<input class="small m-wrap txtamt" type="text"  id="txtamt" name="txtamt" value="" readonly />
			
			<input class="small m-wrap txthamt" type="hidden"  id="txthamt" name="txthamt" value="" readonly />
			
			<select name="drpnewstf" id="drpnewstf" class="medium m-wrap drpnewstf"> 											
			</select>
			<select name="drpnewvend" id="drpnewvend" class="medium m-wrap drpnewvend"> 											
			</select>
			<input class="small m-wrap txtvprice" type="text"  id="txtvprice" name="txtvprice" value="" />
			
			
		</div>
		
		<div>
			<input  type="text"  value="Remark" readonly />
		</div>
		
		<div>
			<textarea rows="2" cols="140" id="txtremark" class="txtremark" name="txtremark"></textarea>
			<a name="addeqp" class="btn blue" id="addeqp" style="margin-left:15px;" >
				Add								
			</a>
		</div>
		<br/>
		
		
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="icon-reorder"></i>Equipments</div>

			</div>
			<div class="portlet-body">
				<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
					<thead>
						<tr>
							<th> Equipment</th>
							<th> Rate</th>
							<th> Qty</th>
							<th> Amount</th>
							<th> Staff</th>
							<th> Vendor</th>
							<th> Price</th>
							<th> Remark</th>
							<th> Action</th>													 
						</tr>
					</thead>
					<tbody id="eqprec">

					</tbody>
				</table>
			</div>
		</div>							
	</div>
</div>