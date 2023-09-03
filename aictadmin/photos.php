<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
      $album_id=$_GET['album_id'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Album photos- Aic Admin</title>
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
                               <?php 
              $album=mysqli_query($con,"SELECT * FROM albums WHERE album_id ='$album_id'"); 
                               $row= mysqli_fetch_array($album);
                               $album_name=$row['album_name'];
                               $description=$row['description'];
                               
           ?>
                                <h4 class="page-title"><?php echo $album_name;?></h4>
                                
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
                <a href="addphotos.php?album_id=<?php echo $album_id.'&&name='.$album_name;?>" class="btn btn-lg btn-info" style="border-radius:0px;margin: 10px">
                         Add Photos <i class="fa fa-plus"></i>
                         </a>
                                   <p>    <?php
                               echo  nl2br($description);
                               ?></p>
                                   <a href="#desc" data-toggle="modal" style="float:right;margin-top: 5px;"><button class="btn btn-inverse" style="border-radius:0px;margin: 3px">Edit Album Details</button></a>
                                </div>
                                            <div id="desc" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit album</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form class="" method="POST" action="edit_album.php?album_id=<?php echo $album_id;?>">
			<fieldset>
		                            <div class="control-group">
				<label class="control-label" for="name1">Edit Album Name</label>
				<div class="controls">
				  <input type="text" class="form-control" style="width:500px"  name="album" value='<?php echo $album_name;?>' placeholder="enter album name" required="required">
				
				</div>
			  </div>
                             <div class="form-group">
                                 <label class="control-label" for="name1">Edit Album Descripton</label>
			<div class="controls">
				  <textarea class="ckeditor" id="ans" name="description" rows="3"  placeholder="enter album description"  required="required"><?php echo $description;?></textarea> 
				</div>
			  </div>
                                                                       <div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" style="margin-right:">Edit Album</button>
				</div></div>
							
			</fieldset>
		</form>
</div>
</div>
</div>
</div>
                                   
                                <div class="col-lg-8">
                                     <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>
                                <table class="table table-responsive">
                                    <thead>
                                        <tr><th>Image</th><th>Caption</th><th>&nbsp;</th></tr>
                                    </thead>
                                    <tbody>
                                          <?php  
  $getphotos=  mysqli_query($con,"SELECT * FROM photos WHERE album_id='$album_id' AND published='published'") or die(mysqli_error($con));
 
      while ($row = mysqli_fetch_array($getphotos)){
          $id=$row['photo_id'];
          $album_id=$row['album_id'];
          $caption=$row['caption'];
                             $ext=$row['ext'];
         $published=$row['published'];
          ?>
                                        <tr>
                                            <td> <a class="pull-left" href="<?php echo '../albums/photos/'.md5($id).'.'.$ext;?>" >
       <img class="media-object" src="<?php echo '../albums/photos/'.md5($id).'.'.$ext;?>" alt="<?php echo $caption; ?>" title="<?php echo $caption; ?>" alt="<?php echo $album_name; ?>" title="click to view photos" style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a></td>
   <td><?php echo $caption; ?></td>
   <td> <?php
          if($_SESSION['aictlevel']==1){ 
      if($caption=="no caption"){ ?>            
                                <a  href="#caption<?php echo $id; ?>" data-toggle="modal" class="btn btn-xs btn-warning">
                                      add caption</a> 
                                     <?php }  else {
                                      ?>
       
       <a  href="#caption<?php echo $id; ?>" data-toggle="modal"><button  class="btn btn-xs btn-info">edit caption</button></a> 
                               
                                       
                         
      <?php  } ?>
              <div id="caption<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit Caption</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="add_caption.php?id=<?php echo $id;?>" method="post" name="form<?php echo $id;?>">
			<fieldset>
		                            <div class="form-group">
				
				<div class="controls">
				  <input type="text" class="form-control" style="width:500px"  name="caption<?php echo $id;?>" value='<?php echo $caption;?>' placeholder="enter Caption" required="required">
				 <div id='form<?php echo $id;?>_subject<?php echo $id;?>_errorloc' class='text-error'>
</div>
				</div>
			  </div>
                             
                                                                       <div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" style="margin-right:">Edit Caption</button>
				</div></div>
							
			</fieldset>
		</form>
<script>
 var frmvalidator  = new Validator("form<?php echo $id;?>");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
 
      frmvalidator.addValidation("caption<?php echo $id?>","req","caption not entered");
</script>
</div>
</div>
</div>
</div>
          <a href="unpublish_photo.php?id=<?php echo $id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger" onclick="return approve<?php echo $id; ?>()">unpublish <i class="fa  fa-thumbs-down"></i></a>
   <script type="text/javascript">
function approve<?php echo $id; ?>() {
  return confirm("You are about to unpublish data.Are u sure you want to proceed?");
}
</script>
                          <?php           } ?>
                             
   </td>
                                        </tr>
      <?php }?>
                                    </tbody>
                                </table>
                                </div>
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