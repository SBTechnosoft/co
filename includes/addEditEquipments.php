<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Equipments 
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> Equipments </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo HTTP_SERVER.'index.php?url=EQA';?>">All </a>
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
                    <h4>Equipments Details</h4>
                    <div class="tab-content">
                        <div class="row-fluid">
                            <div class="span8 booking-search">
                                <form action="#">
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
                                    <div class="control-group">
                                        <label class="control-label">Category</label>
                                        <div class="controls">
                                            <select class="large m-wrap" id="txtcateqp" name="txtcateqp" >
                                                <!--option selected="select" value="1">Mumbai </option>
                                                <option value="2"> Delhi </option>
                                                <option value="3">Goa </option>
                                                <option value="4">Pune</option-->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix margin-bottom-20">
                                        <div class="control-group pull-left margin-right-20">
                                            <label class="control-label" for="txtpurdate">Purchase Date</label>
                                            <div class="controls">
                                                <div class="input-append date" id="datetimepicker1">
                                                    <input data-format="yyyy-MM-dd hh:mm:ss" class="m-wrap m-ctrl-medium date-picker" type="text"  id="txtpurdate" name="txtpurdate" value="<?php echo Date;?>" /><span class="add-on"><i class="icon-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="clearfix margin-bottom-10">
                                        <label> Purchase From </label>
                                        <div class="input-icon left">

                                            <input class="m-wrap" type="text"  id="txtpurfrm" name="txtpurfrm" />
                                        </div>
                                    </div>

                                    <!--div class="clearfix margin-bottom-20">
                                        <label> Accessories </label>
                                        <hr>
                                        <div class="control-group pull-left margin-right-20">
                                            <label class="control-label"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All </label>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                            <div class="controls">
                                                <input type="checkbox" />
                                                <input type="text" />
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Required </label>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                            <div class="controls">
                                                <input type="text" />&nbsp;<i class="icon-remove-sign"></i>
                                            </div>
                                        </div>
                                    </div-->
									
									<div class="clearfix margin-bottom-10">
                                        <label> Price </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text"  id="txtprice" name="txtprice" placeholder="Your Equipment Price" />
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label">Type</label>
                                        <div class="controls">
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
									<button id="addEquip" type="button" class="btn blue">Save
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

                            <div class="span4">
                                <img id="blah" src="assets/img/search/1.jpg" />
                                <div class="upload">
                                    <p>Click!</p>

                                    <input type="file" name="upload" onchange="readURL(this)" ;/>
                                </div>
                            </div>
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