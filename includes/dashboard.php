<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						
						<!-- END BEGIN STYLE CUSTOMIZER -->    
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Welcome to Creative Office <small>Always Connected</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
							<li class="pull-right no-text-shadow">
								<span style="margin-right:20px;"> <?php echo date("d-M-Y"); ?></span>
							</li>
							<!--li class="pull-right no-text-shadow">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="icon-calendar"></i>
									<span></span>
									<i class="icon-angle-down"></i>
								</div>
							</li-->
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-globe"></i>
								</div>
								<div class="details">
									<div class="number" id="newevents">
										
									</div>
									<div class="desc">                           
										Enquiry
									</div>
								</div>
								<a class="more" href="<?php echo HTTP_SERVER.'index.php?url=ENR';?>">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<!--div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-shopping-cart"></i>
								</div>
								<div class="details">
									<div class="number">40</div>
									<div class="desc">Deals & Offers</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div-->
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-comments"></i>
								</div>
								<div class="details">
									<div class="number" id="upcevents"></div>
									<div class="desc">Upcoming Orders</div>
								</div>
								<a class="more" href="<?php echo HTTP_SERVER.'index.php?url=UPC';?>">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<!--div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat yellow">
								<div class="visual">
									<i class="icon-bullseye"></i>
								</div>
								<div class="details">
									<div class="number">Target</div>
									<div class="desc">Your File</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div-->
					</div>
					<!-- END DASHBOARD STATS -->
					
					
		
					<div class="row-fluid">
						<div class="span6">
							<div class="portlet box purple">
								<div class="portlet-title">
									<div class="caption"><i class="icon-calendar"></i> Company Accounting</div>
									<div class="actions">
										<a href="javascript:;" class="btn yellow easy-pie-chart-reload"><i class="icon-repeat"></i> Reload</a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row-fluid">
										<div class="span4">
											<div class="easy-pie-chart">
												<div id="incper">
													<!--div class="number transactions"  data-percent="55"><span>+55</span>%</div-->
												</div>
												<a class="title" href="#">Income <i class="m-icon-swapright"></i></a>
											</div>
										</div>
										<div class="margin-bottom-10 visible-phone"></div>
										<div class="span4">
											<div class="easy-pie-chart">
												<div id="expper">
												
												</div>
												
												<!--div class="number visits"  data-percent="85"><span>-85</span>%</div-->
												<a class="title" href="#">Expence <i class="m-icon-swapright"></i></a>
											</div>
										</div>
										<div class="margin-bottom-10 visible-phone"></div>
										<div class="span4">
											<div class="easy-pie-chart">
											
												<div id="profper">
												
												</div>
												
												<!--div class="number bounce"  data-percent="46"><span>+46</span>%</div-->
												<a class="title" href="#">Profit <i class="m-icon-swapright"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span6">			
							
							<!--div class="portlet box blue">
								<div class="portlet-title">
									<div class="caption"><i class="icon-calendar"></i>Server Stats</div>
									<div class="tools">
										<a href="#" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
										<a href="#" class="reload"></a>
										<a href="#" class="remove"></a>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row-fluid">
										<div class="span4">
											<div class="sparkline-chart">
												<div class="number" id="sparkline_bar"></div>
												<a class="title" href="#">Network <i class="m-icon-swapright"></i></a>
											</div>
										</div>
										<div class="margin-bottom-10 visible-phone"></div>
										<div class="span4">
											<div class="sparkline-chart">
												<div class="number" id="sparkline_bar2"></div>
												<a class="title" href="#">CPU Load <i class="m-icon-swapright"></i></a>
											</div>
										</div>
										<div class="margin-bottom-10 visible-phone"></div>
										<div class="span4">
											<div class="sparkline-chart">
												<div class="number" id="sparkline_line"></div>
												<a class="title" href="#">Load Rate <i class="m-icon-swapright"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div-->
						</div>
					</div>
					
					
        <!-- BEGIN PAGE CONTENT-->
		<div class="" style="margin-left:0%;width:49%;">	
        <div class="tabbable tabbable-custom tabbable-full-width">
            <div class="tab-content">
                <div id="tab_1_2" class="tab-pane active">
					
                    <div class="portlet box grey">
                       <div class="portlet-title">
								<div class="caption"><i class="icon-user"></i>Daily Buzz</div>
								
							</div>
						
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
                                <thead>
                                    <tr>
                                        <th></th>
										<th>Receive</th>
                                        <th>Due</th>
                                        <th>Total </th> 
										
                                    </tr>
                                </thead>
                                <tbody id="showDailyDetail">
								
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--end tab-pane-->
                
                <!-- End tab pane -->
            </div>
        </div>
		</div>
					<!--div class="row-fluid">
						<div id="divifm">
							<iframe id="ifmCalendar" src="https://www.google.com/calendar/embed?height=550&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=suafag3ku0re5rnvjl4beriljc@group.calendar.google.com&amp;color=%238C500B&amp;ctz=Asia%2FCalcutta"
								style="border-width: 0" width="950" height="520" frameborder="0" scrolling="no">
							</iframe>
						</div>
					</div-->
					<!--div class="row-fluid">
						<div class="span6">
							
							<div class="portlet box grey">
							<div class="portlet-title">
								<div class="caption"><i class="icon-user"></i>To Do List </div>
								<div class="actions">
									<a href="#" class="btn blue"><i class="icon-pencil"></i> Add</a>
									<div class="btn-group">
										<a class="btn green" href="#" data-toggle="dropdown">
										<i class="icon-cogs"></i> Options
										<i class="icon-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
											<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
										
											<li class="divider"></li>
											<li><a href="#"><i class="i"></i> Add New Task </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover" id="sample_2">
									<thead>
										<tr>
											<th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" /></th>
											
											<th class="hidden-480">Task </th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:shuxer@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-success">PENDING</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:looper90@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-warning">COMPLETED</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:userwow@yahoo.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-success">PENDING</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:userwow@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-inverse">APPROVED</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:userwow@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-success">Approved</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:userwow@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-success">Approved</span></td>
										</tr>
										<tr class="odd gradeX">
											<td><input type="checkbox" class="checkboxes" value="1" /></td>
											
											<td class="hidden-480"><a href="mailto:userwow@gmail.com">Lorem ipsum dolor sit amet, consectetuer</a></td>
											<td><span class="label label-success">Approved</span></td>
										</tr>
										
										
									</tbody>
								</table>
							</div>
						</div>
							
						</div>
						<div class="span6">
							
							<div class="portlet paddingless">
								<div class="portlet-title line">
									<div class="caption"><i class="icon-bell"></i>Feeds</div>
									<div class="tools">
										<a href="#" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
										<a href="#" class="reload"></a>
										<a href="#" class="remove"></a>
									</div>
								</div>
								<div class="portlet-body">
									
									<div class="tabbable tabbable-custom">
										<ul class="nav nav-tabs">
											<li class=""><a href="#tab_1_1" data-toggle="tab">Company News </a></li>
											<li><a href="#tab_1_2" data-toggle="tab">Activities</a></li>
											<li><a href="#tab_1_3" data-toggle="tab">New Members</a></li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_1">
												<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible="0">
													<ul class="feeds">
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-success">                        
																			<i class="icon-bell"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			You have 4 pending tasks.
																			<span class="label label-important label-mini">
																			Take action 
																			<i class="icon-share-alt"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	Just now
																</div>
															</div>
														</li>
														
														
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">                        
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label">                       
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">                        
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label">                       
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">                        
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label">                       
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	21 hours
																</div>
															</div>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-info">                        
																			<i class="icon-bullhorn"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			New order received. Please take care of it.                 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	22 hours
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="tab-pane" id="tab_1_2">
												<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
													<ul class="feeds">
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New order received 
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		10 mins
																	</div>
																</div>
															</a>
														</li>
														<li>
															<div class="col1">
																<div class="cont">
																	<div class="cont-col1">
																		<div class="label label-important">                      
																			<i class="icon-bolt"></i>
																		</div>
																	</div>
																	<div class="cont-col2">
																		<div class="desc">
																			Order #24DOP4 has been rejected.    
																			<span class="label label-important label-mini">Take action <i class="icon-share-alt"></i></span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col2">
																<div class="date">
																	24 mins
																</div>
															</div>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
														<li>
															<a href="#">
																<div class="col1">
																	<div class="cont">
																		<div class="cont-col1">
																			<div class="label label-success">                        
																				<i class="icon-bell"></i>
																			</div>
																		</div>
																		<div class="cont-col2">
																			<div class="desc">
																				New user registered
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col2">
																	<div class="date">
																		Just now
																	</div>
																</div>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="tab-pane" id="tab_1_3">
												<div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Robert Nilson</a> 
																	<span class="label label-success">Approved</span>
																</div>
																<div>29 Jan 2013 10:45AM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 10:45AM</div>
															</div>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Eric Kim</a> 
																	<span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 12:45PM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-important">In progress</span>
																</div>
																<div>19 Jan 2013 11:55PM</div>
															</div>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Eric Kim</a> 
																	<span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 12:45PM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-important">In progress</span>
																</div>
																<div>19 Jan 2013 11:55PM</div>
															</div>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div><a href="#">Eric Kim</a> <span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 12:45PM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-important">In progress</span>
																</div>
																<div>19 Jan 2013 11:55PM</div>
															</div>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div><a href="#">Eric Kim</a> <span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 12:45PM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-important">In progress</span>
																</div>
																<div>19 Jan 2013 11:55PM</div>
															</div>
														</div>
													</div>
													<div class="row-fluid">
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Eric Kim</a> 
																	<span class="label label-info">Pending</span>
																</div>
																<div>19 Jan 2013 12:45PM</div>
															</div>
														</div>
														<div class="span6 user-info">
															<img alt="" src="assets/img/avatar.png" />
															<div class="details">
																<div>
																	<a href="#">Lisa Miller</a> 
																	<span class="label label-important">In progress</span>
																</div>
																<div>19 Jan 2013 11:55PM</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
					</div-->
					
					
					<div class="clearfix"></div>
					<!--div class="row-fluid">
						<div class="span6">
							
							<div class="portlet box blue calendar">
								<div class="portlet-title">
									<div class="caption"><i class="icon-calendar"></i>Calendar</div>
								</div>
								<div class="portlet-body light-grey">
									<div id="calendar">
									</div>
								</div>
							</div>
							
						</div>
						<div class="span6">
							
							<div class="portlet">
								<div class="portlet-title line">
									<div class="caption"><i class="icon-comments"></i>Messages </div>
									<div class="tools">
										<a href="#" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
										<a href="#" class="reload"></a>
										<a href="#" class="remove"></a>
									</div>
								</div>
								<div class="portlet-body" id="chats">
									<div class="scroller" data-height="435px" data-always-visible="1" data-rail-visible1="1">
										<ul class="chats">
											<li class="in">
												<img class="avatar" alt="" src="assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Neeraj Tiwari</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="assets/img/avatar2.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Shruti Sharma</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Neeraj Tiwari</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Rahul Singh</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Rahul Singh</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Neeraj Tiwari</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="in">
												<img class="avatar" alt="" src="assets/img/avatar3.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Rahul Singh</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
													sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
												</div>
											</li>
											<li class="out">
												<img class="avatar" alt="" src="assets/img/avatar1.jpg" />
												<div class="message">
													<span class="arrow"></span>
													<a href="#" class="name">Neeraj Tiwari</a>
													<span class="datetime">at Jul 25, 2012 11:09</span>
													<span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.
													</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="chat-form">
										<div class="input-cont">   
											<input class="m-wrap" type="text" placeholder="Type a message here..." />
										</div>
										<div class="btn-cont"> 
											<span class="arrow"></span>
											<a href="#" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div-->
				</div>
			</div>
			<!-- END PAGE CONTAINER-->    
		</div>
		<!-- END PAGE -->
