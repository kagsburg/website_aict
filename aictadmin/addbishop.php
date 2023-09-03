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

		<title>Add Bishop- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Bishop</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Bishop</h4>
                                                                             <?php
            if (isset($_POST['submit'])){
          
$image_name1=$_FILES['image1']['name'];
$image_size1=$_FILES['image1']['size'];
$image_temp1=$_FILES['image1']['tmp_name'];
$allowed_ext1=array('jpg','jpeg','png','gif','PNG','JPG','JPEG','');
$image_ext=explode('.',$image_name1);
$image_ext1=end($image_ext);
$name1=mysqli_real_escape_string($con,trim($_POST['fullname1']));
$diocese1=mysqli_real_escape_string($con,trim($_POST['diocese1']));
$dob1=mysqli_real_escape_string($con,trim($_POST['dob1']));
$bio1=$_POST['bio1'];
$actret=$_POST['actret'];
 $wife1= mysqli_real_escape_string($con,trim($_POST['wife1']));
 $password= '';//mysqli_real_escape_string($con,trim($_POST['password']));
 $repeat= '';//mysqli_real_escape_string($con,trim($_POST['repeat']));
 $username= '';//mysqli_real_escape_string($con,trim($_POST['username']));
$status1='active';
$rank='1';
// bishop rank - 1
$errors=array();
$check=  mysqli_query($con,"SELECT * FROM registered_users WHERE username='$username'");
if (in_array($image_ext1,$allowed_ext1)===false){
$errors[]='File type not allowed';
}
// if($password!=$repeat){
// $errors[]='Passwords Dont Match';
// }
// if(mysqli_num_rows($check)>0){
//     $errors[]='Username already exists.';
// }
if($image_size1>10097152){
$errors[]='Maximum size is 10Mb';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="alert alert-danger">'.$error.'</div>';
}
}
else{
      $position='bishop';
  mysqli_query($con,"INSERT INTO bishops(fullname,dob,diocese,startdate,wife,poster_id,bio,ext,actret,status)  VALUES('$name1','$dob1','$diocese1','$year1','$wife1','0','$bio1','$image_ext1','$actret','$status1')") or die(mysqli_error($con));
//   get last inserted id
$last_id = mysqli_insert_id($con);
$image_name1=md5(mysqli_insert_id($con));
  $address='';//$username.'@aict.org';
//   $adduser=  mysqli_query($con,"INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES('$name1','$position','null','null','$dob1','$position','$diocese1','$username','$address','".  md5($password)."','$image_ext1','$status1')") or die(mysqli_error($con));
$image_file1=$image_name1.'.'.$image_ext1;
move_uploaded_file($image_temp1,'../leaders/bishops/'.$image_file1);
// add bishop year and diocese to bishopdiocese table
$addbishop=  mysqli_query($con,"INSERT INTO bishopdioceses(bishop_id,diocese,startdate) VALUES('$last_id','$diocese1','$year1')") or die(mysqli_error($con));
                             // create_thumb('../article_photos/',$image_file,'../article_photos/thumbs/');
//        mysql_query("INSERT INTO  VALUES(NULL,'$album_id','$image_name','$image_ext')") or die(mysql_error());
           echo '<div class="alert alert-success" style="text-align:center">New Bishop Profile Added</div>';  
            }}
                       
    ?>               
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                                        <div class="form-group">
                                            <label for="userName">FullName*</label>
                                            <input type="text" name="fullname1"  placeholder="Enter full names" class="form-control" required="required">
                                        </div>
 
                                        <div class="form-group">
                                            <label for="photo">Profile Photo*</label>
                                            <input type="file" name="image1"  class="form-control" accept="image/*"  required="required">
                                        </div>
                                           <div class="form-group">
				<label  for="name1">Diocese</label>
				
                                <select class="form-control select2" name="diocese1">
                                                            <option value="">Select ..</option>
                                                            <?php
                                      
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                       while ($row3=mysqli_fetch_array($dioceses)){
                                     $diocese_id=$row3['diocese_id'];
                                     $diocese=$row3['diocese'];
            ?>
                                                            <option value="<?php echo $diocese_id; ?>"> <?php echo $diocese; ?></option>
                                 <?php } ?>
                                                        </select>	
                                    <div id='form_diocese1_errorloc' class='text-danger'></div>
</div>

 <div class="form-group">
				<label  for="name1">Select Status ?</label>
				
                                <select class="form-control select2" name="actret">
                                                            <option value="" selected="selected">Select ..</option>
                                                            <option value="active">Active</option>
                                                            <option value="retired">Retired</option>
                                                            <option value="passed away">Passed Away</option>
                                                            </select>
                        </div>
 <div class="control-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
	  <input type="text" class="form-control"  name='dob1'  placeholder="enter date of birth"> 
				 
				</div>
			  </div>
     <div class="form-group">
				<label class="control-label" for="name1">Married to</label>
				<div class="controls">
	<input type="text" class="form-control"  name="wife1"  placeholder="enter your wife/husband's name">
				 
				</div>
			  </div>
   
           <div class="form-group">
				<label class="control-label" for="name1">Year when Diocese was joined</label>
				<div class="controls">
                <select   class="form-control" name='year1'>
                              <option value="" selected="selected">Year</option>
                              <?php
                              $startyear=(date('Y',time()));
                              $endyear=$startyear-80;
                                for($x=$startyear;$x>=$endyear;$x--){
                              ?>
                              <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
	 <!-- <input type="text" class="form-control"     placeholder="enter year when diocese was joined" > -->
				 
				</div>
			  </div>
                                           <!-- <div class="form-group">
				<label class="control-label" for="name1">Address</label>
				<div class="controls">
	 <div class="input-group">
             <input class="form-control" name="username"  placeholder="eg example" type="text" required="required">
                    <span class="input-group-addon bg-custom" style="font-weight:bold">@aict.org</span>
						</div>
				 
				</div>
			  </div>
                                         <div class="form-group">
				<label class="control-label" for="name1">Password</label>
				<div class="controls">
                                    <input type="password" class="form-control"  name='password'   placeholder="password" required="required">
				     <div id='form_password_errorloc' class='text-danger'></div>
				</div>
			  </div>
                                           <div class="form-group">
				<label class="control-label" for="name1">Repeat Password</label>
				<div class="controls">
                                    <input type="password" class="form-control"  name='repeat'   placeholder="password" required="required">
				     <div id='form_repeat_errorloc' class='text-danger'></div>
				</div>
			  </div> -->
      <div class="form-group">
         <label  for="name1">Biography</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="bio1"></textarea>
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