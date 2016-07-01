

<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					My Calendar
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#"> My Calendar </a>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="social-box">
                <div class="header">
                    <h4>My To Do List / Appointments </h4>
                </div>
            </div>
            <div class="body">
                <div class="row-fluid">
                    <div id='external-events' class="span3 well">
                        <h4> Create new task</h4>
                        <form id="add-event-form">
                            <fieldset>
                                <input id="title-event" type="text" placeholder="Event title..." class="input-block-level" />
                                <button type="submit" class="btn btn-success">Add Event</button>
                            </fieldset>
                            <p> Drag task to specific date </p>
                        </form>
						
                        <div class='external-event'>My Event 1</div>
                        <div class='external-event'>My Event 2</div>
                        <div class='external-event'>My Event 3</div>
                        <div class='external-event'>My Event 4</div>
                        <label class="checkbox">
                            <input type="checkbox" id="drop-remove" checked="checked" /> remove after drop
                        </label>
                    </div>
                </div>
				
				<div class="row-fluid">
					<div class="span6">
						<!-- BEGIN PORTLET-->
						<div class="portlet box blue calendar">
							<div class="portlet-title">
								<div class="caption"><i class="icon-calendar"></i></div>
							</div>
							<div class="portlet-body light-grey">
								<div id="calendar">
								</div>
							</div>
						</div>
						<!-- END PORTLET-->
					</div>
				</div>
			</div>
            <!--end tabbable-->
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
 <!--script src="assets/js/extents.js"></script>
 <script src="assets/js/app.js"> </script>
 <script src="assets/js/jquery-fullcalendar/fullcalendar/fullcalendar.min.js"></script>
 <script src="assets/js/calendar.js"></script-->