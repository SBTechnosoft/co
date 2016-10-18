<!-- BEGIN PAGE -->
<?php
if(isset($_GET['id'])&& !empty($_GET['id']))
{
	$id = $_GET['id'];
	?>
	
	<input type="hidden" id="txtenqid" name="txtenqid" value="<?php echo $id; ?>"/>
	<?php
}
else
{
	?>
	<input type="hidden" id="txtenqid" name="txtenqid" value=""/>
	<?php
}
// $setting = showSetting($conn);

// if(isset($setting) && !empty($setting))
// {
	
	// $delvbl = $setting[0]['deliverable'];
	
// }

?>
<div class="page-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Order<small> Details</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Order Details  </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <a href="<?php echo HTTP_SERVER.'index.php?url=EVE';?>">
                            <button type="button" class="btn green">Add
                                <i class="icon-plus-sign icon-white"></i>
                            </button>
                        </a>
                    </li>
                    <li id="search_btn">
                        <button type="button" class="btn green" data-toggle="tooltip" title="Search">
                            <i class="icon-search m-icon-white"></i>
                        </button>&nbsp;
                    </li>
					
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <div id="search_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtename" name="txtename" placeholder="Eg; Order Name..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <select name="drpcmpnm" id="drpcmpnm" class="large m-wrap"> 
									
						</select>						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtclname" name="txtclname" placeholder="Eg; Client Name..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtfromdt" name="txtfromdt" placeholder="Eg; From Date..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">					
					<div class="input-cont">
                        <input type="text" id="txttodt" name="txttodt" placeholder="Eg; To date..." class="m-wrap" />						
                    </div>                    
                </div>				
				</br>
				<button type="button" id="filter_data" class="btn green">Search &nbsp;
					<i class="icon-search m-icon-white"></i>
				</button>
            </form>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="tabbable tabbable-custom tabbable-full-width">
                <div class="tab-content">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="fa fa-calendar-plus-o"></i>Order Details</div>
							<div class="tools">
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>

                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th> Order Name </th>
                                        <th>Client Name </th>
										
                                        <th> Order Date</th>
										
										
										<th> Charged Amt </th>
										<th> S.Tax </th>
										<th> Tot Amt </th>
										
										<th>Rec.Amt</th>
										<th> Payment Status </th>
										<th> Inv.</th>
										
										<th> Action </th>
									</tr>
                                </thead>
								
                                <tbody id="event_detail">                                    
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--end tab-pane-->

                </div>
            </div>
            <!--end tabbable-->
        </div>
        <!--end tabbable-->
		<div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Client Name</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#" id="evntclnm1">  </a>
						<input type="text" id="evntclnm" name="evntclnm" readonly />
                    </li>
                    
					
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="<?php if(!isset($_GET['id'])&& empty($_GET['id'])){ echo 'active'; }?>"><a data-toggle="tab" href="#tab_2_5">Details </a></li>
                <li class="<?php if(isset($_GET['id'])&& !empty($_GET['id'])){ echo 'active'; }?>"><a data-toggle="tab" href="#tab_1_2" >Places</a></li>                
				<li><a data-toggle="tab" href="#tab_2_2" > Accounting </a></li>
				
            </ul>
			
            <div class="tab-content">				
                <div id="tab_2_5" class="tab-pane <?php if(!isset($_GET['id'])&& empty($_GET['id'])){ echo 'active'; }?>">
                    <div class="row-fluid">
						<div class="span8 detail_content">
							<div class="search-forms search-default">
								<form class="form-search" >
									<h4>
										Order Detail 
										<a id="editdetail" style = "float:right; cursor:pointer;">
										<i class="fa fa-pencil-square-o" ></i>
										</a>
									</h4>
									
									<hr />
									
									<table>
										<input type="hidden" id="eid" name="eid" />
										<input type="hidden" id="event_cal_id" name="event_cal_id" />
										<div class="input-icon left">
											<tr>
												<td class="names"><label for="txteventnm"> Order Name </label></td>
												<td>
													<input type="text" class="big-box" id="txteventnm" name="txteventnm" readonly />
												</td>
											</tr>
										</div>
										<div class="input-icon left">
											<tr>
												<td class="names"><label for="txteventds">Description </label></td>
												<td>
												<input class="big-box" id="txteventds" name="txteventds" type="text" readonly />
												</td>
											</tr>
										</div>
										<br />
									</table>
									<br />
									<h4>Client Detail </h4>
									<hr />
									<table>
										<div class="input-icon left">
											<tr>
												<td class="names"><label for="txtclnm">Name </label></td>
												<td>
													<input type="text" id="txtclnm" name="txtclnm"  class="small-box" readonly />
												</td>
											</tr>
										</div>
										<div class="input-icon left">
											<tr>
												<td class="names"><label for="txtclcmp">Company</label> </td>
												<td>
													 <input class="small-box" id="txtclcmp" name="txtclcmp" type="text" readonly />
												</td>
											</tr>
										</div>
										<div class="input-icon left">
											<tr>
												<td class="names"><label for="txtclemail">Email ID </label></td>
												<td>
													<input type="text" class="small-box" id="txtclemail" name="txtclemail" placeholder="Eg; www.siliconbrain.com" readonly />
												 </td>
											</tr>
											</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtworkmob">Work</label></td>
													<td>
														<input type="text" id="txtworkmob" name="txtworkmob" class="small-box" readonly />
													</td>
													<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
													<td><label for="txthmmob">Home</label>&nbsp;&nbsp;&nbsp;</td>
													<td>
														<input type="text" id="txthmmob" name="txthmmob" class="small-box" readonly />
													</td>
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											 <tr>
												<td class="names"><label for="txtmob">Mobile </label></td>
												<td>
													 <input type="text" id="txtmob" name="txtmob" class="small-box" readonly />
												</td>
											</tr>
										</div>
										
										<div class="input-icon left">
											 <tr>
												<td class="names"><label for="jobpart1">Data Part1 </label></td>
												<td>
													 <input type="text" id="txtjobdata1" name="txtjobdata1" class="small-box" readonly />
												</td>
											</tr>
										</div>
										
										<div class="input-icon left">
											 <tr>
												<td class="names"><label for="jobpart2">Data Part2 </label></td>
												<td>
													 <input type="text" id="txtjobdata2" name="txtjobdata2" class="small-box" readonly />
												</td>
											</tr>
										</div>
										
										<div class="input-icon left">
											 <tr>
												<td class="names"><label for="txtstatus">Status </label></td>
												<td>
													<input type="text" id="txtstatus" name="txtstatus" class="small-box" readonly />
												</td>
											</tr>
											</br>
										</div>
										
										
											<tr id="showeditbtn" style="display:none;" >
												<td class="names">
													<a id = "btnupdate" class="btn blue"> Save </a>
												</td>
												<td>
													<a id = "btncancel" class="btn blue"> Cancel</a>
												</td>
											</tr>
										
										
										
										
									</table>
									<!--end tabbable-->
								</form>
							</div>
					
						</div>
						<div class="span4">
							<div class="container-narrow">
								<!-- invoice button -->
								<!--
								<form class="form-search" id="form1" target="_blank" method="post" action="invoicePdf.php">
								
									<input type="hidden" id="txteid" name="txteid" value=""/>
									<input type="hidden" id="txtcmpnm" name="txtcmpnm" value=""/>
									<input type="hidden" id="txtenm" name="txtenm" value=""/>
									<input type="hidden" id="txtfdate" name="txtfdate" value=""/>
									<input type="hidden" id="txtcnm" name="txtcnm" value=""/>
									<input type="hidden" id="txtcharge1" name="txtcharge1" value=""/>
									<input type="hidden" id="txtpaid" name="txtpaid" value="" />
								-->	
									<a class="invoice invoice_btn btn blue" onclick="document.getElementById('form1').submit();" >
										<h3 class="invoice_font"> View Invoice <i style="cursor : pointer; color:white;" class="fa fa-file-pdf-o" aria-hidden="true" >
										</h3></i>
									</a>
									
								<!--	
								</form>
								
								-->
									<div id="showpdf">
										<!--a href="upload/invoice/20160513-95_1.pdf" class="pdflist" target="_blank"> PDF </a><br-->
										
									</div>
								<!-- end invoice button-->
								<!-- invoice button -->
								
								<!--form class="form-search" id="form2" target="_blank" method="post" action="full_invoice.php"-->
																
								<form class="form-search" id="form2" target="_blank" method="post" action="full_invoice.php">
									
									<input type="hidden" id="txtfpdfeid" name="txtfpdfeid" value=""/>
									<input type="hidden" id="txtfpdffromdt" name="txtfpdffromdt" value=""/>
									
									<a class="invoice invoice_btn btn blue" onclick="document.getElementById('form2').submit();" >
										<h3 class="invoice_font"> Order Info 
											<i style="cursor : pointer; color:white;" class="fa fa-file-pdf-o" aria-hidden="true" >
											</i>
										</h3>																			
									</a>
								</form>	
									<div id="showfullpdf">
										<!--a href="upload/invoice/20160513-95_1.pdf" class="pdflist" target="_blank"> PDF </a><br-->
										
									</div>
								<!--/form-->
								
								<!-- end invoice button-->
							</div>
						</div>
					</div>
				</div>
                <!--end tab-pane-->
                <div id="tab_1_2" class="tab-pane <?php if(isset($_GET['id'])&& !empty($_GET['id'])){ echo 'active'; }?>">
                    <div class="row-fluid search-forms search-default">
                        <form class="form-search" action="#">
							<input type="hidden" name="taxmoder" id="taxmoder" />
							<input type="hidden" name="clientchargesR" id="clientchargesR" />
							<input type="hidden" name="staxR" id="staxR" />
							<input type="hidden" name="totalAmtR" id="totalAmtR" />
							
							<input type="hidden" name="insclientchargesR" id="insclientchargesR" class="insclientchargesR" value=0 />
							<input type="hidden" name="insstaxR" id="insstaxR" class="insstaxR"  value=0 />
							<input type="hidden" name="instotalAmtR" id="instotalAmtR" class="instotalAmtR"  value=0 />
							<h4 >Retail Detail										
							</h4> 
							<div id="retailInfo">
								<div>
									<input style="width:207px;" type="text"  value="Product Category" tabindex="-1" readonly />									
									<input style="width:207px;" type="text"  value="Product" tabindex="-1" readonly />
									<input style="width:120px;" type="text"  value="Photo Id" tabindex="-1" readonly />
									<input style="width:121px;" type="text"  value="Rate" tabindex="-1" readonly />
									<input style="width:121px;" type="text"  value="Tax" tabindex="-1" readonly />
									<input style="width:123px;" type="text"  value="Qty" tabindex="-1" readonly />
									<input style="width:120px;" type="text"  value="Amount" tabindex="-1" readonly />									
								</div>
								
								<div>
								
									<select  name="prdCtgDrp" id="prdCtgDrp" class="medium m-wrap prdCtgDrp">											
									</select>
									<select  name="drpProd" id="drpProd" class="medium m-wrap drpProd">											
									</select>
									<input class="small m-wrap txtphotoId" type="text"  id="txtphotoId" name="txtphotoId" value=""  />
								
									<input class="small m-wrap txtcomgrp"  type="hidden"  id="txtcomgrp" name="txtcomgrp" value=""  />
									
									<input class="small m-wrap htxtprdrate"  type="hidden"  id="htxtprdrate" name="htxtprdrate" value=""  />
									<input class="small m-wrap htxtprdtax"  type="hidden"  id="htxtprdtax" name="htxtprdtax" value=""  />
									
									<input class="small m-wrap txtprdrate"  type="text"  id="txtprdrate" name="txtprdrate" value=""  />
									<input class="small m-wrap txtprdtax"  type="text"  id="txtprdtax" name="txtprdtax" value=""  />
									<input class="small m-wrap txtprdqty"  type="text"  id="txtprdqty" name="txtprdqty" value="1" />																	
									<input class="small m-wrap txtprdamt" type="text"  id="txtprdamt" name="txtprdamt" value="" readonly />	
									
									
									<a name="addpdDtl" href="javascript:;" class="btn blue" id="addpdDtl" style="margin-left:15px;" >
										Add							
									</a>
									
								</div>
							</div>
							<br>
							<div class="portlet box green">
								<div class="portlet-title">
									<div class="caption"><i class="icon-reorder"></i>Retail Detail</div>
									
									<a id="edtretail" class="invoice invoice_excel">
										<i class="fa fa-pencil-square-o" style="color:white; margin-top:10%;" aria-hidden="true"></i>
									</a>
									
								</div>
								<div class="portlet-body">
									<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
										<thead>
											<tr>
												<th>Particular </th>
												<th> Photo Id </th>
												<th> Rate</th>
												<th> Qty</th>
												<th> Tax</th>
												<th> Amount</th>												
												<th> Action</th>													 
											</tr>
										</thead>
										<tbody id="rtldtl">
										</tbody>
									</table>
								</div>
							</div>
							<div id ="shwRetail" class="clearfix margin-bottom-10">									
								<div class="input-icon left">
									<input class="m-wrap btn blue" value="Save"  id="updRetail" name="updRetail"  type="button" />
								</div>
							</div>
							
							<!--div id= "multiinsert">
								
							</div-->
						</form>                      
					</div>
                </div>
                <!--end tab-pane-->				
                <!--end tab-pane-->
                <div id="tab_2_2" class="tab-pane">
					<div class="row-fluid search-forms search-default">
						<form class="form-search" action="#">
							
								<h4>Accounting </h4>
								<hr />
								<div class="tab-content">
									<table>							
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="showeqp">Total Amount</label></td>
													<td>
														<input  class="textalign" id="client_charges" name="client_charges" type="text" readonly />
													</td>                                            
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf"> Discount</label></td>
													<td>
														<input  class="textalign" id="txtcldesc" name="txtcldesc" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf"> Discounted Amount</label></td>
													<td>
														<input  class="textalign" id="disamt" name="disamt" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf"> Service Tax</label></td>
													<td>
														<input  class="textalign" id="st" name="st" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf"> Final Amount</label></td>
													<td>
														<input  class="textalign" id="txtcharge" name="txtcharge" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf">Payment Status</label></td>
													<td>
														<input  id="txtpaystatus" name="txtpaystatus" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
										
										<div id="pop_background">		
										</div>
										<div id="pop_box">
											<span id="close"> &times; </span>													
											<h4 align="center" style= "font-weight:bold;"> Add Payment Detail </h4>
											<br>
											
												
											<div class="TableRowing">
												&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
												<strong>Add Payment</strong>
											</div>
											
											<div class="Table" id="showeventpaidtrn">																	
											</div>
											<br/><br/>
											<div class="right-side" id="add_div">
												<button class="btn blue" id="addrow">Add</button>
												
												<button class="btn blue" id="close1">CANCEL</button>
											</div>
											<br/>
											
											
											<div id="insrow" style="display : none;">
												<h4> Add Payment Detail </h4><br>
												<div class="vendcell">
													<div class="subvend">Payment Date:</div>
													<div class="subvend">
														
														<div id="datetimepickerPF" class="input-append date">
															<input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="txtpdate" id="txtpdate"></input>
															<span class="add-on">
															  <i class="icon-time" class="icon-calendar">
															  </i>
															</span>
														</div>
														<!--input type="text" id="txtpdate" name="txtpdate"  /-->
													</div>
												</div>												
													<input type="hidden" id="txtpeid"  name="txtpeid"  readonly />
													<input type="hidden" id="txratn"  name="txratn"  readonly />
												
												<div class="vendcell">
													<div class="subvend">Amount:</div>
													<div class="subvend"><input type="text" id="txtpamt" name="txtpamt" /></div>
												</div>
												
												<div  class="vendcell">
													<div class="subvend">Payment Mode:</div>
													<div class="subvend">
														<select id="txtpmode" name="txtpmode" onchange='ShowHideDiv();'>
															<option value="cash" > Cash </option>
															<option value="cheque"> Cheque </option>
														</select>
													</div>
												</div>
												<div id="ShowHide" style="display:none;">
													<div class="vendcell">
														<div class="subvend">Bank Name:</div>
														<div class="subvend"><input type="text" id="txtpbnm" name="txtpbnm"  /></div>
													</div>
													<div  class="vendcell">
														<div class="subvend">Cheque No:</div>
														<div class="subvend"><input type="text" id="txtpchq" name="txtpchq"  /></div>
													</div>
												</div>
												<div  class="vendcell">
													<div class="subvend">Tax:</div>
													<div class="subvend">
														<select id="txtptax" name="txtptax" onchange='ShowHideDiv();'>
															<option value="Yes" > With Tax </option>
															<option value="No"> Without Tax </option>
														</select>
													</div>
												</div>
												<div  class="vendcell">
													<div class="subvend">Payment Trn:</div>
													<div class="subvend">
														<select id="txtptrn" name="txtptrn">
															<option value="Payment" select="selected"> Payment </option>
															<option value="Refund"> Refund </option>
														</select>
													</div>
												</div>
												<br>
												<div  class="vendcell">
													<a style=" float:right;" class="btn blue" id="removerow"> Remove</a>
													<a style="cursor:pointer; float:right;" class="btn blue submit_btn" id="submit_paytrn">Submit </a>
													
												</div>							
												
												<!--div class="middle">
													<button class="btn blue" id="removerow"> Remove</button>
												</div-->
											</div>						
											
										</div>
										
								
										
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf">Paid Amount</label></td>
													<td>
														<input  class="textalign" id="txtpaidamt" name="txtpaidamt" type="text" readonly />
														<button type="button" class=" btn blue" id="open" > <i class="icon-plus"> </i></button>
													</td> 
												</tr>
											</div>
										</div>	
										
										
									</table>
									<br/>
								</div>									
							
						</form>
					</div>
                    <!--end row-fluid-->
                </div>
				
                <!--end tab-pane-->
            </div>
			
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->