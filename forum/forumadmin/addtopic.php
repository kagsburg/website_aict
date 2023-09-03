<?php
include 'includes/conn.php';
       if(!isset($_SESSION['forum_admin'])){
header('Location:login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Add Topic</title>
 <link rel="stylesheet" type="text/css" href="js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
<section>
   <?php include 'includes/header.php'; ?>

        <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-7">
                      <section class="panel">
                    <header class="panel-heading">
                   Add Topic
                    </header>
                    <div class="panel-body">
                  <?php
    if(isset($_POST['topic'],$_POST['category'])){
      $topic=  mysqli_real_escape_string($con,trim($_POST['topic']));
      $type=$_POST['type'];
      $category=$_POST['category'];
      if((empty($topic))||(empty($type))||(empty($category))){
          echo '<div class="alert alert-danger">Field Required</div>';
      }  else {
          mysqli_query($con,"INSERT INTO topics(topic,category_id,type,timestamp,status) VALUES('$topic','$category','$type',UNIX_TIMESTAMP(),'1')") or die(mysqli_error($con));    
          echo '<div class="alert alert-success">Topic successfully Added</div>';
      }
  }
  ?>
                   <div class="form">
                                <form class="form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                                       <div class="form-group">
          		<label class="control-label" for="name1">Topic</label>
				<div class="controls">
                                    <input class="form-control"  type="text" name="topic" required="required">	 
				</div>			  </div>  
                                                          <div class="form-group">
          		<label class="control-label" for="name1">Select Category</label>
				<div class="controls">
                                    <select class="form-control"   name="category">
                                        <option value="" selected="">Select option</option>
                                         <?php
                            $getcats=  mysqli_query($con,"SELECT * FROM forumcategories WHERE status=1");
                     while ($row = mysqli_fetch_array($getcats)) {
                         $forumcategory_id=$row['forumcategory_id'];
                         $forumcategory=$row['forumcategory'];
                                                                   
                            ?>
                                        <option value="<?php echo $forumcategory_id; ?>"><?php echo $forumcategory; ?></option>
                     <?php } ?>
                                    </select>	 
				</div>			
                                                          </div>  
                                      <div class="form-group">
          		<label class="control-label" for="name1">Show Comments?</label>
				<div class="controls">
                                    <select class="form-control"   name="type">
                                        <option value="" selected="">Select option</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>	 
				</div>			
                                                          </div>  
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                Submit
                                            </button>                                          
                                        </div>
                                </form>
                            </div>

                    </div>
                </section>
           
            </div>

        </div>
    

        </div>
        <!-- page end-->
        </section>
        <!--body wrapper end-->

        <!--footer section start-->
      
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="js/validation-init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>
<script>
    jQuery(document).ready(function(){
         $('.wysihtml5').wysihtml5();
    });
</script>
</body>
</html>
