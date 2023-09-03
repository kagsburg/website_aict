    <?php 

$name=  mysqli_query($con,"SELECT * FROM users WHERE user_id='".$_SESSION['05069']."' ");  
  $row=  mysqli_fetch_array($name);
  $fullname=$row['fullnames'];
?>
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index" class="logo">
                            <i class="zmdi zmdi-toys icon-c-logo"></i><span>AICT <span>ADMIN</span></span>
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
                                        <li><a href="logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                                <a href="index" class="waves-effect"><i class="fa fa-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
  <?php 
                            if($_SESSION['aictlevel']==1){
                            ?>
                            <li class="has_sub">
                                <a href="unapprovedcontent" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span>Awaiting Approval</span> </a>
                                                           </li>
                                                           <?php }?>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-edit"></i><span> Articles </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="articles">Articles</a></li>
                                    <li><a href="addarticle">Add Article</a></li>
                                  
                                </ul>
                            </li>
       <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bell"></i><span> Events</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="events">View Events</a></li>
                                    <li><a href="addevent">Add Event</a></li>
                                  
                                </ul>
                            </li>
                                 <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-folder-open"></i><span> Gallery</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="albums">View Albums</a></li>
                                    <li><a href="addalbum">Add Album</a></li>
                                  
                                </ul>
                            </li>
                                 <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-film"></i><span>Media</span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="videos">Videos</a></li>
                                    <li><a href="audios">Audios</a></li>                                  
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-comment"></i> <span>Constitution Forum</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="addtopic">Add Topic</a></li>
                                	<li><a href="topics">View Topics</a></li>
                                </ul>
                            </li>
                              <li class="has_sub">
                                <a href="bibleverses" class="waves-effect"><i class="fa fa-book"></i><span>Bible Verses</span> </a></li>
                                   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building-o"></i><span>Dioceses</span> </a>
                                     <ul class="list-unstyled">
                                	<li><a href="dioceses">View Dioceses</a></li>
                                	<li><a href="dioceseposts">Diocese Posts</a></li>
                                	<li><a href="adddiocesepost">Add Diocese Post</a></li> 
                                       <li><a href="addstaff">Add Diocese Staff</a></li>                                 
                                </ul>
                                   </li>
                                     <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-building-o"></i> <span>Departments</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="departments">View Departments</a></li>
                                	<li><a href="alldeptposts">Department Posts</a></li>
                                	<li><a href="adddeptpost">Add Department Post</a></li>
                                                                 </ul>
                                     </li>
                                     <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i> <span>Leaders</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="bishops">View Bishops</a></li>
                                	<li><a href="pastors">View Pastors</a></li>
                                	<li><a href="deptleaders">Department Leaders</a></li>
                                  <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Secretaries</span> </a>
                                        <ul style="">
                                            <li><a href="secretarycategories"><span>Secretary Position</span></a></li>
                                            <li><a href="addsecretary"><span>Add secretary</span></a></li>
                                            <li><a href="secretaries"><span>View secretaries</span></a></li>                                          
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                              <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span>Employees</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="approvedemployees">Approved Employees</a></li>
                                	<li><a href="unapprovedemployees">Unapproved Employees</a></li>
                                	<li><a href="addemployee">Add  Employee</a></li>
                                                                </ul>
                            </li>
                            
                              <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-group"></i> <span>Registered users</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="approved">Approved</a></li>
                                	<li><a href="unapproved">Waiting approval</a></li>
                                </ul>
                            </li>
                            <?php 
                            if($_SESSION['aictlevel']==1){
                            ?>
                              <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user"></i> <span>Admins</span> </a>
                                <ul class="list-unstyled">
                                	<li><a href="admins">View Admins</a></li>
                                	<li><a href="newadmin">Add  Admin</a></li>
                                </ul>
                            </li>
                            <?php }?>
                                <!-- <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-female"></i> <span>Children</span> </a>
                                <ul class="list-unstyled">
                                        <li><a href="addchild">Add Child</a></li>
                                        <li><a href="children">Children</a></li>                                 
                                </ul>
                            </li> -->
                                <li class="has_sub">
                                    <a href="../" class="waves-effect" target="_blank"><i class="fa fa-reply"></i> <span> Back to site</span> </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>