<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Client Master
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Client Master </a>
                        <i class="icon-angle-right"></i>
                    </li>
                   
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <button type="button" class="btn green">Add
                            <i class="icon-plus-sign icon-white"></i>
                        </button>
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
                       <input type="text" id="client_name" name="client_name" placeholder="Eg; Client Name" class="m-wrap" />
                    </div>
			    </div></br>
				<div class="chat-form">
                    <div class="input-cont">
                       <input type="text" id="company_name" name="company_name" placeholder="Eg; Company Name" class="m-wrap" />
                    </div>
			    </div></br>
				<div class="chat-form">
					<div class="input-cont">
                       <input type="text" id="mobile_no" name="mobile_no" placeholder="Eg; Mobile no" class="m-wrap" />
                    </div>
                    <button type="button"  id="search_contact" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
            </form>
        </div>
        <div id="add_form" class="row-fluid search-forms search-default">

            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="clientName" name="clientName" placeholder="Eg; Name of the Client Name" class="m-wrap" />
                    </div>
                    
                </div>
                <br />
				 <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="companyName" name="companyName" placeholder="Eg; Name of the Company Name" class="m-wrap" />
                    </div>
                    
                </div>
                <br /> <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="mobileNo" name="mobileNo" placeholder="Eg; Mobile No" class="m-wrap" />
                    </div>
                    
                </div>
                <br />
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="workNo" name="workNo" placeholder="Eg; Work No" class="m-wrap" />
                    </div>
                    
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="emailId" name="emailId" placeholder="Eg; Email Id" class="m-wrap" />
                    </div>
                   
                </div><br/>
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="address" name="address" placeholder="Eg; Address" class="m-wrap" />
                    </div>
                    <button id="addClient" type="button" class="btn green">Add &nbsp;
                        <i class="icon-plus-sign icon-white"></i>
                    </button>
                </div>
                
				<span id="msgs">

				</span>
            </form>

        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="tabbable tabbable-custom tabbable-full-width">

                <div class="tab-content">

                    <!--end row-fluid-->
                    <div id="tab_1_2" class="tab-pane active">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>Client Details</div>

                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th> Client Name</th>
                                            <th> Company Name</th>
											<th> Mobile No</th>
											<th>Work NO</th>
											<th>Email Id</th>
											<th>Address</th>
											<th>Client Type</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showContact">

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                    <!--end tab-pane-->

                </div>
            </div>
            <!--end tabbable-->
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->