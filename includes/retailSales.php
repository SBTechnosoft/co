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
                                        <label> Name </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text" id="txtprdnm" name="txtprdnm" placeholder="Client name">
                                        </div>
                                    </div>
                                    <div class="clearfix margin-bottom-10">
										<label for="">Company</label>
										<div class="input-icon left">
											<select name="drpcmpnm" id="drpcmpnm" class="medium m-wrap">									
											</select>
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
                                        <label> Contact No. </label>
                                        <div class="input-icon left">
											<input class="m-wrap" type="text" id="txtmobno" name="txtmobno" placeholder="Display Mobile number">
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
									<div>
										<input style="width:207px;" type="text"  value="Product Category" readonly />									
										<input style="width:207px;" type="text"  value="Product" readonly />									
										<input style="width:121px;" type="text"  value="Rate" readonly />
										<input style="width:123px;" type="text"  value="Qty" readonly />
										<input style="width:120px;" type="text"  value="Amount" readonly />									
									</div>
									
									<div>
									
										<select  name="prdCtgDrp" id="prdCtgDrp" class="medium m-wrap prdCtgDrp">											
										</select>
										<select  name="drpProd" id="drpProd" class="medium m-wrap drpProd">											
										</select>
										<input class="small m-wrap txtcomgrp"  type="hidden"  id="txtcomgrp" name="txtcomgrp" value=""  />	
										<input class="small m-wrap txtprdrate"  type="text"  id="txtprdrate" name="txtprdrate" value=""  />	
										<input class="small m-wrap txtprdqty"  type="text"  id="txtprdqty" name="txtprdqty" value="1" />																	
										<input class="small m-wrap txtprdamt" type="text"  id="txtprdamt" name="txtprdamt" value="" readonly />	
										
										<a name="addpdDtl" class="btn blue" id="addpdDtl" style="margin-left:15px;" >
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
														<th> Group </th>
														<th> Rate</th>
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
										<label for="txtpaid">Paid Amount / Advance </label>
										<div class="input-icon left">
											<input type="number" id="txtpaid" name="txtpaid" class="m-wrap" />
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<label for="txtdisc">Discount </label>
										<div class="input-icon left">
											<input type="text" id="txtdisc" name="txtdisc" class="m-wrap" />
										</div>
									</div>
									<div class="clearfix margin-bottom-10" >
										<label for="paymentMode">Payment Mode </label>
										<div class="input-icon left">
											<select name="paymentMode" id="paymentMode" onchange='ShowHideDiv();'> 
												<option value="cash">Cash</option>
												<option value="cheque">Cheque</option>
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
									
									<div class="clearfix margin-bottom-10" >
										<label for="">Tax Applicability </label>
										<div class="input-icon left">
											<select name="taxmode" id="taxmode" > 
												<option select="selected" value="No">No</option>
												<option value="Yes">Yes</option>
											</select>
										</div>
									</div>
									
									
									<div>										
										<input style="width:207px;" type="text"  value="Service Tax" readonly  />									
										<input style="width:207px;" type="text"  value="Vat" readonly />									
										<input style="width:207px;" type="text"  value="Total" readonly  />																			
									</div>
									
									<div id ="totdata">									
									</div>
									
									
									
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