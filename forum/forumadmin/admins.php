<?php
include 'includes/conn.php';
    if((!isset($_SESSION['forum_admin']))||($_SESSION['forumlevel']!=1)){
header('Location:login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="icon"   type="image/png"    href="http://aictanzania.org/assets/images/favicon.PNG" />

  <title>Admins</title>
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

        <section class="wrapper">
        <!-- page start-->

        <div class="row">
        
    <div class="col-lg-11">
                      <section class="panel">
                    <header class="panel-heading">
                     Administrators
                    </header>
                          <div class="panel-body">
                                              <table  class="display table  table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th> #</th>
            <th>Fullname</th>
            <th> Email</th>
            <th>Role</th>
            <th>Status</th>
            <th> &nbsp;</th>
                  </tr>
        </thead>
        <tbody>
            <?php
            $getusers=  mysqli_query($con,"SELECT * FROM forumadmins  WHERE user_id!='".$_SESSION['forum_admin']."'");
            while ($row = mysqli_fetch_array($getusers)) {
                $user_id=$row['user_id'];
                $fullname=$row['fullname'];
                $email=$row['email'];
                $status=$row['status'];
                $level=$row['level'];
                                      ?>
                <tr class="gradeA">
            <td><?php echo $user_id; ?></td>
            <td><?php echo $fullname; ;?></td>
            <td><?php echo $email;?></td>
            <td><?php 
            if($level==1){
                echo 'Super Admin';
            }else if($level==0){
                echo 'content creator';
            }
            ?></td>
             <td><?php 
            if($status==1){
                echo 'Active';
            }else if($status==0){
                echo 'Inactive';
            }
            ?></td>
            <td>
                <?php if($level==1){?>
                <a href="demoteadmin?id=<?php echo $user_id; ?>&&st=<?php echo $level; ?>" class="btn btn-danger btn-xs">To Content Creator</a>
            
    <?php }else{?>      
                <a href="demoteadmin?id=<?php echo $user_id; ?>&&st=<?php echo $level; ?>" class="btn btn-success btn-xs">To Super Admin</a>
            
                <?php }?>      
                                                <?php if($status==1){?>
                <a href="activateadmin?id=<?php echo $user_id; ?>&&st=<?php echo $status; ?>" class="btn btn-danger btn-xs" onclick="return approve<?php echo $user_id; ?>()">Deactivate</a>
            
    <?php }else{?>      
                <a href="activateadmin?id=<?php echo $user_id; ?>&&st=<?php echo $status; ?>" class="btn btn-success btn-xs">Activate</a></td>
            
                <?php }?>
        <script type="text/javascript">
function approve<?php echo $user_id; ?>() {
  return confirm("You are about to change date.Do you want to continue");
}
</script>
                </tr>
            <?php } ?>
        </tbody>
                        </table>
                          </div>
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

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<script src="js/dynamic_table_init.js"></script>
<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

</body>
</html>
