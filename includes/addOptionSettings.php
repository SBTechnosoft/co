<!-- BEGIN PAGE -->
<div class="page-content">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
							Settings <small> Add Option </small>
						</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Settings </a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> Add Option </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
                    <!--li id="add_btn">
                        <button type="button" class="btn green">Add
                            <i class="icon-plus-sign icon-white"></i>
                        </button>
                    </li>

                    <li id="search_btn">
                        <button type="button" class="btn green" data-toggle="tooltip" title="Search">
                            <i class="icon-search m-icon-white"></i>
                        </button>&nbsp;
                    </li-->
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>

        <!--div id="search_form" class="row-fluid search-forms search-default">
            <form class="form-search" action="#">
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" placeholder="Eg; Name of the Company..." class="m-wrap" />
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
                        <input type="text" id="txtcmpnm" name="txtcmpnm" placeholder="Eg; Company Name ..." class="m-wrap" />
                    </div>
                    
                </div>
                <br />
                <div class="chat-form">
                    <div class="input-cont">
                        <input type="text" id="txtcmprnno" name="txtcmprnno" placeholder="Eg; Company Registeration Number..." class="m-wrap" />
                    </div>
                    <button id="addcmp" type="button" class="btn green">Add &nbsp;
                        <i class="icon-plus-sign icon-white"></i>
                    </button>
                </div>
                <span id="msgs">

				</span>
            </form>

        </div-->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
		
			<h4> All Options </h4>
			<hr/>
			<br/>
            <div class="control-group">
				<label class="control-label">Service Tax</label>
				<div class="controls" id="default">
					<input id="txtservicetax1" class="m-wrap medium" readonly type="text" name="txtservicetax1" placeholder="Service Tax">					

					<a id="editax" name="editax" class="btn btn-default"> Edit</a>										
				</div>
				<div class="controls hide1" id="hide1">	
					<input id="txtservicetax" class="m-wrap medium" type="text" name="txtservicetax" placeholder="Service Tax">
					<a id="savetax" name="savetax" class="btn btn-default"> Save</a>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label">Vat</label>
				<div class="controls" id="updefault">
					<input id="txtvat" class="m-wrap medium" readonly type="text" name="txtvat" placeholder="Vat%">					

					<a id="editvat" name="editvat" class="btn btn-default"> Edit</a>	
					<a id="updvat" name="updvat" class="btn btn-default"> Save</a>
				</div>				
			</div>
			
			<div class="control-group">
				<label class="control-label">Upcoming Days</label>
				<div class="controls" id="updefault">
					<input id="txtdays" class="m-wrap medium" readonly type="text" name="txtdays" placeholder="Days">					

					<a id="editdays" name="editdays" class="btn btn-default"> Edit</a>	
					<a id="updays" name="updays" class="btn btn-default"> Save</a>
				</div>				
			</div>
			<div class="control-group">
				<label class="control-label">Resource/Equipment </label>
				<div class="controls" id="updefault">
					<select id="txtres_equ" name="txtres_equ">						
						<option value="both"> Both</option>
						<option selected value="resource">Resource Only</option>
						<option selected value="equipment">Equipment Only</option>						
					</select>						
					<a id="updres_equ" name="updres_equ" class="btn btn-default" style="margin-bottom:10px;"> Save</a>
				</div>				
			</div>
			<div class="control-group">
				<label class="control-label">Retail Sales</label>
				<div class="controls" id="updefault">
					<select id="txtrtl" name="txtrtl" >						
						<option  value="Enable"> Enable</option>
						<option selected value="Disable"> Disable</option>						
					</select>						
					<a id="updrtl" name="updrtl" class="btn btn-default" style="margin-bottom:10px;"> Save</a>
				</div>				
			</div>
			<div class="control-group">
				<label class="control-label">Auto Set Delivery Date After </label>
				<div class="controls" id="updefault">
					<input id="txtAutoSet" class="m-wrap medium" type="text" name="txtAutoSet" placeholder="Days">	
						<select id="hours" name="hours" class="small-m-wrap">											
						</select>
						<select id="minutes" name="minutes" class="small-m-wrap">											
						</select>						
					<a id="updAutoSet" name="updAutoSet" class="btn btn-default" style="margin-bottom:10px;">Save</a>
				</div>				
			</div>
			<div class="control-group">
				<label class="control-label">Deliverable</label>
				<div class="controls" id="updefault">
					<select id="txtdelv" name="txtdelv" >						
						<option  value="Enable"> Enable</option>
						<option selected value="Disable"> Disable</option>						
					</select>						
					<a id="upddelv" name="upddelv" class="btn btn-default" style="margin-bottom:10px;"> Save</a>
				</div>				
			</div>
			
           
        </div>
        <!--end tabbable-->
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->