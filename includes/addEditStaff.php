<?php

if(isset($_POST['stf_id']))
{
	$sid = $_POST['stf_id'];
	//echo $sid;
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
							Staff Members <small> Add/Edit</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Staff </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Add/Edit </a>
                    </li>

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="tabbable tabbable-custom tabbable-full-width">
                <h4>Add New Staff Members</h4>
                <div class="tab-content">
                    <div class="row-fluid">
                        <div class="span8 booking-search">
                            <form action="#">
                                <table>
									<input type="hidden" id="stfid" name="stfid" value="<?php if(isset($_POST['stf_id'])){echo $_POST['stf_id'];}  ?>" />
                                    <div class="input-icon left">
                                        <tr>
                                            <td>Emp ID </td>
                                            <td>
                                                <input type="text" id="txtempid" name="txtempid" />
                                            </td>
                                        </tr>
                                        <div class="input-icon left">
                                            <tr>
                                                <td>First Name</td>
                                                <td>
                                                    <input type="text" id="txtfname" name="txtfname" />
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>Last Name
                                                    <input type="text" id="txtlname" name="txtlname" />
                                                </td>
                                            </tr>
                                        </div>
                                    </div>
                        </div>
                        <div class="input-icon left">
                            <tr>
                                <td>Email ID </td>
                                <td>
                                    <input type="text" id="txtempmail" name="txtempmail" placeholder="Eg; www.eventmgt.com" />
                                </td>
                            </tr>
                        </div>
                        <div class="input-icon left">
                            <tr>
                                <td>Mobile </td>
                                <td>
                                    <input type="text" id="txtmob" name="txtmob" placeholder="Eg;  9988776655" />
                                </td>
                            </tr>
                        </div>
						<div class="input-icon left">
                            <div class="controls">
                                <tr>
                                    <td>Relative 1</td>
                                    <td>
                                        <input type="text" id="txtrel1" name="txtrel1"  placeholder="Eg;  9988776655" rows="4"></textarea>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>Relative 2
                                        <input type="text" id="txtrel2" name="txtrel2"  placeholder="Eg;  9988776655" rows="4"></textarea>
                                    </td>
                                </tr>
                            </div>
                        </div>
                        <div class="input-icon left">
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" id="txtpass" name="txtpass" placeholder="Eg; Type your password" />
                                </td>
                            </tr>
                        </div>
                        <div class="input-icon left">
                            <div class="controls">
                                <tr>
                                    <td>Address 1</td>
                                    <td>
                                        <input type="text" id="txtadd1" name="txtadd1" rows="4"></textarea>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>Address 2
                                        <input type="text" id="txtadd2" name="txtadd2" rows="4"></textarea>
                                    </td>
                                </tr>
                            </div>
                        </div>
                        <div class="clearfix margin-bottom-10">
                            <div class="control-group">
                                <div class="controls">
                                    <tr>
                                        <td>City </td>

                                        <td>
                                            <input type="text" id="txtcity" name="txtcity" />
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State

                                            <select class="medium m-wrap" id="txtstate" name="txtstate">
                                                <option select="selected" value="Gujarat">Gujarat </option>
                                                <option value="Delhi"> Delhi </option>
                                                <option value="Goa">Goa </option>
                                                <option value="Maharashtra">Maharashtra</option>
                                            </select>

                                        </td>
                                    </tr>
                                </div>
                            </div>
                        </div>

                        <div class="input-icon left">
                            <tr>
                                <td>Zip </td>
                                <td>
                                    <input type="text" id="txtzip" name="txtzip" />
                                </td>
                            </tr>
                        </div>
						<div class="input-icon left">
                            <tr>
								<td>Staff Type </td>
								<td>
									<select class="medium m-wrap" id="txtstype" name="txtstype">
										<option select="selected" value="staff">Staff </option>
										<option value="admin"> Admin </option>									
									</select>
								</td>
                            </tr>
                        </div>
						 </table>
                        <div class="right-side">
						<?php if(!isset($_POST['stf_id'])) {?>
							<button id="addstaff" type="button" class="btn blue">SAVE <i class="icon-download"></i></button>
						<?php } else { ?>
							<button id="updstaff" type="button" class="btn blue">UPDATE <i class="icon-download"></i></button>
						<?php } ?>
                           <button class="btn blue">CANCEL <i class="icon-remove-sign"></i></button>
                        </div>
                        <span id="msgs">

						</span>
                        </form>
                    </div>
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