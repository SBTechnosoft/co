<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Equipments<small>  All</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Equipments  </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="<?php echo HTTP_SERVER.'index.php?url=EQA';?>">All  </a>

                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <a href="<?php echo HTTP_SERVER.'index.php?url=ALL';?>">
                            <button type="button" class="btn green">Add
                                <i class="icon-plus-sign icon-white"></i>
                            </button>
                        </a>
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
                        <input type="text" placeholder="Eg; Name of the Equipment..." class="m-wrap" />
                    </div>
                    <button type="button" class="btn green">Search &nbsp;
                        <i class="icon-search m-icon-white"></i>
                    </button>
                </div>
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
                                <div class="caption"><i class="icon-sitemap"></i>All Equipment Details</div>

                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th>Equipment Name</th>
                                            <th> Serial No </th>
                                            <th>Model No </th>
                                            <th> Category Id</th>
                                            <th>Purchase_date</th>
                                            <th>Purchase_From</th>
                                            <th>Price</th>
                                            <th>Remark</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showdata">
                                      
                                        <!--tr>
                                            <td>Presto</td>
                                            <td>Nintendo DS browser</td>
                                            <td class="hidden-480">Nintendo DS</td>
                                            <td class="hidden-480">8.5</td>
                                            <td class="hidden-480">C/A<sup>1</sup></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
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
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->