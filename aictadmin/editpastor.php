<?php
include 'includes/conn.php';
   $id=$_GET['id'];
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');}
$id=$_GET['id'];
   $getpastor=  mysqli_query($con,"SELECT * FROM pastors WHERE pastor_id='$id'");      
          $row=mysqli_fetch_array($getpastor);
             $pastor_id1=$row['pastor_id'];
             $pastorname1=$row['fullnames'];
             $status2=$row['status'];
             $church_id1=$row['church_id'];
              $dob1=$row['dob'];
                           $date1=$row['start_date'];
                   $wife1=$row['wife'];
                $bio1=$row['bio'];
                $username1=$row['username'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id1'");
                         $row2=  mysqli_fetch_array($getchurch);
                      $church1=$row2['church'];
                      $pastorate_id1=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id1' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate1=$row3['pastorate'];
             $diocese_id1=$row3['diocese_id'];
               $getdioceses1=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese_id1'");
                                       $row4=  mysqli_fetch_array($getdioceses1);
                                         $diocese1=$row4['diocese'];?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Pastor- Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
       <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
        <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
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
                               
                                <h4 class="page-title">Edit Pastor</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-10">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Edit Pastor</h4>
                                      <a  href="#editchurch" data-toggle="modal" button class="btn btn-info">Change church</a>
                                          <div id="editchurch" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit pastor Information</h3>
</div>
                                                <div class="modal-body">
                                                         <form action="" method="post">

                              <fieldset>
                                <div class="form-group">
          
				<label class="control-label" for="name1">Diocese</label>
				<div class="controls">
				<select   name = "diocese" id="diocese" class="form-control">
                                    <option value="">Select Diocese..</option>
                                                         <?php 
                                                $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                                                while ($row=mysqli_fetch_array($dioceses)){
$diocese=$row['diocese'];
$status=$row['status'];
             $diocese_id=$row['diocese_id'];
                                            ?>
                                                        <option value="<?php echo $diocese_id; ?>"><?php echo $diocese;?></option>
                                                <?php }?>
                                                    </select>
				 
				</div>
			  </div>
 <div class="form-group">
          
				<label class="control-label" for="name1">Pastorate</label>
				<div class="controls">
				<select name = "pastoratename" id="pastoratename" class="form-control">
						<option value="">Select Pastorate...</option>
					</select>
                                                     <?php 
                                             $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'");
                                                             while($row2=  mysqli_fetch_array($getdioceses)){
                                                    $diocese_id=$row2['diocese_id'];
                                                  
                                            ?>
					
    <select name = "pastorate" id="pastorate<?php echo $diocese_id;?>" style="display:none;" class="pastorates form-control">
					<option value="">Select Pastorate ...</option>
				  <?php                        
                               $dioceses=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1'  AND diocese_id='$diocese_id' ORDER BY pastorate");
                                 while ($row=mysqli_fetch_array($dioceses)){
$pastorate=$row['pastorate'];
$status=$row['status'];
             $pastorate_id=$row['pastorate_id'];
            ?>
            <option value="<?php echo $pastorate_id; ?>"><?php echo $pastorate; ?></option>
            <?php } ?>					
</select>
                                                             <?php }?>
                                              
				</div>
			  </div>
 <div class="form-group">
          
				<div class="controls">
				       <label class="control-label">Local Church</label>

                                 <select name = "churchname" id="churchname" class="form-control">
						<option value="">Select  Local Church</option>
					</select>
                                                                                                 <?php 
                                      $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1' ");
                                 while ($row=mysqli_fetch_array($pastorates)){
             $pastorate_id=$row['pastorate_id'];
                                                  
                                            ?>
					
    <select name = "church1" id="church<?php echo $pastorate_id;?>" style="display:none;" class="churches form-control">
					<option value="">Select  Local Church</option>
				  <?php                        
                                  $churches=  mysqli_query($con,"SELECT * FROM churches WHERE pastorate_id='$pastorate_id' ORDER BY church");
                                 while ($row=mysqli_fetch_array($churches)){
$church=$row['church'];
$status=$row['status'];
             $church_id=$row['church_id'];
            ?>
            <option value="changechurch?id=<?php echo $id;?>&&us=<?php echo $username1; ?>&&ch=<?php echo $church_id; ?>"><?php echo $church; ?></option>
            <?php } ?>					
</select>
                                                             <?php }?>
				</div>
			  </div>
                                  <div class="form-group">
                                                                           <div class="controls">
                                                                               <button type="submit" class="btn btn-info" style="margin-right:" name="change">Change</button>
				</div>
</div>
                              </fieldset>
                              </form>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                                                     <?php
                                                                                   
            if (isset($_POST['submit'])){          
$name2=mysqli_real_escape_string($con,trim($_POST['fullname2']));
$dob2=mysqli_real_escape_string($con,trim($_POST['dob2']));
$bio2=mysqli_real_escape_string($con,trim($_POST['bio2']));
 $wife2= mysqli_real_escape_string($con,trim($_POST['wife2']));
$status2='active';
$year2=mysqli_real_escape_string($con,trim($_POST['year2']));
$errors2=array();
$image_name2=$_FILES['image2']['name'];
if(!empty($image_name2)){
$image_size2=$_FILES['image2']['size'];
$image_temp2=$_FILES['image2']['tmp_name'];
$allowed_ext2=array('jpg','jpeg','png','gif','JPG','PNG','JPEG');
$image_ext=explode('.',$image_name2);
$image_ext2=end($image_ext);
if (in_array($image_ext2,$allowed_ext2)===false){
$errors2[]='File type not allowed';
}
if($image_size2>10097152){
$errors2[]='Maximum size is 10Mb';
}

}
if(!empty($errors2)){
foreach($errors2 as $error2){ 
echo '<div class="alert alert-error">'.$error2.'</div>';
}
}
else{
        $position='pastor';
        if(!empty($image_name2)){
  mysqli_query($con,"UPDATE pastors SET fullnames='$name2',dob='$dob2',start_date='$year2',ext='$image_ext2',wife='$wife2',bio='$bio2' WHERE pastor_id='$id'") or die(mysqli_error($con));
  $image_name2=md5($id);
$image_file2=$image_name2.'.'.$image_ext2;
move_uploaded_file($image_temp2,'../leaders/pastors/'.$image_file2) or die(mysqli_error($con));
}else{
  mysqli_query($con,"UPDATE pastors SET fullnames='$name2',dob='$dob2',start_date='$year2',wife='$wife2',bio='$bio2' WHERE pastor_id='$id'") or die(mysqli_error($con));
}
  $adduser=  mysqli_query($con,"UPDATE registered_users SET fullnames='$name2',dob='$dob2'  WHERE username='$username1'") or die(mysqli_error($con));

                            echo '<div class="alert alert-success" style="text-align:center"> Pastor Profile successfully Edited</div>';  
            }}
  $getpastor=  mysqli_query($con,"SELECT * FROM pastors WHERE pastor_id='$id'");      
          $row=mysqli_fetch_array($getpastor);
             $pastor_id1=$row['pastor_id'];
             $pastorname1=$row['fullnames'];
             $status2=$row['status'];
             $church_id1=$row['church_id'];
              $dob1=$row['dob'];
                           $date1=$row['start_date'];
                   $wife1=$row['wife'];
                $bio1=$row['bio'];
                $username1=$row['username'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id1'");
                         $row2=  mysqli_fetch_array($getchurch);
                      $church1=$row2['church'];
                      $pastorate_id1=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id1' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate1=$row3['pastorate'];
             $diocese_id1=$row3['diocese_id'];
               $getdioceses1=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese_id1'");
                                       $row4=  mysqli_fetch_array($getdioceses1);
                                         $diocese1=$row4['diocese'];
    ?>        
                                    <form action="" method="post" name="form">
                                       
   <div class="form-group">
				<label class="control-label" for="name1">Full Names</label>
			
				  <input type="text" class="form-control" id="fullname" name="fullname2"  placeholder="enter fullname" required="required" value="<?php echo $pastorname1; ?>">
</div>
			
     <div class="form-group">
				<label class="control-label" for="name1">Profile picture (Leave Blank if not changing)</label>
				<div class="controls">
				  <input type="file" class="form-control"  name="image2" >
</div>
			  </div>
       
 
      <div class="form-group">
				<label class="control-label" for="name1">Married to</label>
				<div class="controls">
				  <input type="text" class="form-control" id="username"  name="wife2" placeholder="enter your wife/husband's name" value="<?php echo $wife1; ?>">
				 
				</div>
			  </div>
             <div class="form-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
				  <input type="text" class="form-control" id="dob"  name="dob2" placeholder="enter date of birth" required="required" value="<?php echo $dob1; ?>"> 
				 
				</div>
			  </div>
    
   
             <div class="form-group">
				<label class="control-label" for="name1">Year when pastorship was started</label>
				<div class="controls">
				  <input type="text" class="form-control" name="year2"   placeholder="enter year when pastorship was started" required="required" value="<?php echo $date1; ?>">
				 
				</div>
			  </div>

      <div class="form-group">
				<label class="control-label" for="textarea">Enter Biography</label>
				<div class="controls">
		<textarea class="ckeditor" cols="70" id="editor1" name="bio2" rows="10" required="required">    <?php echo $bio1; ?></textarea>
                                </div>
			  </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                               Edit Pastor
                                            </button>
                                          
                                        </div>

                                    </form>
                      
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
 <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script src="../js/gen_validatorv4.js"></script>
        <script type="text/javascript">
           
    $('#pastoratename').click(function() {
        if ( $('#diocese').val() === '') {
        	alert("Please Select a Diocese First");
        }     
    });   
    
          $('#diocese').change(function() {
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#pastoratename").hide();
                 $( ".pastorates" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });

             $("#pastorate"+ $('#diocese').val()).show();
             var townid=  $("#pastorate"+ $('#diocese').val());
  $('.pastorates').change(function() {
        if( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#churchname").hide();
                 $( ".churches" ).each(function( index ) {
		        		// console.log(this.id);
		                 $("#"+this.id).hide();		            
		        });
                              $("#church"+ $(townid).val()).show();
                          
                           $('.churches').change(function() {
        if( $(this).val() !== '') {
       	 $(this).closest("form").attr('action',  $(this).val());
                         
                    }
                    });
                    }
                      else {       	
             $("#churchname").show();
                 $( ".churches" ).hide();
                                   }
      
  });
        }
       else {
       	
             $("#pastoratename").show();
                 $( ".pastorates" ).hide();
                   $("#churchname").show();
                 $( ".churches" ).hide();
            
                     }
    });
         var frmvalidator  = new Validator("form");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
              frmvalidator.addValidation("password","minlength=6","*password  should atleast be 6 characters");
 frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

    
		</script>



	</body>

</html>