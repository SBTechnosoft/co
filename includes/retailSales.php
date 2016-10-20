<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Retail Sales 
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> Retail Sales </a>
                        <i class="icon-angle-right"></i>
                    </li>                    
                    <li>
                        <a href="#">Add </a>
                    </li>

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="container-fluid">

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">

                <div class="tabbable tabbable-custom tabbable-full-width">
                    <h4>Retail Sales</h4>
                    <div class="tab-content">
                        <div class="row-fluid">
                            <div class="span12 booking-search">
                                <form name="fm1" id="fm1" method="post" action="retailInv.php" target="_blank">
                                    
									<div class="clearfix margin-bottom-10">
                                        <label> Contact No. </label>
                                        <div class="input-icon left ui-widget">
										
											<input class="m-wrap" type="text" id="txtmobno" name="txtmobno" placeholder="Display Mobile number">
                                        </div>
                                    </div>	
									<div class="clearfix margin-bottom-10">
                                        <label> Name </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text" id="txtprdnm" name="txtprdnm" placeholder="Client name">
											<a id ="open1"  class="open1" style="">
													<i class="fa fa-info-circle" aria-hidden="true" id=""></i>
 											</a>
                                        </div>
                                    </div>
									<div id="Rse_pop_background">		
										</div>
										<div id="Rse_pop_box">
											<span id="Rse_close"> &times; </span>													
											<h4 align="center" style= "font-weight:bold;"> Client History </h4>
											<br>
 											
												
											<div class="TableRowing">
												&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
												<strong> Client History</strong>
											</div>
											<div class="Table" id="showClient">																	
											</div>
											<!--div class="Table" id="showeventpaidtrn">																	
											</div-->
											<br/><br/>
											<div class="right-side">
												
												
												<button class="btn blue" id="close_Rse">CANCEL</button>
											</div>
											<br/>
											</div>
                                    <div class="clearfix margin-bottom-10">
										<div class="pull-left margin-right-20">
											<label for="">Company</label>
											<div class="input-icon left">
												<select name="drpcmpnm1" id="drpcmpnm1" class="medium m-wrap">									
												</select>
											</div>
									</div>
										<div class="pull-right margin-right-20">
											<label for="">Invoice</label>
												<div class="input-icon left">
													<input class="m-wrap" type="text" id="invoice1" name="invoice1" readonly />
													
												</div>
										</div>
									</div>
									<div class="clearfix margin-bottom-10" >
										<label for="">Tax Applicability </label>
										<div class="input-icon left">
											<select name="taxmode" id="taxmode" > 
												<option  value="No">No</option>
												<option selected="selected" value="Yes">Yes</option>
												
											</select>
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
                                        <label> Client Address </label>
                                        <div class="input-icon left">
											<textarea rows="2" cols="115"  class="txtremark" id="txtadd" name="txtadd">
											</textarea>	
                                        </div>
                                    </div>
									<div class="clearfix margin-bottom-10">
                                        <label> Email-Id </label>
                                        <div class="input-icon left">
											<input class="m-wrap" type="text" id="email" name="email"/>
                                        </div>
                                    </div>
                                    <div class="clearfix margin-bottom-10">
										<div class="pull-left margin-right-20">
											<label for="txtfromdt"> Date </label>
											<div id="datetimepicker1" class="input-append date">
												<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap" value="<?php echo Date;?>" type="text" name="txtfromdt" id="txtfromdt"></input>
												<span class="add-on">
												  <i class="icon-time" class="icon-calendar"></i>
												</span>
											</div>
										</div>
										<div class="pull-right margin-right-20">
											<label for="txttodt" class="well1">Delivery Date </label> 
											<div id="datetimepicker2" class="input-append date">
												<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap" value="<?php echo Date;?>" type="text" name="txttodt" id="txttodt"></input>
												<span class="add-on">
												  <i class="icon-time" class="icon-calendar"></i>
												</span>
											</div>
										</div>	
									</div>
									<div class="clearfix margin-bottom-10" >
										<label for="">Operator Name </label>
										<div class="input-icon left">
											<select name="staff" id="staff"> 
												
												
											</select>
										</div>
									</div>
									
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
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption"><i class="icon-reorder"></i>Product Detail</div>

										</div>
										<div class="portlet-body">
											<table class="table table-striped table-bordered table-hover table-full-width" id="sample_3">
												<thead>
													<tr>
														<th> Product Category</th>	
														<th> Product </th>
														<th> Photo Id </th>
														<th> Group </th>
														<th> Rate</th>
														<th> Tax</th>
														<th> Qty</th>
														<th> Amount</th>													
														<th> Action</th>													 
													</tr>
												</thead>
												<tbody id="prdrec">

												</tbody>
											</table>
										</div>
									</div>
									</br>
									<h4>Payment Details </h4>
									<hr />
									<input type="hidden" id="txtrescharge" name="txtrescharge" class="m-wrap txtrescharge" readonly  />
									
									<input type="hidden" id="txtvcharge" name="txtvcharge" class="m-wrap txtvcharge" readonly  />
									<div class="clearfix margin-bottom-10">
										<label for="txtcharge">Client Charge </label>
										<div class="input-icon left">
											<input type="text" id="txtcharge" name="txtcharge" class="m-wrap txtcharge" readonly />
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<label for="txttottax">Tax </label>
										<div class="input-icon left">
											<input type="text" id="txttottax" name="txttottax" class="m-wrap txttottax" readonly />
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<label for="txttotamt">Total Amount </label>
										<div class="input-icon left">
											<input type="text" id="txttotamt" name="txttotamt" class="m-wrap txttotamt" readonly />
										</div>
									</div>
									
									<div class="clearfix margin-bottom-10">
										<label for="txtdisc">Discount </label>
										<div class="input-icon left">
											<select name="txttypedis" id="txttypedis" class="discountres"> 
												<option value="Flat">Flat</option>
												<option value="Percentage">Percentage</option>
											</select>
											<input type="text" id="txtdisc" name="txtdisc" value="0" class="m-wrap" />
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<label for="txtdiscamt">Discount Amount </label>
										<div class="input-icon left">
											<input type="text" id="txtdiscamt" name="txtdiscamt" value="0" class="m-wrap txtdiscamt" readonly />
										</div>
									</div>
									
									<div class="clearfix margin-bottom-10">
										<label for="txtfinAmt">Final Amount </label>
										<div class="input-icon left">
											<input type="text" id="txtfinAmt" name="txtfinAmt" class="m-wrap txtfinAmt" readonly />
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<label for="txtpaid">Paid Amount / Advance </label>
										<div class="input-icon left">
											<input type="number" id="txtpaid" name="txtpaid" value="0" class="m-wrap" />
										</div>
									</div>
									
									<div class="clearfix margin-bottom-10">
										<label for="txtremAmt">Remain Amount </label>
										<div class="input-icon left">
											<input type="text" id="txtremAmt" name="txtremAmt" class="m-wrap txtremAmt" readonly />
										</div>
									</div>
									
									<div class="clearfix margin-bottom-10" >
										<label for="paymentMode">Payment Mode </label>
										<div class="input-icon left">
											<select name="paymentMode" id="paymentMode" onchange='ShowHideDiv();'> 
												<option value="cash">Cash</option>
												<option value="cheque">Cheque</option>
												<option value="creditcard">Credit Card</option>
											</select>
										</div>
									</div>
									<div class="clearfix margin-bottom-10" id="showHide" style="display:none;">
										<div class="pull-left margin-right-20">
											<label for="txtbanknm">Bank Name</label>
											<div class="input-icon left">
												<input type="text" id="txtbanknm" name="txtbanknm" class="m-wrap" />
											</div>
										</div>
										<div class="pull-right margin-right-20">
											<label for="txtchkno" class="well1">Cheque No</label>
											<div class="input-icon left">
												<input type="text" id="txtchkno" name="txtchkno" class="m-wrap" />
											</div>
										</div>
									</div>
									
									
									
									
									<!--div>										
										<input style="width:207px;" type="text"  value="Service Tax" readonly  />									
										<input style="width:207px;" type="text"  value="Vat" readonly />									
										<input style="width:207px;" type="text"  value="Total" readonly  />																			
									</div>
									
									<div id ="totdata">									
									</div-->
									
									
									
									<input type="hidden" id="txtstax" name="txtstax" value=""/>
									<input type="hidden" id="txtvat" name="txtvat" value=""/>
									<br/>
									<!--button class="btn blue right-side">SAVE <i class="icon-download"></i></button-->
									<div class="right-side">
									<button id="submit" type="submit" class="btn blue">Save
                                        <i class="icon-download"></i>
                                    </button>
                                    <button class="btn blue ">CANCEL <i class="icon-remove-sign"></i></button>
									</div>
                                </form>
								<span id="msgs">
									
								</span>

                                <!--end booking-search-->
                            </div>
                            <!--end row-fluid-->

                           
                            <!--end span4-->

                        </div>
                        <!--end tab-pane-->
                    </div>
                </div>
                <!--end tabbable-->
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->