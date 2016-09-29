<?php

if(isset($_POST['prod_id']))
{
	$prod_id = $_POST['prod_id'];
	
}


?>
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Product 
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> Product </a>
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
                    <h4>Product Details</h4>
                    <div class="tab-content">
                        <div class="row-fluid">
                            <div class="span8 booking-search">
                                <form action="#">
								<input type="hidden" id="txttaxrt" name="txttaxrt" >
								<input type="hidden" id="prod_id" name="prod_id" value="<?php if(isset($_POST['prod_id'])){echo $_POST['prod_id'];}  ?>" />
                                    <div class="clearfix margin-bottom-10">
                                        <label> Name </label>
                                        <div class="input-icon left">

                                            <input class="m-wrap" type="text" id="txtprdnm" name="txtprdnm" placeholder="Product name">
                                        </div>
                                    </div>
                                    <div class="clearfix margin-bottom-10">
                                        <div class="pull-left margin-right-20">
                                            <label> Product Id </label>
                                            <div class="input-icon left">
                                                <input class="m-wrap" type="text" id="txtprdid" name="txtprdid" />
                                            </div>
                                        </div>
                                        <div class="pull-left margin-right-20">
                                            <label> Item Code </label>
                                            <div class="input-icon left">
                                                <input class="m-wrap" type="text" id="txtitmcd" name="txtitmcd" />
                                            </div>
                                        </div>
                                    </div>
									<div class="clearfix margin-bottom-10">
                                        <label> Display Name </label>
                                        <div class="input-icon left">
											<input class="m-wrap" type="text" id="txtdispnm" name="txtdispnm" placeholder="Display Product name">
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label">Commodity Group</label>
                                        <div class="controls">
                                            <select class="large m-wrap" id="txtcgrp" name="txtcgrp" >
												<option selected="select" value="">Select Group </option>
                                                <option value="Services">Services </option>
                                                <option value="Product"> Product </option>                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Product Category</label>
                                        <div class="controls">
                                            <select class="large m-wrap" id="drpprdctg" name="drpprdctg" >
                                                
                                            </select>
                                        </div>
                                    </div>                           
									
									<div class="clearfix margin-bottom-10">
                                        <label> Retail Price </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text"  id="txtrprice" name="txtrprice" placeholder="Your Retail Price" />
                                        </div>
                                    </div>
									
									<div class="control-group">
                                        <label class="control-label">Tax</label>
                                        <div class="controls">
                                            <select class="large m-wrap" id="txtrtaxmode" name="txtrtaxmode" >
												<option selected="select" value="">Select Tax </option>
                                                <option value="Yes">With Tax </option>
                                                <option value="No"> Without Tax </option>                                               
                                            </select>
                                        </div>
                                    </div>
									
									<div class="clearfix margin-bottom-10">
                                        <label> Tax Amount </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text"  id="txttaxamt" name="txttaxamt" value="0" />
                                        </div>
                                    </div>
									<div class="clearfix margin-bottom-10">
                                        <label> Actual Amount </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text"  id="txtactAmt" name="txtactAmt" value="0" />
                                        </div>
                                    </div>
									
									<div class="clearfix margin-bottom-10">
                                        <label> Purchase Price </label>
                                        <div class="input-icon left">
                                            <input class="m-wrap" type="text"  id="txtpprice" name="txtpprice"  placeholder="Your Purchase Price" />
                                        </div>
                                    </div>
									<div class="control-group">
                                        <label class="control-label">Unit Of Major</label>
                                        <div class="controls">
                                            <select class="large m-wrap" id="drptype" name="drptype" >
                                                <option selected="select" value="">Select Type </option>
                                                <option value="1"> Qty </option>
                                                <option value="2">Sq.Feet </option>
                                                
                                            </select>
                                        </div>
                                    </div>
									<!--button class="btn blue right-side">SAVE <i class="icon-download"></i></button-->
									<div class="right-side">
									<?php if(!isset($_POST['prod_id'])) {?>
									<button id="addprod" type="button" class="btn blue">Save
                                        <i class="icon-download"></i>
                                    </button>
									<?php } else { ?>	
										<a id="updprod" type="button" class="btn blue">UPDATE <i class="icon-download"></i></a>
									<?php } ?>
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