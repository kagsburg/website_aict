<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Employee- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Employee</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Employee</h4>
                                                                                  <?php
                                               if(isset($_POST['submit'])){
                                                $name=  mysqli_real_escape_string($con,  trim($_POST['name']));
//                                                $occupation=  mysqli_real_escape_string($con,  trim($_POST['occupation']));
                                                $gender=  mysqli_real_escape_string($con,  trim($_POST['gender']));
                                                   $dob=  mysqli_real_escape_string($con,  trim($_POST['dob']));
                                                 
                                                $username=  mysqli_real_escape_string($con,  trim($_POST['username']));
                                                $phone=  mysqli_real_escape_string($con,  trim($_POST['phone']));
                                                $password=  mysqli_real_escape_string($con,  trim($_POST['password']));
                                                $repeat=  mysqli_real_escape_string($con,  trim($_POST['repeat']));
                                                 $designation=  mysqli_real_escape_string($con,$_POST['position']);
                                                    $department=$_POST['department'];
                                                          $status='approved';
                                                $no='no';
                                                  $position='employee';
                                                  if((empty($name))||(empty($gender))||(empty($dob))||(empty($department))||(empty($designation))||(empty($username))||(empty($password))||(empty($repeat))){
                                         $errors[]='All Fields Should be Filled';
                                                    }
                                                $check=  mysqli_query($con,"SELECT * FROM  registered_users WHERE username='$username'");
                                                    if(mysqli_num_rows($check)>0){
                                                        $errors[]='Username already exists';
                                                    }
                                                    if(!empty($errors)){
                                                        foreach ($errors as $error) {
                                                            echo '<div class="alert alert-danger">'.$error.'</div>';
                                                        }
                                                    }  else {
                                                        $pass=md5($password);
                                                                                    $address=$username.'@aict.org';
                                                                                    $church=0;
                          $stmt=$con->prepare("INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)") or die(mysqli_error($con));
                                     $stmt->bind_param('ssssssssssss',$name,$position,$phone,$gender,$dob,$designation,$church,$username,$address,$pass,$no,$status) or die(mysqli_error($con));
                                     $stmt->execute();
                                     $stmt2=$con->prepare("INSERT INTO employees(fullnames,dob,position,phone,gender,dept_id,username,status) VALUES(?,?,?,?,?,?,?,?)") or die(mysqli_error($con));
                                     $stmt2->bind_param('ssssssss',$name,$dob,$designation,$phone,$gender,$department,$username,$status) or die(mysqli_error($con));
                                     $stmt2->execute();
                                     echo '<div class="alert alert-success">Data successfully Added.Allow us to review it before verification</div>';
                                                    }
                                                }
                                            ?>
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                        <div class="form-group">
				<label class="control-label" for="name1">Full Names</label>
				
				  <input type="text" class="form-control" id="fullname" name="name"  placeholder="enter fullname" required="required">
</div>
			
    
<div class="form-group">
          
				<label class="control-label" for="name1">Departments</label>
				
				<select   name = "department"  class="form-control">
                                                          <option value="">Select Department..</option>
                                                         <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
$dept=$row['department'];
$status=$row['status'];
             $dept_id=$row['department_id'];
                                            ?>
                                                        <option value="<?php echo $dept_id; ?>"><?php echo $dept;?></option>
                                                <?php }?>
                                                    </select>
			
			  </div>
    <div class="form-group">
				<label class="control-label" for="name1">Position</label>
				<div class="controls">
				  <input type="text" class="form-control" id="fullname" name="position"  placeholder="enter Position" required="required">
</div>
			  </div>
      <div class="form-group">
				<label class="control-label" for="name1">Phone</label>
				
				  <input type="text" class="form-control" id="fullname"  name="phone"  placeholder="enter Phone" required="required">
</div>
			
     <div class="form-group">
				<label class="control-label" for="name1">Gender</label>
				
				  <select class="form-control" name="gender">
                                        <option value="" selected="selected">select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                     <div id='form_gender_errorloc' class='text-error'></div>

			  </div>
                 <div class="form-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
				  <input type="text" class="form-control" id="dob"  name="dob" placeholder="enter date of birth"> 				 
				</div>
			  </div>
    
   
             <div class="form-group">
				<label class="control-label" for="name1">Username</label>
				<div class="input-group">
				
		<input class="form-control" name="username" id="username" placeholder="eg example" type="text" required="required">
							<span class="input-group-addon bg-custom">@aict.org</span>
						
				</div>
			  </div>
<div class="form-group">
				<label class="control-label" for="name1">Password</label>
				<div class="controls">
                                    <input type="password" class="form-control" name="password"   placeholder="enter password" required="required">
                                          <div id='form_password_errorloc' class='text-error'></div>
				</div>
			  </div>
    
<div class="form-group">
				<label class="control-label" for="name1">Repeat Password</label>
				
                                    <input type="password" class="form-control" name="repeat"   placeholder="enter password" required="required">	
                                          <div id='form_repeat_errorloc' class='text-error'></div>
				
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
              frmvalidator.addValidation("gender","req","*Select Gender  to proceed");
         
    
		</script>



	</body>

</html>