<?php
include 'includes/conn.php';
 if(isset($_POST['username'],$_POST['password'])){
$name= mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$sel_user = "select * from forumadmins where username='$name' and password='".md5($pass)."' and status='1' ";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0){
$row=mysqli_fetch_array($run_user);
$cust_id=$row['user_id'];
$level=$row['level'];
$_SESSION['forum_admin']=$cust_id;
$_SESSION['forumlevel']=$level;
header("Location:index.php");
}
else{
    header("Location:loginattempt");
}
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <link rel="icon"   type="image/png"    href="http://aictanzania.org/assets/images/favicon.PNG" />

    <title>Login</title>

 <link href="css/style.css?<?php echo time();?>" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">
 
    <form class="form-signin" action="" method="post">
        <div class="form-signin-heading text-center">
             <h1 class="sign-title">Forum Admin Login</h1>
        </div>
        <div class="login-wrap">
               <div class="alert alert-danger">Username or Password is  incorrect</div>
            <input type="text" class="form-control" placeholder="User ID" name="username" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password">

            <button class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
<!--
            <div class="registration">
                Not a member yet?
                <a class="" href="registration.html">
                    Signup
                </a>
            </div>-->
<!--            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>-->

        </div>

        <!-- Modal -->
<!--        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>
</html>
