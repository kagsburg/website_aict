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

		<title>All Secretaries</title>
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
                            
                                <h4 class="page-title">All secretaries</h4>
                                <a href="addsecretary" class="btn btn-info btn-lg" style="margin:5px 0px"><i class="fa fa-plus"></i> Add Secretary</a>
                                <div class="card-box">
                                  

                                    <h4 class="header-title m-t-0 m-b-30">All secretaries</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                            <table  class="table table-responsive table-striped">
                                      <?php
                                         $getsecs=  mysqli_query($con, "SELECT * FROM  secretaries WHERE status=1");
           if(mysqli_num_rows($getsecs)<1)
               {
               echo '<div class="alert alert-danger">Oops!! no secretaries added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
          <th >FULLNAMES</th>
              <th>POSITION</th>
                    <th>DIOCESE</th>
                    <th>PASTORATE</th>
                      <th>CHURCH</th>
                                      <?php if($_SESSION['aictlevel']==1){ ?>      
                                                      <th>ACTION</th>
                                  <?php }?>
                </tr></thead><tbody>
 <?php 
            while ($row1 = mysqli_fetch_array($getsecs)){
                                       $secretary_id=$row1['secretary_id'];
                                       $p_id=$row1['pastor_id'];
                                       $position_id=$row1['position_id'];
                                       $getpos=mysqli_query($con,"SELECT * FROM secpositions  WHERE secposition_id='$position_id'");
                                       $row2=  mysqli_fetch_array($getpos);
                                       $secposition=$row2['secposition'];
 $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  pastor_id='$p_id' AND status='active'");
 $row=  mysqli_fetch_array($pastors);
             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id1=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                $bio=$row['bio'];
                $username=$row['username'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id1'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church1=$row2['church'];
                      $pastorate_id1=$row2['pastorate_id'];
                            $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id1'  AND status=1 ");
                               $row2=mysqli_fetch_array($pastorates);
                                    $pastorate1=$row2['pastorate'];
                                    $diocese_id1=$row2['diocese_id'];
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$diocese_id1' ORDER BY diocese");
                                           $row3=mysqli_fetch_array($dioceses);
$diocese1=$row3['diocese'];
$check=  mysqli_query($con,"SELECT * FROM deptleaders WHERE username='$username' AND status='active'");
  if(mysqli_num_rows($check)<1){
      $position='Pastor';
  }  else {
       $row4=  mysqli_fetch_array($check);
      $position=$row4['position'];
      }

                      ?> 
                                      
        <tr>
   <td><?php echo $pastorname;?></td>
       <td><?php  echo $secposition; ?></td>
   <td><?php echo $diocese1;?></td>
                              <td><?php  echo $pastorate1; ?></td>
                                 <td><?php  echo $church1; ?></td>                            
                                                                         
             <?php if($_SESSION['aictlevel']==1){  ?>   
                        
<td>                           
    <a href="demotesecretary?id=<?php echo $secretary_id;?>" onclick="return confirm_delete<?php echo $pastor_id; ?>()"><button class="btn btn-xs btn-danger">Remove <i class="fa  fa-thumbs-down"></i></button></a>       
            <?php }?>
    </td>
                <script type="text/javascript">
function confirm_delete<?php echo $pastor_id;?>() {
  return confirm('are you sure you want to delete Secretary?');
}
</script>                         
                            
  </tr>
        
                        <?php  } }?>
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
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script type="text/javascript">
        			$(document).ready(function() {
				$('form').parsley();
			});
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