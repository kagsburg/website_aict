<?php
include 'includes/conn.php';
   if(!isset($_SESSION['aictleader'])){
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

		<title>Approved Staff Members</title>
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
<?php include 'includes/leadermenu.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <h4 class="page-title">Approved Department Employees</h4>
                                                              <div class="card-box">
                                         <h4 class="header-title m-t-0 m-b-30">Users</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                                                                       <table id="datatable" class="table table-striped dt-responsive nowrap">
                                   
                                                                 
                                      <thead>
            <tr>
         
    <th >Name</th>
    <th >Position</th>
          <th >Gender</th>
                          <th>DOB</th>
                             <th>&nbsp;</th>
                            
                </tr></thead> <tbody>
    <?php 
             $employees=  mysqli_query($con,"SELECT * FROM employees  WHERE dept_id='".$_SESSION['aictdept']."'  AND status='approved' ORDER BY employee_id DESC");
               if(mysqli_num_rows($employees)<1){
                 echo '<div style="float:left;width: 75%; text-align: center; margin-left: 10px; border: 1px solid rgb(255, 224, 51); padding: 3px;background-color: rgb(255, 250, 194); margin-top:20px; font-size:12px;">No Employees Added yet</div>';
             }
           else{
             while ($row=mysqli_fetch_array($employees)){
$employee_id=$row['employee_id'];
$fullname=$row['fullnames'];
$username=$row['username'];
             $dob=$row['dob'];
               $position=$row['position'];
               $dept_id=$row['dept_id'];
               $gender=$row['gender'];
               $status=$row['status'];
                 $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id' ORDER BY department");
             $row1=mysqli_fetch_array($depts);
$dept=$row1['department'];
         ?> 
                                      
        <tr>
   <td><?php echo $fullname;?></td>
   <td><?php echo $position;?></td>
   <td><?php echo $gender;?></td>
   <td><?php echo $dob;?></td>
                                    <td width="80">
                                        <a href="approveemployee.php?id=<?php echo $employee_id;?>&&st=<?php echo  $status; ?>&&user=<?php echo $username; ?>" class="ask"><button class="btn btn-mini btn-danger">Remove<i class="icon-white icon-thumbs-down"></i></button></a>
     
    </td>
  </tr>
            
                                      
                        <?php  } 
                                }?>
                    </tbody>   
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