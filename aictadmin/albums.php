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

		<title>Albums- Aic Admin</title>
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
                               
                                <h4 class="page-title">Albums</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">All Albums</h4>
                                             <?php
                                                                               $albums=  mysqli_query($con,"SELECT * FROM albums WHERE published='published'");
  if(mysqli_num_rows($albums)<1){
  echo '<div class="alert alert-error" style="text-align:center;"> Oop!!You have No albums posted yet</div>';  }
  else{
                                                                              ?>
                                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                                <thead>
            <tr>
      <th>COVER</th>
      <th >NAME</th>
  
    <th >PHOTOS</th>
          
                          <th>&nbsp;</th>
                             <th>&nbsp;</th>
                </tr></thead>
         <tbody>  
  <?php  
 
      while ($row = mysqli_fetch_array($albums)) {
          $album_id=$row['album_id'];
          $album_name=$row['album_name'];
          $description=$row['description'];
          $published=$row['published'];
                    $creator=$row['creator'];
          $image=  mysqli_query($con,"SELECT * FROM covers WHERE album_id='$album_id'") or die(mysqli_error($con));
            $photos=  mysqli_query($con,"SELECT * FROM photos WHERE album_id='$album_id' AND published='published'") or die(mysqli_error($con));
            $count=  mysqli_num_rows($photos);
          $row2= mysqli_fetch_array($image);
          $ext=$row2['ext'];
          $image_name=$row2['image_name'];?>
           
         <tr>
                             <td>
                     <a class="pull-left" href="<?php echo '../albums/'.$image_name.'.'.$ext;?>" >
       <img class="media-object" src="<?php echo '../albums/'.$image_name.'.'.$ext;?>" alt="<?php echo $album_name; ?>" title="click to view photos" style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a>
                                 </td>
              <td><div class="media-heading" style="font-size:13px;height: 35px"><?php echo $album_name; ?> </td>
      
        <td> <?php echo $count.' photos';?></td>
     
         <td>
            <a class="btn btn-xs btn-info" href="photos.php?album_id=<?php echo $album_id; ?>">View photos</a> 
             </td>
          <?php if($_SESSION['aictlevel']==1){ ?>
           <td>
         
        <a href="unpublish_album.php?id=<?php echo $album_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger" onclick="return approve<?php echo $album_id; ?>()">unpublish <i class="fa  fa-thumbs-down"></i></a>
             <script type="text/javascript">
function approve<?php echo $album_id; ?>() {
  return confirm("You are about to unpublish data.Are u sure you want to proceed?");
}
</script>
	       </td>   
      <?php } ?>  
</div>
       </tr>               
                          
             
                            <?php       }  
  
  ?>
        
                 </tbody>                                                              
            </table>   
                          
                            <?php       }  
  
  ?>          
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