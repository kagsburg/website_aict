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

		<title>Edit  Constitution Forum Topic- Aic Admin</title>
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
                               
                                <h4 class="page-title">Edit Forum Topic</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card-box table-responsive">
                                   
                              
                                                    <form action="" method="post" name="form">                                       
  <?php
    if(isset($_POST['topic'])){
      $topic=  mysqli_real_escape_string($con,trim($_POST['topic']));
       $type=$_POST['type'];
     if((empty($topic))||(empty($type))){
          echo '<div class="alert alert-danger">Field Required</div>';
      }  else {
          mysqli_query($con,"UPDATE topics SET topic='$topic',type='$type'  WHERE topic_id='$id'") or die(mysqli_error($con));    
          echo '<div class="alert alert-success">Topic successfully Edited</div>';
      }
  }
    $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE topic_id='$id'");
                     $row = mysqli_fetch_array($gettopics);
                         $topic_id=$row['topic_id'];
                         $topic=$row['topic'];
                         $type=$row['type'];
                         
  ?>
    
                                                            <div class="form-group">
          		<label class="control-label" for="name1">Edit Topic</label>
				<div class="controls">
                                    <input class="form-control"  type="text" name="topic" required="required" value="<?php echo $topic; ?>">	 
				</div>			  </div>  
                                                          <div class="form-group">
          		<label class="control-label" for="name1">Show Comments?</label>
				<div class="controls">
                                    <select class="form-control"   name="type">
                                        <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>	 
				</div>			  </div>  
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
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script src="../js/gen_validatorv4.js"></script>
      	</body>

</html>