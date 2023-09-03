<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<!-- Mirrored from coderthemes.com/flacto_1.1/layout_2_green/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2016 11:40:49 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Events- Aic Admin</title>
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
                               
                                <h4 class="page-title">Events</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">All Events</h4>

                                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                                      
                                        <thead>
                                                     <table class="table">
                                      <thead>
            <tr>
                <th >Photo</th>
        <th >Name</th>
             <th >Date</th>
                          <th>Venue</th>
                             <th>Time</th>
                             <th>&nbsp;</th>
                </tr></thead>
            

                    <tbody>
  <?php  
  $events=  mysqli_query($con,"SELECT * FROM events WHERE published='published' ORDER BY event_date");
  if(mysqli_num_rows($events)<1){
  echo '<div class="alert alert-warning" style="text-align:center;"> Oop!!You have No Events posted yet</div>';  }
  else{
      while ($row = mysqli_fetch_array($events)) {
          $event_id=$row['event_id'];
          $event_name=$row['event_name'];
          $venue=$row['event_venue'];
          $date=$row['event_date'];
           $time=$row['event_time'];
          $published=$row['published'];
            $poster=$row['poster'];
          $description=$row['event_description'];
          $image=  mysqli_query($con,"SELECT * FROM event_photos WHERE event_id='$event_id'") or die(mysql_error());
                     $row2= mysqli_fetch_array($image);
          $ext=$row2['ext'];
          $image_name=$row2['image_name'];
          ?>
            <tr>
                            
                    <td> <a  href="<?php echo '../events/'.$image_name.'.'.$ext;?>" alt="<?php echo $event_name;?>" >
       <img  src="<?php echo '../events/'.$image_name.'.'.$ext;?>"  alt="<?php echo $event_name;?>"  alt="<?php echo $event_name;?>" title="<?php echo $event_name;?>"  style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a></td>
       <td class="media-heading" style="font-size:13px;"><?php    echo  $event_name;  ?>
             </td>
            <td>   <div style='font-size:10px;'>
            <?php echo date('d/M/Y',$date); ?>
          </div></td>
      <td>  <?php echo $venue; ?></td>
      <td>  <?php echo $time; ?></td>
      <td width="150">
            <?php
              if(($poster==$fullname)||($_SESSION['aictlevel']==1)){  ?>
            <a class="btn btn-xs btn-info" href="edit_event.php?event_id=<?php echo $event_id; ?>&&poster=<?php echo $poster; ?>">Edit event</a> 
          
              <?php
              }
              if($_SESSION['aictlevel']==1){  ?>
                   <a href="unpublish_event.php?id=<?php echo $event_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger" onclick="return confirm_delete<?php echo $event_id; ?>()">unpublish <i class="fa fa-thumbs-down"></i></a>
     <script type="text/javascript">
function confirm_delete<?php echo $event_id;?>() {
  return confirm('are you sure you want to remove Event?');
}
</script>         
 <?php } ?>          
	       </td>
       
               </tr>
                            <?php
      }
  }
  ?>
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