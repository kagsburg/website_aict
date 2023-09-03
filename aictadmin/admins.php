<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>System Admins</title>
              <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
 <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
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

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <h4 class="page-title">All Administrators</h4>
                                                              <div class="card-box">
                                         <h4 class="header-title m-t-0 m-b-30">Users</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                                                                       <table id="datatable" class="table table-striped dt-responsive nowrap">
                                   
                                                         
                                      <thead>
            <tr>
        <th>ID</th>
    <th >FULLNAMES</th>
                    <th >EMAIL</th>
                    <?php if($_SESSION['aictlevel']==1){ ?>      
                    <th>ADMIN RIGHTS</th>
                                  <th>STATUS</th>
                                  <?php }?>
                </tr></thead> 
 <?php 
      $users=  mysqli_query($con,"SELECT * FROM users WHERE user_id!='".$_SESSION['05069']."' ORDER BY user_id DESC");
           
                        while ($row=mysqli_fetch_array($users)){
//$subject=$row['article_title'];
$level=$row['level'];
             $id=$row['user_id'];
             $fullname=$row['fullnames'];
             $activate=$row['activate'];
             $email=$row['email'];
              $pass=$row['password'];
                      ?> 
            <tbody>                          
   <tr>
   <td><?php echo $id;?></td>
   <td><?php echo $fullname;?></td>
                              <td><?php  echo $email; ?></td>
             <?php if($_SESSION['aictlevel']==1){ ?>   
                              <td>
        <?php if($level=="0"){?>
           <a href="adminrights.php?id=<?php echo $id;?>&&level=<?php echo $level;?>"><button class="btn btn-xs btn-success">Make super Admin <i class="icon-white icon-arrow-up"></i></button></a>
        <?php }  else {?>
                                  <a href="adminrights.php?id=<?php echo $id;?>&&level=<?php echo $level;?>"><button class="btn btn-xs btn-warning">Make normal Admin <i class="icon-white icon-arrow-down"></i></button></a>    
                                  <?php }?>
                    </td>
<td>                             <?php if($activate=="active"){?>
        <a href="activateadmin.php?id=<?php echo $id;?>&&activate=<?php echo $activate;?>"><button class="btn btn-xs btn-danger">Deactivate <i class="icon-white icon-thumbs-down"></i></button></a>
        <?php }  else { ?>
                         <a href="activateadmin.php?id=<?php echo $id;?>&&activate=<?php echo $activate;?>"><button class="btn btn-xs btn-success">Activate <i class="icon-white icon-thumbs-up"></i></button></a>
              <?php   } ?>
    </td>
                               <?php   } ?>
  </tr>
        </tbody>     
             <?php   }?>
                
           </table>
                                                </div>
                            </div>
                        </div>




                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            

            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>
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
<!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>
	</body>

</html>