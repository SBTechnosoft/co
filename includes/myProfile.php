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
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN STYLE CUSTOMIZER -->

                <!-- END BEGIN STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
					User Profile <small>user profile sample</small>
				</h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.php">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">My Profile</a>
						<?php echo $_SESSION['USER_ID']; ?>
                    </li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid profile">
            <div class="span12">
                <!--BEGIN TABS-->
                <div class="tabbable tabbable-custom tabbable-full-width">
                    <h5>	Profile Info  </h5>
                    <hr />
                    <div class="tab-pane profile-classic row-fluid">
                        <div class="span2"><img src="assets/img/profile/profile-img.png" alt="" />
                            <input type="file" class="profile-edit" />
                        </div>
                        <ul class="unstyled span10"  id="showProfile">
						
                            <!--li><span>User Name:</span> JDuser</li>
                            <li><span>First Name:</span> John</li>
                            <li><span>Last Name:</span> Doe</li>
                            <li><span>Counrty:</span> Spain</li>
                            <li><span>Birthday:</span> 18 Jan 1982</li>
                            <li><span>Occupation:</span> Web Developer</li>
                            <li><span>Email:</span> <a href="#">john@mywebsite.com</a></li>
                            <li><span>Interests:</span> Design, Web etc.</li>
                            <li><span>Website Url:</span> <a href="#">http://www.mywebsite.com</a></li>
                            <li><span>Mobile Number:</span> +1 646 580 DEMO (6284)</li>
                            <li><span>About:</span> 
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
								Food truck quinoa nesciunt laborum eiusmod pariatur cliche reprehenderit, 
								enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, 
								non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
							</li-->
                        </ul>
                    </div>
                    <!--tab_1_2-->
                </div>
                <!--END TABS-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->