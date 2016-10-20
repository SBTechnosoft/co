<!-- BEGIN PAGE -->
<div class="page-content">

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Sub<small>Categories</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Category </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Sub Categories </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <button type="button" class="btn green">Add
                            <i class="icon-plus-sign"></i>
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
                        <input type="text" placeholder="Eg; Name of the Accessories..." class="m-wrap" name="subcatname" id="subcatname"/>
                    </div>
                     <button type="button" id="filter_data" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
            </form>
        </div>

        <div id="add_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
						<select name="txtcatid" id="txtcatid" > 
														
							
						</select>
                        <!--input type="text" id="txtcatid" name="txtcatid" placeholder="Eg; Select from dropdown..." class="m-wrap" /-->
                    </div>
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtacsnm" name="txtacsnm" placeholder="Eg; Name of the Accessories..." class="m-wrap" />
                    </div>
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtacsremk" name="txtacsremk" placeholder="Eg; Remark Of Accessories..." class="m-wrap" />
                    </div>
                    <button id="addAcs" type="button" class="btn green">Add &nbsp;
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
                            <div class="caption"><i class="icon-briefcase"></i>Sub Category</div>

                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                <thead>
                                    <tr>
                                        
                                        <th> Sr.No. </th>
                                        <th> Name </th>
                                        <th> Category</th>
                                        <th> Remark </th>
										<th> Action </th>
                                    </tr>
                                </thead>
                                <tbody id="showAcs">
                                    <!--tr>	
											<td> div</td>
											<td> div</td>
											<td> div</td>
											<td> div</td>
										</tr-->
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