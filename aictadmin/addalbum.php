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

		<title>Add Album- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Album</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Album</h4>
                                     <?php
            if (isset($_POST['album'],$_FILES['image'],$_POST['description'])){
          
$image_name=$_FILES['image']['name'];
$image_size=$_FILES['image']['size'];
$image_temp=$_FILES['image']['tmp_name'];
$allowed_ext=array('jpg','jpeg','png','gif','PNG','GIF','JPG','JPEG','');
$ext=explode('.',$image_name);
$image_ext=end($ext);
$album=mysqli_real_escape_string($con,trim($_POST['album']));
//$image=$_POST['image'];
$published='published';
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
echo '<div class="error" style="float:right; margin-right:20%;font-weight:normal;font-size:1em; padding:2px">'.$error.'</div><br/>';
}
}
else{
  mysqli_query($con,"INSERT INTO albums(album_name,description,creator,published)  VALUES('$album','$description','$fullname','$published')") or die(mysql_error());
$album_id=  mysqli_insert_id($con);
$image_name=md5(mysqli_insert_id($con));
$image_file=$image_name.'.'.$image_ext;
move_uploaded_file($image_temp,'../albums/'.$image_file) or die(mysql_error());
                             // create_thumb('../article_photos/',$image_file,'../article_photos/thumbs/');
        mysqli_query($con,"INSERT INTO covers(album_id,image_name,ext) VALUES('$album_id','$image_name','$image_ext')") or die(mysql_error());
           echo '<div class="alert alert-success" style="text-align:center;">Album  has been posted successfully</div>';  
            }}
                       
    ?>             
           
                                    <form action="" data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="userName">Album Name*</label>
                                            <input type="text" name="album" parsley-trigger="change" required     placeholder="Enter album Name" class="form-control" id="title">
                                        </div>
 
                                        <div class="form-group">
                                            <label for="photo">Cover  Photo*</label>
                                            <input type="file" name="image" parsley-trigger="change" required   class="form-control" accept="image/*" >
                                        </div>

      <div class="form-group">
         <label  for="name1">Description</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="description" parsley-trigger="change" required ></textarea>
</div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
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