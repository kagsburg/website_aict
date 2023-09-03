<?php
include 'includes/conn.php';
  if(!isset($_SESSION['05069'])){
header('Location:leaderlogin.php');
   }
    $id=$_GET['id'];
     $depts=  mysqli_query($con,"SELECT * FROM departments WHERE department_id='$id'");
                                                     $row = mysqli_fetch_array($depts);
                                                          $dept_id=$row['department_id'];
                                                          $deptname=$row['department'];
   ?>
<!DOCTYPE html>
<html>	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Department Details- Aic Admin</title>
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
                               
                                <h4 class="page-title"><?php echo $deptname; ?></h4>
                            </div>
                        </div>


                        <div class="row">
                                      <div class="col-sm-10">
                                          <a href="editdept.php?id=<?php echo $id; ?>&&dept=<?php echo $deptname; ?>" class="btn btn-lg btn-info" style="margin:5px 0px">Edit/Add Details</a>
                                          <a href="sortleaders.php?id=<?php echo $id; ?>&&dept=<?php echo $deptname; ?>" class="btn btn-lg btn-success" style="margin:5px 0px">Sort Leaders</a>
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                 

                         <?php
                 $getdetails=  mysqli_query($con,"SELECT * FROM deptdetails WHERE dept_id='$id' ");
                        $row=  mysqli_fetch_array($getdetails);
                        $aboutus=$row['aboutus'];
                        $whatwedo=$row['whatwedo'];
                        $sponsors=$row['sponsors'];
                        $programs=$row['programs'];
                        $contacts=$row['contacts'];
                        ?>
               <h4>About Us</h4>    
               <?php echo $aboutus; ?>
               <h4>What We Do</h4>       
                  <?php echo $whatwedo; ?>
               <h4>Programs</h4>  
                  <?php echo $programs; ?>
               <h4>Staff Members</h4>  
                         <table  class="table table-responsive table-bordered">
                                      <?php
                                           $leaders=  mysqli_query($con,"SELECT * FROM deptleaders WHERE dept_id='$id' and status !='inactive' ORDER BY level");
           if(mysqli_num_rows($leaders)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no Leaders added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
          <th >Fullnames</th>
                    <th>Dob</th>
                         <th>Position</th>
                            <th>Action</th>
                           </tr></thead> 
                             <tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($leaders)){

             $fullname=$row['fullnames'];
             $deptleader_id =$row['deptleader_id'];
             $activate=$row['status'];
             $date=$row['start_date'];
              $dob=$row['dob'];
                $dept_id=$row['dept_id'];
           
                $position=$row['position'];
                $wife=$row['wife'];
                $bio=$row['bio'];
                     $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id'");
                                       $row4=  mysqli_fetch_array($getdept);
                                         $department=$row4['department'];
                      ?> 
                                     
        <tr>
   <td><?php echo $fullname;?></td>
   <td><?php echo $dob; ?></td>
    <td><?php  echo $position; ?></td>
    <td>
                                                    <a href="#edit<?php echo $deptleader_id;?>" data-toggle="modal"class="btn btn-xs btn-info">Edit</a>
                                                    <?php
            if(isset($_POST['depart'.$deptleader_id])){
                $dept=  mysqli_real_escape_string($con,$_POST['department'.$deptleader_id]);
                $fullname=  mysqli_real_escape_string($con,$_POST['fullname'.$deptleader_id]);
                $position=  mysqli_real_escape_string($con,$_POST['position'.$deptleader_id]);
                $dob=  mysqli_real_escape_string($con,$_POST['dob'.$deptleader_id]);
                $start=  mysqli_real_escape_string($con,$_POST['start'.$deptleader_id]);
                mysqli_query($con,"UPDATE deptleaders SET dept_id='$dept',fullnames='$fullname',dob='$dob',position='$position',start_date='$start' WHERE deptleader_id  ='$deptleader_id'");
                echo "<div class='alert alert-success'>Employee Updated</div>";
                
            }
            ?>                           
                                                    <div id="edit<?php echo $deptleader_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                                                                                    <h3 id="myModalLabel"> Edit Department Leader</h3>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                       
                                                                                                                                                <form action=""  method="post" name="form" enctype="multipart/form-data" >
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Fullname </label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="fullname<?php echo $deptleader_id; ?>"  value="<?php echo $fullname; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group">          
                                                                                                                                                                    <label class="control-label" for="name1">Departments</label>                                                                                                                                                                    
                                                                                                                                                                    <select   name = "department<?php echo $deptleader_id; ?>"  class="form-control">
                                                                                                                                                                                                            <option value="">Select Department..</option>
                                                                                                                                                                                                            <?php 
                                                                                                                                                                                                    $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                                                                                                                                                                    while ($row=mysqli_fetch_array($depts)){
                                                                                                                                                                                                                    $dept=$row['department'];
                                                                                                                                                                                                                    $status=$row['status'];
                                                                                                                                                                                                                                $dept_id2=$row['department_id'];
                                                                                                                                                                                                                                    ?>
                                                                                                                                                                                                            <option value="<?php echo $dept_id2; ?>" <?php if ($dept_id2==$dept_id) echo "selected"; ?>><?php echo $dept;?></option>
                                                                                                                                                                                                    <?php }?>
                                                                                                                                                                                                        </select>
                                                                                                                                                                
                                                                                                                                                                </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Position</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="position<?php echo $deptleader_id; ?>"  value="<?php echo $position; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Dob</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="dob<?php echo $deptleader_id; ?>"  value="<?php echo $dob; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Start Date</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="start<?php echo $deptleader_id; ?>"  value="<?php echo $date; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                
                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                        
                                                                                                                                                                            <button type="submit" class="btn btn-primary" name="depart<?php echo $deptleader_id; ?>">Edit</button>
                                                                                                                                                                                </div>

                                                                                                                                                    </form>
                                                                                                                        </div>
                                                                                        </div>  
                                                                                        </div>  
                                                                            </div>
                                                        <a href="hidedeptleader?id=<?php echo $deptleader_id; ?>" class="btn btn-xs btn-danger" onclick="return  remove<?php echo $deptleader_id; ?>()">Remove</a>
                                                        <script type="text/javascript">
                                                        function remove<?php echo $deptleader_id;?>() {
                                                        return confirm('are you sure you want to delete this?');
                                                        }
                                                        </script>
                                                    </td>
 
  </tr>
             
                                      
                        <?php  } 
                                }?>
                    </tbody>   
           </table>
           
               <strong>Other Employees</strong>
                   <table class="table table-bordered  table-responsive">
                                                <thead>
                                                    <th>Fullname</th>
                                                    <th>Gender</th>
                                                    <th>Position</th>
                                                </thead>
                                                <tbody>
                                                  
                                                        <?php
                                                          $employees=  mysqli_query($con,"SELECT * FROM employees  WHERE dept_id='$id' and status!='inactive'");
                                                          while ($row = mysqli_fetch_array($employees)) {
                                                                  $employee_id=$row['employee_id'];
                                                                    $fullname=$row['fullnames'];
                                                                    $dob=$row['dob'];
                                                                    $position=$row['position'];
                                                                    $dept_id=$row['dept_id'];
                                                                    $status=$row['status'];
                                                                    $gender=$row['gender'];
                                                                    $phone=$row['phone'];
                                                                    ?> 
                                                    <tr>
                                                        <td><?php echo $fullname; ?></td>
                                                    <td><?php echo $gender; ?></td>
                                                    <td><?php echo $position; ?></td> 
                                                    <td>
                                                    <a href="#edit<?php echo $employee_id;?>" data-toggle="modal"class="btn btn-xs btn-info">Edit</a>
                                                    <?php
            if(isset($_POST['fullname'.$employee_id])){
                $dept=  mysqli_real_escape_string($con,$_POST['department'.$employee_id]);
                $fullname=  mysqli_real_escape_string($con,$_POST['fullname'.$employee_id]);
                $position=  mysqli_real_escape_string($con,$_POST['position'.$employee_id]);
                $gender=  mysqli_real_escape_string($con,$_POST['gender'.$employee_id]);
                $phone=  mysqli_real_escape_string($con,$_POST['phone'.$employee_id]);
                mysqli_query($con,"UPDATE employees SET dept_id='$dept',fullnames='$fullname',position='$position',phone='$phone' WHERE employee_id ='$employee_id'");
                echo "<div class='alert alert-success'>Employee Updated</div>";
                
            }
            ?>
                                                                               <div id="edit<?php echo $employee_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                                                                                    <h3 id="myModalLabel"> Edit Employee</h3>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                       
                                                                                                                                                <form action=""  method="post" name="form" enctype="multipart/form-data" >
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Fullname </label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="fullname<?php echo $employee_id; ?>"  value="<?php echo $fullname; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group">          
                                                                                                                                                                    <label class="control-label" for="name1">Departments</label>                                                                                                                                                                    
                                                                                                                                                                    <select   name = "department<?php echo $employee_id; ?>"  class="form-control">
                                                                                                                                                                                                            <option value="">Select Department..</option>
                                                                                                                                                                                                            <?php 
                                                                                                                                                                                                    $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                                                                                                                                                                    while ($row=mysqli_fetch_array($depts)){
                                                                                                                                                                                                                    $dept=$row['department'];
                                                                                                                                                                                                                    $status=$row['status'];
                                                                                                                                                                                                                                $dept_id2=$row['department_id'];
                                                                                                                                                                                                                                    ?>
                                                                                                                                                                                                            <option value="<?php echo $dept_id2; ?>" <?php if ($dept_id2==$dept_id) echo "selected"; ?>><?php echo $dept;?></option>
                                                                                                                                                                                                    <?php }?>
                                                                                                                                                                                                        </select>
                                                                                                                                                                
                                                                                                                                                                </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Position</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="position<?php echo $employee_id; ?>"  value="<?php echo $position; ?>" placeholder="enter name" required="required" style="width:100%">
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Gender</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <select class="form-control" name="gender<?php echo $employee_id; ?>">
                                                                                                                                                                <option value="" selected="selected">select Gender</option>
                                                                                                                                                                <option value="Male" <?php if ($gender == 'Male') echo 'selected' ?>>Male</option>
                                                                                                                                                                <option value="Female"<?php if ($gender == 'Female') echo 'selected' ?>>Female</option>
                                                                                                                                                            </select>
                                                                                                                                                                </div>
                                                                                                                                                    </div>
                                                                                                                                                    <div class="form-group" style="width:100%;padding:5px 0px;">
                                                                                                                                                        <label class="control-label" for="name1">Phone</label>
                                                                                                                                                        <div class="controls">
                                                                                                                                                        <input type="text" class="form-control" name="phone<?php echo $employee_id; ?>"  value="<?php echo $phone; ?>" placeholder="enter name" required="required" style="width:100%">
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
                                                        <a href="removeemployee?id=<?php echo $employee_id; ?>" class="btn btn-xs btn-danger" onclick="return  remove<?php echo $employee_id; ?>()">Remove</a>
                                                        <script type="text/javascript">
                                                        function remove<?php echo $employee_id;?>() {
                                                        return confirm('are you sure you want to delete this?');
                                                        }
                                                        </script>
                                                    </td> 
                                                </tr>
                                                        
                                                            <?php      }
                                                        ?>
                                                 
                                                </tbody>
                                            </table>
               <h4>Press Release</h4>
               <table class="table table-bordered ">
                                                <thead>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Posted on</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                  
                                                        <?php
                                                          $deptposts=  mysqli_query($con,"SELECT * FROM deptposts  WHERE dept_id='$id' AND status=1");
                                                          while ($row = mysqli_fetch_array($deptposts)){
                                                               $title=$row['post_title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $deptpost_id=$row['deptpost_id'];
               $timestamp=$row['timestamp'];
                            ?> 
                                                    <tr>
                                                        <td><img src=""><img src="../deptposts/thumbs/<?php echo md5($deptpost_id).'.'.$ext; ?>" width="100"></td>
                                                                    <td><?php echo $title; ?></td>
                                                                    <td><?php echo date('d/M/Y',$timestamp); ?></td> 
                                                                    <td>
                                                                        <a href="editdeptpost.php?id=<?php echo $deptpost_id; ?>" class="btn btn-xs btn-info">Edit</a>
                                                                        <a href="removedeptpost.php?id=<?php echo $deptpost_id; ?>" class="btn btn-xs btn-danger" onclick="return  removepost<?php echo $deptpost_id; ?>()">Remove</a>
                                                                    </td> 
                                                                    </tr>
                                                           <script type="text/javascript">
function removepost<?php echo $deptpost_id;?>() {
  return confirm('are you sure you want to delete this?');
}
</script>                                            
                                                            <?php  
                                                            }
                                                        ?>
                                                 
                                                </tbody>
                                            </table>
               <h4>Sponsors and Partners</h4>
                  <?php echo $sponsors; ?>
               <h4>Location and contacts</h4>               
                  <?php echo $contacts; ?>
                                 
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