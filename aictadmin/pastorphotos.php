<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
      $id=$_GET['id'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Pastor photos- Aic Admin</title>
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
                                    $bishop=  mysqli_query($con,"SELECT * FROM pastors WHERE pastor_id='$id'");
                                    if(mysqli_num_rows($bishop)>0){
                                                            $row=  mysqli_fetch_array($bishop);
             
             $pastor_id=$row['pastor_id'];
             $fullname=$row['fullnames'];
             $status2=$row['status'];
             $church_id=$row['church_id'];
              $dob=$row['dob'];
              $ext=$row['ext'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                                    
                                    }
                        ?>
                                <h4 class="page-title">Pastor <?php echo $fullname;?> Photos</h4>
                                
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                  <a href="#desc" data-toggle="modal"><button class="btn btn-inverse" style="border-radius:0px;margin: 3px">Add Photos</button></a>
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>
           <div class="col col-lg-2">
               <img src="../leaders/pastors/<?php echo md5($id).'.'.$ext;?>"  class="img img-responsive img-thumbnail">
<!--                                        <a href="" style="float:right;margin-top: 5px;"><button class="btn btn-mini btn-danger" style="border-radius:0px;margin: 3px">
                                                Change profile  picture</button></a>-->
                                     </div>
                    
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
   <?php
 
        if(isset($_FILES['upload'])==true){
                
                $files=$_FILES['upload'];
                $caption='no caption';
                $published='published';
               for ($x=0;$x<count($files['name']);$x++){
             $image_size=$files['size'][$x];
                    $name=$files['name'][$x];
                    $allowed_ext=array('jpg','jpeg','png','gif','');
                    $image_ext=strtolower(end(explode('.',$name)));
                    $tmp_name=$files['tmp_name'][$x];
                   $errors=array();
if (in_array($image_ext,$allowed_ext)===false){
$errors[]='File type not allowed';
}
if($image_size>10097152){
$errors[]='Maximum size is 10Mb';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="error" style="float:right; margin-right:20%;font-weight:normal;font-size:1.2em; padding:3px;">'.$error.'</div><br/>';
}
}else{              
                   
                     mysqli_query($con,"INSERT INTO pastorphotos(pastor_id,ext,published,caption) VALUES('$id','$image_ext','$published','$caption')") or die(mysql_error());
                    
                       $image_id=mysqli_insert_id($con);
                       $photo_name=md5(mysqli_insert_id($con));
                                     $image_file=$photo_name.'.'.$image_ext;
                                     move_uploaded_file($tmp_name,'../leaders/pastors/photos/'.$image_file);
                                                         mysqli_query($con,"DELETE FROM pastorphotos WHERE ext=''");
               // header("Location:photos.php?album_id=".$album_id."&&name=".$photo_name);
                  
                            }}
                          }
?>

<form class="" class="form-horizontal" method="POST" enctype="multipart/form-data" action="" onsubmit='return validatephotos();'>
			
                            <div class="text  text-danger" id="photo_area"></div>
		                          <div class="form-group">
				<label class="control-label" for="name1">Add  photo 1</label>
				<div class="controls">
				  <input  type="file"name="upload[]" id='image1'>
</div>
			  </div>

             <div class="control-group">
				<label class="control-label" for="name1">Add  photo 2</label>
				<div class="controls">
				  <input  type="file"name="upload[]" id='image2'>
</div>
			  </div>
              <div class="form-group">
				<label class="control-label" for="name1">Add  photo 3</label>
				<div class="controls">
				  <input  type="file"name="upload[]" id='image3'>
</div>
			  </div>
              <div class="form-group">
				<label class="control-label" for="name1">Add  photo 4</label>
				<div class="controls">
				  <input  type="file"name="upload[]" id='image4'>
</div>
			  </div>
          <div class="form-group">
				<label class="control-label" for="name1">Add  photo 5</label>
				<div class="controls">
				  <input  type="file"name="upload[]" id='image5'>
</div>
			  </div>
                                                                         <div class="form-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" style="margin-right:">Add photos</button>
				</div></div>
							
			</fieldset>
		</form>
<script>
             
   function validatephotos()
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var image1 = $("#image1").val();
                    var image2 = $("#image2").val();
	var image3 = $("#image3").val();
                var image4 = $("#image4").val();
               var image5 = $("#image5").val();
	
	if((image1 == "")&&(image2 == "")&&(image3 == "")&&(image4 == "")&&(image5 == ""))
	{
		$("#photo_area").hide().fadeToggle('slow').html('Please upload Atleast one photo');
		$("#image1").focus();
                                   
                return false;
	}
	        else{
         
            return true;
        }
    }
           </script>
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
  $photos=  mysqli_query($con,"SELECT * FROM pastorphotos WHERE pastor_id='$id'");
  if(mysqli_num_rows($photos)<1){
  echo '<div class="alert alert-danger" style="text-align:center"> Oops!!You have No photos uploaded yet </div>';  }
  else{
      while ($row = mysqli_fetch_array($photos)){
          $photo_id=$row['photo_id'];
          $album_id=$row['pastor_id'];
          $caption=$row['caption'];
                             $photo_ext=$row['ext'];
         $published=$row['published'];
          ?>
                                        <tr>
                                            <td> <a class="pull-left" href="<?php echo '../leaders/bishops/photos/'.md5($photo_id).'.'.$photo_ext;?>" >
       <img src="<?php echo '../leaders/pastors/photos/'.md5($photo_id).'.'.$photo_ext;?>" alt="<?php echo $caption; ?>" title="<?php echo $caption; ?>"  title="click to view photos" width="100">
   </a></td>
   <td><?php echo $caption; ?></td>
   <td> <?php
          if($_SESSION['aictlevel']==1){ 
      if($caption=="no caption"){ ?>            
                                <a  href="#caption<?php echo $photo_id; ?>" data-toggle="modal">
                                    <button  class="btn btn-xs btn-inverse">Add caption</button></a> 
                                     <?php }  else {
                                      ?>
       
       <a  href="#caption<?php echo $photo_id; ?>" data-toggle="modal"><button  class="btn btn-xs btn-info">edit caption</button></a>                                                                       
                         
      <?php  } ?>
            <div id="caption<?php echo $photo_id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit Caption</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="pastorcaption.php?id=<?php echo $photo_id;?>" method="post" name="form<?php echo $photo_id;?>">
			<fieldset>
		                            <div class="form-group">
				
				<div class="controls">
				  <input type="text" class="form-control" style="width:500px"  name="caption<?php echo $photo_id;?>" value='<?php echo $caption;?>' placeholder="enter Caption" required="required">
				 <div id='form<?php echo $photo_id;?>_subject<?php echo $photo_id;?>_errorloc' class='text-error'>
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
       <a href="unpublishpastorphoto?id=<?php echo $photo_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger" onclick="return approve<?php echo $photo_id; ?>()">unpublish <i class="fa  fa-thumbs-down"></i></a>
   <script type="text/javascript">
function approve<?php echo $photo_id; ?>() {
  return confirm("You are about to unpublish data.Are u sure you want to proceed?");
}
</script>
                          <?php           } ?>
                             
   </td>
                                        </tr>
  <?php }}?>
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