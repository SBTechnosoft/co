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
			Client <small> Invoices</small>
		</h3>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.php">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="#">Accounting </a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="#">Invoice</a>
            </li>
            <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>
                    <span></span>
                    <i class="icon-angle-down"></i>
                </div>
            </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
		<div>
			<a style="cursor:pointer; float:left;margin-right:10px;" id="selchkitm" target="_blank" class="btn blue"> Submit </a>
			<input type="checkbox" id="chall" name="chall" class="chall"  >
			Check All
		</div>
		
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
					
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-remove-sign"></i>Invoice Lists</div>
								
								<!--a class="invoice invoice_excel" id="unpaidexcel">
									<i class="fa fa-file-excel-o fa-2x" style="color:white; margin-top:10%;" aria-hidden="true"></i>
								</a-->
								
                        </div>
						
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">								
                                <thead>
                                    <tr>                                        						
										<th> Order Id</th>
                                        <th> Order Name </th>
                                        <th>Client Name </th>				
                                        <th>Client Charge</th>
										<th>Discount</th>
										<th>S.Tax</th>
										<th>Amt</th>
                                        <th>Paid Amount</th>
                                        <th>Remaining Amount</th>
										<th> Action </th>
                                    </tr>
                                </thead>
                                <tbody id="showClientInv">
                                    <!--tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0
                                        </td>
                                        <td class="hidden-480">Win 95+</td>
                                        <td class="hidden-480">4</td>
                                        <td class="hidden-480">X</td>
                                        <td class="hidden-480">X</td>
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