<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
   $id=$_GET['id'];
$poster=$_GET['poster'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Article- Aic Admin</title>
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
                               
                                <h4 class="page-title">Edit Article</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Edit Article</h4>
                 <?php
           if ((isset($_POST['subject'],$_POST['details']))&&(!empty($_POST['details']))&&(!empty($_POST['subject']))){
          $subject=mysqli_real_escape_string($con,trim($_POST['subject']));
       $details=mysqli_real_escape_string($con,trim($_POST['details']));
         $category=mysqli_real_escape_string($con,trim($_POST['category']));
  mysqli_query($con,"UPDATE news SET article_title='$subject',article_description='$details',article_cat='$category' WHERE article_id='$id'") or die(mysqli_error($con));
  echo '<div class="alert alert-success">Article successfully Edited</div>';
                }
                 $articles=  mysqli_query($con,"SELECT * FROM news   WHERE article_id='$id'");  
     $row=mysqli_fetch_array($articles);
$subject1=$row['article_title'];
$description1=$row['article_description'];
$category1=$row['article_cat'];
           
    ?>   
                                    <form action=""  method="post" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                            <label for="userName">Post Title*</label>
                                            <input type="text" name="subject" parsley-trigger="change" required     placeholder="Enter post title" class="form-control" id="title" value="<?php echo $subject1; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Article Category</label>
                                            <select class="form-control" name="category" id="category" parsley-trigger="change" required>
                                                                          <option value="" selected="selected">Select category..</option>
                                                                          <?php  
                                                                             $getcategory=  mysqli_query($con,"SELECT * FROM category WHERE status='1'");
                                                                                while ($row = mysqli_fetch_array($getcategory)) {    
                                                                                    $category_id=$row['category_id'];
                                                                                    $category=$row['category'];
                                                                                    
                                                                          ?>
                                                                          <option value="<?php echo $category_id ?>" <?php if ($category1 == $category_id){ echo "selected"; } ?>><?php echo $category ; ?></option>
                                                                          <?php } ?>
                                            </select>

                                        </div>

      
      <div class="form-group">
         <label  for="name1">Description</label>
				 
         <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="details" parsley-trigger="change" required >
             <?php echo $description1; ?>
         </textarea>
</div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"name="submit">
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