<?php
include 'includes/conn.php';
   if(!isset($_SESSION['aictleader'])){
header('Location:leaderlogin.php');
   }
   include 'includes/thumb.func.php';
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Department Post- Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
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
                               
                                <h4 class="page-title">Add Department Post</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Post</h4>
                 <?php
                 include 'includes/thumb.func.php';
            if (isset($_POST['submit'])){
$image_name=$_FILES['image']['name'];
$image_size=$_FILES['image']['size'];
$image_temp=$_FILES['image']['tmp_name'];
$allowed_ext=array('jpg','jpeg','png','gif','');
$ext=explode('.',$image_name);
$image_ext=  strtolower(end($ext));
$article=mysqli_real_escape_string($con,trim($_POST['article']));
$status='1';
$description=mysqli_real_escape_string($con,trim($_POST['description']));
$errors=array();
if (in_array($image_ext,$allowed_ext)===false){
$errors[]='File type not allowed';
}
if($image_size>10097152){
$errors[]='Maximum size is 10Mb';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="alert alert-danger">'.$error.'</div><br/>';
}
}
else{
  mysqli_query($con,"INSERT INTO deptposts(post_title,description,ext,dept_id,timestamp,status)  VALUES('$article','$description','$image_ext','".$_SESSION['aictdept']."',UNIX_TIMESTAMP(),'$status')") or die(mysqli_error($con));
$article_id=  mysqli_insert_id($con);
$image_name=md5($article_id);
$image_file=$image_name.'.'.$image_ext;
move_uploaded_file($image_temp,'../deptposts/'.$image_file) or die(mysqli_error($con));
create_thumb('../deptposts/',$image_file,'../deptposts/thumbs/');

 
          echo '<div class="alert alert-success" style="text-align:center">Article has been posted successfully.</div>';      
            }}
                    
                    
    ?>             
                                    <form action=""  method="post" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                            <label for="userName">Post Title*</label>
                                            <input type="text" name="article" parsley-trigger="change" required     placeholder="Enter post title" class="form-control" id="title">
                                        </div>
 
                                        <div class="form-group">
                                            <label for="photo">Article Photo*</label>
                                            <input type="file" name="image" parsley-trigger="change" required   class="form-control" accept="image/*" >
                                        </div>
                                       

      <div class="form-group">
         <label  for="name1">Description</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="description" parsley-trigger="change" required ></textarea>
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

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
               $('#cstatus').on('change', function() {
               var getselect=$(this).val();
  if(getselect==='2'){
         $('.diocese').show();
         }else{
         $('.diocese').hide();
  }
});
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>



	</body>

</html>