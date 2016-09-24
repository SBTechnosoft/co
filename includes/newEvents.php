<?php
$setting1 = showSettingRes($conn);
if(isset($setting1) && !empty($setting1))
{
	$setRes = $setting1[0]['resorce'];
	//echo $set;
}

?>
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>portlet Settings</h3>
        </div>
        <div class="modal-body">
            <p>Here will be a configuration form</p>
        </div>
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Orders<small> New</small> 
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Add Order </a>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
			<div class="row-fluid">
				<div class="span12 booking-search">
					<h4>Order Details </h4><hr class="hr2"/>
					<!--form action="<?php echo HTTP_SERVER; ?>includes/newEventsPost.php" name="Form" method ="post" class="form-horizontal" role="form" -->
					<!--form name="f2" action="./includes/newEventsPost.php" method="post" id="f2">
					
						<input type="text" name="txtnm" id="txtnm"/>
						<input type="submit" value="div" />
					
					</form-->
						<input type="hidden" value="<?php echo $setRes;?>" id="hiddenresource"/>
					<form name="f1" action="./includes/newEventsPost.php" method="post" id="f1">
					<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-20">
								<!--input type="text" class="large m-wrap" id="txteventnm" name="txteventnm"  /-->
								Enquiry &nbsp <input type="radio" name="order_type" id="" value="enquiry" > /
								Order &nbsp <input type="radio" name="order_type" id="" value="new" checked><br/>
							</div>	
					</div>
						<div class="clearfix margin-bottom-10">
							
							<div class="pull-left margin-right-20 ">
								<div class="input-icon input-append">
									<label> Order Name : </label>
								</div>
								<input type="text" class="large m-wrap" id="txteventnm" name="txteventnm"  /><font color="red">*</font>
							</div>
							<div class="pull-right margin-right-20">
								<div class="input-icon input-append">
									<label for="">Company:</label>
								</div>
								<select name="drpcmpnm" id="drpcmpnm" class="large m-wrap selectcom">								
								</select>
							</div>
						</div>
						<!--div class="clearfix margin-bottom-10" >
							<label for="mn_category">Category </label>
							<div class="input-icon left">
								<select name="mn_category" id="mn_category" class="large m-wrap"> 
									<option>Photography</option>
									<option>Film Making</option>
									<option>Designing</option>
								</select>
							</div>
						</div-->
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-10">
								<div class="input-icon input-append ">
									<label for="">Category:</label>
								</div>
								<select name="drpctgnm" id="drpctgnm" class="large m-wrap select12 "> 
								</select>
							</div>
							<div class="pull-right margin-right-10 ">
								<div class="input-icon input-append">
									<label for="">Sub Category:</label>
								</div>
								<select name="drpsubctgnm" id="drpsubctgnm" class="large m-wrap"> 
								</select>
							</div>
						</div>
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-20">
								<div class="input-icon input-append">
									<label for="txteventds">Description:</label>
								</div>
						    	<textarea rows="2" cols="109"  class="txtremark" id="txteventds" name="txteventds">
								</textarea>	
					    	</div>
					    </div>	
						<!--div class="clearfix margin-bottom-10" >
							<label for="sub_category">Sub Category </label>
							<div class="input-icon left">
								<select name="sub_category" id="sub_category" class="large m-wrap"> 
									<option>Fashion</option>
									<option>Catalogue</option>
									<option>Baby</option>
									<option>Maternity</option>
									<option>Automobile</option>
									<option>Industrial</option>
									<option>Wedding</option>
									<option>Portfolio</option>
									<option>Documentary</option>
									<option>Pre Wedding</option>
								</select>
							</div>
						</div-->
						
						<h4>Client Details </h4>
						<hr />
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-10">
								<div class="input-icon input-append">
									<label for="txtclnm">Client Name: </label>
								</div>
								<input type="text" id="txtclnm" name="txtclnm"  class="large m-wrap" />
							</div>
							<div class="pull-right margin-right-10">
								<div class="input-icon input-append">
									<label for="txtclcmp">Client Company: </label>
								</div>
								<input class="large m-wrap" id="txtclcmp" name="txtclcmp" type="text" />
							</div>
						</div>
						<!--div class="clearfix margin-bottom-10">
							<label for="txtmob">FP No. </label>
							<div class="input-icon left">
								<input type="text" id="txtfpno" name="txtfpno" class="m-wrap" />
							</div>
						</div>
						<div class="clearfix margin-bottom-10">
							<label for="txtmob">Bill No. </label>
							<div class="input-icon left">
								<input type="text" id="txtbillno" name="txtbillno" class="m-wrap" />
							</div>
						</div-->
						
						
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-20">
								<div class="input-icon input-append">
									<label for="txtmob">Mobile: </label>
								</div>
								<input type="text" id="txtmob" name="txtmob" class="large m-wrap mob1" /><font color="red">*</font>
						   </div>
							<div class="pull-right margin-right-10">
								<div class="input-icon input-append">
									<label for="txtworkmob">Work:</label>
								</div>
								<input type="text" id="txtworkmob" name="txtworkmob" class="large m-wrap mob1" placeholder="Eg; +919858784525"/>
							</div>
						</div>
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-10">
								<div class="input-icon input-append">
									<label for="txthmmob" class="well1">Home:</label>
								</div>
								<input type="text" id="txthmmob" name="txthmmob" class="large m-wrap eid1" />
							</div>
							<div class="pull-right margin-right-10 ">
								<div class="input-icon input-append">
									<label for="txtclemail">Email ID: </label>
								</div>
								<input type="text" class="large m-wrap eid1" id="txtclemail" name="txtclemail" placeholder="Eg; www.siliconbrain.com"/>
							</div>
						</div>
						<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-10">
								<div class="input-icon input-append">
									<label for="txtaddress" class="well1">Client Address:</label>
								</div>
								<textarea rows="2" cols="115"  class="txtremark" id="txtaddress" name="txtaddress">
								</textarea>	
							</div>
							
						</div>
						
						
						<div class="">
							<div class="clearfix margin-bottom-10">
							<div class="pull-left margin-right-20">
							<div class="input-icon input-append">
								<label for="txtfromdt">From Date: </label>
							</div>
								<div id="datetimepicker1" class="input-append date">
									<input  class="large m-wrap textArea" value="<?php echo Date;?>" type="text" name="txtfromdt" id="txtfromdt"></input>
									<span class="add-on">
									  <i class="icon-time" class="icon-calendar"></i>
									</span>
								</div>
							</div>
							<div class="pull-right margin-right-10">
							<div class="input-icon input-append">
								<label for="txttodt" class="well1">To Date: </label> 
							</div>
								<div id="datetimepicker2" class="input-append date">
									<input data-format="dd/MM/yyyy HH:mm PP" class="large m-wrap textArea" value="<?php echo Date;?>" type="text" name="txttodt" id="txttodt"></input>
									<span class="add-on">
									  <i class="icon-time" class="icon-calendar"></i>
									</span>
								</div>
							</div>	
							</div>
							
						</div>
						<br />
						
						
						<div id= "multiinsert" class="divcli">
							<div id="dynamic_field">
								<h4>
									Order places 
									<a name="add" id="add" class="btn blue event">
										<i class="icon-plus"></i>								
									</a>									
								</h4>
								<hr />
								<div class="clearfix margin-bottom-10">
									<div class="pull-left margin-right-10">
										<div class="input-icon input-append">
											<label for="txtvenue">Venue: </label>
										</div>
										<input class="venuetxt m-wrap" id="hdn[0][txtvenue]" name="hdn[0][txtvenue]" type="text"  />
									</div>
									<div class="pull-left margin-right-10">
										<div class="input-icon input-append abc1">
											<label for="txthall">Hall:</label>
										</div>
										<input class="venuetxt m-wrap " id="hdn[0][txthall]" name="hdn[0][txthall]" type="text"  />
									</div>
									<div class="pull-right margin-right-10">
										<div class="input-icon input-append">
											<label for="txtldmark">Land Mark: </label>
										</div>
										<input class="venuetxt m-wrap" id="hdn[0][txtldmark]" name="hdn[0][txtldmark]" type="text" />
									</div>
								</div>
								<div class="clearfix margin-bottom-10">
									<div class="pull-left margin-right-10">
										<div class="input-icon input-append">
											<label for="txtfunction">Function: </label>
										</div>
										<input class="venuetxt m-wrap" id="hdn[0][txtfunction]" name="hdn[0][txtfunction]" type="text" />
										
									</div>
									<div class="pull-left margin-right-10" style="margin-left:40px;">
									<div class="input-icon input-append">
										<label for="txtfromdate">From Date: </label>
									</div>
										<div id="datetimepickerPF" class="input-append date" >
											<input data-format="dd-MM-yyyy HH:mm PP" class="fdate1 m-wrap " value="<?php echo Date;?>" type="text" name="hdn[0][txtfromdate]" id="hdn[0][txtfromdate]"></input>
											<span class="add-on">
											  <i class="icon-time" class="icon-calendar"></i>
											</span>
										</div>
									</div>
									<div class="pull-right margin-right-10">
									<div class="input-icon input-append">
									<label for="txttodate" class="well1">To Date: </label>
									</div>
									<div id="datetimepickerPT" class="input-append date">
										<input data-format="dd-MM-yyyy HH:mm PP" type="text" class="fdate1 m-wrap " value="<?php echo Date;?>" name="hdn[0][txttodate]" id="hdn[0][txttodate]"></input>
										<span class="add-on">
										  <i class="icon-time" class="icon-calendar"></i>
										</span>
									</div>
									</div>									
								</div>
								<!--div class="clearfix margin-bottom-10">
									<label for="eqpdrp">Equipment</label>
									<div class="multiselect input-icon left">
										<div class="selectBox" id="eqpdrp" >
											<select>
												<option>Select an option</option>
											</select>
											<div class="overSelect"></div>
										</div>
										<div id="checkboxEqp" class="checkboxesEqp">																	
										</div>
										
									</div>
								</div>
								<div class="clearfix margin-bottom-10">
									<label for="stfdrp">Staff</label>
									<div class="multiselect input-icon left">
										<div class="selectBox" id="stfdrp" >
											<select>
												<option>Select an option</option>
											</select>
											<div class="overSelect"></div>
										</div>
										<div id="checkboxStf" class="checkboxesStf">																	
										</div>
									</div>
								</div-->
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
								
								<!--New pop up for insert the Resource -->
								<div id="popup_ins_resource">
								
								</div>
								<div id="popup_ins_resource_data">								
									<span id="closeres"> &times; </span>													
									<h4 align="center" style= "font-weight:bold;"> Add Resource Detail </h4>
									<br>									
									<div class="TableRowing">
										&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
										<strong >Add Resource</strong>
									</div>
									</br></br>
									<div class="span8 booking-search">
										
											<div class="clearfix margin-bottom-10">
												<label> Resource Name </label>
												<div class="input-icon left">
													<input type="text" id="txtresnm" name="txtresnm" placeholder="Eg; Name of Resource ..." class="m-wrap" />
												</div>
											</div>
											<div class="clearfix margin-bottom-10">
												<label> Resource Price </label>
												<div class="input-icon left">
													<input type="text" id="txtresprice" name="txtresprice" placeholder="Eg; Price of the Resource..." class="m-wrap" />
												</div>
											</div>																					
											
											<div class="right-side">
												<a class="btn blue" id="addResource">Add</a>										
												<a class="btn blue" id="close1res">CANCEL</a>
											</div>	
										
										<span id="msgs">
											
										</span>
										<script>
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
										</script>

										<!--end booking-search-->
									</div>																
								</div>
								
								<!-- end of the popup for insert vendor -->
								<?php if (isset($setRes) && $setRes == 'resource') {?>
								<div>
									<input style="width:195px;" type="text"  value="Resources" readonly />									
									<i class="fa fa-info-circle" title="New" id="newinsres" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>									
									<input style="width:121px;" type="text"  value="Rate" readonly />
									<input style="width:123px;" type="text"  value="Qty" readonly />									
									<input style="width:120px;" type="text"  value="Amount" readonly />
									
									<input style="width:205px;" type="text"  value="Vendor" readonly />	
									<input style="width:124px;" type="text"  value="Price" readonly />
								</div>
								<div>
								
									<select  name="drp_resource" id="drp_resource" class="medium m-wrap drp_resource">											
									</select>	
									<input class="small m-wrap txtresrate"  type="text"  id="txtresrate" name="txtresrate" value=""  />	
									<input class="small m-wrap txtresqty"  type="text"  id="txtresqty" name="txtresqty" value="1" />																	
									<input class="small m-wrap txtresamt" type="text"  id="txtresamt" name="txtresamt" value="" readonly />	
									
									<select name="drpnewresvend" id="drpnewresvend" class="medium m-wrap drpnewresvend"> 											
									</select>
									<input class="small m-wrap txtresvprice" type="text"  id="txtresvprice" name="txtresvprice" value="" />
									
									
									
								</div>
								
								<div>
									<input  type="text"  value="Remark" readonly />
								</div>
								
								<div>
									<textarea rows="2" cols="140" id="txtresremark" class="txtresremark" name="txtresremark"></textarea>
									<a name="addres" class="btn blue" id="addres" style="margin-left:15px;" >
										Add								
									</a>
								</div>
								
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
													<th> Vendor</th>
													<th> Price</th>
													<th> Remark</th>
													<th> Action</th>													 
												</tr>
											</thead>
											<tbody id="resrec">

											</tbody>
										</table>
									</div>
								</div>
								<?php }
								else if (isset($setRes) && $setRes == 'equipment') {?>
								<div>
									<input class="xyz" type="text"  value="Equipment" readonly />
									<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>							
									
									
									<input class="xyz123" type="text" id="labelLT" name="labelLT"  value="Length(FT)" readonly />
									<input class="xyz123" type="text" id="labelWT" name="labelWT" value="Width(FT)" readonly />
									<input class="xyz123" type="text"  value="Rate" readonly />
									
									<input class="xyz123" type="hidden"  value="Type" readonly />
									
									<input class="xyz123" type="text"  value="Qty" readonly />
									<input class="xyz123" type="text"  value="Amount" readonly />
									
									<input class="xyz123" type="text"  value="Staff" readonly />
									<input class="xyz" type="text"  value="Vendor" readonly />
									<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>
									<input class="xyz123" type="text"  value="Price" readonly />							
								</div>
								<p></p>
								<div>		
									<select  name="drpneweqp" id="drpneweqp" class="small set1 m-wrap drpneweqp">											
									</select>									
									<input class="xyz m-wrap txtlength"  type="text"  id="txtlength" name="txtlength" value=""  />
									<input class="xyz m-wrap txtwidth"  type="text"  id="txtwidth" name="txtwidth" value="" />
									<input class="xyz m-wrap txtrate"  type="text"  id="txtrate" name="txtrate" value=""  />
									
									<input class="xyz m-wrap txttype"  type="hidden"  id="txttype" name="txttype" value="" readonly />
									<input class="xyz m-wrap txtassdtl"  type="hidden"  id="txtassdtl" name="txtassdtl" value="" readonly />
									<input class="xyz m-wrap drpqty"  type="text"  id="drpqty" name="drpqty" value="1"  />
									
									<input class="xyz m-wrap txtamt" type="text"  id="txtamt" name="txtamt" value="" readonly />
									
									<input class="xyz m-wrap txthamt" type="hidden"  id="txthamt" name="txthamt" value="" readonly />
									
									<select name="drpnewstf" id="drpnewstf" class="set3 m-wrap drpnewstf"> 											
									</select>
									<select name="drpnewvend" id="drpnewvend" class="set3 m-wrap drpnewvend"> 											
									</select>
									<input class="xyz m-wrap txtvprice" type="text"  id="txtvprice" name="txtvprice" value="" />
								</div>
								
								
								<div>
									<input  type="text"  value="Remark" readonly />
								</div>
								
								<div>
									<textarea rows="2" cols="113" id="txtremark" class="txtremark" name="txtremark"></textarea>
									<a name="addeqp" class="btn blue" id="addeqp"  >
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
													<th> Asseccories</th>
													<th id="onratetbl"> Rate</th>
													<th> Qty</th>
													<th id="onamttbl"> Amount</th>
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
								<?php }
								else
								{?>
									<div>
									<input style="width:195px;" type="text"  value="Resources" readonly />									
									<i class="fa fa-info-circle" title="New" id="newinsres" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>									
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
									<input class="xyz" type="text"  value="Equipment" readonly />
									<i class="fa fa-info-circle" title="New" id="newinseqp" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>							
									
									
									<input class="xyz123" type="text" id="labelLT" name="labelLT"  value="Length(FT)" readonly />
									<input class="xyz123" type="text" id="labelWT" name="labelWT" value="Width(FT)" readonly />
									<input class="xyz123" type="text"  value="Rate" readonly />
									
									<input class="xyz123" type="hidden"  value="Type" readonly />
									
									<input class="xyz123" type="text"  value="Qty" readonly />
									<input class="xyz123" type="text"  value="Amount" readonly />
									
									<input class="xyz123" type="text"  value="Staff" readonly />
									<input class="xyz" type="text"  value="Vendor" readonly />
									<i class="fa fa-info-circle" title="New" id="newinsvd" data-toggle="tooltip" style="cursor:pointer;"> 
									</i>
									<input class="xyz123" type="text"  value="Price" readonly />
									
									
								</div>
								
								<div>		
									<select  name="drpneweqp" id="drpneweqp" class="small set1 m-wrap drpneweqp">											
									</select>									
									<input class="xyz m-wrap txtlength"  type="text"  id="txtlength" name="txtlength" value=""  />
									<input class="xyz m-wrap txtwidth"  type="text"  id="txtwidth" name="txtwidth" value="" />
									<input class="xyz m-wrap txtrate"  type="text"  id="txtrate" name="txtrate" value=""  />
									
									<input class="xyz m-wrap txttype"  type="hidden"  id="txttype" name="txttype" value="" readonly />
									<input class="xyz m-wrap txtassdtl"  type="hidden"  id="txtassdtl" name="txtassdtl" value="" readonly />
									<input class="xyz m-wrap drpqty"  type="text"  id="drpqty" name="drpqty" value="1"  />
									
									<input class="xyz m-wrap txtamt" type="text"  id="txtamt" name="txtamt" value="" readonly />
									
									<input class="xyz m-wrap txthamt" type="hidden"  id="txthamt" name="txthamt" value="" readonly />
									
									<select name="drpnewstf" id="drpnewstf" class="set3 m-wrap drpnewstf"> 											
									</select>
									<select name="drpnewvend" id="drpnewvend" class="set3 m-wrap drpnewvend"> 											
									</select>
									<input class="xyz m-wrap txtvprice" type="text"  id="txtvprice" name="txtvprice" value="" />
								</div>
								
								
								<div>
									<input  type="text"  value="Remark" readonly />
								</div>
								
								<div>
									<textarea rows="2" cols="113" id="txtremark" class="txtremark" name="txtremark"></textarea>
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
													<th> Asseccories</th>
													<th id="ratetbl"> Rate</th>
													<th> Qty</th>
													<th id="amttbl"> Amount</th>
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
								<?php }?>
								<!--div id="eqprec">
								
								</div-->
								
								
								<!--div class="clearfix margin-bottom-10">
									<label for="">Equipment</label>
									<div class="input-icon left">
										<select  name="drpneweqp" id="drpneweqp" class="small m-wrap">
											
										</select>
									</div>									
								</div>
								
								<div class="clearfix margin-bottom-10">
									<label for="">Rate</label>
									<div class="input-icon left" id="showprice">
										<input  style = "width :75px;" type="text"  id="txtrate" name="txtrate" value=""/>
									</div>
								</div>
								<div class="clearfix margin-bottom-10">
									<label for="">Qty</label>
									<div class="input-icon left">
										<select name="drpqty" id="drpqty" class="small m-wrap">	
										
										<?php  
											// for($i=1;$i<=10;$i++)
											// {
												// echo '<option value="'.$i.'">'.$i.'</option>';
											// }
										?>										
											
										</select>
									</div>									
								</div>
								<div class="clearfix margin-bottom-10">
									<label for="">Amount</label>
									<div class="input-icon left" id="showprice">
										<input style = "width :75px;" type="text"  id="txtamt" name="txtamt" value=""/>
									</div>
								</div>
								
								<div class="clearfix margin-bottom-10">
									<label for="">Staff</label>
									<div class="input-icon left">
										<select name="drpnewstf" id="drpnewstf" class="small m-wrap"> 											
										</select>
									</div>
								</div>
								<div class="clearfix margin-bottom-10">
									<label for="">Vendor</label>
									<div class="input-icon left">
										<select name="drpnewvend" id="drpnewvend" class="small m-wrap"> 
											
										</select>
									</div>
								</div-->
								
								
								
								
								<!-- end of the deign-->
								
								
								
							</div>
						</div>
						
						
						
						<h4>Payment Details </h4>
						<hr />
						<input type="hidden" id="txtrescharge" name="txtrescharge" class="m-wrap txtrescharge" readonly  />
						
						<input type="hidden" id="txtvcharge" name="txtvcharge" class="m-wrap txtvcharge" readonly  />
						<div class="clearfix margin-bottom-10">
							
								<div class="input-icon input-append">
									<label for="txtcharge">Client Charge:</label>
								</div>
								<input type="text" id="txtcharge" name="txtcharge" class=" large m-wrap txtcharge client" readonly />
						</div>
						<div class="clearfix margin-bottom-10">
								<div class="input-icon input-append">
									<label for="txtpaid">Paid Amount / Advance: </label>
							    </div>
								<input type="number" id="txtpaid" name="txtpaid" class="large m-wrap sertax" />
						</div>
							
						
						<div class="clearfix margin-bottom-10" >
							
								<div class="input-icon input-append">
									<label for="txtpaid">Discount: </label>
								</div>
								<select name="txttypedis" id="txttypedis" class="discountres"> 
												<option value="Flat">Flat</option>
												<option value="Percentage">Percentage</option>
								</select>
								<input type="text" id="txtdisc" name="txtdisc" class="large m-wrap discount1" />
							
						</div>
						<div class="clearfix margin-bottom-10">
							
								<div class="input-icon input-append">
									<label for="paymentMode">Payment Mode: </label>
								</div>
								<select name="paymentMode" id="paymentMode" onchange='ShowHideDiv();' class="large m-wrap selectpay"> 
									<option value="cash">Cash</option>
									<option value="cheque">Cheque</option>
								</select>
							
						</div>
						<div class="clearfix margin-bottom-10" id="showHide" style="display:none;">
							<div class="pull-left margin-right-20">
								<label for="txtbanknm">Bank Name:</label>
								<div class="input-icon left">
									<input type="text" id="txtbanknm" name="txtbanknm" class="m-wrap" />
								</div>
							</div>
							<div class="pull-right margin-right-20">
								<label for="txtchkno" class="well1">Cheque No:</label>
								<div class="input-icon left">
									<input type="text" id="txtchkno" name="txtchkno" class="m-wrap" />
								</div>
							</div>
						</div>
						<div class="clearfix margin-bottom-10" >
							<div class="pull-left margin-right-10">
								<label for="">Service Tax Applicability: </label>
							</div>
							<select name="taxmode" id="taxmode" class="large m-wrap sertax"> 
								<option select="selected" value="No">No</option>
								<option value="Yes">Yes</option>
							</select>
						</div>
						<input type="hidden" id="txtstax" name="txtstax" value=""/>
						<br/>
						
						<div class="right-side">
							<!--a class="btn blue" id="newaddevent">SAVE <i class="icon-download"></i></a-->
							
							<a class="btn blue " onclick="myFunction()">SAVE <i class="icon-download"></i></a>
							
							<!--input  class="btn blue" type="button" onclick="myFunction()" value="SAVE">
							
							<button >SAVE <i class="icon-download"></i></button-->
							
							<!--a class="btn blue" id="newaddenquiry">ENQUIRY <i class="icon-download"></i></a-->
							<button type="reset" class="btn blue">CANCEL <i class="icon-remove-sign"></i></button>
							
						</div>
						<!--input type="submit" value="SUBMIT"/-->
						<!--input type="submit" value="div1" />
						</form-->
						
						
					</form>
					
					<script>
						function myFunction() {
							document.getElementById("f1").submit();
						}
					</script>
					
				</div>
			</div>
		<!-- END PAGE CONTENT-->
		</div>
	<!-- END PAGE CONTAINER-->
    </div>
	<!-- END CONTAINER -->  
</div>
<!-- END PAGE -->
<!--
function selectall(master,cn)
	{
		var cbarray = document.getElementsByClassName(cn);
		for(var i = 0; i < cbarray.length ; i++)
		{
			var cb = document.getElementById(cbarray[i].id);
			cb.checked = master.checked;
		}
	}
	
	onchange="selectall(this,\'chkall\')"
	
	
	
	 function showCheckboxes(master,cn) {
        var checkboxes = document.getElementsByClassName(cn);
        for(var i = 0; i < checkboxes.length ; i++)
		{
			if (!expanded) {
				checkboxes.style.display = "block";
				expanded = true;
			} else {
				checkboxes.style.display = "none";
				expanded = false;
			}
		}
    }
	onclick="showCheckboxes1(this,selectBox)"
	
-->