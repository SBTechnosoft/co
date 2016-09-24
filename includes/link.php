	
	
	
	<?php
	if(isset($_SESSION['USER_ID']) && ($_SESSION['USER_ID']!=''))
		{    
			if (isset($_GET['url']))
			{             
				switch(strtoupper($_GET['url']))
				{
					case 'DSH':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					
					<?php
						break;
					case 'ENR':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						
					<?php
						break;
					case 'VER':
					?>
					  <!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						  
						<link rel="shortcut icon" href="favicon.ico" />
						  
						<!--TIMELINER CSS-->
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/demo.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/timeliner.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/responsive.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/inc/colorbox.css" type="text/css" media="screen" />
						
					<?php
						break;
					case 'ENQ':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						
						
						<?php
						break;
					case 'CMP':
					?>
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>Simple-jQuery/css/bootstrap.min.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>Simple-jQuery/css/bootstrap.min.css" />
						<link href="<?php echo HTTP_SERVER; ?>Simple-jQuery/components/imgareaselect/css/imgareaselect-default.css" rel="stylesheet" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>Simple-jQuery/css/jquery.awesome-cropper.css" />
					<?php
						break;
					case 'EALL':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />

					
					<?php
						break;
					case 'NEW':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					<?php
						break;
					case 'UPC':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>						
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />				
					
					<?php
						break;
					case 'COM':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>						
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
						
					<?php
						break;
					case 'PID':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
					
					
					<?php
						break;
					case 'TRN':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
					<?php
						break;
					case 'TEMP':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<!--link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" /-->
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
					
					<?php
						break;
					case 'VPD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
					
					<?php
						break;
					case 'VUD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
					
					
					<?php
						break;
					case 'UPD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					
					<?php
						break;
					case 'INV':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<!--link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/-->
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					<?php
						break;
					case 'CTG':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'OCTG':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />		
					<?php
						break;
					case 'RES':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'PRD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'PADD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'RSE':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'PVIW':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'HOL':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
						
					<?php
						break;
					case 'EVD':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
						<!--TIMELINER CSS-->
						
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/demo.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/responsive.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/css/timeliner.css" type="text/css" media="screen" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>vertical-timeline/inc/colorbox.css" type="text/css" media="screen" />
					<?php
						break;
					case 'EQA':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						
						<style>
							#search_form{
								display:none;
							}
							#add_form{
								display:none;
							}
						</style>				
					
					<?php
						break;
					case 'ACS':
					?>
					
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
									
					<?php
						break;
					case 'OSTG':
					?>
					
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					
					<?php
						break;
					case 'STF':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />						
						<style>
						.right-side {
							float:right;
						}
						</style>				
					
					<?php
						break;
					case 'STA':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
						<style>
							#search_form{
								display:none;
							}
							
						</style>
					
					
					<?php
						break;
					case 'CAL':
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/social.css" rel="stylesheet">
						<!--script src="<?php echo HTTP_SERVER; ?>assets/scripts/calendar.js"></script-->	
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet" type="text/css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						
						
						 
						<!--link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/-->
						
						
						<link rel="shortcut icon" href="favicon.ico" />
						
						<link href="<?php echo HTTP_SERVER; ?>assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
						
						<link href="<?php echo HTTP_SERVER; ?>assets/css/social.plugins.css" rel="stylesheet">
						<link href="<?php echo HTTP_SERVER; ?>assets/css/social.examples.css" rel="stylesheet">
						<link href="<?php echo HTTP_SERVER; ?>assets/css/font-awesome.css" rel="stylesheet">
						<link href="<?php echo HTTP_SERVER; ?>assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
						<link href="<?php echo HTTP_SERVER; ?>assets/css/docs.css" rel="stylesheet">
						<!--link href="assets/css/twitter-bootstrap/bootstrap.css" rel="stylesheet">
						<link href="assets/css/social.css" rel="stylesheet">
						<link href="assets/css/social.plugins.css" rel="stylesheet">
						<link href="assets/css/social.examples.css" rel="stylesheet">
						<link href="assets/css/font-awesome.css" rel="stylesheet">
						<link href="assets/css/twitter-bootstrap/bootstrap-responsive.css" rel="stylesheet">
						<link href="assets/css/docs.css" rel="stylesheet"-->
						
						<style>

						#external-events{float:left;padding:0 10px;border:1px solid #ccc;background:#eee;text-align:left;}
						#external-events h4{font-size:16px;margin-top:0;padding-top:1em;}
						.external-event{margin:10px 0;padding:2px 4px;color:#ffffff;text-shadow:0 -1px 0 rgba(0,0,0,0.25);
						background-color:#4e6599;border-color:#2c467e #2c467e #182745;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
						*background-color:#2c467e;filter:progid:DXImageTransform.Microsoft.gradient(enabled= false);font-size:.85em;
						cursor:pointer;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}#external-events p{margin:1.5em 0;font-size:11px;color:#666;}
						#external-events p input{margin:0;vertical-align:middle;}

						.span6 {position:relative;left:26%;margin-top:-28%;}
						.portlet.box.calendar	{width:151%;}

						</style>
						<script>
							ie = false;
						</script> 
						<style>
						.wraper #main{margin-top:40px;}
						</style>				
					
					<?php
						break;
					case 'EVE':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						<style>
						.right-side {
							float:right;
						}
						.names{
							width:15%;
						}
						.big-box{
							width:95%;
						}
						.small-box{
							width:95%;
						}
						</style>
						
					<?php
						break;
					case 'PRO':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" type="text/css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/chosen-bootstrap/chosen/chosen.css" rel="stylesheet" type="text/css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/profile.css" rel="stylesheet" type="text/css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					
					
					
					<?php
						break;
					case 'ALL':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />						
					<?php
						break;
					case 'VAL':
					?>	
					
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					
					
					
					
					<?php
						break;
					case 'VDE':
					?>
					
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
						<style>
						.right-side {
							float:right;
						}
						.names{
							width:28%;
						}
						.big-box{
							width:180%;
						}
						</style>
					
					
					<?php
						break;
					case 'ADC':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					case 'OPT':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
 					break;
					case 'INSE':
					?>
					
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					<?php
 						break;
						case 'CON':
					?>
						<!-- BEGIN GLOBAL MANDATORY STYLES -->
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
						<link href="<?php echo HTTP_SERVER; ?>assets/css/pages/search.css" rel="stylesheet" type="text/css"/>
						
						<!-- BEGIN PAGE LEVEL STYLES -->
						<link rel="stylesheet" type="text/css" href="<?php echo HTTP_SERVER; ?>assets/plugins/select2/select2_metro.css" />
						<link rel="stylesheet" href="<?php echo HTTP_SERVER; ?>assets/plugins/data-tables/DT_bootstrap.css" />
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />	
					<?php
						break;
					default:				
					?>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
						<!-- END GLOBAL MANDATORY STYLES -->
						<!-- BEGIN PAGE LEVEL STYLES --> 
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
						<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
						<!-- END PAGE LEVEL STYLES -->
						<link rel="shortcut icon" href="favicon.ico" />
					
					<?php
					break;
				}
			}
			else
				{
			?>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
				<!-- END GLOBAL MANDATORY STYLES -->
				<!-- BEGIN PAGE LEVEL STYLES --> 
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
				<link href="<?php echo HTTP_SERVER; ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
				<!-- END PAGE LEVEL STYLES -->	
				<link rel="shortcut icon" href="favicon.ico" />	
		<?php
				}
		}		
	?>