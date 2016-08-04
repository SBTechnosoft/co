<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					Enquiry<small> </small>
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Enquiry  </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <li id="add_btn">
                        <a href="<?php echo HTTP_SERVER.'index.php?url=EVE';?>">
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
                        <input type="text" placeholder="Eg; Enter Name..." class="m-wrap" />
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
                    <div id="tab_1_2" class="tab-pane active">
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-question-sign"></i>Enquiry Details</div>
								<a href= "#" id="enquiryexcel" class="invoice invoice_excel"  >
									<i class="fa fa-file-excel-o fa-2x" style="color:white; margin-top:10%;" aria-hidden="true"></i>					
								</a>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
                                    <thead>
                                        <tr>
											<th>Sr.No</th>
											<th>Order Name </th>
											<th>Client Name </th>
											
											<!--th> FP No </th>
											<th> Bill No </th-->
											
											<th> Order Date</th>
											<!--th> Event End</th-->
											
											<th> Charged Amt </th>
											<th> S.Tax </th>
											<th> Amount </th>
											
											<!--th>Rec.Amt</th>
											<th> Payment Status </th-->
											<th> Qua.</th>
											
											<th> Action </th>
										</tr>
                                    </thead>
                                    <tbody id="showInq">
                                        <!--tr >
											<td>Presto</td>
											<td>Nintendo DS browser</td>
											<td class="hidden-480">Nintendo DS</td>
											<td class="hidden-480">8.5</td>
											<td class="hidden-480">C/A<sup>1</sup></td>
											<td class="hidden-480">C/A<sup>1</sup></td>												
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