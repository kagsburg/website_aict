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

  <title>Topics</title>

  <!--dynamic table-->
  <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

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
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
        Forum Topics
            </h3>
          
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
  Forum Topics
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
           
            <th >Topic</th>
    <th >Show Comments</th>
    <th >Comments</th>
          <th >Category</th>
                          <th>Action</th>
        </tr>
        </thead>
        <tbody>
    <?php
                            $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE status=1");
                     while ($row = mysqli_fetch_array($gettopics)) {
                         $topic_id=$row['topic_id'];
                         $topic=$row['topic'];
                         $type=$row['type'];
                         $timestamp=$row['timestamp'];
                               $category_id=$row['category_id'];
                         $getcomments=  mysqli_query($con,"SELECT * FROM topiccomments WHERE topic_id='$topic_id' AND status=1");
                        $getcat=  mysqli_query($con,"SELECT * FROM forumcategories WHERE forumcategory_id='$category_id'");
                         $row2=  mysqli_fetch_array($getcat);
                         $forumcategory=$row2['forumcategory'];
                            ?>
     <tr class="gradeA">
               <td style="max-width: 400px"><?php echo $topic;?></td>
     <td><?php echo $type;?></td>
     <td><?php echo mysqli_num_rows($getcomments);?></td>
     <td><?php echo $forumcategory;?></td>
                <td><?php  echo date('d/M',$timestamp); ?></td>
              <td>
               <a  href="edittopic?id=<?php echo $topic_id;?>"><button  class="btn btn-xs btn-info">Edit</button></a> 
               <a  href="comments?id=<?php echo $topic_id;?>"><button  class="btn btn-xs btn-primary">Comments</button></a> 
        
            
        <a href="unpublish_topic.php?id=<?php echo $topic_id;?>" class="ask" onclick="return approve<?php echo $topic_id; ?>()"><button class="btn btn-xs btn-danger">Remove <i class="fa fa-thumbs-down"></i></button></a>
                        
    </td>
           <script type="text/javascript">
function approve<?php echo $topic_id; ?>() {
  return confirm("You are about to unpublish data.Are u sure you want to proceed?");
}
</script>
  </tr>
   <?php } ?>
        </tbody>
        </table>

        </div>
        </div>
        </section>
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
