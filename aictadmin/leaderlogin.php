<?php 
include 'includes/conn.php';
if(isset($_SESSION['05069'])){
header('Location:admin-home.php');
}                                  
 if(isset($_POST['username'],$_POST['password'])){
     $name=mysqli_real_escape_string($con,$_POST['username']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
if($name&&$pass){
    $cust=mysqli_query($con,"SELECT * FROM registered_users  WHERE address='$name' AND password='".md5($pass)."' AND position='deptleader' AND  status='active'");
$rows=mysqli_num_rows($cust);
if($rows>0){
$row=mysqli_fetch_array($cust);
$cust_id=$row['user_id'];
$username=$row['username'];
$_SESSION['aictleader']=$cust_id;
$getleader=mysqli_query($con,"SELECT * FROM deptleaders WHERE username='$username'  AND status='active'");
$row1=mysqli_fetch_array($getleader);
$dept_id=$row1['dept_id'];
$_SESSION['aictdept']=$dept_id;
header("location:leaderhome.php");
}else{
header("location:leaderlogin2.php");
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
        <title>Aict Leader</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>


    </head>
    <body>

        <div class="text-center logo-alt-box">
            <a href="" class="logo"><img src="assets/images/pic3.jpg"></a>
           
        </div>

        <div class="wrapper-page">

        	<div class="m-t-30 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Leader Sign In</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-10" action="" method="POST">

						<div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="required" placeholder="Address" name="username">
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

</html>