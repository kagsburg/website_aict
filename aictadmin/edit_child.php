<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
    $id=$_GET['id'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Child- Aic Admin</title>
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
                               
                                <h4 class="page-title">Edit Child</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Edit Child</h4>
    <?php
                               if(isset($_POST['submit'])){

$name1=mysqli_real_escape_string($con,trim($_POST['childname']));
$dob1=mysqli_real_escape_string($con,trim($_POST['dob']));
$center1=mysqli_real_escape_string($con,trim($_POST['center']));
$gender1=mysqli_real_escape_string($con,trim($_POST['gender']));
$story1=$_POST['story'];

  mysqli_query($con,"UPDATE children  SET child_name='$name1',gender='$gender1',center='$center1',story='$story1',dob='$dob1' WHERE child_id='$id' ") or die(mysql_error());

                echo '<div class="alert alert-success" style="text-align:center">Child data has been Edited successfully</div>';      
       
                    
}
                      $children=mysqli_query($con,"SELECT * FROM children WHERE  child_id='$id'");
                                 $row=mysqli_fetch_array($children);
                                            $child_id=$row['child_id'];
                                            $name=$row['child_name'];
                                            $dob=$row['dob'];
                                            $gender=$row['gender'];
                                            $ext=$row['ext'];
                                            $story=$row['story'];
                                            $center=$row['center'];      
                            ?>
                   
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                        <div class="form-group">
                                            <label for="userName">Edit Child Name*</label>
                                            <input type="text"  name="childname" value="<?php echo $name;?>"  placeholder="enter child name" class="form-control" required="required">
                                        </div>
                                            <div class="form-group">
                                            <label for="userName">Edit Care Center*</label>
                                            <input type="text" name="center"  placeholder="enter care center"  value="<?php echo $center;?>" class="form-control" required="required">
                                        </div>
 
                                     
                                           <div class="form-group">
				<label  for="name1">Gender</label>
				
                                <select class="form-control select2" name="gender">
                                                      
                                                          <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                                        </select>	
                                    <div id='form_gender_errorloc' class='text-danger'></div>
</div>
 <div class="control-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
	  <input type="text" class="form-control"  name='dob'  placeholder="enter date of birth" value="<?php echo $dob;?>"> 
				 
				</div>
			  </div>
        
      <div class="form-group">
         <label  for="name1">Child Story(optional)</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="story"><?php echo $story;?></textarea>
</div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                               Edit Child
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