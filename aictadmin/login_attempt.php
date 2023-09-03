<?php 
include 'includes/conn.php';
if(isset($_SESSION['05069'])){
header('Location:index.php');
}                                         
   
if(isset($_POST['username'],$_POST['password'])){
     $name=mysqli_real_escape_string($con,$_POST['username']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
if($name&&$pass){
$cust=mysqli_query($con,"SELECT * FROM users WHERE username='$name' AND password='".md5($pass)."' AND activate='active'");
$rows=mysqli_num_rows($cust);
if($rows>0){
$row=mysqli_fetch_array($cust);
$cust_id=$row['user_id'];
$level=$row['level'];
$_SESSION['05069']=$cust_id;
$_SESSION['aictlevel']=$level;
header("location:index.php");
}else{
header("location:login_attempt.php");
}
}}
?>
<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

        <!-- App title -->
        <title>Aict Admin</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
  <style>
            body {
  background: none;
  font-family: 'Arimo', sans-serif;
  margin: 0;
  padding-bottom: 60px;
  overflow-x: hidden;
  color: #797979;
}
html {
  position: relative;
  min-height: 100%;
    background: url(assets/images/admincover.jpg);
    background-size: cover;
    background-position: bottom;
}
        </style>

    </head>
    <body>

        <div class="text-center logo-alt-box">
            <a href="" class="logo"><img src="assets/images/pic3.jpg"></a>
           
        </div>

        <div class="wrapper-page">

        	<div class="m-t-30 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="panel-body">
                    <div class="alert alert-danger">Username or Password is wrong</div>
                    <form class="form-horizontal m-t-10" action="" method="POST">

						<div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="required" placeholder="Username" name="username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="required" placeholder="Password" name="password">
                            </div>
                        </div>

                       

						<div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase" type="submit">Log In</button>
                            </div>
                        </div>



					</form>

                </div>
            </div>
          

        </div>
        <!-- end wrapper page -->




    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>

<!-- Mirrored from coderthemes.com/flacto_1.1/layout_2_green/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2016 11:40:49 GMT -->
</html>