<?php
/**
* @Author Virat Gaywala
* Created on 25-JAN-2016
* Purpose: Footer of the iValuation
* Last Modified By: Virat Gaywala
* Last Modified Date: 25-JAN-2016
*/
?>
	<div class="footer">
		<div class="footer-inner">
			2016 &copy; Siliconbrain Technosoft
		</div>
		<div class="footer-tools">
			<span class="go-top">
				<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	
		<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		
		<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
		<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
		<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCountStatus.js"></script>
		<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/showPermission.js"></script-->
		
		<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<?php
		if (isset($_GET['url']))
		{             
			switch(strtoupper($_GET['url']))
			{
				case 'DSH':
					?>
					
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]-->
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
							//var authorizeButton = document.getElementById('authorize-button');
						   // var eventButton = document.getElementById('btnCreateEvents');
						   
						   // var eventButton = document.getElementById('btnDeleteEvents');
						   // var insertBtn = document.getElementById('myBtn');
						   // var updateBtn = document.getElementById('updateBtn');
							
							var resultPanel = document.getElementById('result-panel');
							var resultTitle = document.getElementById('result-title');

							if (authResult && !authResult.error) {
								//authorizeButton.style.visibility = 'hidden'; 		// if authorized, hide button
								resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
								resultPanel.className += ' panel-success'; 			// add green class
								resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
								// eventButton.style.visibility = 'visible';
								// insertBtn.style.visibility = 'visible';
								// updateBtn.style.visibility = 'visible';
								$("#txtEventDetails").attr("visibility", "visible");
							} else {													// otherwise, show button
								//authorizeButton.style.visibility = 'visible';
								$("#txtEventDetails").attr("visibility", "hidden");
								// eventButton.style.visibility = 'hidden';
								// insertBtn.style.visibility = 'hidden';
								// updateBtn.style.visibility = 'hidden';
								resultPanel.className += ' panel-danger'; 			// make panel red
								//authorizeButton.onclick = handleAuthClick; 			// setup function to handle button click
							}
						}

						// function triggered when user authorizes app
						function handleAuthClick(event) {
							gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
							return false;
						}	  
					</script>
					
					<script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script>
					
					<!--![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/index.js" type="text/javascript"></script> 

					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showdashboardAcc.js" type="text/javascript"></script>   					
					<!-- END PAGE LEVEL SCRIPTS -->  
					<script>
						jQuery(document).ready(function() {    
						   App.init(); // initlayout and core plugins
						   Index.init();
						   Index.initJQVMAP(); // init index page's custom scripts
						   Index.initCalendar(); // init index page's custom scripts
						   Index.initCharts(); // init index page's custom scripts
						   Index.initChat();
						   Index.initMiniCharts();
						   Index.initDashboardDaterange();
						   Index.initIntro();
						});
					</script>
					
					
					
				<?php
					break;
				case 'ENR':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>					  
					
					
					<!--script src="<?php// echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php //echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script-->  
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showInquiry.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 	
					
					<?php
					break;
				case 'ENQ':
					?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php //echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php //echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					
					
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEnquiryForm.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						});
					</script>
					<script type="text/javascript">
					 $(function() 
					 {
					 $('#datetimepicker1').datetimepicker({
					language: 'pt-BR'
					 });
					  $('#datetimepicker2').datetimepicker({
					language: 'pt-BR'
					 });
					 $('#datetimepicker3').datetimepicker({
					language: 'pt-BR'
					 });
					 });
			   
				 </script>
<?php
					break;
				case 'CMP':
					?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertCmp.js"></script> 					
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						  // TableAdvanced.init();
						});
					</script>
					
						<!--script type="text/javascript"
						src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
						</script-->
						<script src="Simple-jQuery/components/imgareaselect/scripts/jquery.imgareaselect.js"></script> 
						<script src="Simple-jQuery/build/jquery.awesome-cropper.js"></script> 
						<script>
							$(document).ready(function () {
								$('#sample_input').awesomeCropper(
								{ width: 150, height: 150, debug: true }
								);
							});
						</script> 
						<script type="text/javascript">
						 var _gaq = _gaq || [];
						  _gaq.push(['_setAccount', 'UA-36251023-1']);
						  _gaq.push(['_setDomainName', 'jqueryscript.net']);
						  _gaq.push(['_trackPageview']);
							
						  (function() {
							var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
							ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
						  })();
						</script>
					<?php
					break;
				case 'EALL':
					?>
					<!-- END FOOTER -->
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showAllEventStatus.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script>
						$("#search_btn").click(function()
						{
							$("#search_form").toggle();
						});
					</script>
					<?php
					break;
				case 'NEW':
					?>
					
					<!-- END FOOTER -->
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showNewEventStatus.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script>
						$("#search_btn").click(function()
						{
							$("#search_form").toggle();
						});
					</script>
					<?php
					break;
				case 'UPC':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>	 
					<![endif]-->   
					
					 <script src="<?php echo HTTP_SERVER; ?>assets/scripts/calendar.js" type="text/javascript"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
					
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
					<!-- END CORE PLUGINS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/index.js" type="text/javascript"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   Index.initDashboardDaterange();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showUpcomingEventStatus.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script>
						$("#search_btn").click(function()
						{
							$("#search_form").toggle();
						});
					</script>
				<?php
					break;
				case 'COM':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					
					<![endif]-->   
					
					 <script src="<?php echo HTTP_SERVER; ?>assets/scripts/calendar.js" type="text/javascript"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
					
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
					<!-- END CORE PLUGINS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/index.js" type="text/javascript"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   Index.initDashboardDaterange();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCompletedEventStatus.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script>
						$("#search_btn").click(function()
						{
							$("#search_form").toggle();
						});
					</script>
				<?php
					break;
				case 'PID':
				?>
				
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showClientpaid.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					
				<?php
					break;
				case 'TRN':
				?>
				
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script> 
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});	
						
						$("#cancel").click(function(){
						$("#add_form").toggle();
						});	
						
						
						$(function() 
						   {
							  $('#datetimepicker1').datetimepicker({
								language: 'pt-BR'
							  });
						   });
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showTrasactionDetail.js"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					
					
				<?php
					break;
				case 'TEMP':
				?>
				
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
					<!--script>tinymce.init({ selector:'#txttemplate' });</script-->
					
					<script type="text/javascript">
						tinymce.init({
							selector: "#txttemplate",
							menu : {
								file   : {title : 'File'  , items : 'newdocument'},
								edit   : {title : 'Edit'  , items : 'undo redo | cut copy paste pastetext | selectall'},
								newmenu: {title : 'Setting', items : 'item1 item2 item3 item4 item5 item6 item7 item8 item9 item10 item11 item12 item13 item14 item15 item16 item17 item18 item19 item20 item21'}
							},
							menubar: 'file edit newmenu',
							setup: function(editor) {
								editor.addMenuItem('item1', {
									text: 'Client Name',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[ClientName]');
									}
								});
								editor.addMenuItem('item2', {
									text: 'Company',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[Company]');
									}
								});
								editor.addMenuItem('item3', {
									text: 'Order Date',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[OrderDate]');
									}
								});
								editor.addMenuItem('item4', {
									text: 'Order Name',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[OrderName]');
									}
								});
								editor.addMenuItem('item5', {
									text: 'Venue',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[Venue]');
									}
								});
								editor.addMenuItem('item6', {
									text: 'Order Id',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[OrderId]');
									}
								});
								editor.addMenuItem('item7', {
									text: 'Client Charge',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[ClientCharge]');
									}
								});
								editor.addMenuItem('item8', {
									text: 'Discount',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[Discount]');
									}
								});
								editor.addMenuItem('item9', {
									text: 'Tax Amount',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[TaxAmt]');
									}
								});
								editor.addMenuItem('item10', {
									text: 'Total',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[Total]');
									}
								});
								editor.addMenuItem('item11', {
									text: 'Tax Rate',
									context: 'newmenu',
									onclick: function (){ 
										 
										editor.insertContent('[TaxRate]');
									}
								});
								editor.addMenuItem('item12', {
									text: 'Delivery Date',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[DeliveryDate]');
									}
								});
								editor.addMenuItem('item13', {
									text: 'Organization',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[Organization]');
									}
								});
								editor.addMenuItem('item14', {
									text: 'Banner_Img',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[Banner_Img]');
									}
								});
								editor.addMenuItem('item15', {
									text: 'OrderDesc',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[OrderDesc]');
									}
								});
								editor.addMenuItem('item16', {
									text: 'Email',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[Email]');
									}
								});
								editor.addMenuItem('item17', {
									text: 'HomeMob',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[HomeMob]');
									}
								});
								editor.addMenuItem('item18', {
									text: 'WorkMob',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[WorkMob]');
									}
								});
								editor.addMenuItem('item19', {
									text: 'Mobile',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[Mobile]');
									}
								});
								editor.addMenuItem('item20', {
									text: 'ADATE',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[ADATE]');
									}
								});
								editor.addMenuItem('item21', {
									text: 'INVID',
									context: 'newmenu',
									onclick: function (){										 
										editor.insertContent('[INVID]');
									}
								});
							}
							
							
						});
					</script>
					<!--script type="text/javascript">
						tinymce.PluginManager.add('example', function(editor, url) {
							// Add a button that opens a window
							editor.addButton('example', {
								text: 'My button',
								icon: false,
								onclick: function() {
									// Open window
									editor.windowManager.open({
										title: 'Example plugin',
										body: [
											{type: 'textbox', name: 'title', label: 'Title'}
										],
										onsubmit: function(e) {
											// Insert content when the window form is submitted
											editor.insertContent('Title: ' + e.data.title);
										}
									});
								}
							});

							// Adds a menu item to the tools menu
							editor.addMenuItem('example', {
								text: 'Example plugin',
								context: 'tools',
								onclick: function() {
									// Open window with a specific url
									editor.windowManager.open({
										title: 'TinyMCE site',
										url: 'http://www.tinymce.com',
										width: 400,
										height: 300,
										buttons: [{
											text: 'Close',
											onclick: 'close'
										}]
									});
								}
							});
						});

						tinymce.init({
							selector: "#txttemplate",
							plugins: "example",
							toolbar: "example undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
						});
						</script-->
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script> 
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						
						$("#add_btn").click(function(){
						//$("#add_form").toggle();
						});						
						$('#add_form').fadeOut();
						
						$(function() 
						   {
							  $('#datetimepicker1').datetimepicker({
								language: 'pt-BR'
							  });
						   });
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertTemplate.js"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					
					
					
				<?php
					break;
				case 'UPD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showClientunpaid.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
				
				<?php
					break;
				case 'INV':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showClientInv.js"></script>
				
				<?php
					break;
				case 'VPD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
					</script>
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showVendpaid.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
				<?php
					break;
				case 'VUD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
					</script>
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showVendunpaid.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					
					<!-- Script for new event which is set for cash and cheque-->
					<script type="text/javascript">
						function ShowHideDiv() {
							var paymentMode = document.getElementById("paymentMode");
							var showHide = document.getElementById("showHide");
							showHide.style.display = paymentMode.value == "cheque" ? "block" : "none";
						}
					</script>
				<?php
					break;
				case 'CTG':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertCategory.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCategory.js"></script> 
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
					
				<?php
 					break;
					case 'CON':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertContactList.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showContactList.js"></script> 
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();

						});
						
					</script>
				<?php
					break;
				case 'OCTG':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertCategoryNew.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCategoryNew.js"></script> 
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
				<?php
					break;
				case 'RES':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertResources.js"></script> 
					
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
				
				<?php
					break;
				case 'PRD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertProduct.js"></script> 
					
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
				<?php
					break;
				case 'PADD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertProductAdd.js"></script> 
					
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
				<?php
					break;
				case 'RSE':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertRetailSales.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					<script type="text/javascript">
						   $(function() 
						   {
							  $('#datetimepicker1').datetimepicker({
								language: 'pt-BR'
							  });
							   $('#datetimepicker2').datetimepicker({
								language: 'pt-BR'
							  });
							  $('#datetimepickerPF').datetimepicker({
								language: 'pt-BR'
							  });
							   $('#datetimepickerPT').datetimepicker({
								language: 'pt-BR'
							  });
							  $('#datetimepicker3').datetimepicker({
								language: 'pt-BR'
							  });
						   });
			
					</script>
					<script type="text/javascript">
						function ShowHideDiv() {
							var paymentMode = document.getElementById("paymentMode");
							var showHide = document.getElementById("showHide");
							showHide.style.display = paymentMode.value == "cheque" ? "block" : "none";
						}
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>	
				<?php
					break;
				case 'PVIW':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showProductView.js"></script> 
					
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
				<?php
					break;
				case 'HOL':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
				
				<?php
					break;
				case 'EVD':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]--> 
					      
			
					<script type="text/javascript">
						
						var now = new Date();
						today = now.toISOString();
						
						var twoHoursLater = new Date(now.getTime() + (2 * 1000 * 60 * 60));
						twoHoursLater = twoHoursLater.toISOString();

						
						var clientId = '998888557917-udke5p4to575koi31aboismo8gjvr1me.apps.googleusercontent.com';
						var apiKey = 'AIzaSyDrZMvRi0Csy68Rl0J56_AuEJLg91kO2Kk';

						
						var scopes = 'https://www.googleapis.com/auth/calendar';

						
						function handleClientLoad() {
							gapi.client.setApiKey(apiKey);
							window.setTimeout(checkAuth, 1);
						}

						function checkAuth() {
							gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: true }, handleAuthResult);
						}

						
						function handleAuthResult(authResult) {
							
							var resultPanel = document.getElementById('result-panel');
							var resultTitle = document.getElementById('result-title');

							if (authResult && !authResult.error) {
									
								resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
								resultPanel.className += ' panel-success'; 			// add green class
								resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
								
								$("#txtEventDetails").attr("visibility", "visible");
							} else {													// otherwise, show button
								
								$("#txtEventDetails").attr("visibility", "hidden");
								
								resultPanel.className += ' panel-danger'; 			// make panel red
											
							}
						}

						
						function handleAuthClick(event) {
							gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
							return false;
						}	  
					</script>
					<script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script> 
			
			
			
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<!--script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script-->
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
						$("#vendaddrow").click(function(){
						$("#ins_vend_row").toggle();
						});
						
						$('#datetimepickerPF').datetimepicker({
							language: 'pt-BR'
						  });
						   $('#datetimepickerPT').datetimepicker({
							language: 'pt-BR'
						  });
					</script>
					<script>
						// $("#addvend").click(function(){
						// $("#divvend").toggle();
						// });
						$("#svbtn").hide();
					</script>				
					
					<script>						
						$('#open').click(function(){
							
							$('#pop_background').fadeIn();
							$('#pop_box').fadeIn();
							
							return false;
							});
						$('#close').click(function(){
							
							$('#pop_background').fadeOut();
							$('#pop_box').fadeOut();
							
							return false;
							});	
						$('#vend_close').click(function(){
							
							$('#vend_pop_background').fadeOut();
							$('#vend_pop_box').fadeOut();
							
							return false;
							});
						$('#close1').click(function(){
							
							$('#pop_background').fadeOut();
							$('#pop_box').fadeOut();
							
							return false;
							});
						$('#close_vend').click(function(){
							
							$('#vend_pop_background').fadeOut();
							$('#vend_pop_box').fadeOut();
							
							return false;
							});
							
						$('#addrow').click(function(){							
							
							$('#add_div').fadeOut();
							$('#insrow').fadeIn();
							return false;
							});
						$('#removerow').click(function(){							
							$('#add_div').fadeIn();							
							$('#insrow').fadeOut();
								
							return false;
							});
					</script>
					<script type="text/javascript">
						function ShowHideDiv1() {
							var txtvpmode = document.getElementById("txtvpmode");
							var showHide1 = document.getElementById("showHide1");
							showHide1.style.display = txtvpmode.value == "cheque" ? "block" : "none";
						}
						function ShowHideDiv() {
							var txtpmode = document.getElementById("txtpmode");
							var ShowHide = document.getElementById("ShowHide");
							ShowHide.style.display = txtpmode.value == "cheque" ? "block" : "none";
						}
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertPaymentTrn.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showEventDetail.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showEventDataDetail.js"></script> 
					<script type="text/javascript" src="vertical-timeline/inc/colorbox.js"></script>
					 <script type="text/javascript" src="vertical-timeline/js/timeliner.js"></script>
					 
					 <script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					 <script src="<?php echo HTTP_SERVER; ?>assets/scripts/multipleinsertionupd.js"></script>
					 <script>
					 // $(document).ready(function() {
					   $.timeliner({
						//startOpen:['#19550828', '#19630828'],
					   });
					   $.timeliner({
						timelineContainer: '#timeline-js',
						timelineSectionMarker: '.milestone',
						oneOpen: true,
						startState: 'flat',
						expandAllText: '+ Show All',
						collapseAllText: '- Hide All'
					   });
					   // Colorbox Modal
					   $(".CBmodal").colorbox({inline:true, initialWidth:100, maxWidth:682, initialHeight:100, transition:"elastic",speed:750});
					 // });
					 </script>
				
				<?php
					break;
				case 'EQA':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>					  
					
					
					<!--script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script-->  
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showEquipment.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEquipment.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 	

				<?php
					 break;
				case 'VER':
					?>
					 <script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					 <script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
				
					<!--TIMELINER JS-->
					 <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script-->
					 <script type="text/javascript" src="vertical-timeline/inc/colorbox.js"></script>
					 <script type="text/javascript" src="vertical-timeline/js/timeliner.js"></script>
					 <script>
					  $(document).ready(function() {
					   $.timeliner({
						startOpen:['#19550828', '#19630828'],
					   });
					   $.timeliner({
						timelineContainer: '#timeline-js',
						timelineSectionMarker: '.milestone',
						oneOpen: true,
						startState: 'flat',
						expandAllText: '+ Show All',
						collapseAllText: '- Hide All'
					   });
					   // Colorbox Modal
					   $(".CBmodal").colorbox({inline:true, initialWidth:100, maxWidth:682, initialHeight:100, transition:"elastic",speed:750});
					  });
					 </script>
				<?php
					break;
				case 'ACS':
				?>
					<!-- BEGIN CORE PLUGINS -->		
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertAccessories.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showAccessories.js"></script> 
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<!--script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script-->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
				
				<?php
					break;
				case 'OSTG':
				?>
					<!-- BEGIN CORE PLUGINS -->		
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertSubCatg.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showSubCatg.js"></script> 
					
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<!--script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script-->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
				
				
				<?php
					break;
				case 'STF':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>	 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertStaff.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						});
					</script>
					<!-- END JAVASCRIPTS -->			
				
				
				<?php
					break;
				case 'STA':
				?>
					
					
					
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					
					
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<!--script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script-->				
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					
					

					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showStaff.js"></script> 
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						
						$('.newperadd').on('click',function(){
							var id = $(this).data('id');
							$.ajax({
								url : 'includes/addEditStaffPost.php',
								type : 'POST',
								async : false,
								data : {
									'editStaffPer'  : 1,
									'id' 	: id														
								},
								success : function(e)
								{
									$('#txtid').val(id);
									$('#txtidper').val(e.permission);
									$('#popup_staff_per').fadeIn();
									$('#popup_staff_per_data').fadeIn();
								}
							});	
							
							
							
							return false;
							});
						$('#close').click(function(){
							
							$('#popup_staff_per').fadeOut();
							$('#popup_staff_per_data').fadeOut();
							
							return false;
							});
						$('#close1').click(function(){
							
							$('#popup_staff_per').fadeOut();
							$('#popup_staff_per_data').fadeOut();
							
							return false;
							});
						
					</script>
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					
					<!--checkbox script--->
					<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/check-treenew.js"></script-->
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/jquery-checktree.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertPermission.js"></script>
					<script>
						$('#tree').checktree();
					</script>
					<!-- end of checkbox script -->
					
					
										
					
					
				<?php
					break;
				case 'CAL':
				?>
					<!--script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/index.js" type="text/javascript"></script-->        
					
					<script src="<?php echo HTTP_SERVER; ?>assets/js/calendar.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/js/jquery-fullcalendar/fullcalendar/fullcalendar.min.js"></script>
					<script src="assets/js/jquery-ui/js/jquery-ui-1.10.1.custom.min.js"></script>
					<script src="assets/js/twitter-bootstrap/bootstrap.js"></script>
					<script src="assets/js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
					<script src="assets/js/app.js"> </script>
					<script src="assets/js/extents.js"></script>
					<!--script>
						jQuery(document).ready(function() {    
						   App.init(); // initlayout and core plugins
						   Index.init();
						   Index.initJQVMAP(); // init index page's custom scripts
						   Index.initCalendar(); // init index page's custom scripts
						   Index.initCharts(); // init index page's custom scripts
						   Index.initChat();
						   Index.initMiniCharts();
						   Index.initDashboardDaterange();
						   Index.initIntro();
						});
					</script-->
								
				<?php
					break;
				case 'EVE':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
							//var authorizeButton = document.getElementById('authorize-button');
						   // var eventButton = document.getElementById('btnCreateEvents');
						   
						   // var eventButton = document.getElementById('btnDeleteEvents');
						   // var insertBtn = document.getElementById('myBtn');
						   // var updateBtn = document.getElementById('updateBtn');
							
							var resultPanel = document.getElementById('result-panel');
							var resultTitle = document.getElementById('result-title');

							if (authResult && !authResult.error) {
								//authorizeButton.style.visibility = 'hidden'; 		// if authorized, hide button
								resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
								resultPanel.className += ' panel-success'; 			// add green class
								resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
								// eventButton.style.visibility = 'visible';
								// insertBtn.style.visibility = 'visible';
								// updateBtn.style.visibility = 'visible';
								$("#txtEventDetails").attr("visibility", "visible");
							} else {													// otherwise, show button
								//authorizeButton.style.visibility = 'visible';
								$("#txtEventDetails").attr("visibility", "hidden");
								// eventButton.style.visibility = 'hidden';
								// insertBtn.style.visibility = 'hidden';
								// updateBtn.style.visibility = 'hidden';
								resultPanel.className += ' panel-danger'; 			// make panel red
								//authorizeButton.onclick = handleAuthClick; 			// setup function to handle button click
							}
						}

						// function triggered when user authorizes app
						function handleAuthClick(event) {
							gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
							return false;
						}	  
					</script>
					<script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]--> 
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/multipleinsertion.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertVendorNewEvent.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEquipmentNewEvent.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertResourcesNewEvent.js"></script>
					<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertDateTime.js" type="text/javascript"></script--->
					<script type="text/javascript">
						   
						   $.fn.datetimepicker.defaults = {
								//  maskInput: true,           // disables the text input mask
								  pickDate: true,            // disables the date picker
								  pickTime: true       // disables de time picker							  
								};
						   
						   $(function() 
						   {
							  $('#datetimepicker1').datetimepicker({
								language: 'pt-BR'	
							  });
							   $('#datetimepicker2').datetimepicker({
								language: 'pt-BR'
							  });
							  $('#datetimepickerPF').datetimepicker({
								language: 'pt-BR'
							  });
							   $('#datetimepickerPT').datetimepicker({
								language: 'pt-BR'
							  });
							  $('#datetimepicker3').datetimepicker({
								language: 'pt-BR'
							  });
						   });
			
					</script>
					
					<!-- Script for new event which is set for cash and cheque-->
					<script type="text/javascript">
						function ShowHideDiv() {
							var paymentMode = document.getElementById("paymentMode");
							var showHide = document.getElementById("showHide");
							showHide.style.display = paymentMode.value == "cheque" ? "block" : "none";
						}
					</script>
					
					<!--script for popup show and hide -->
					<script type="text/javascript">
						$('#newinseqp').click(function(){
							
							$('#popup_equipment').fadeIn();
							$('#popup_equipment_data').fadeIn();
							
							return false;
							});
						$('#close').click(function(){
							
							$('#popup_equipment').fadeOut();
							$('#popup_equipment_data').fadeOut();
							
							return false;
							});
						$('#close1').click(function(){
							
							$('#popup_equipment').fadeOut();
							$('#popup_equipment_data').fadeOut();
							
							return false;
							});
						
						$('#newinsvd').click(function(){
							
							$('#popup_ins_vendor').fadeIn();
							$('#popup_ins_vendor_data').fadeIn();
							
							return false;
							});
						$('#closevd').click(function(){
							
							$('#popup_ins_vendor').fadeOut();
							$('#popup_ins_vendor_data').fadeOut();
							
							return false;
							});
						$('#close1vd').click(function(){
							
							$('#popup_ins_vendor').fadeOut();
							$('#popup_ins_vendor_data').fadeOut();
							
							return false;
							});
							
							//new resource add in popup
							
							$('#newinsres').click(function(){
							
							$('#popup_ins_resource').fadeIn();
							$('#popup_ins_resource_data').fadeIn();
							
							return false;
							});
						$('#closeres').click(function(){
							
							$('#popup_ins_resource').fadeOut();
							$('#popup_ins_resource_data').fadeOut();
							
							return false;
							});
						$('#close1res').click(function(){
							
							$('#popup_ins_resource').fadeOut();
							$('#popup_ins_resource_data').fadeOut();
							
							return false;
							});
							
							
							//exit
					
					</script>
					
					<!-- end script-->
					
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
								 
								 /*
								  var i = 1;
									$(document).on('click','#add',function(){
										i++;
										$('#dynamic_field').append('<div id="row'+i+'" class="tabbable tabbable-custom tabbable-full-width"><h5> Event places <a style="margin-left:75%" name="add" id="add" class="btn blue"><i class="icon-plus"></i></a> <a  name="remove" id="'+i+'" class="btn blue btn_remove"><i class="icon-minus"></i></a></h5><div class="tab-content"><table><div class="input-icon left"><tr><td class="names">Vennue </td><td><input class="small-box" type="text"  /></td></tr></div><div class="input-icon left"><tr><td class="names">Land Mark </td><td><input type="text" class="small-box"/></td></tr></div><div class="input-icon left"><div class="controls"><tr><td>From Date</td><td><div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years"><input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span></div></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>To Date</td><td><div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years"><input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="12-02-2012" /><span class="add-on"><i class="icon-calendar"></i></span></div></td></tr></div>	</div><div class="input-icon left"><div class="controls"><tr><td>Equipment</td><td><div class="multiselect"><div class="selectBox" onclick="showCheckboxes()"><select><option>Select an option</option></select><div class="overSelect"></div></div><div id="checkboxes"></div></div></td></tr></div></div><div class="input-icon left"><div class="controls"><tr><td>Staff</td><td><div class="multiselect"><div class="selectBox" onclick="showCheckboxes1()"><select><option>Select an option</option></select><div class="overSelect"></div></div><div id="checkboxes1"></div></div></td></tr></div></div></table></div></div>');
										//$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name" id="name" placeholder="Enter name"/></td><td><button  type="button" name="remove" id="'+i+'" class="btn_remove">X</button></td></tr>');
									});
									$(document).on('click','.btn_remove',function(){
										var button_id = $(this).attr("id");
										$("#row"+button_id+"").remove();
									});
									*/
						});
					</script>
					<script>
					var expandedEqp = false;
						$(document).on('click','#eqpdrp',function()
						{													
							var checkboxesEqp = document.getElementById("checkboxEqp");
							if (!expandedEqp) {
								checkboxesEqp.style.display = "block";
								expandedEqp = true;
							} else {
								checkboxesEqp.style.display = "none";
								expandedEqp = false;
							}							
						});				
						
					var expandedStf = false;
						$(document).on('click','#stfdrp',function()
						{
							//showStfDrp();
							var checkboxesStf = document.getElementById("checkboxStf");
							if (!expandedStf) {
								checkboxesStf.style.display = "block";
								expandedStf = true;
							} else {
								checkboxesStf.style.display = "none";
								expandedStf = false;
							}							
						});							
					</script>
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showEqupDrp.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showStaffDrp.js"></script>	
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEventAll.js"></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmpDrp.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCtgDrp.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showTax.js"></script>
					<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEvents.js"></script-->					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 	
				
				
				
				
				<?php
					break;
				case 'PRO':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/excanvas.min.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/respond.min.js"></script>  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>      
					<!-- END PAGE LEVEL SCRIPTS -->
					<script>
						jQuery(document).ready(function() {       
						   // initiate layout and plugins
						   App.init();
						});
					</script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showProfile.js"></script>
					<!-- END JAVASCRIPTS -->
				
				
				<?php
					break;
				case 'ALL':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>	  
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
					
					
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertEquipment.js"></script>
					<script>
							jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   //TableAdvanced.init();
						});
						
							function readURL(input) {
							if (input.files && input.files[0]) {
							var reader = new FileReader();

								reader.onload = function (e) {
								$('#blah')
								.attr('src', e.target.result)
								.width(340)
								.height(200);
							};

							reader.readAsDataURL(input.files[0]);
							}
						}																												
					</script>
					<script type="text/javascript">
						   $(function() 
						   {
							  $('#datetimepicker1').datetimepicker({
								language: 'pt-BR'
							  });
						   });
			
					</script>
				
				<?php
					break;
				case 'VAL':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertVendor.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showVendors.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
				
				
				
				<?php
					break;
				case 'VDE':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();

						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>
				
				<?php
					break;
				case 'OPT':
				?>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
						
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertOption.js"></script>
					
					
					<script type="text/javascript">
						
						$('#editax').click(function()
						{
							$("#default").hide();
							$("#hide1").show();
						});
						
						$("#hide1").hide();
						
						$('#editdays').click(function()
						{
							$('#txtdays').removeAttr('readonly');
							$("#editdays").hide();
							$("#updays").show();
						});
						
						$("#updays").hide();
						
						
						
						$('#editvat').click(function()
						{
							$('#txtvat').removeAttr('readonly');
							$("#editvat").hide();
							$("#updvat").show();
						});
						
						$("#updvat").hide();
						
						
						
					</script>
					<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmp.js"></script-->
				<?php
					break;
				case 'ADC':
				?>
				
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/img_upd_script.js"></script>
					
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script>	
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						   //TableAdvanced.init();
 
						});
						
					</script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertCmpNew.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showCmp.js"></script>
				<?php
 					break;
				case 'INSE':
				?>
					<!-- BEGIN CORE PLUGINS -->		
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/search.js"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/insertInvoiceSetting.js"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showInvoiceSetting.js"></script> 
					
					
					<!-- END JAVASCRIPTS -->
					
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<!--script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2.min.js"></script-->
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.js"></script>
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/table-advanced.js"></script> 
					<script>
						jQuery(document).ready(function() {    
						   App.init();
						   Search.init();
						   TableAdvanced.init();
						});
					</script>
					<script>
						$("#search_btn").click(function(){
						$("#search_form").toggle();
						});
						$("#add_btn").click(function(){
						$("#add_form").toggle();
						});
					</script>
					<script>
						$(document).ready(function(){
							$('[data-toggle="tooltip"]').tooltip();   
						});
					</script>
				
				<?php
					break;
			}
		}
		else
		{
			?>		
					
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
					<!--[if lt IE 9]>					 
					<![endif]-->   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
					<!-- END CORE PLUGINS -->
					<!-- BEGIN PAGE LEVEL PLUGINS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
					<!-- END PAGE LEVEL PLUGINS -->
					<!-- BEGIN PAGE LEVEL SCRIPTS -->
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/app.js" type="text/javascript"></script>
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/index.js" type="text/javascript"></script> 
					<script src="<?php echo HTTP_SERVER; ?>assets/scripts/showdashboardAcc.js" type="text/javascript"></script>   
					<!-- END PAGE LEVEL SCRIPTS -->  
					<script>
						jQuery(document).ready(function() {    
						   App.init(); // initlayout and core plugins
						   Index.init();
						   Index.initJQVMAP(); // init index page's custom scripts
						   Index.initCalendar(); // init index page's custom scripts
						   Index.initCharts(); // init index page's custom scripts
						   Index.initChat();
						   Index.initMiniCharts();
						   Index.initDashboardDaterange();
						   Index.initIntro();
						});
					</script>	
			
			<?php
		}
	?>
	<!-- END JAVASCRIPTS -->