<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Vendors<small> All</small>
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Vendors </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">All </a>
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
                        <input type="text" placeholder="Eg; Name of the Vendor..." class="m-wrap" />
                    </div>
                    <button type="button" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
            </form>
        </div>

        <div id="add_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtvendnm" name="txtvendnm" placeholder="Eg; Name of Vendor ..." class="m-wrap" />
                    </div>
                </div>
                <br />
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtvendcmp" name="txtvendcmp" placeholder="Eg; Name of the company..." class="m-wrap" />
                    </div>
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <select class="medium m-wrap" id="drp_cat_vend" name="drp_cat_vend">
                            <option select="selected" value="">
                                Select Class
                            </option>
							<option  value="1">
                                Class 1
                            </option>
                            <option value="2">
                                Class 2
                            </option>
                            <option value="3">
                               Class 3
                            </option>
                            <option value="4">
                                Class 4
                            </option>
                        </select>
                    </div>
                    <button id="addvend" type="button" class="btn green">Add &nbsp;
                        <i class="icon-plus-sign icon-white"></i>
                    </button>
                </div>
                <span id="msgs">

				</span>
            </form>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <!--end tab-pane-->
                <div id="tab_1_2" class="tab-pane active">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-group"></i>Vendor Details</div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
										<th> Company Name </th>
                                        <th> Category </th>
										 <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody id="showvendors">
                                    <!--tr >
											<td>Nintendo DS browser</td>
										</tr-->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               <!--end tab-pane-->
             </div>
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->