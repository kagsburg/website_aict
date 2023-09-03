<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
     $id=$_GET['id'];
   $title=$_GET['title'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Video- Aic Admin</title>
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
                               
                                <h4 class="page-title">Edit Video</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Edit Video</h4>
                                   
     <?php
                   
    if(isset($_POST['name'],$_POST['url'])){
   $video1= mysqli_real_escape_string($con,trim($_POST['name']));
    $url1=  mysqli_real_escape_string($con,trim($_POST['url']));
        include 'getimage.php';
   $img1=youtube_thumbnail_url($url1);
          mysqli_query($con,"UPDATE  videos SET video_name='$video1',url='$url1',image='$img1' WHERE video_id=$id") or die(mysqli_error());
              
              
  echo '<div class="alert alert-success"><i class="icon-ok"></i> Video Edited successfully</div>';
                               }                            
                                    $videos=mysqli_query($con,"SELECT * FROM videos WHERE video_id='$id'");
                                     $row=mysqli_fetch_array($videos);
                                    $video_id=$row['video_id'];
                                    $url=$row['url'];
                                    $img=$row['image'];
                                    $name=$row['video_name'];
                                    ?>
           
                                    <form action="" data-parsley-validate novalidate method="post">
                                        <div class="form-group">
                                            <label for="userName">Video Name*</label>
                                            <input type="text" name="name" parsley-trigger="change" required  placeholder="Enter Video Name" value="<?php echo $name;?>" class="form-control" id="title">
                                        </div>
                                           <div class="form-group">
                                            <label for="userName">Video youtube Url*</label>
                                            <input type="text" name="url" parsley-trigger="change" required  placeholder="Enter Video Url" class="form-control" id="title" value="<?php echo $url;?>">
                                        </div>
 
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                               Edit
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