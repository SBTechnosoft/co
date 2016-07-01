
<!--link rel="shortcut icon" href="http://cesarlab.com/templates/social/assets/img/favicon.ico"/-->
<!--link rel="icon" type="image/gif" href="assets/img/favicon.gif"--> 
<link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
<link href="assets/css/social.css" rel="stylesheet">
<link href="assets/css/social.plugins.css" rel="stylesheet">
<link href="assets/css/social.examples.css" rel="stylesheet">
<link href="assets/css/font-awesome.css" rel="stylesheet">
<link href="assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
<link href="assets/css/docs.css" rel="stylesheet">
<style>#external-events{float:left;padding:0 10px;border:1px solid #ccc;background:#eee;text-align:left;}#external-events h4{font-size:16px;margin-top:0;padding-top:1em;}.external-event{margin:10px 0;padding:2px 4px;color:#ffffff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#4e6599;border-color:#2c467e #2c467e #182745;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);*background-color:#2c467e;filter:progid:DXImageTransform.Microsoft.gradient(enabled= false);font-size:.85em;cursor:pointer;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}#external-events p{margin:1.5em 0;font-size:11px;color:#666;}#external-events p input{margin:0;vertical-align:middle;}</style>
<style>
.wraper #main{margin-top:40px;}
</style>
<script>
	ie = false;
</script>  

 




<div class = "page-content">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<h3 class="page-title">
					Calendar
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
			</div>
		</div>
	    <div class="row-fluid">
		<div class="social-box">
			<div class="header">
			<h4>My To Do List / Appointments </h4>
			</div>
			<div class="body">
				<div class="row-fluid">
					<div id='external-events' class="span3 well">
						<h4> Create new task</h4>
						<form id="add-event-form">
							<fieldset>
								<input id="title-event" type="text" placeholder="Event title..." class="input-block-level">
								<button type="submit" class="btn btn-success">Add Event</button>
							</fieldset>
							<p> Drag task to specific date </p> 
						</form>
						<div class='external-event'>My Event 1</div>
						<div class='external-event'>My Event 2</div>
						<div class='external-event'>My Event 3</div>
						<div class='external-event'>My Event 4</div>
						<label class="checkbox">
						<input type="checkbox" id="drop-remove" checked="checked">
						remove after drop
						</label>
					</div>
					<div class="span9">
						<div id='calendar'></div>
					</div>
				</div>
			</div>
		</div>
	</div>
 
 </div>

 <script src="ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="assets/js/jquery-1.9.1.min.js"><\/script>')</script>
 <script src="assets/js/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>
 <script src="assets/js/twitter-bootstrap/bootstrap.js"></script>
 <script src="assets/js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!--[if lte IE 8]><script src="/templates/social/assets/js/placeholders/placeholders.min.js"></script><![endif]-->
 <script src="assets/js/extents.js"></script>
 <script src="assets/js/app.js"> </script>
 <script src="assets/js/jquery-fullcalendar/fullcalendar/fullcalendar.min.js"></script>
 <script src="assets/js/calendar.js"></script> 
 
