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
			Accounting <small> Transaction</small>
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
                <a href="#">Transaction</a>
            </li>
            <li class="pull-right no-text-shadow">
                <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>
                    <span></span>
                    <i class="icon-angle-down"></i>
                </div>
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
		<div id="add_form" class="row-fluid search-forms search-default">

            <form class="form-search" action="#">
                <h4>Expences </h4><hr/>
				<!--div class="chat-form">
                    <div class="input-cont">
					<label>Category </label>
						<select>
							<optgroup label="Event">
								<option value="volvo">Food</option>
								<option value="saab">Traveling</option>
								<option value="saab">Other</option>
							</optgroup>
							<optgroup label="General">
								<option value="mercedes">Salary</option>
								<option value="audi">Stationary</option>
								<option value="mercedes">Tea/Coffee</option>
								<option value="audi">Electricity</option>
							</optgroup>
						</select>
					</div>
                    
                </div>				
                <br /-->
				<div class="clearfix margin-bottom-10">
					<label> Category  </label>
					<div class="input-icon left">
						<select id="showexpctg">
							
						</select>
					</div>
				</div>
				
				<div class="clearfix margin-bottom-10">
					<label> Event Name:  </label>
					<div class="input-icon left">
						<select id="showevent">							
								
						</select>
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label> Company Name:  </label>
					<div class="input-icon left">
						<select id="showComapny">							
								
						</select>
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label for="txtfromdt">From Date </label>
					<div class="input-icon left">
						<div id="datetimepicker1" class="input-append date">
							<input data-format="dd-MM-yyyy HH:mm PP" class="m-wrap" value="<?php echo Date;?>" type="text" name="txtfromdt" id="txtfromdt"></input>
							<span class="add-on">
							  <i class="icon-time" class="icon-calendar"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label> Amount  </label>
					<div class="input-icon left">
						<input type="text" id="txtamt" name="txtamt" placeholder="Eg; Amount of expence" class="m-wrap" />
					</div>
				</div>
				<div class="clearfix margin-bottom-10">							
					
					<label for="paymentMode">Payment Mode: </label>
					<div class="input-icon left">
						<select name="epaymentMode" id="epaymentMode" onchange='ShowHideDiv();' class="m-wrap "> 
							<option value="cash">Cash</option>
							<option value="cheque">Cheque</option>
							
						</select>
					</div>
				</div>
				<div class="clearfix margin-bottom-10" id="showHide" style="display:none;">
					<div class="pull-left margin-right-20">
						<label for="txtbanknm">Bank Name:</label>
						<div class="input-icon left">
							<input type="text" id="etxtbanknm" name="etxtbanknm" class="m-wrap" />
						</div>
					</div>
					<div class="pull-right margin-right-20">
						<label for="txtchkno" class="well1">Cheque No:</label>
						<div class="input-icon left">
							<input type="text" id="etxtchkno" name="etxtchkno" class="m-wrap" />
						</div>
					</div>
				</div>
				<div class="clearfix margin-bottom-10">
					<label> Attachment  </label>
					<div class="input-icon left">
						<input type="file" id="upimg" name="upimg"  class="m-wrap" />
					</div>
				</div>
				
				<div class="clearfix margin-bottom-10">
					<label> Expence By:  </label>
					<div class="input-icon left">
						<select id="showstf">							
																			
						</select>
					</div>
				</div>
				
				<div class="clearfix margin-bottom-10">
					<label> Expence By Vendor:  </label>
					<div class="input-icon left">
						<select id="showvnd">							
																			
						</select>
					</div>
				</div>
				
				<div class="clearfix margin-bottom-10">					
					<div class="input-icon left" style="margin-top:15px;">
						<button id="addexp" type="button" class="btn green">Add &nbsp;
							<!--i class="icon-plus-sign icon-white"></i-->
						</button>
						<button id="cancel" type="button" class="btn green">Cancel &nbsp;
							<!--i class="icon-plus-sign icon-white"></i-->
						</button> 						
					</div>
				</div>
				
                <!--div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtcatgdes" name="txtcatgdes" placeholder="Eg; Description Of Category..." class="m-wrap" />
                    </div>
					<button id="addcatg" type="button" class="btn green">Add &nbsp;
                        <i class="icon-plus-sign icon-white"></i>
                    </button>                    
                </div-->
                <span id="msgs">

				</span>
            </form>

        </div>
		
		
		
		<div id="search_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtename" name="txtename" placeholder="Eg; Order Name..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <select name="drpcmpnm" id="drpcmpnm" class="large m-wrap"> 
									
						</select>						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtclname" name="txtclname" placeholder="Eg; Client Name..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtinv" name="txtinv" placeholder="Eg; Invoice No..." class="m-wrap" />						
					</div>
				</div>				
				</br>
				<div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtfromdt" name="txtfromdt" placeholder="Eg; From Date..." class="m-wrap" />						
                    </div>
				</div>
				</br>
				<div class="chat-form">					
					<div class="input-cont">
                        <input type="text" id="txttodt" name="txttodt" placeholder="Eg; To date..." class="m-wrap" />						
                    </div>                    
                </div>				
				</br>
				<button type="button" id="filter_data" class="btn green">Search &nbsp;
					<i class="icon-search m-icon-white"></i>
				</button>
            </form>
        </div>
		
        <!-- END PAGE HEADER-->
		<div class="clearfix margin-bottom-10">
							
			<div class="input-icon left">
				<!--input type="text" class="large m-wrap" id="txteventnm" name="txteventnm"  /-->
				<select name="drpcmpnmdtl" id="drpcmpnmdtl" class="medium m-wrap"> </select></br>
				Event &nbsp <input type="radio" name="event_type" class="event_type" id="event_type" value="Event" >
				Retail &nbsp <input type="radio" name="event_type" class="event_type" id="event_type"  value="Retail" >
				All &nbsp <input type="radio" name="event_type" class="event_type" id="event_type" value="All" checked>
				
				<br/>
			</div>
			
		</div>
        <!-- BEGIN PAGE CONTENT-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
					
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-check-sign"></i>Transaction Accounts</div>
								
								<a href= "#" id="tranexcel" class="invoice invoice_excel"  >
									<i class="fa fa-file-excel-o fa-2x" style="color:white; margin-top:10%;" aria-hidden="true"></i>					
								</a>
                        </div>
						<div id="pop_background">		
						</div>
						<div id="pop_box">
							<span class="closec" id="close"> &times; </span>													
							<h4 align="center" style= "font-weight:bold;"> Expence Detail </h4>
							<br>
							
								
							<div class="TableRowing">
								&nbsp;<i class="fa fa-calendar-plus-o" aria-hidden="true"></i>
								<strong>Expences</strong>
							</div>
							
							<div class="Table" id="showexpdtl">																	
							</div>
							
							
							<br/><br/>
							<div class="right-side" id="add_div">								
								<button class="btn blue" id="close1">Close</button>
							</div>
							<br/>
						</div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
                                <thead>
                                    <tr>
                                        <th> Order Id</th>
										<th> Order Exp.</th>
										<th> Exp.Category</th>
                                        <th> Order Name </th>
                                        <th>C.Name </th> 
										<th> Date </th>
										<th>Exp.By </th>
										<th>C.Charge</th>
										<th>Disc.</th>
										<th>S.Tax</th>
                                        <th>Income</th>
                                        <th>C.Paid</th>
										<th>C.Unpaid</th>										
                                        <th>Exp.</th> 
										<th>Other Exp.</th>
										<th>P/L</th>
										<th>Inv</th>
										<th>Inv.#</th>	
                                    </tr>
                                </thead>
                                <tbody id="showTrnDetail">
								
                                    <!--tr>
                                        <td>Trident</td>
                                        <td>Internet Explorer 4.0</td>
                                        <td class="hidden-480">Win 95+</td>
                                        <td class="hidden-480">4</td>
                                        <td class="hidden-480">X</td>
                                        <td class="hidden-480">X</td>
										<td>Sample </td>
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