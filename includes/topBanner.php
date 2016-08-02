<?php
$setting = showSetting($conn);
if(isset($setting) && !empty($setting))
{
	$settop = $setting[0]['retail_sales'];
	//echo $set;
}

?>

<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="<?php echo HTTP_SERVER.'index.php?url=DSH';?>">
                <img src="assets/img/logo.png" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="assets/img/menu-toggler.png" alt="" />
            </a>
            <!--	<a style="margin-left:45%" href="add_events.php" class="btn blue"><i class="icon-plus"></i> New Events</a>			-->
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!--li>
                    <a href="<?php// echo HTTP_SERVER.'index.php?url=ENQ';?>" class="btn blue top"><i class="icon-question-sign"></i> Enquiry Form
					</a>
                </li-->
				<?php if (isset($settop) && $settop == 'Enable') {?>
				<li>
                    <a href="<?php echo HTTP_SERVER.'index.php?url=RSE';?>" class="btn blue top">
                        <i class="icon-plus-sign"></i> Retail/Sales
                    </a>
                </li>
				<?php } ?>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li>
                    <a href="<?php echo HTTP_SERVER.'index.php?url=EVE';?>" class="btn blue top">
                        <i class="icon-plus-sign"></i> New Order
                    </a>
                </li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!--li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>You have 12 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">New release v1.2</span>
                                <span class="percent">30%</span>
                                </span>
                                <span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">Application deployment</span>
                                <span class="percent">65%</span>
                                </span>
                                <span class="progress progress-danger progress-striped active">
								<span style="width: 65%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">Mobile app release</span>
                                <span class="percent">98%</span>
                                </span>
                                <span class="progress progress-success">
								<span style="width: 98%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">Database migration</span>
                                <span class="percent">10%</span>
                                </span>
                                <span class="progress progress-warning progress-striped">
								<span style="width: 10%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">Web server upgrade</span>
                                <span class="percent">58%</span>
                                </span>
                                <span class="progress progress-info">
								<span style="width: 58%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="task">
								<span class="desc">Mobile development</span>
                                <span class="percent">85%</span>
                                </span>
                                <span class="progress progress-success">
								<span style="width: 85%;" class="bar"></span>
                                </span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li-->
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="assets/img/avatar1_small.jpg" />
                        <span class="username"><?php echo $_SESSION['F_Name']." ".$_SESSION['L_Name']; ?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo HTTP_SERVER.'index.php?url=PRO';?>"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="<?php echo HTTP_SERVER.'index.php?url=CAL';?>"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li class="divider"></li>
                        <!--li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li-->
                        <li><a href="<?php echo HTTP_SERVER.'index.php?url=LOG';?>"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>