<?php
include 'includes/conn.php';
       if(!isset($_SESSION['forum_admin'])){
header('Location:login');
}
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Edit Topic Category</title>

  <!--dynamic table-->
  <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body class="sticky-header">

<section>
<?php include 'includes/header.php'; ?>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
       Edit  Forum Category
            </h3>
          
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
             <div class="col-sm-6">
        <section class="panel">
        <header class="panel-heading">
 Edit  Forum Category
         
        </header>
            <div class="panel-body">
                       <?php
    if(isset($_POST['category'])){
      $category=  mysqli_real_escape_string($con,trim($_POST['category']));
          if(empty($category)){
          echo '<div class="alert alert-danger">Field Required</div>';
      }  else {
          mysqli_query($con,"UPDATE  forumcategories SET forumcategory='$category'  WHERE  forumcategory_id='$id'") or die(mysqli_error($con));    
          echo '<div class="alert alert-success">Category  successfully Edited</div>';
      }
  }
      $getcats=mysqli_query($con,"SELECT * FROM forumcategories WHERE forumcategory_id='$id'");
                       $row = mysqli_fetch_array($getcats);
                         $forumcategory_id=$row['forumcategory_id'];
                         $forumcategory=$row['forumcategory'];
  ?>
                   <div class="form">
                                <form class="form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                                       <div class="form-group">
          		<label class="control-label" for="name1">Category Name</label>
				<div class="controls">
                                    <input class="form-control"  type="text" name="category" value="<?php echo $forumcategory; ?>" required="required">	 
				</div>			  </div>  
                                                         
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                Submit
                                            </button>                                          
                                        </div>
                                </form>
                            </div>
            </div>
            </div>
       
        </div>
        </div>
 
    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization -->
<script src="js/dynamic_table_init.js"></script>

<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
