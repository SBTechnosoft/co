<style>
ul.checktree-root, ul#tree ul {
list-style: none;
}
ul.checktree-root label {
font-weight: normal;
position: relative;
}
ul.checktree-root label input {
position: relative;
top: 2px;
left: -5px;
}
</style>

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
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
			Staff Members <small> All</small>
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
                <a href="#">All </a>
            </li>
            &nbsp;&nbsp;&nbsp;
            <li id="add_btn">
                <a href="<?php echo HTTP_SERVER.'index.php?url=STF';?>">
                    <button type="button" class="btn green">New Staff
                        <i class="icon-plus-sign"></i>
                    </button>
                </a>
            </li>

            <li id="search_btn">
                <button type="button" class="btn green" data-toggle="tooltip" title="Search">
                    <i class="icon-search"></i>
                </button>&nbsp;
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->

        <div id="search_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" placeholder="Eg; Employee Name, ID..." class="m-wrap" />
                    </div>
                    <button type="button" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
            </form>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
                    
					
					<!--New pop up for insert the vendor -->
						<div id="popup_staff_per">
						
						</div>
						<div id="popup_staff_per_data">								
							<span id="close"> &times; </span>													
							<h4 align="center" style= "font-weight:bold;"> Add Permissions </h4>
							<br>									
							<div class="TableRowing">
								&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
								<strong >Add Permissions</strong>
							</div>
							</br></br>
							<div class="span8 booking-search">
								<form action="#">
									<input type="hidden"  name="txtid" id="txtid" value="" />
									<ul id="tree">										
										<li>
											<label>
												<input type="checkbox" name="myCheckbox" id="myCheckbox" value="ENR">
												Enquiry
											</label>
										</li>
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="EVD">
											Event Details
											</label>
										</li>
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Event_Status">
											Event Status</label>
										
											<ul>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="EALL">
													All Events
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="NEW">
													New
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="UPC">
													Upcoming
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="COM">
													Completed
													</label>
												</li>
											</ul>
										</li>
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Equipment">
											Equipment
											</label>
										
											<ul>												
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="EQA">
													All Equip
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="CTG">
													Category
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="ACS">
													Accessories
													</label>
												</li>
											</ul>
										</li>
											
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Vendors">
											Vendors
											</label>
										
											<ul>												
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="VAL">
													All Vendors
													</label>
												</li>												
											</ul>
										</li>	
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Accounting">
											Accounting
											</label>
										
											<ul>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="PID">
													Paid
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="UPD">
													Unpaid
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="VPD">
													Vendor Paid
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="VUD">
													Vendor Unpaid
													</label>
												</li>
											</ul>
										</li>
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Staff">
											Staff
											</label>
										
											<ul>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="STA">
													All Staffs
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="STF">
													Add/Edit
													</label>
												</li>
												
											</ul>
										</li>
										<li>
											<label>
											<input type="checkbox" name="myCheckbox" id="myCheckbox" value="Settings">
											Settings
											</label>
										
											<ul>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="HOL">
													Holidays
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="CMP">
													Company Information
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="ADC">
													Add Company
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="OPT">
													Options
													</label>
												</li>
												<li>
													<label>
													<input type="checkbox" name="myCheckbox" id="myCheckbox" value="EML">
													Emails
													</label>
												</li>
											</ul>
										</li>
										
									</ul>
									
									<div class="right-side">
										<a class="btn blue" id="addper">Add</a>										
										<a class="btn blue" id="close1">CANCEL</a>
									</div>	
								</form>
								<span id="msgs">
									
								</span>
							
							</div>																
						</div>
						
						<!-- end of the popup for insert vendor -->
					
					
					
					
					<div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-group"></i>All Staff Members</div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        <th> Staff Id</th>
										<th> Emp Id</th>
										<th> First Name</th>
                                        <th> Last Name </th>
                                        <th>Email </th>
                                        <th> Mobile</th>
										<th> Relative 1</th>
										<th> Relative 2</th>
                                        <th>Password</th>
										<th> Staff Type</th>
										
										<th> Action </th>
										
                                    </tr>
                                </thead>
                                <tbody id="showstaff">

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!--end tab-pane-->

                <!-- End tab pane -->

            </div>
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->