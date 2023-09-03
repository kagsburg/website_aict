<?php
include 'includes/conn.php';
  if(!isset($_SESSION['05069'])){
header('Location:leaderlogin.php');
   }
    $id=$_GET['id'];
     $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE diocese_id='$id'");
                                                     $row = mysqli_fetch_array($dioceses);
                                                          $dept_id=$row['diocese_id'];
                                                          $diocese=$row['diocese'];
   ?>
<!DOCTYPE html>
<html>	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Diocese Details- Aic Admin</title>
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
                               
                                <h4 class="page-title"><?php echo $diocese; ?></h4>
                            </div>
                        </div>


                        <div class="row">
                                      <div class="col-sm-10">
                                          <a href="editdiocese2.php?id=<?php echo $id; ?>&&dioc=<?php echo $diocese; ?>" class="btn btn-lg btn-info" style="margin:5px 0px">Edit/Add Details</a> 
<a href="sortstaff.php?id=<?php echo $id; ?>&&dioc=<?php echo $diocese; ?>" class="btn btn-lg btn-primary" style="margin:5px 0px">Sort Staff</a>
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                 

                         <?php
                 $getdetails=  mysqli_query($con,"SELECT * FROM diocesedetails WHERE diocese_id='$id'");
                        $row=  mysqli_fetch_array($getdetails);
                        $history=$row['history'];
                        $vision=$row['vision'];
                        $mission=$row['mission'];
                        $corevalues=$row['corevalues'];
                        $contacts=$row['contacts'];
                        ?>
               <h4>Brief History</h4>    
               <?php echo $history; ?>
               <h4>Vision</h4>       
                  <?php echo $vision; ?>
               <h4>Mission</h4>  
                  <?php echo $mission; ?>
               <h4>Core Values</h4>  
                  <?php echo $corevalues; ?>
               <h4>Staff Members</h4>  
                         <table  class="table table-responsive table-bordered">
                                      <?php
                                           $leaders=  mysqli_query($con,"SELECT * FROM diocesestaff WHERE diocese_id='$id' AND status=1 ORDER BY diocese_id DESC");
           if(mysqli_num_rows($leaders)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no Staff added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
                       <th >Fullnames</th>                       
                       <th>Position</th>
                       <th>Gender</th>
                       <th>Phone</th>
                     <th>Action</th>
                           </tr></thead> 
                             <tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($leaders)){

             $diocesestaff_id=$row['diocesestaff_id'];
             $fullname=$row['fullnames'];
             $gender=$row['gender'];
             $phone=$row['phone'];
             $position=$row['position'];
              
                    
                      ?> 
                                     
        <tr>
   <td><?php echo $fullname;?></td>
   <td><?php echo $position; ?></td>
    <td><?php  echo $gender; ?></td>
     <td><?php  echo $phone; ?></td>
     <td><a href="editstaff?id=<?php  echo $diocesestaff_id; ?>" class="btn btn-xs btn-success">Edit</a>
<a href="hidestaff?id=<?php  echo $diocesestaff_id; ?>" class="btn btn-xs btn-danger" onclick="return confirm_delete<?php echo $diocesestaff_id; ?>()">remove</a></td>
 
            <script type="text/javascript">
function confirm_delete<?php echo $diocesestaff_id;?>() {
  return confirm('are you sure you want to delete this?');
}
</script>     
  </tr>
             
                                      
                        <?php  } 
                                }?>
                    </tbody>   
           </table>
        
               <h4>News</h4>
               <table class="table table-bordered ">
                                                <thead>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Posted on</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                  
                                                        <?php
                                                          $deptposts=  mysqli_query($con,"SELECT * FROM dioceseposts  WHERE diocese_id='$id' AND status=1");
                                                          while ($row = mysqli_fetch_array($deptposts)){
                                                               $title=$row['title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $diocesepost_id=$row['diocesepost_id'];
               $timestamp=$row['timestamp'];
                            ?> 
                                                    <tr>
                                                        <td><img src=""><img src="../diocese/thumbs/<?php echo md5($diocesepost_id).'.'.$ext; ?>" width="100"></td>
                                                                    <td><?php echo $title; ?></td>
                                                                    <td><?php echo date('d/M/Y',$timestamp); ?></td> 
                                                                    <td>
                                                                        <a href="editdiocesepost.php?id=<?php echo $diocesepost_id; ?>" class="btn btn-xs btn-info">Edit</a>
                                                                        <a href="hidediocesepost.php?id=<?php echo $diocesepost_id; ?>" class="btn btn-xs btn-danger" onclick="return  removepost<?php echo $diocesepost_id; ?>()">Remove</a>
                                                                    </td> 
                                                                    </tr>
                                                           <script type="text/javascript">
function removepost<?php echo $diocesepost_id;?>() {
  return confirm('are you sure you want to delete this?');
}
</script>                                            
                                                            <?php  
                                                            }
                                                        ?>
                                                 
                                                </tbody>
                                            </table>
         
               <h4>Location and contacts</h4>               
                  <?php echo $contacts; ?>
                                 
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