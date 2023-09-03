<?php
include 'includes/conn.php';
       if(!isset($_SESSION['forum_admin'])){
header('Location:login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
   <link rel="icon"   type="image/png"    href="http://aictanzania.org/assets/images/favicon.PNG" />

  <title>Change Password</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
<section>
   <?php include 'includes/header.php'; ?>

        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-8">
                      <section class="panel">
                    <header class="panel-heading">
                       Change Password
                    </header>
                    <div class="panel-body">
                        <?php
                   if(isset($_POST['old'],$_POST['password'],$_POST['repeat'])){
                          $old=  mysqli_real_escape_string($con,  trim($_POST['old']));
                       $password=  mysqli_real_escape_string($con,  trim($_POST['password']));
                       $repeat=  mysqli_real_escape_string($con,  trim($_POST['repeat']));
                                            if((empty($old))||(empty($password))||(empty($repeat))){
                           $errors[]='All Fields are Required';
                       }
                      $checkpass=  mysqli_query($con,"SELECT * FROM users WHERE password='".  md5($old)."' AND user_id='".$_SESSION['forum_admin']."'");
                         if(mysqli_num_rows($checkpass)<1){
                           $errors[]='Old password incorrect';
                       }
                       if($repeat!=$password){
                           $errors[]='Passwords dont match';
                       }
                       if(!empty($errors)){
                           foreach ($errors as $error) {
                               echo '<div class="alert alert-danger">'.$error.'</div>';
                           }
                       }  else {
                           mysqli_query($con, "UPDATE  forumadmins SET password='".  md5($password)."' WHERE user_id='".$_SESSION['forum_admin']."'") or die(mysqli_error($con));
                           echo '<div class="alert alert-success">Password successfully Changes</div>';
                           }
                   }
                                    
                        ?>
                   <div class="form">
                                <form class="form-horizontal" id="signupForm" method="POST" action="">
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Current Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="old" name="old" type="password" required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">New Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="password" type="password"   required="required"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password" class="control-label col-lg-2">Repeat Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="confirm_password" name="repeat" type="password"  required="required"/>
                                        </div>
                                    </div>
                                                               
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Change</button>
                                                                                 </div>
                                    </div>
                                </form>
                            </div>

                    </div>
                </section>
           
            </div>

        </div>
    

        </div>
        <!-- page end-->
        </section>
        <!--body wrapper end-->

        <!--footer section start-->
      
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="js/validation-init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>
</body>
</html>
