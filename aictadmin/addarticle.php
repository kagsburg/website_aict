<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<!-- Mirrored from coderthemes.com/flacto_1.1/layout_2_green/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2016 11:40:49 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Article- Aic Admin</title>
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
                               
                                <h4 class="page-title">Add Article</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Article</h4>
                 <?php
            if (isset($_POST['submit'])){
          
$image_name=$_FILES['image']['name'];
$image_size=$_FILES['image']['size'];
$image_temp=$_FILES['image']['tmp_name'];
$allowed_ext=array('jpg','jpeg','png','gif','');
$ext=explode('.',$image_name);
$image_ext=  strtolower(end($ext));
$article=mysqli_real_escape_string($con,trim($_POST['article']));
$category=$_POST['category'];
//$image=$_POST['image'];
$cstatus=$_POST['cstatus'];
$diocese=$_POST['diocese'];
$published='unpublished';
$headline=$_POST['headline'];
if(empty($headline)){
    $head='no';
    }
 else {
   $head='yes';   
}
if ($_FILES["pddf"]['size'] > 0){
    $targetDirectory = "../pdfs/"; // Specify the directory where you want to save the PDF files
    $targetFile = $targetDirectory . basename($_FILES["pddf"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    // Check if the file is a PDF
    if ($fileType != "pdf") {
        $errors[]= "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if the file already exists
    if (file_exists($targetFile)) {
        $errors[]= "Sorry, the file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size (you can adjust this value as needed)
    if ($_FILES["pddf"]["size"] > 5000000) { // 5 MB
        $errors[]= "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // If all checks are passed, try to upload the file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["pddf"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["pdf"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}else{
    $targetFile='';
}
$description=mysqli_real_escape_string($con,trim($_POST['description']));
$errors=array();
if (in_array($image_ext,$allowed_ext)===false){
$errors[]='File type not allowed';
}
if($image_size>10097152){
$errors[]='Maximum size is 10Mb';
}
if(($cstatus==2)&&(empty($diocese))){
    $errors[]='Select Diocese allowed to comment';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="error" style="float:right; margin-right:20%;font-weight:normal;font-size:1em; padding:2px">'.$error.'</div><br/>';
}
}
else{
  mysqli_query($con,"INSERT INTO news(article_title,article_description article_cat,pdf_file,headline,poster,cstatus,timestamp,published)  
  VALUES('$article','$description','$category','$pdf_file','$head','$fullname','$cstatus',UNIX_TIMESTAMP(),'$published')") or die(mysqli_error($con));
$article_id=  mysqli_insert_id($con);
$image_name=md5(mysqli_insert_id($con));
$image_file=$image_name.'.'.$image_ext;
move_uploaded_file($image_temp,'../newsphotos/'.$image_file) or die(mysqli_error($con));
//if(!empty($headline)){
//create_thumb('../newsphotos/',$image_file,'../newsphotos/thumbs/');
//}
        mysqli_query($con,"INSERT INTO news_photos(article_id,photo_name,ext) VALUES('$article_id','$image_name','$image_ext')") or die(mysqli_error($con));
        if($cstatus==2){
            mysqli_query($con, "INSERT INTO allowedregion(article_id,diocese_id) VALUES('$article_id','$diocese')");
        }
          echo '<div class="alert alert-success" style="text-align:center">Article has been posted successfully,it will shortly be verified</div>';      
            }}
                    
    ?>   
                                    <form action=""  method="post" enctype="multipart/form-data">
                                                                                    <div class="form-group">
                                            <label for="userName">Post Title*</label>
                                            <input type="text" name="article" parsley-trigger="change" required     placeholder="Enter post title" class="form-control" id="title">
                                        </div>
   <div class="alert alert-info"><i class="fa fa-warning"></i> NOTE:Photos of headlines will be displayed in the slider and must have dimensions 540x250 </div>
<div class="form-group">
                                            <div class="checkbox">
                                              <input type="checkbox" name="headline" value="yes">
                                                <label for="remember-1">  Is it a Headline?</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Article Photo*</label>
                                            <input type="file" name="image" parsley-trigger="change" required   class="form-control" accept="image/*" >
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Article PDF</label>
                                            <input type="file" name="pddf"    class="form-control" accept="pdf/*" >
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
                                                                          <option value="<?php echo $category_id ?>"><?php echo $category ; ?></option>
                                                                          <?php } ?>
                                            </select>

                                        </div>
                                           <div class="form-group">
				<label  for="name1">Comment Options</label>
				
                                    <select class="form-control" name="cstatus" id="cstatus" parsley-trigger="change" required>
                                                                          <option value="" selected="selected">Select option..</option>
                                                                          <option value="1">All people can comment</option>
                                                                          <option value="2">Only  people allowed can comment (diocese)</option>
                                                                          <option value="3">No comment allowed</option>
                                                                      </select>				
</div>
     <div class="form-group diocese" style="display:none">
         <label  for="name1">Select Diocese Allowed</label>
				
                                    <select class="form-control" name="diocese">
                                                                      <option value="" selected="selected">Select diocese.</option>
                                                                          <?php
                                                                          $getdiocese=  mysqli_query($con,"SELECT * FROM dioceses WHERE status='1'");
                                                                          while ($row = mysqli_fetch_array($getdiocese)) {    
                                                                              $diocese_id=$row['diocese_id'];
                                                                              $diocese=$row['diocese'];
                                                                              ?>
                                                                          <option value="<?php echo $diocese_id; ?>"><?php echo $diocese; ?></option>
                                                                          <?php } ?>
                                                                      </select>				
</div> 
      <div class="form-group">
         <label  for="name1">Description</label>
				 
                                        <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="description" parsley-trigger="change" required ></textarea>
</div>
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit"name="submit">
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