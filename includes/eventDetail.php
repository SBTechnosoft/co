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
                        <input type="text" id="txtfpno" name="txtfpno" placeholder="Eg; FP.No...." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtbillno" name="txtbillno" placeholder="Eg; Bill No...." class="m-wrap" />						
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
										<!--th> FP No </th>
										<th> Bill No </th-->
                                        <th> Order Date</th>
										<!--th> Order End</th-->
										
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
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="<?php if(!isset($_GET['id'])&& empty($_GET['id'])){ echo 'active'; }?>"><a data-toggle="tab" href="#tab_2_5">Details </a></li>
                <li class="<?php if(isset($_GET['id'])&& !empty($_GET['id'])){ echo 'active'; }?>"><a data-toggle="tab" href="#tab_1_2" >Places</a></li>
                <li><a data-toggle="tab" href="#tab_2_2" > Accounting </a></li>
				<!-- id is removed here first given the ajax call o the id now no need on this click default fn call-->
				<!--li><a data-toggle="tab" href="#tab_1_2" id="event_places_dtl">Places</a></li>
                <li><a data-toggle="tab" href="#tab_2_2" id="event_eqp_stf_dtl"> Accounting </a></li-->
				
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
							<!-- invoice button-- >
							
							
								<!--input type="hidden" id="txteid" name="txteid" value=""/>
								<input type="hidden" id="txtcmpnm" name="txtcmpnm" value=""/>
								<input type="hidden" id="txtenm" name="txtenm" value=""/>
								<input type="hidden" id="txtfdate" name="txtfdate" value=""/>
								<input type="hidden" id="txtcnm" name="txtcnm" value=""/>
								<input type="hidden" id="txtcharge1" name="txtcharge1" value=""/>
								<input type="hidden" id="txtpaid" name="txtpaid" value="">
								
								<a class="invoice" onclick="document.getElementById('form1').submit();" >
									<i style="cursor : pointer; color:red;" class="fa fa-file-pdf-o fa-3x" aria-hidden="true" data-toggle="tooltip" title="PDF">
									</i>
								</a-->						
													
																 
							
							<!-- end invoice button-->
                            <table>
								<input type="hidden" id="eid" name="eid" />
								
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
							
							<form class="form-search" id="form1" target="_blank" method="post" action="invoicePdf.php">
							
								<input type="hidden" id="txteid" name="txteid" value=""/>
								<input type="hidden" id="txtcmpnm" name="txtcmpnm" value=""/>
								<input type="hidden" id="txtenm" name="txtenm" value=""/>
								<input type="hidden" id="txtfdate" name="txtfdate" value=""/>
								<input type="hidden" id="txtcnm" name="txtcnm" value=""/>
								<input type="hidden" id="txtcharge1" name="txtcharge1" value=""/>
								<input type="hidden" id="txtpaid" name="txtpaid" value="" />
								
								<a class="invoice invoice_btn btn blue" onclick="document.getElementById('form1').submit();" >
									<h3 class="invoice_font"> Generate Invoice <i style="cursor : pointer; color:white;" class="fa fa-file-pdf-o" aria-hidden="true" >
									</h3></i>
								</a>
								
							</form>
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
						
							<div id= "multiinsert">
								
							</div>
						</form>
							<form class="form-search" name="f1" method="post" action="includes/newEventsPost.php" >
								<input type="hidden" class="m-wrap" id="contresn" name="contresn" value="" />		
								<input type="hidden" class="m-wrap" id="clchargen" name="clchargen" value="" />
								<input type="hidden" class="m-wrap" id="clpdchargen" name="clpdchargen" value="" />
								<input type="hidden" class="m-wrap" id="vdchargen" name="vdchargen" value="" />
								<input type="hidden" class="m-wrap" id="vdpdchargen" name="vdpdchargen" value="" />
								<input type="hidden" class="m-wrap" id="txmdn" name="txmdn" value="" />
								<input type="hidden" class="m-wrap" id="txratn" name="txratn" value="" />
								<input type="hidden" class="m-wrap" id="txamtn" name="txamtn" value="" />
								<input type="hidden" class="m-wrap" id="totammtn" name="totammtn" value="" />
															
								<input id="txtrescharge" class="m-wrap txtrescharge" name="txtrescharge" readonly="" type="hidden">
								<input id="txtvcharge" class="m-wrap txtvcharge" name="txtvcharge" readonly="" type="hidden" >
								<input id="txtucharge" class="m-wrap txtucharge" name="txtucharge" readonly="" type="hidden" >
								<input id="txtresvcharge" class="m-wrap txtresvcharge" name="txtresvcharge" readonly="" type="hidden" >
								<div id= "multiupdinsert">
									
								</div>
								<div id="svbtn" class="clearfix margin-bottom-10">				
									<div class="input-icon left">
										<input class="m-wrap btn blue" value="Save" type="submit" />
									</div>
								</div>
							</form>
                            <!--div id="dynamic_field">
                                <h4>Order Places </h4>
                                <hr />		
								<div class="row-fluid">								
									<h4>Order Places Detail </h4>
									<div id="timeline" class="timeline-container">
										<a class="timeline-toggle">
											<i class="fa fa-arrows-alt" aria-hidden="true"></i>
										</a>
										<br class="clear">
										 <div class="tab-content" id="showplsdtl">
																							
										</div>
									</div>
								</div>		
                            </div-->
                        <!--/form-->
					</div>
                </div>
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
													<td class="names"><label for="showeqp">Client Charge</label></td>
													<td>
														<input  id="txtcharge" name="txtcharge" type="text" readonly />
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
											
											
											
											<!--h4> Add Payment Detail </h4><br>
											<div  class="vendcell"> 
												<div class="subvend">Payment Date:</div>
												<div class="subvend"><input type="text" id="txtvpdate" name="txtvpdate" /></div>
											</div>


											<div  class="vendcell">
												<div class="subvend">Payemnt Mode:</div>
												<div class="subvend">
													<select id="txtvpmode" name="txtvpmode">
														<option value="cash" select="selected"> Cash </option>
														<option value="cheque"> Cheque </option>
													</select>
												</div>
											</div>
											<div  class="vendcell"> 
												<div class="subvend">Bank Name:</div>
												<div class="subvend"><input type="text" id="txtvpbnm" name="txtvpbnm"  /></div>
											</div>
											<div  class="vendcell">
												<div class="subvend">Cheque No:</div>
												<div class="subvend"><input type="text" id="txtvpchq" name="txtvpchq"  /></div>
											</div>
											<div  class="vendcell">
												<div class="subvend">Paid Amount</div>
												<div class="subvend"><input type="text" id="txtvdpamt" name="txtvdpamt"  /></div>
											</div><br>
											<div  class="vendcell">
												<a style="cursor:pointer; float: right;" class="btn blue" id="submit_vend_paytrn">Submit </a>
											</div-->
											
											
											
											
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
														<input  id="txtpaidamt" name="txtpaidamt" type="text" readonly />
														<button type="button" class=" btn blue" id="open" > <i class="icon-plus"> </i></button>
													</td> 
												</tr>
											</div>
										</div>	
										
										<div class="input-icon left">
											<div class="controls">
												<tr>
													<td class="names"><label for="txtstf">Client Discount</label></td>
													<td>
														<input  id="txtcldesc" name="txtcldesc" type="text" readonly />
													</td> 
												</tr>
											</div>
										</div>
									</table>
									<br/>
								</div>	
									<!-- which detail that do the payement for vendor for particular -->
									<div id="vend_pop_background">		
									</div>
									<div id="vend_pop_box">
										<span id="vend_close"> &times; </span>													
										<h4 align="center" style= "font-weight:bold;"> Add Vendor Payment Detail </h4>
										<br>
										
											
										<div class="TableRowing">
											&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
											<strong>Add Vendor Payment</strong>
										</div>
										
										<div class="Table" id="showVendAllpaidtrn">																	
										</div>
										<br/><br/>
										<div class="right-side" id="add_div_vend">
											<a class="btn blue" id="vendaddrow">Add</a>
											
											<button class="btn blue" id="close_vend">CANCEL</button>
										</div>
										
										<div id="ins_vend_row" style="display:none;" >
											<!--div class="vendcell" > vendor id:
												<input type="text" id="txtevent_vend_id" name="txtevent_vend_id" readonly />
											</div>
											<div  class="vendcell"> Event ID:
												<input type="text" id="txtvend_evnt_id"  name="txtvend_evnt_id"  readonly />
											</div-->
											<input type="hidden" id="txtevent_vend_id" name="txtevent_vend_id" readonly />
											<input type="hidden" id="txtvend_evnt_id"  name="txtvend_evnt_id"  readonly />
											
											<!--h4> Add Payment Detail </h4>
											<div  class="vendcell"> Payment Date:<input type="text" id="txtvpdate" name="txtvpdate" /></div>
											<div  class="vendcell">
												Payemnt Mode:
												<select id="txtvpmode" name="txtvpmode">
													<option value="cash" select="selected"> Cash </option>
													<option value="cheque"> Cheque </option>
												</select>
											</div>
											<div  class="vendcell"> Bank Name:<input type="text" id="txtvpbnm" name="txtvpbnm"  /></div>
											<div  class="vendcell">Cheque No: <input type="text" id="txtvpchq" name="txtvpchq"  /></div>
											<div  class="vendcell">Paid Amount<input type="text" id="txtvdpamt" name="txtvdpamt"  /></div><br>
											<div  class="vendcell"><a style="cursor:pointer;" class="btn blue" id="submit_vend_paytrn">Submit </a></div-->						
											
											<h4> Add Payment Detail </h4><br>
											<div  class="vendcell"> 
												<div class="subvend">Payment Date:</div>
												<div class="subvend">
												
													<div id="datetimepickerPT" class="input-append date">
														<input data-format="yyyy-MM-dd hh:mm:ss" type="text" name="txtvpdate" id="txtvpdate"></input>
														<span class="add-on">
														  <i class="icon-time" class="icon-calendar">
														  </i>
														</span>
													</div>
												
													<!--input type="text" id="txtvpdate" name="txtvpdate" /-->
												</div>
											</div>


											<div  class="vendcell">
												<div class="subvend">Payemnt Mode:</div>
												<div class="subvend">
													<select id="txtvpmode" name="txtvpmode" onchange='ShowHideDiv1();'>
														<option value="cash"> Cash </option>
														<option value="cheque"> Cheque </option>
													</select>
												</div>
											</div>
											<div id="showHide1" style="display:none;">
												<div  class="vendcell"> 
													<div class="subvend">Bank Name:</div>
													<div class="subvend"><input type="text" id="txtvpbnm" name="txtvpbnm"  /></div>
												</div>
												<div  class="vendcell">
													<div class="subvend">Cheque No:</div>
													<div class="subvend"><input type="text" id="txtvpchq" name="txtvpchq"  /></div>
												</div>
											</div>
											<div  class="vendcell">
												<div class="subvend">Paid Amount</div>
												<div class="subvend"><input type="text" id="txtvdpamt" name="txtvdpamt"  /></div>
											</div><br>
											<div  class="vendcell">
												<a style="cursor:pointer; float: right;" class="btn blue" id="submit_vend_paytrn">Submit </a>
											</div>
											
											<!--div class="middle">
												<button class="btn blue" id="remove_vend_row"> Remove</button>
											</div-->
										</div>								
										
																												
									</div>
									
									
									
									
									<h4>Vendor Detail </h4>
									
									<div class="row-fluid">
										<div class="tabbable tabbable-custom tabbable-full-width">
											<div class="tab-content">
												<div class="portlet box green">
													<div class="portlet-title">
														<div class="caption"><i class="fa fa-calendar-plus-o"></i>Vendor Details</div>

													</div>
													<div class="portlet-body">
														<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
															<thead>
																<tr>
																	<th> V. Name</th>
																	<th> V. Company </th>
																	<th>V. Category</th>																	
																	<th> V. Charges </th>
																	<th> V. Paid Amt</th>
																	<th> Vendor Status </th>
																	<th> Action </th>
																</tr>
															</thead>
															<tbody id="showvendpaidtrn">
																
															   
															</tbody>
														</table>
													</div>
												</div>

												<!--end tab-pane-->

											</div>
										</div>
										<!--end tabbable-->
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