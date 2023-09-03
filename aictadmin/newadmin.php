<?php
include 'includes/conn.php';
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:index.php');
   }?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Admin- Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
       <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">
<?php include 'includes/header.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
				<div class="container">
					  <div class="row">
                            <div class="col-sm-12">
                               
                                <h4 class="page-title">Add Admin</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-10">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Add Admin</h4>
      <?php
 if(isset($_POST['submit'])){
     $fullname=  mysqli_real_escape_string($con,trim($_POST['fullname']));
$username=  mysqli_real_escape_string($con,trim($_POST['username']));
$password=  mysqli_real_escape_string($con,trim($_POST['password']));
$email=  mysqli_real_escape_string($con,trim($_POST['email']));
     if((empty($fullname))||(empty($username))||(empty($password))||(empty($email))) {
         echo '<div class="alert alert-danger">Some fields are empty</div>';
    }
 else {
  
         mysqli_query($con,"INSERT INTO users(fullnames,username,password,email,level,activate) values('$fullname','$username','".md5($password)."','$email',0,'Inactive')") or die(mysqli_error($con)); 
            echo '<div class="alert alert-success">Registration successful, you will shortly be verified</div>';
      	      
}
     }
  
?>          
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                     <div class="form-group">
				<label class="control-label" for="name1">Full Names</label>
				<div class="controls">
                                    <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="enter fullname" required>
</div>
			  </div>
			   <div class="form-group">
				<label class="control-label" for="name1">User Name</label>
				<div class="controls">
                                    <input type="text" class="form-control" id="username"  name="username" placeholder="enter username" required>
				 
				</div>
			  </div>
          <div class="form-group">
				<label class="control-label" for="name1">Password</label>
				<div class="controls">
                                    <input type="password" class="form-control" id="password"  name="password" placeholder="enter password" required>
				  <div id='form_password_errorloc' class='text-danger'></div>
				</div>
			  </div>
      <div class="form-group">
				<label class="control-label" for="name1">Repeat Password</label>
				<div class="controls">
                                    <input type="password" class="form-control" id="repeat"  placeholder="re-enter password" required>
				  <div id='form_repeat_errorloc' class='text-danger'></div>
				</div>
			  </div>
           <div class="form-group">
				<label class="control-label" for="name1">Email</label>
				<div class="controls">
				  <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
				 
				</div>
			  </div> 
                                    
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                Submit
                                            </button>
                                          
                                        </div>

                                    </form>
                      
                                </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

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
 <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <!-- Validation js (Parsleyjs) -->
        <!--<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>-->

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script src="../js/gen_validatorv4.js"></script>
        <script type="text/javascript">
           
			$(document).ready(function() {
//				$('form').parsley();
                                 $(".select2").select2();

              
			});
                               var frmvalidator  = new Validator("form");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
              frmvalidator.addValidation("diocese1","req","*Select Diocese to proceed");
              frmvalidator.addValidation("password","minlength=6","*password  should atleast be 6 characters");
 frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

    
		</script>



	</body>

</html>