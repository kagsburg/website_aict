<?php
include 'includes/conn.php';
       if(!isset($_SESSION['forum_admin'])){
header('Location:login');
}
   $id=$_GET['id'];
    $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE topic_id='$id'");
                     $row = mysqli_fetch_array($gettopics);
                         $topic_id=$row['topic_id'];
                         $topic=$row['topic'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
 <link rel="icon"   type="image/png"    href="http://aictanzania.org/assets/images/favicon.PNG" />

  <title>Topic Comments</title>

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
     Comments for "<?php echo $topic; ?>"
            </h3>
          
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
Comments
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
           
          <th >Comment</th>
          <th >Fullname</th>
          <th >Phone</th>
           <th>Date</th>
        </tr>
        </thead>
        <tbody>
      <?php 
               $getcomments=  mysqli_query($con,"SELECT * FROM  topiccomments WHERE topic_id='$id'");
                     while ($row = mysqli_fetch_array($getcomments)) {
                         $topiccomment_id=$row['topiccomment_id'];
                         $comment=$row['comment'];
                         $fullname=$row['fullname'];
                                                 $phone=$row['phone'];
                         $timestamp=$row['timestamp'];                      
         ?> 
           <tr class="gradeA">
               <td style="max-width: 400px"><?php echo $comment;?></td>
               <td style="max-width: 400px"><?php echo $fullname;?></td>
               <td style="max-width: 400px"><?php echo $phone;?></td>
                              <td><?php  echo date('d/M',$timestamp); ?></td>
             
            </tr>
        <?php   } ?>
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
