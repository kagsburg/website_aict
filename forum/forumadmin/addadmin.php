<?php
include 'includes/conn.php';
       if((!isset($_SESSION['forum_admin']))||($_SESSION['forumlevel']!=1)){
header('Location:login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="icon" type="image/png"    href="http://aictanzania.org/assets/images/favicon.PNG" />

  <title>Add Admin</title>

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

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
               Add Admin
                    </header>
                    <div class="panel-body">
                        <?php
                   if(isset($_POST['fullname'],$_POST['username'],$_POST['password'],$_POST['repeat'],$_POST['email'],$_POST['role'])){
                       $fullname=  mysqli_real_escape_string($con,  trim($_POST['fullname']));
                       $username=  mysqli_real_escape_string($con,  trim($_POST['username']));
                       $password=  mysqli_real_escape_string($con,  trim($_POST['password']));
                       $repeat=  mysqli_real_escape_string($con,  trim($_POST['repeat']));
                       $email=  mysqli_real_escape_string($con,  trim($_POST['email']));
                       $role=  mysqli_real_escape_string($con,  trim($_POST['role']));
                       if((empty($fullname))||(empty($username))||(empty($password))||(empty($repeat))||(empty($email))||(empty($role))){
                           $errors[]='All Fields are Required';
                       }
                       $checkname=  mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
                       $checkemail=  mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
                       if(mysqli_num_rows($checkname)>0){
                           $errors[]='Username already Exists';
                       }
                            if(mysqli_num_rows($checkemail)>0){
                           $errors[]='Email Already Exists';
                       }
                       if($repeat!=$password){
                           $errors[]='Passwords Dont match';
                       }
                       if(!empty($errors)){
                           foreach ($errors as $error) {
                               echo '<div class="alert alert-danger">'.$error.'</div>';
                           }
                       }  else {
                           mysqli_query($con, "INSERT INTO forumadmins(fullnames,username,password,email,level,status) VALUES('$fullname','$username','".  md5($password)."','$email','$role','1')") or die(mysqli_error($con));
                           echo '<div class="alert alert-success">Admin Successfully Added</div>';
                           }
                   }
                                    
                        ?>
                   <div class="form">
                                <form class="form-horizontal" id="signupForm" method="POST" action="">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">Fullnames</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="fullname" type="text" />
                                        </div>
                                    </div>
                                                                   <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Username</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="username" name="username" type="text" />
                                        </div>
                                    </div>
                                     
                                     <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Select Role</label>
                                        <div class="col-lg-10">
                                            <select  class="form-control " name="role">
                                                <option value="" selected="">Role</option>
                                                <option value="1">Admin</option>
                                                <option value="0">Content Creator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="password" type="password" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="confirm_password" name="repeat" type="password" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Email</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="email" name="email" type="email" />
                                        </div>
                                    </div>
                               
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit">Add Admin</button>
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
