<!-- BEGIN PAGE -->
<div class="page-content">

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Invoice<small>Setting</small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Setting </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Invoice Setting </a>
                    </li>
                    
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        
       
		<div class="container-fluid">
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="tabbable tabbable-custom tabbable-full-width">
                   
                    <div class="tab-content">
                        <div class="row-fluid">
                            <div class="span8 booking-search">
                                <form action="#">
									<div class="clearfix margin-bottom-10">
										<div class="pull-left margin-right-20 ">
											<div class="input-icon input-append">
												<label> Invoice Label : </label>
											</div>
											<input type="text" class="medium m-wrap" id="txtlabel" name="txtlabel"  />
										</div>
										<div class="clearfix margin-bottom-10">
											<div class="pull-left margin-right-20">
												Prefix &nbsp <input type="radio" name="prefix" id="prefix" value="prefix" > 
												Postfix &nbsp <input type="radio" name="prefix" id="prefix" value="postfix" checked>
											</div>	
										</div>
									</div>
									<div class="clearfix margin-bottom-10">
										<div class="pull-left margin-right-20 ">
											<div class="input-icon input-append">
												<label> Start At : </label>
											</div>
											<input type="text" class="invoice medium m-wrap" id="start_at" name="start_at"  />
										</div>
										<button id="addinset" type="button" class="btn blue left-side">Save &nbsp; 
												<i class="icon-download icon-white"></i>
									</button>
									</div>
									
								</form>
                            </div>
                            
                        </div>
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
            <!--end tabbable-->
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <!--end tab-pane-->
                <div id="tab_1_2" class="tab-pane active">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-briefcase"></i>Invoice#</div>

                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width">
                                <thead>
                                    <tr>
                                        
                                        <th> Sr.No. </th>
                                        <th> Label</th>
                                        <th> Prefix/Postfix</th>
                                        <th>Start At</th>
										<th>Next value</th>
										<th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody id="showINS">
                                   
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