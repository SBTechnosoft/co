<?php
$data=showPerm($conn);
$arr1 = json_decode($data[0]['permission']);
//print_r($arr1);
?>



<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse  ">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <!--div class="input-box">
							<!--a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..." />
							<input type="button" class="submit" value=" " />
						</div-->
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <!--?php echo $_GET['url'];?-->
        <!--li class="start <!--?php isset($_GET['url']) && !empty($_GET['url']) && strtoupper($_GET['url']) == 'DSH' ? 'active': '';?>"
				<li class="start <!--?php 1==1 ? 'active' :  ''  ; ?>
					<!--?php //isset($_GET['url'] == 'DSH') ? $_GET['url'] : 'not' ;  ?>" >-->
        <li class="start
					<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'DSH') 
						{
							echo " active ";
						}
						else
						{
							echo " ";
						}
					?>">
            <a href="<?php echo HTTP_SERVER.'index.php?url=DSH';?>">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>
		
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("ENR", $arr1))
			{					
		?>
        <li class="
					<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'ENR') 
						{
							echo " active ";
						}
						else
						{
							echo " ";
						}
					?>">
            <a href="<?php echo HTTP_SERVER.'index.php?url=ENR';?>">
                <i class="icon-question-sign"></i>
                <span class="title">Enquiry</span>
                <span class="arrow "></span>
            </a>

        </li>
	<?php } ?>
		<!--li class="
					<?php 
						// if(isset($_GET['url']) && strtoupper($_GET['url']) == 'VER') 
						// {
							// echo " active ";
						// }
						// else
						// {
							// echo " ";
						// }
					?>">
            <a href="<?php //echo HTTP_SERVER.'index.php?url=VER';?>">
                <i class="icon-question-sign"></i>
                <span class="title">Vertical Alignment</span>
                <span class="arrow "></span>
            </a>

        </li-->
		
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("EVD", $arr1))
			{					
		?>
        <li class="
					<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'EVD') 
						{
							echo " active ";
						}
						else
						{
							echo " ";
						}
					?>">
            <a href="<?php echo HTTP_SERVER.'index.php?url=EVD';?>">
                <i class="fa fa-calendar-plus-o"></i>
                <span class="title">Order Details</span>
                <span class="arrow "></span>
            </a>

        </li>
		<?php } ?>

        <?php 
			if(isset($arr1) && !empty($arr1) && in_array("Event_Status", $arr1))
			{					
		?>
		
		<li class=" 
					<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'NEW') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'UPC')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'COM')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'EALL')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class="icon-calendar"></i>
                <span class="title">Order Status</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu" id="cntstat">
				<!--li>
                    <a href="<?php echo HTTP_SERVER.'index.php?url=EALL';?>">
                        <i class="icon-group"></i> All 
						<span class="badge">6</span>
					</a>
						
                </li>
			
                <li>
                    <a href="<?php echo HTTP_SERVER.'index.php?url=NEW';?>">
                        <i class="icon-file"></i> New 
						<span class="badge">6</span>
					</a>
						
                </li>

                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=UPC';?>">
                        <i class="icon-time"></i> Upcoming
						<span class="badge">6</span>
                    </a>
                </li>

                <li class="click">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=COM';?>">
                        <i class="icon-check"></i> Completed
						<span class="badge">6</span>
                    </a>
                </li-->

            </ul>
        </li>
		<?php } ?>
		
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("Equipment", $arr1))
			{					
		?>
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'EQA') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'CTG')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'ACS')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'ALL')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class=" icon-cogs"></i>
                <span class="title">Equipments</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
				<?php 
					if(isset($arr1) && !empty($arr1) && in_array("EQA", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=EQA';?>">
                        <i class="icon-sitemap"></i> All </a>
                </li>
					<?php } ?>
				<?php 
					if(isset($arr1) && !empty($arr1) && in_array("CTG", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=CTG';?>">
                        <i class="icon-reorder"></i> Category </a>
                </li>
					<?php } ?>
				<?php 
					if(isset($arr1) && !empty($arr1) && in_array("ACS", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=ACS';?>">
                        <i class="icon-briefcase"></i> Accessories
                    </a>
                </li>
					<?php } ?>
            </ul>
        </li>
			<?php } ?>
			
			
			
			<?php 
			if(isset($arr1) && !empty($arr1) && in_array("Category", $arr1))
			{					
		?>	
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'OCTG') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'OSTG')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class=" icon-male"></i>
                <span class="title">Category</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
				<?php 
					if(isset($arr1) && !empty($arr1) && in_array("OCTG", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=OCTG';?>">
                        <i class="icon-group"></i> New Category </a>
                </li>
					<?php } ?>
					
					<?php 
					if(isset($arr1) && !empty($arr1) && in_array("OSTG", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=OSTG';?>">
                        <i class="icon-group"></i> Sub Category </a>
                </li>
					<?php } ?>
					
                

            </ul>
        </li>
			<?php } ?>
			
			
			
			
			
			
			
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("Vendors", $arr1))
			{					
		?>	
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'VAL') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'VDE')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class=" icon-male"></i>
                <span class="title">Vendors</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
				<?php 
					if(isset($arr1) && !empty($arr1) && in_array("VAL", $arr1))
					{					
				?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=VAL';?>">
                        <i class="icon-group"></i> All </a>
                </li>
					<?php } ?>
					
                <!--li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=VDE';?>">
                        <i class="fa fa-list-alt"></i> Details
                    </a>
                </li-->

            </ul>
        </li>
			<?php } ?>
			
		<?php 
			if(isset($arr1) && !empty($arr1) && in_array("Accounting", $arr1))
			{					
		?>	
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'PID') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'UPD')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'VPD')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'VUD')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'INV')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class="icon-money"></i>
                <span class="title">Accounting</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">

			<?php 
				if(isset($arr1) && !empty($arr1) && in_array("PID", $arr1))
				{					
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=PID';?>">
                        <i class="icon-check-sign"></i> Paid </a>
                </li>
				
			<?php
				}
			 
				if(isset($arr1) && !empty($arr1) && in_array("UPD", $arr1))
				{					
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=UPD';?>">
                        <i class="icon-remove-sign"></i> Unpaid </a>
                </li>
			<?php
				}
			 
				if(isset($arr1) && !empty($arr1) && in_array("VPD", $arr1))
				{					
			?>
			
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=VPD';?>">
                        <i class="icon-check-sign"></i> Vendor Paid </a>
                </li>
				
			<?php
				}
			 
				if(isset($arr1) && !empty($arr1) && in_array("VUD", $arr1))
				{					
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=VUD';?>">
                        <i class="icon-remove-sign"></i> Vendor Unpaid</a>
                </li>
				
				<li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=INV';?>">
                        <i class="icon-file"></i> Invoice</a>
                </li>
			<?php 
			
				}
			?>
            </ul>
        </li>
			<?php } ?>
		
		
		<?php			 
			if(isset($arr1) && !empty($arr1) && in_array("Staff", $arr1))
			{					
		?>
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'STA') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'STF')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class=" icon-user"></i>
                <span class="title">Staff</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
			<?php
			 
				if(isset($arr1) && !empty($arr1) && in_array("STA", $arr1))
				{					
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=STA';?>">
                        <i class="icon-group"></i> All
                    </a>
                </li>
			<?php 
				} 
				
				if(isset($arr1) && !empty($arr1) && in_array("STF", $arr1))
				{
				
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=STF';?>">
                        <i class="icon-plus-sign"></i> Add/Edit 
					</a>
                </li>
				<?php } ?>
            </ul>
        </li>
			<?php } ?>
			
		<?php			
			if(isset($arr1) && !empty($arr1) && in_array("Settings", $arr1))
			{		
		?>	
        <li class="
				 	<?php 
						if(isset($_GET['url']) && strtoupper($_GET['url']) == 'HOL') 
						{
							echo " active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'CMP')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'ADC')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'OPT')
						{
							echo "active ";
						}
						elseif(isset($_GET['url']) && strtoupper($_GET['url']) == 'EML')
						{
							echo "active ";
						}
						else
						{
							echo" ";
						}
						?>">
            <a href="javascript:;">
                <i class=" icon-cogs"></i>
                <span class="title">Settings</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
			<?php				
				if(isset($arr1) && !empty($arr1) && in_array("HOL", $arr1))
				{				
			?>			
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=HOL';?>">
                        <i class="fa fa-calendar-check-o"></i> Holidays </a>
                </li>
			<?php 
				}				
				if(isset($arr1) && !empty($arr1) && in_array("CMP", $arr1))
				{				
			?>
                <li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=CMP';?>">
                        <i class="fa fa-info-circle"></i> Company Information
					</a>
                </li>
			<?php 
				}				
				if(isset($arr1) && !empty($arr1) && in_array("ADC", $arr1))
				{				
			?>
				<li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=ADC';?>">
                        <i class="icon-plus-sign"></i> Add Company 
					</a>
                </li>
			<?php 
				}				
				if(isset($arr1) && !empty($arr1) && in_array("OPT", $arr1))
				{				
			?>
				<li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=OPT';?>">
                        <i class="icon-cog"></i> Option 
					</a>
                </li>
			<?php 
				}				
				if(isset($arr1) && !empty($arr1) && in_array("EML", $arr1))
				{				
			?>
				<li class="">
                    <a href="<?php echo HTTP_SERVER.'index.php?url=EML';?>">
                        <i class="icon-cog"></i> Emails 
					</a>
                </li>
				<?php } ?>
            </ul>
        </li>
			<?php } ?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->