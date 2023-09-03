<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
      $id=$_GET['id'];
    $getpastorate=  mysqli_query($con,"SELECT * FROM pastorates WHERE pastorate_id='$id' AND status=1");
   $row=mysqli_fetch_array($getpastorate);
$pastorate=$row['pastorate'];
$status=$row['status'];
             $pastorate_id=$row['pastorate_id'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Churches- Aic Admin</title>
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
					  <div class="row">
                            <div class="col-sm-12">
                                                               <h4 class="page-title"></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30"><?php echo $pastorate; ?> Churches</h4>
                                    <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#verse" style="margin-bottom:15px">Add Church</button>
                                      
            <?php
            if (isset($_POST['church'])){

$church=mysqli_real_escape_string($con,trim($_POST['church']));
$check=  mysqli_query($con,"SELECT * FROM churches WHERE pastorate_id='$pastorate_id' AND church='$church' AND status=1");
if(mysqli_num_rows($check)>0){
     echo '<div class="alert-danger alert">Church  Already Exists</div>';
}  else {
      mysqli_query($con,"INSERT INTO churches(church,pastorate_id,status)  VALUES('$church','$pastorate_id','1')") or die(mysqli_error($con));
  echo '<div class="alert-success alert">Church  has been posted successfully</div>';

}

            }
                        
    ?>             
           <div id="verse" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Add Church</h3>
</div>
<div class="modal-body">
                                                                       <form action="" method="post" name="form">

           
    <div class="form-group">
								<div class="controls">
                                                                    <input type="text" class="form-control" name="church" id="name1"  placeholder="Enter church Name" required="required">
                              
				</div>
			  </div>
           
<div class="control-group">
                                                                           <div class="controls">
                                                                               <button  class="btn btn-primary">Add  Church</button>
				</div></div>
 
                                                                                                          </div>
</form>
                                                    
                                          </div>    
                                          </div>    
                                          </div>    
   <?php 
             $dioceses=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND pastorate_id='$pastorate_id' ORDER BY church_id DESC");
               if(mysqli_num_rows($dioceses)<1){
                 echo '<div class="alert alert-danger" style="text-align:center">No Churches posted yet</div>';
             }
           else{
               ?>
                                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                                <thead>
       <tr>
             <th>CHURCH</th>
             <th>MEMBERS</th>
                 <th>ACTION</th>
                </tr>
                                           </thead>
                                            <tbody>
 <?php
             while ($row=mysqli_fetch_array($dioceses)){
$church=$row['church'];
$status=$row['status'];
             $church_id=$row['church_id'];
 $getmembers=  mysqli_query($con,"SELECT * FROM followers WHERE church_id='$church_id' AND status=1");       
         ?>                                 
        <tr>
     <td style="width:500px"><?php echo $church;?></td>
     <td><?php echo mysqli_num_rows($getmembers); ?></td>
              <td>
                      <a  href="#edit<?php echo $church_id;?>" data-toggle="modal"  class="btn btn-xs btn-primary">Edit<i class="icon-white icon-trash"></i></a>
                         <div id="edit<?php echo $church_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit Church</h3>
</div>
<div class="modal-body">
    <form action="editchurch?id=<?php echo $church_id; ?>" method="post" name="form" class="form">

           
    <div class="form-group">
								
                                                      <input type="text" class="form-control" name="church<?php echo $church_id; ?>" id="name1"  value="<?php echo $church; ?>" placeholder="enter Diocese Name" required="required">                            
				
			  </div>
           
        <div class="control-group" style="margin-top:10px">
                                                                           
                                                                               <button  class="btn btn-info btn-sm">Edit</button>
				</div>
                                                        
         
                                                                                                        
</form>
                                                    
                                          </div>    
                                          </div>    
                                          </div>    
                                          </div>   
     <?php if($status=="1"){ ?>
        <a href="unpublish_church.php?id=<?php echo $church_id;?>" class="btn btn-xs btn-danger" onclick="return confirm_delete<?php echo $church_id; ?>()">unpublish <i class="fa fa-thumbs-down"></i></a>
            <script type="text/javascript">
function confirm_delete<?php echo $church_id;?>() {
  return confirm('are you sure you want to delete this?');
}
</script>                                             
        <?php } ?>         
    </td>
  </tr>
      
             <?php   }?>
                                                  </tbody>     
             <?php   }?>
           </table>
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