<!DOCTYPE html>
<html class="full" lang="en">
<head>
    <title>Google Calendar API</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/Calendar.css" rel="stylesheet" />
	  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
     <link href="css/modal.css" rel="stylesheet" />
	
    <script type="text/javascript">
        // date variables
        var now = new Date();
        today = now.toISOString();
		
        var twoHoursLater = new Date(now.getTime() + (2 * 1000 * 60 * 60));
        twoHoursLater = twoHoursLater.toISOString();

        // Google api console clientID and apiKey 
        var clientId = '998888557917-udke5p4to575koi31aboismo8gjvr1me.apps.googleusercontent.com';
        var apiKey = 'AIzaSyDrZMvRi0Csy68Rl0J56_AuEJLg91kO2Kk';

        // enter the scope of current project (this API must be turned on in the Google console)
        var scopes = 'https://www.googleapis.com/auth/calendar';

        // OAuth2 functions
        function handleClientLoad() {
            gapi.client.setApiKey(apiKey);
            window.setTimeout(checkAuth, 1);
        }

        function checkAuth() {
            gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: true }, handleAuthResult);
        }

        // show/hide the 'authorize' button, depending on application state
        function handleAuthResult(authResult) {
            var authorizeButton = document.getElementById('authorize-button');
           // var eventButton = document.getElementById('btnCreateEvents');
		   var eventButton = document.getElementById('btnDeleteEvents');
		   var insertBtn = document.getElementById('myBtn');
		   var updateBtn = document.getElementById('updateBtn');
		    
            var resultPanel = document.getElementById('result-panel');
            var resultTitle = document.getElementById('result-title');

            if (authResult && !authResult.error) {
                authorizeButton.style.visibility = 'hidden'; 		// if authorized, hide button
                resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
                resultPanel.className += ' panel-success'; 			// add green class
                resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
                eventButton.style.visibility = 'visible';
				insertBtn.style.visibility = 'visible';
				updateBtn.style.visibility = 'visible';
                $("#txtEventDetails").attr("visibility", "visible");
            } else {													// otherwise, show button
                authorizeButton.style.visibility = 'visible';
                $("#txtEventDetails").attr("visibility", "hidden");
                eventButton.style.visibility = 'hidden';
				insertBtn.style.visibility = 'hidden';
				updateBtn.style.visibility = 'hidden';
                resultPanel.className += ' panel-danger'; 			// make panel red
                authorizeButton.onclick = handleAuthClick; 			// setup function to handle button click
            }
        }

        // function triggered when user authorizes app
        function handleAuthClick(event) {
            gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
            return false;
        }

       
        // setup event details
        
        
		
        
		// FUNCTION TO DELETE EVENT
	   
	   
	  
	</script>
</head>
<body>
    <!-- Navigation -->
    <!--nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Google Calendar API</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Simple Way to embed you calendar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav-->
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <button id="authorize-button" style="visibility: hidden" class="btn btn-primary">
                    Authorize</button>
            </div>
            <!-- .col -->
            <div class="col-md-10 col-sm-10 col-xs-12">
                <div class="panel panel-danger" id="result-panel">
                    <div class="panel-heading">
                        <h1>
                            My Calendar</h1>
                        <h3 class="panel-title" id="result-title">
                            Application Not Authorized</h3>
                        &nbsp;
                        <p>
                            Insert Event into Public Calendar&hellip;</p>
                    </div>
                </div>
                       <!--  <input id="txtEventDetails" type="text" /> -->
                <!--button id="btnCreateEvents" class="btn btn-primary" onclick="makeApiCall();">
                    Create Events</button-->  
					<select class="updateModal-body form-control" name="updateModal-body" >
			  
					</select><br />
				<button id="btnDeleteEvents" class="btn btn-primary" >
                    Delete Events</button> 	
 <!-- Trigger/Open The Modal -->
	<button id="myBtn" class="btn btn-primary">Add Event</button>
					<button id="updateBtn" class="btn btn-primary">Update Event</button>
				
					<br />
					
                <div id="event-response">
                </div>
                <div id="divifm">
                    <iframe id="ifmCalendar" src="https://www.google.com/calendar/embed?height=550&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=suafag3ku0re5rnvjl4beriljc@group.calendar.google.com&amp;color=%238C500B&amp;ctz=Asia%2FCalcutta"
                        style="border-width: 0" width="950" height="520" frameborder="0" scrolling="no">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
		
	<!-- The Modal -->
	<div id="myModal" class="modal">
	  <!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">×</span>
				<h2>Add New Event</h2>
			</div>
		    <div class="modal-body">
			   <center>
					
					<form action="#" class="ws-validate">
						
						<div class="input-append">
							<input type="text" id="evname" placeholder="Event Name" style="height: 30px;" />
						</div>
						
							<!--input type="date" id="evstart" placeholder="Start Date" /-->
							<div id="datetimepicker"  class="input-append date">
								<input type="text" id="evstart" style="height: 30px;" ></input>
								<span class="add-on" style="height: 30px;">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
								</span>
							</div>
						

							<!--input type="date" id="evend" placeholder="End Date"  style="height: 30px;"/-->
							<div id="datetimepickerEnd" class="input-append date">
								<input type="text" id="evend" style="height: 30px;" ></input>
								<span class="add-on" style="height: 30px;">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
								</span>
							</div>
						<span id="avd">Click</span>
						<div class="form-row">
							<input type="button" id="submit_add" value="Add Event" />
						</div>
						
					</form>
				</center>
		    </div>
		</div>
	</div>
	
	<div id="updateModal" class="modal">
	  <!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">×</span>
				<h2>Update Event</h2>
			</div>
		    <div class="Modal-body">
			  <center>
					
					<form action="#" class="ws-validate">
						<input type="hidden" id="evnIdHide" value="" />
						<div class="input-append" >
							<input type="text" id="evnameUp" value="" placeholder="Event Name" style="height: 30px;" />
						</div>
						<div id="datetimepickerUpStart"  class="input-append date">
								<input type="text"  style="height: 30px;" ></input>
								<span class="add-on" style="height: 30px;">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
								</span>
							</div>
						

							<!--input type="date" id="evend" placeholder="End Date"  style="height: 30px;"/-->
							<div id="datetimepickerUpEnd" class="input-append date">
								<input type="text"  style="height: 30px;" ></input>
								<span class="add-on" style="height: 30px;">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
								</span>
							</div>
						<div class="form-row">
							<input type="button" id="submit_update" value="Update Event" />
						</div>
					</form>
				</center>
		    </div>
		</div>
	</div>
	
</body>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script>
	<script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
	$.fn.datetimepicker.defaults = {
  maskInput: true,           // disables the text input mask
  pickDate: true,            // disables the date picker
  pickTime: true        // disables de time picker
 
  
};

      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy HH:mm PP',
		 language: 'en',
		 pick12HourFormat: true,
		  startDate: new Date()    // set a minimum date
      });
	
	  
    </script>
	
	<script type="text/javascript">
      $('#datetimepickerUpStart').datetimepicker({
        format: 'dd/MM/yyyy HH:mm PP',
		 language: 'en',
		 pick12HourFormat: true
      });
	
	  $('#datetimepickerUpEnd').datetimepicker({
        format: 'dd/MM/yyyy HH:mm PP',
		 language: 'en',
		 pick12HourFormat: true
      });
    </script>
	<script>

	$(document).ready(function() {
		 //makeApiCall1();
		//setTimeout(makeApiCall1(), 5000);
	
		/* My Model Start */
		var modal = document.getElementById('myModal');
		var btn = document.getElementById("myBtn");
		var span = document.getElementsByClassName("close")[0];

		
		 function refreshICalendarframe() {
            var iframe = document.getElementById('divifm')
            iframe.innerHTML = iframe.innerHTML;
        }
				
				
				// Get the modal

		// When the user clicks on the button, open the modal
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

	/* My Model End */

	/* Update Model Start */
	
			var upmodal = document.getElementById('updateModal');

			// Get the button that opens the modal
			var btn1 = document.getElementById("updateBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[1];

				
					
				
					// Get the modal

			// When the user clicks on the button, open the modal
			btn1.onclick = function() {
				upmodal.style.display = "block";
				var Id = $('.updateModal-body').val();
				$('#evnIdHide').val(Id);
				//Get One Event Call Api
				 gapi.client.load('calendar', 'v3', function () {// load the calendar api (version 3)
			
					var request = gapi.client.calendar.events.get
					({
						'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
						'eventId': Id
					});
				  
					// handle the response from our api call
					request.execute(function (resp) {
						
						$('#evnameUp').val(resp['summary']);
						
						//$('#evstartUp').val(resp.start['dateTime']);
						 var pickerUpStart = $('#datetimepickerUpStart').data('datetimepicker');
						  var set_start_date = new Date(resp.start['dateTime']);
						set_start_date.setHours(set_start_date.getHours()+5);
						set_start_date.setMinutes(set_start_date.getMinutes()+30);
						pickerUpStart.setDate(set_start_date);
						
						//$('#evendUp').val(resp.end['dateTime']);
						 var pickerUpEnd = $('#datetimepickerUpEnd').data('datetimepicker');
						 var set_end_date = new Date(resp.end['dateTime']);
						set_end_date.setHours(set_end_date.getHours()+5);
						set_end_date.setMinutes(set_end_date.getMinutes()+30);
						pickerUpEnd.setDate(set_end_date);
						
					});
				
				});
				
			}
			
			
			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				upmodal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == upmodal) {
					upmodal.style.display = "none";
				}
			}

	/* update Model End */


function makeApiCall1() {
		
			var count=0;
			var array_id=[];
			var array_name=[];
			
     
			alert('Wait');
			//wait(5000); 
			//sleep(5000);
			//window.setTimeout('',5000);
			
            gapi.client.load('calendar', 'v3', function () {// load the calendar api (version 3)
			
                var request = gapi.client.calendar.events.list
                ({
                    'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com' // pass event details with api call
                });
              
                // handle the response from our api call
                request.execute(function (resp) {
					//console.log(resp.items);
					count = resp.items.length;
					for(var i=0;i<count;i++)
					{
						array_id[i]=resp.items[i]['id'];
						array_name[i]=resp.items[i]['summary'];
						$('.updateModal-body').append("<option  value='"+array_id[i]+"'>"+array_name[i]+"</option>");
						
						
					} 
							
                });
				
            });
			
        }

	//var evt_ids = [];
	 makeApiCall1();
	 
	
				
				
	//Insert Event Function
	function insertEvent(add_resource) {
            var eventResponse = document.getElementById('event-response');
			//alert('df');
           
            gapi.client.load('calendar', 'v3', function () {					// load the calendar api (version 3)
                var request = gapi.client.calendar.events.insert
                ({
                    'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
					//'eventId':'i9lsd13tarh37rk27b0ge7uno8',
                    "resource": add_resource			// pass event details with api call
                });
                
                // handle the response from our api call
                request.execute(function (resp) {
                    
					if (resp.status == 'confirmed') {
					
                        //eventResponse.innerHTML = "Event created successfully. View it <a href='" + resp.htmlLink + "'>online here</a>.";
                        //eventResponse.className += ' panel-success';
                        refreshICalendarframe();
						$('.updateModal-body').empty();
						makeApiCall1();
                    } else {
                        document.getElementById('event-response').innerHTML = "There was a problem. Reload page and try again.";
                        eventResponse.className += ' panel-danger';
                    }
                });
            });
        }

	$('input#submit_add').click(function(){
		
		var parent_date = new Date();
		var evt_name = $('#evname').val();
		
		 
		 var start_frm = $('#datetimepicker').data('datetimepicker')._date.toISOString();
		  var start_date = new Date(start_frm);
			start_date.setHours(start_date.getHours()-5);
			start_date.setMinutes(start_date.getMinutes()-30);
			
			
		  var end_frm = $('#datetimepickerEnd').data('datetimepicker')._date.toISOString();
		  var end_date = new Date(end_frm);
			end_date.setHours(end_date.getHours()-5);
			end_date.setMinutes(end_date.getMinutes()-30);
			
		
		var add_resource = {
            "summary": evt_name,
			"start": {
                "dateTime": start_date
            },
            "end": {
                "dateTime": end_date
            },
            "description":"Farhan's event"
		};
		insertEvent(add_resource);
		
		modal.style.display = "none";
		
	});
	
	
	
	$('input#submit_update').click(function(){
		
		//var parent_date = new Date();
		var Id = $('#evnIdHide').val();
		var evt_name = $('#evnameUp').val();
		//var evt_start = $('#evstartUp').val();
		//var evt_end = $('#evendUp').val();
		
		var start_frm = $('#datetimepickerUpStart').data('datetimepicker')._date.toISOString();
		  var start_date = new Date(start_frm);
			start_date.setHours(start_date.getHours()-5);
			start_date.setMinutes(start_date.getMinutes()-30);
			
			
		  var end_frm = $('#datetimepickerUpEnd').data('datetimepicker')._date.toISOString();
		  var end_date = new Date(end_frm);
			end_date.setHours(end_date.getHours()-5);
			end_date.setMinutes(end_date.getMinutes()-30);
		
		var add_resource = {
            "summary": evt_name,
			"start": {
                "dateTime": start_date
            },
            "end": {
                "dateTime": end_date
            },
            "description":"Farhan's event"
		};
		updateEvent(add_resource,Id);
		upmodal.style.display = "none";
		
		
	});
	
	//Update Event Function
	function updateEvent(add_resource,id) {
            var eventResponse = document.getElementById('event-response');
			//alert('df');
           
            gapi.client.load('calendar', 'v3', function () {					// load the calendar api (version 3)
                var request = gapi.client.calendar.events.patch
                ({
                    'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
					'eventId': id,
                    "resource": add_resource			// pass event details with api call
                });
                
                // handle the response from our api call
                request.execute(function (resp) {
                   // alert(resp.htmlLink);
					if (resp.status == 'confirmed') {
					
                      
                        refreshICalendarframe();
						$('.updateModal-body').empty();
						makeApiCall1();
                    } else {
                        document.getElementById('event-response').innerHTML = "There was a problem. Reload page and try again.";
                        eventResponse.className += ' panel-danger';
                    }
                });
            });
        }
		
	//Delete Event
	$('#btnDeleteEvents').click(function(){
	
		var Id = $('.updateModal-body').val();
		deleteEvent(Id);
		
	
	});
	
	function deleteEvent(id) {
	   
		gapi.client.load('calendar', 'v3', function() {  
		 
			var request = gapi.client.calendar.events.delete({
				 'calendarId': 'suafag3ku0re5rnvjl4beriljc@group.calendar.google.com',
				 'eventId': id
			   });
			  
			 request.execute(function(resp) {
				
				refreshICalendarframe();
				$('.updateModal-body').empty();
				makeApiCall1();
			});
		 });
		
	   } 
	   
	   $('#datetimepicker').on('changeDate',function(selected){
		
		//var pickerStart = $('#datetimepicker').data('datetimepicker');
		
		console.log(selected.date);
		
		$('#datetimepickerEnd').datetimepicker({
        format: 'dd/MM/yyyy HH:mm PP',
        language: 'en',
		 pick12HourFormat: true,
		 startDate: selected.date   // set a minimum date
		 
		  
      });
	  var pickerEnd = $('#datetimepickerEnd').data('datetimepicker');
	  pickerEnd.setDate(selected.date);
	 
	   
	   });
	   
	   	   $('#datetimepickerUpStart').on('changeDate',function(selected){
		
		//var pickerStart = $('#datetimepicker').data('datetimepicker');
		
		console.log(selected.date);
		
		$('#datetimepickerEnd').datetimepicker({
        format: 'dd/MM/yyyy HH:mm PP',
        language: 'en',
		 pick12HourFormat: true,
		 startDate: selected.date   // set a minimum date
		 
		  
      });
	  var pickerEnd = $('#datetimepickerUpEnd').data('datetimepicker');
	  pickerEnd.setDate(selected.date);
	 
	   
	   });
	 
 });
	</script>
</html>
