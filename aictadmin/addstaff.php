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

		<title>Add Staff- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Staff Member</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Staff</h4>
                                                                                  <?php
                                               if(isset($_POST['submit'])){
                                                $name=  mysqli_real_escape_string($con, trim($_POST['name']));
                                                $gender=  mysqli_real_escape_string($con,trim($_POST['gender']));                                                                                                 
                                                $phone=  mysqli_real_escape_string($con,trim($_POST['phone']));
                                                  $email=  mysqli_real_escape_string($con,trim($_POST['email']));                                                    
                                                 $designation=  mysqli_real_escape_string($con,$_POST['position']);
                                                 $diocese=$_POST['diocese'];
                                                  $status='1';
                                              $image_name2=$_FILES['image2']['name'];
$image_size2=$_FILES['image2']['size'];
$image_temp2=$_FILES['image2']['tmp_name'];
$allowed_ext2=array('jpg','jpeg','png','gif','JPG','PNG','JPEG');
$image_ext=explode('.',$image_name2);
$image_ext2=end($image_ext);
if(!empty($image_name2)){
                          if (in_array($image_ext2,$allowed_ext2)===false){
$errors2[]='File type not allowed';
}
if($image_size2>10097152){
$errors2[]='Maximum size is 10Mb';
}}
                        if((empty($name))||(empty($gender))||(empty($diocese))||(empty($designation))){
                                         $errors[]='All Fields Should be Filled';
                                                    }
                                                
                                                    if(!empty($errors)){
                                                        foreach ($errors as $error) {
                                                            echo '<div class="alert alert-danger">'.$error.'</div>';
                                                        }
                                                    }  else {
                                                        
                                                        $level=1;
                                     $stmt2=$con->prepare("INSERT INTO diocesestaff(fullnames,ext,position,email,phone,gender,diocese_id,level,status) VALUES(?,?,?,?,?,?,?,?,?)") or die(mysqli_error($con));
                                     $stmt2->bind_param('sssssssss',$name,$image_ext2,$designation,$email,$phone,$gender,$diocese,$level,$status) or die(mysqli_error($con));
                                     $stmt2->execute();
  $last_id=  mysqli_insert_id($con);
     $imagename2=md5($last_id);
     if(!empty($image_name2)){
$image_file2=$imagename2.'.'.$image_ext2;
include 'includes/thumb.func_1.php';
move_uploaded_file($image_temp2,'../staff/'.$image_file2) or die(mysqli_error($con));
 create_thumb('../staff/',$image_file2,'../staff/thumbs/');
 }
                                     echo '<div class="alert alert-success">Staff successfully Added.</div>';
                                                    }
                                                }
                                            ?>
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                        <div class="form-group">
				<label class="control-label" for="name1">Full Names</label>
				
				  <input type="text" class="form-control" id="fullname" name="name"  placeholder="enter fullname" required="required">
</div>
			
    
<div class="form-group">
          
				<label class="control-label" for="name1">Diocose</label>
				
				<select   name = "diocese"  class="form-control">
                                                          <option value="">Select Diocese..</option>
                                                         <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                                                while ($row=mysqli_fetch_array($depts)){
$diocese=$row['diocese'];
$status=$row['status'];
             $diocese_id=$row['diocese_id'];
                                            ?>
                                                        <option value="<?php echo $diocese_id; ?>"><?php echo $diocese;?></option>
                                                <?php }?>
                                                    </select>
			
			  </div>
 <div class="form-group">
				<label class="control-label" for="name1">Profile picture</label>
				
				  <input type="file" class="form-control"  name="image2">
</div>
    <div class="form-group">
				<label class="control-label" for="name1">Position</label>
				<div class="controls">
				  <input type="text" class="form-control" id="fullname" name="position"  placeholder="enter Position" required="required">
</div>
<div class="form-group">
				<label class="control-label" for="name1">Email</label>
				<div class="controls">
				  <input type="email" class="form-control" id="email" name="email"  placeholder="enter Email">
</div>
			  </div>
      <div class="form-group">
				<label class="control-label" for="name1">Phone</label>
				
				  <input type="text" class="form-control" id="fullname"  name="phone"  placeholder="enter Phone">
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