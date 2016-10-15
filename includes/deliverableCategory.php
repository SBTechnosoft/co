<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Deliverable
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Deliverable </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">New </a>
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
                        <input type="text" placeholder="Eg; Name of the Deliverable..." class="m-wrap" />
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
                        <input type="text" id="txtdelvnm" name="txtdelvnm" placeholder="Eg; Name of the Deliverable..." class="m-wrap" />
                    </div>
                    
                </div>
				<br />
				<div class="chat-form">
					<select id="drptype" class="large m-wrap" name="drptype">						
						<option selected="select" value="1"> Qty </option>						
						<option value="2">Sq.Feet </option>
						<option value="3"> Per Page </option>
					</select>					
				</div>
				<br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtdelvPrice" name="txtdelvPrice" placeholder="Eg; Price Of Deliverable..." class="m-wrap" />
                    </div>
                    <button id="addDelv" type="button" class="btn green">Add &nbsp;
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
                        <div class="portlet box orange">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>Deliverable</div>

                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th> Name</th>
											 <th> Type</th>
                                            <th> Price</th>
											<th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showdata">

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