 
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="pastorhome" class="logo">
                            <i class="zmdi zmdi-toys icon-c-logo"></i><span>AICT <span>Pastor</span></span>
                            <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                            
                                <li class="dropdown user-box">
                                    <a href="#" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                        <img src="assets/images/avatar.png" alt="user-img" class="img-circle user-img">
                                        <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                    </a>

                                    <ul class="dropdown-menu">
<!--                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>-->
                                        <li><a href="plogout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="pastorhome" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard <?php echo $_SESSION['aicwork']; ?> </span> </a>
                            </li>
       <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bell"></i><span>Followers</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="approvedfollowers">Approved Followers</a></li>
                                    <li><a href="unapprovedfollowers">Waiting Approval</a></li>
                                                                  </ul>
                            </li>        
                            <?php 
                            if($_SESSION['aicwork']=='general secretary'){
                            ?>
                                    <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i><span>Leaders</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="gbishops">Bishops</a></li>
                                    <li><a href="gpastors">Pastors</a></li>
                                    <li><a href="gleaders">Department Leaders</a></li>
                                                                  </ul>
                            </li>
                                <li class="has_sub">
                                <a href="gemployees" class="waves-effect"><i class="fa fa-user"></i> <span>Employees</span> </a>
                            </li>
                            <?php }
                                      if((isset($_SESSION['aicwork']))&&($_SESSION['aicwork']!='general secretary')){
                            ?>
                               <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i><span>Diocese Leaders</span> </a>
                                <ul class="list-unstyled">
                                        <li><a href="dpastors">Pastors</a></li>
                                    <li><a href="dleaders">Department Leaders</a></li>
                                                                  </ul>
                            </li>
                                <li class="has_sub">
                                <a href="demployees" class="waves-effect"><i class="fa fa-user"></i> <span>Diocese Employees</span> </a>
                            </li>
                                      <?php } ?>
                               <li class="has_sub">
                                   <a href="../" class="waves-effect" target="_blank"><i class="fa fa-reply"></i><span>Back to site</span> </a></li>
                                   <li class="has_sub">
                                <a href="plogout" class="waves-effect"><i class="fa fa-sign-out"></i><span>Logout</span> </a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>