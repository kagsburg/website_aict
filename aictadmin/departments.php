<?php
include 'includes/conn.php';
  if(!isset($_SESSION['05069'])){
header('Location:leaderlogin.php');
   }?>
<!DOCTYPE html>
<html>	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>All Departments- Aic Admin</title>
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
                          
                        </div>


                        <div class="row">
                                 <div class="col-sm-5">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Add Department</h4>
                                         <?php
            if (isset($_POST['department'])){
       $dept= mysqli_real_escape_string($con,trim($_POST['department']));
if(empty($dept)){
$errors[]='Department Required';
}
$check=  mysqli_query($con,"SELECT * FROM departments WHERE department='$dept'");
if(mysqli_num_rows($check)>0){
    $errors[]='Department Already Exists';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="alert alert-error">'.$error.'</div>';
}
}
else{
     
  mysqli_query($con,"INSERT INTO departments(department,status)  VALUES('$dept','1')") or die(mysqli_error($con));
           echo '<div class="alert alert-success" style="text-align:center">New Department Name Added</div>';  
            }}
                       
    ?>             
                                                                                 
     <form action=""  method="post" name="form" enctype="multipart/form-data" class="form" >
<fieldset>
			  <div class="form-group">
				<label class="control-label" for="name1">Department Name</label>
				<div class="controls">
			  <input type="text" class="form-control" id="fullname" name="department"  placeholder="enter fullname" required="required">
</div>
			  </div>
     
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary">Add </button>
				</div></div>
</fieldset>
</form>
                                    
</div>
</div>
                            <div class="col-sm-7">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">All Department Posts</h4>

                                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                                      
                                       <thead>
                                                 
                                                    <th>Department</th>
                                                    
                                                    <th>Action</th>
                                                </thead>

       <tbody class="">
              <?php
                             
               $getdept=  mysqli_query($con,"SELECT * FROM departments WHERE status=1");
               while ($row2=  mysqli_fetch_array($getdept)){
               $dept=$row2['department'];
               $dept_id=$row2['department_id'];
                            ?> 
           <tr class="gradeA">
    
                                                
                                                                        <td><?php echo $dept; ?></td> 
                                                                                                                              
                                                                    <td>
                                                                        <a href="#edit<?php echo $dept_id;?>" data-toggle="modal"class="btn btn-xs btn-info">Edit</a>
                                                                               <div id="edit<?php echo $dept_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                                                                                    <h3 id="myModalLabel">Edit Department</h3>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                        <?php
                                                                                                                        if(isset($_POST['department'.$dept_id])){
                                                                                                                            $dept=  mysqli_real_escape_string($con,$_POST['department'.$dept_id]);
                                                                                                                            mysqli_query($con,"UPDATE departments SET department='$dept' WHERE department_id='$dept_id'");
                                                                                                                            
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                                                <form action=""  method="post" name="form" enctype="multipart/form-data" >
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Department Name</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="department<?php echo $dept_id; ?>"  value="<?php echo $dept; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                
                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                        
                                                                                                                                                                            <button type="submit" class="btn btn-primary">Edit</button>
                                                                                                                                                                                </div>

                                                                                                                                                    </form>
                                                                                                                        </div>
                                                                                        </div>  
                                                                                        </div>  
                                                                            </div>  
                                                                        <a href="dept?id=<?php echo $dept_id;?>" class="btn btn-xs btn-success">Details</a>
                                                                    </tr>
               <?php }?>
                                                          
       </tbody>
             
            
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