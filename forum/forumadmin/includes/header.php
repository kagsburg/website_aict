  <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index"><h1>Admin</h1></a>
        </div>
<?php
$getprofile=  mysqli_query($con,"SELECT * FROM forumadmins WHERE user_id='".$_SESSION['forum_admin']."'");
$user=  mysqli_fetch_array($getprofile);
$adminname=$user['fullnames'];
$adminemail=$user['email'];
?>
      
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                   
                    <div class="media-body">
                        <h4><a href="#"><?php echo $adminname; ?></a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
<!--                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  --><li><a href="changepassword"><i class="fa fa-cog"></i> <span>Change Password</span></a></li>
                  <li><a href="logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav" style="margin-top: 89px;">
                  <li><a href="index"><i class="fa fa-home"></i> <span>Home</span></a></li>     
                     <li><a href="categories"><i class="fa fa-list"></i> <span>Forum Categories</span></a></li>
                   <li><a href="addtopic"><i class="fa fa-edit"></i> <span>Add Topic</span></a></li>
                   <li><a href="topics"><i class="fa fa-comment"></i> <span>View Topics</span></a></li>
                
                
                  <?php
                 if($_SESSION['forumlevel']==1){
                  ?>
                 <li class="menu-list"><a href="#"><i class="fa fa-user"></i> <span>Admins</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="addadmin"> Add Admin</a></li>
                        <li><a href="admins">View Admins</a></li>
                    </ul>
                </li>
                 <?php }?>
                      
                <li><a href="../" target="_blank"><i class="fa fa-reply"></i> <span>Return to Site</span></a></li>
                <li><a href="logout"><i class="fa fa-sign-in"></i> <span>Logout</span></a></li>
           
          

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
  <div class="main-content" >
        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

           

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
              
                    </li>
                
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                     <?php echo $adminname; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
<!--                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>-->
                       <li><a href="changepassword"><i class="fa fa-cog"></i> <span>Change Password</span></a></li>
                  <li><a href="logout"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>