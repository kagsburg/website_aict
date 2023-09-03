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

		<title>Add Child- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Child</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Child</h4>
                                                                             <?php
                                                                             include 'includes/thumb.func_1.php';
            if (isset($_POST['submit'])){
          $image_name=$_FILES['picture']['name'];
$image_size=$_FILES['picture']['size'];
$image_temp=$_FILES['picture']['tmp_name'];
$allowed_ext=array('jpg','jpeg','png','gif','PNG','JPG','JPEG','');
$ext=explode('.',$image_name);
$image_ext=end($ext);
$name=mysqli_real_escape_string($con,trim($_POST['childname']));
$dob=mysqli_real_escape_string($con,trim($_POST['dob']));
$center=mysqli_real_escape_string($con,trim($_POST['center']));
$gender=mysqli_real_escape_string($con,trim($_POST['gender']));
$story=$_POST['story'];
$published='published';
$story=$_POST['story'];
$errors=array();
if (in_array($image_ext,$allowed_ext)===false){
$errors[]='File type not allowed';
}
if($image_size>10097152){
$errors[]='Maximum size is 10Mb';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="error" style="float:right; margin-right:20%;font-weight:normal;font-size:1em; padding:2px">'.$error.'</div><br/>';
}
}
else{
  mysqli_query($con,"INSERT INTO children(child_name,gender,center,story,dob,ext,poster,status)  VALUES('$name','$gender','$center','$story','$dob','$image_ext','".$_SESSION['05069']."','$published')") or die(mysql_error());
$article_id=  mysqli_insert_id($con);
$image_name=md5(mysqli_insert_id($con));
$image_file=$image_name.'.'.$image_ext;
move_uploaded_file($image_temp,'../children/'.$image_file) or die(mysql_error());
create_thumb('../children/',$image_file,'../children/thumbs/');
                echo '<div class="alert alert-success" style="text-align:center">Child has been added successfully</div>';      
            }
                    
}
   
    ?>               
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                        <div class="form-group">
                                            <label for="userName">Child Name*</label>
                                            <input type="text"  name="childname"  placeholder="enter child name" class="form-control" required="required">
                                        </div>
                                            <div class="form-group">
                                            <label for="userName">Care Center*</label>
                                            <input type="text" name="center"  placeholder="enter care center"  class="form-control" required="required">
                                        </div>
 
                                     
                                           <div class="form-group">
				<label  for="name1">Gender</label>
				
                                <select class="form-control select2" name="gender">
                                                      
                                                             <option value="" selected="selected">Select gender..</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                                        </select>	
                                    <div id='form_gender_errorloc' class='text-danger'></div>
</div>
 <div class="control-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
	  <input type="text" class="form-control"  name='dob'  placeholder="enter date of birth"> 
				 
				</div>
			  </div>
       <div class="form-group">
                                            <label for="photo">Profile Photo*</label>
                                            <div class="controls">
                                            <input type="file" name="picture"  class="form-control" accept="image/*"  required="required">
                                        </div>
                                        </div>
   
      <div class="form-group">
         <label  for="name1">Child Story(optional)</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="story"></textarea>
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