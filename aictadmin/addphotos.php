<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login');
   }
   $album_id=$_GET['album_id'];
   $albname=$_GET['name'];
      if(isset($_FILES['upload'])==true){
                
                $files=$_FILES['upload'];
                $caption='no caption';
                $published='published';
               for ($x=0;$x<count($files['name']);$x++){
             $image_size=$files['size'][$x];
                    $name=$files['name'][$x];
                    $allowed_ext=array('jpg','jpeg','png','gif','');
                    $image_ext=strtolower(end(explode('.',$name)));
                    $tmp_name=$files['tmp_name'][$x];
                   $errors=array();
if (in_array($image_ext,$allowed_ext)===false){
$errors[]='File type not allowed';
}
if($image_size>10097152){
$errors[]='Maximum size is 10Mb';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="error" style="float:right; margin-right:20%;font-weight:normal;font-size:1.2em; padding:3px;">'.$error.'</div><br/>';
}
}else{              
                   
                     mysqli_query($con,"INSERT INTO photos(album_id,caption,ext,published) VALUES('$album_id','$caption','$image_ext','$published')") or die(mysqli_error($con));
                    
                       $image_id=mysqli_insert_id($con);
                       $photo_name=md5(mysqli_insert_id($con));
                                     $image_file=$photo_name.'.'.$image_ext;
                                     move_uploaded_file($tmp_name,'../albums/photos/'.$image_file);
                                     
                    mysqli_query($con,"DELETE FROM photos WHERE ext=' '");
                    header("Location:photos.php?album_id=".$album_id);
                            }}
                          }
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Photos- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Photos</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Photos  to <?php echo $albname; ?> Album</h4>        
             <div class="well-small" id="validate_area" style="color: red;text-align: center">
            
        </div>
                                    <form action=""  method="post" enctype="multipart/form-data" onsubmit='return validate();'>                                    
                                        <div class="form-group">
                                            <label for="photo">Add Photo 1</label>
                                            <input type="file" name="upload[]"  class="form-control" accept="image/*" >
                                        </div>
  <div class="form-group">
                                            <label for="photo">Add Photo 2</label>
                                            <input type="file" name="upload[]"  class="form-control" accept="image/*" >
                                        </div>
                                          <div class="form-group">
                                            <label for="photo">Add Photo 3</label>
                                            <input type="file" name="upload[]"  class="form-control" accept="image/*" >
                                        </div>
                                          <div class="form-group">
                                            <label for="photo">Add Photo 4</label>
                                            <input type="file" name="upload[]"  class="form-control" accept="image/*" >
                                        </div>
                                          <div class="form-group">
                                            <label for="photo">Add Photo 5</label>
                                            <input type="file" name="upload[]"  class="form-control" accept="image/*" >
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
         function validate()
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var image1 = $("#image1").val();
                    var image2 = $("#image2").val();
	var image3 = $("#image3").val();
                var image4 = $("#image4").val();
               var image5 = $("#image5").val();
	
	if((image1 == "")&&(image2 == "")&&(image3 == "")&&(image4 == "")&&(image5 == ""))
	{
		$("#validate_area").hide().fadeToggle('slow').html('Please upload Atleast one photo');
		$("#image1").focus();
                                        $('#validate_area').removeClass('validate_area');
                return false;
	}
	        else{
         
            return true;
        }
    }
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>



	</body>

</html>