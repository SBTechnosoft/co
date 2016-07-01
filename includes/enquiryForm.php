<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Enquiry 
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> Enquiry</a>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="tabbable tabbable-custom tabbable-full-width">
                <h4>Enquiry Form</h4>
                <div class="tab-content">
                    <div class="row-fluid">
                        <div class="span10 booking-search">
                            <form action="#">
                                <table>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Client Name </td>
                                            <td>
                                                <input type="text" id="txtclnm" name="txtclnm" class="small-box" />
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Address</td>
                                            <td>
                                                <textarea class="small-box" id="txtcladd" name="txtcladd"></textarea>
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Email ID </td>
                                            <td>
                                                <input type="text" id="txtclmail" name="txtclmail" class="small-box" placeholder="Eg; www.ivaluation.com" />
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Contact No </td>
                                            <td>
                                                <input class="small-box" id="txtclmob" name="txtclmob" type="text" placeholder="Eg; +91 9727123567" />
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <td><label class="col-md-2" for="txtclenqdate">Date of Enquiry </label></td>
										  <td>
										  <div id="datetimepicker1" class="input-append date col-md-4">
										   <input data-format="yyyy-MM-dd hh:mm:ss" class="form-control" type="text" name="txtclenqdate" id="txtclenqdate" value="<?php echo Date;?>"/>
										   <span class="add-on">
											 <i class="icon-time" class="icon-calendar"></i>
										   </span>
										  </div>
										  </td>
									</div>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Type of Event</td>
                                            <td>
                                                <input class="small-box" type="text" id="txt_type_event" name="txt_type_event" />
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
									<tr>
                                        <td><label class="col-md-2" for="txtfrom_dt">From Date</label></td>
                                                <td>
                                                    <div class="input-append date col-md-4" id="datetimepicker2">
                                                        <input data-format="yyyy-MM-dd hh:mm:ss" class="form-control" type="text" id="txtfrom_dt" name="txtfrom_dt" value="<?php echo Date;?>" />
                                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                                    </div>
                                                </td>

                                                <td><label for="txt_to_dt">To Date</label></td>
                                                <td>
                                                    <div class="input-append date" id="datetimepicker3">
                                                        <input data-format="yyyy-MM-dd hh:mm:ss" class="form-control" type="text" id="txt_to_dt" name="txt_to_dt" value="<?php echo Date;?>" />
                                                        <span class="add-on"><i class="icon-calendar"></i></span>
                                                    </div>
                                                </td>
                                    </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <tr>
                                            <td class="names">Address</td>
                                            <td>
                                                <textarea cols='50' rows='3' id="txt_event_add" name="txt_event_add"></textarea>
                                            </td>
                                        </tr>
                                    </div>
                                    <div class="input-icon left">
                                        <div class="controls">
                                            <tr>
                                                <td class="names">Reminder</td>
                                                <td>
                                                    <select class="medium m-wrap" id="drp_remainder" name="drp_remainder">
                                                        <option select="selected" value="For Category">
                                                            For Category
                                                        </option>
                                                        <option value="For Accessories">
                                                            For Accessories
                                                        </option>
                                                        <option value="For Staff ">
                                                            For Staff
                                                        </option>
                                                        <option value="For Accounting">
                                                            For Accounting
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                                </table>
                                <div class="right-side">
                                    <button class="btn blue">CANCEL <i class="icon-remove-sign"></i></button>
                                    <button id="btn_ins_ok" type="button" class="btn blue">OK 
                                        <i class="icon-download"></i>
                                    </button>
                                </div>
                                <span id="msgs">						
								</span>
                            </form>
                            <!--end booking-search-->
                        </div>
                        <!--end row-fluid-->
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
            <!--end tabbable-->
        </div>
        <!-- END PAGE CONTENT-->
    </div>
	<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->