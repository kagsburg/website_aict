<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
   $id=$_GET['id'];

       $deptleaders=  mysqli_query($con,"SELECT * FROM deptleaders WHERE status='active' AND deptleader_id='$id'");
                                                                 
                  $row=mysqli_fetch_array($deptleaders);

             $fullname1=$row['fullnames'];
             $activate=$row['status'];
             $date1=$row['start_date'];
              $dob1=$row['dob'];
                $dept_id1=$row['dept_id'];
                $id=$row['deptleader_id'];
                $position1=$row['position'];
                $wife1=$row['wife'];
                $bio1=$row['bio'];
                $ext1=$row['ext'];
                $cvs1=$row['cvs'];
                $username1=$row['username'];
                 $church_id1=$row['church_id'];
                 $director = $row['is_director'];
                     $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id1'");
                                       $row4=  mysqli_fetch_array($getdept);
                                         $department1=$row4['department'];
                     $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id1'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church1=$row2['church'];
                      $pastorate_id1=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id1' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate1=$row3['pastorate'];
             $diocese_id1=$row3['diocese_id'];
               $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese_id1'");
                                       $row5=  mysqli_fetch_array($getdioceses);
                                         $diocese1=$row5['diocese'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Leader- Aic Admin</title>
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
                               
                                <h4 class="page-title">Edit Leader</h4>
                                    <a  href="#editchurch" data-toggle="modal" button class="btn btn-info">Change church</a>
                                       <div id="editchurch" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit Leader Information</h3>
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
            <option value="changelchurch?id=<?php echo $id;?>&&us=<?php echo $username1; ?>&&ch=<?php echo $church_id; ?>"><?php echo $church; ?></option>
            <?php } ?>					
</select>
                                                             <?php }?>
				</div>
			  </div>
                                  <div class="form-group">
                                                                           <div class="controls">
                                                                               <button type="submit" class="btn btn-info" name="change">Change</button>
				</div>
</div>
                              </fieldset>
                              </form>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
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

                                    <h4 class="header-title m-t-0 m-b-30">Edit Leader</h4>
                                                            <?php
                                                                 if (isset($_POST['submit'])){          
$image_name=$_FILES['image2']['name'];
$image_size2=$_FILES['image2']['size'];
$image_temp2=$_FILES['image2']['tmp_name'];
$allowed_ext2=array('jpg','jpeg','png','gif','JPG','PNG','JPEG');
$image_ext=explode('.',$image_name);
$image_ext2=end($image_ext);

$cv_name2=$_FILES['cv']['name'];
$cv_size2=$_FILES['cv']['size'];
$cv_temp2=$_FILES['cv']['tmp_name'];
$allowedcv_ext2=array('doc','docx','DOC','DOCX','PDF','pdf');
$cv_ext=explode('.',$cv_name2);
$cv_ext2=end($cv_ext);

$name2=mysqli_real_escape_string($con,trim($_POST['fullname2']));
$position=mysqli_real_escape_string($con,trim($_POST['position']));
$department=mysqli_real_escape_string($con,trim($_POST['department']));
$dob2=mysqli_real_escape_string($con,trim($_POST['dob2']));
$bio2=mysqli_real_escape_string($con,trim($_POST['bio2']));
 $wife2= mysqli_real_escape_string($con,trim($_POST['wife2']));
$year2=mysqli_real_escape_string($con,trim($_POST['year2']));
$isdirector = isset($_POST['headline']) ? $_POST['headline'] : '';
$errors2=array();
if ($isdirector == 'yes') {
  $director = '1';
  // $check =  mysqli_query($con, "SELECT * FROM deptleaders WHERE status='active' and dept_id='$department' and fullname='$name1' and is_director=1");
  // if ($check > 0) {
  //   $errors[] = 'Department Director already exists.';
  // }
} else {
  $director = '0';
}
if((empty($department))||(empty($position))){
    $errors2[]='Some fields shouldnt be empty';
}
if(!empty($image_name)){
if (in_array($image_ext2,$allowed_ext2)===false){
$errors2[]='image File type not allowed';
}
if($image_size2>10097152){
$errors2[]='Maximum image size is 10Mb';
}
}
if(!empty($cv_name2)){
    if (in_array($cv_ext2,$allowedcv_ext2)===false){
$errors2[]='CV File type not allowed';
}
if($cv_size2>5097152){
$errors2[]='Maximum CV size is 5Mb';
}
}

if(!empty($errors2)){
foreach($errors2 as $error2){ 
echo '<div class="span9"><div class="alert alert-error">'.$error2.'</div></div>';
}
}
else{
    $ext='no';
   
if(!empty($image_name)){
        mysqli_query($con,"UPDATE deptleaders SET fullnames='$name2',dob='$dob2',position='$position',dept_id='$department',
        start_date='$year2',wife='$wife2',bio='$bio2',ext='$image_ext2',is_director='$director'  WHERE deptleader_id='$id'") or die(mysqli_error($con));
     $image_name2=md5($id);
  $image_file2=$image_name2.'.'.$image_ext2;
move_uploaded_file($image_temp2,'../leaders/deptleaders/'.$image_file2) or die(mysqli_error($con));
}
       if(!empty($cv_name2)){
               mysqli_query($con,"UPDATE deptleaders SET fullnames='$name2',dob='$dob2',position='$position',dept_id='$department',start_date='$year2',wife='$wife2',bio='$bio2',cvs='$cv_ext2',is_director='$director'  WHERE deptleader_id='$id'") or die(mysqli_error($con));
     $image_name2=md5($id);
$cv_file2=$image_name2.'.'.$cv_ext2;
           move_uploaded_file($cv_temp2,'../cvs/'.$cv_file2) or die(mysqli_error($con));
       }
       if((empty($image_name))&&(empty($cv_name2))){
     mysqli_query($con,"UPDATE deptleaders SET fullnames='$name2',dob='$dob2',position='$position',dept_id='$department',start_date='$year2',wife='$wife2',bio='$bio2',is_director='$director'  WHERE deptleader_id='$id'") or die(mysqli_error($con));        
       }
           echo '<div class="alert alert-success" style="text-align:center"> Leader  Details Successfully Edited</div>';  
            }
            }
            

                                                            ?>     
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                    <div class="form-group">
				<label class="control-label" for="name1">Full Names</label>
				
                                <input type="text" class="form-control" id="fullname" name="fullname2"  placeholder="enter fullname" value="<?php echo $fullname1; ?>" required="required">
</div>	
        <div class="form-group">
				<label class="control-label" for="name1">Profile picture (if Changing)</label>
				
				  <input type="file" class="form-control"  name="image2" >
</div>
                                         <div class="form-group">
				<label class="control-label" for="name1">Upload new CV (.pdf,.doc,docx)</label>
				
				  <input type="file" class="form-control"  name="cv" >
</div>
        <div class="form-group">
          
				<label class="control-label" for="name1">Departments</label>
				
				<select   name = "department"  class="form-control">
                                                     <option value="<?php echo $dept_id1; ?>"><?php echo $department1;?></option>
                                                         <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
                                                                        $dept=$row['department'];
                                                                        $status=$row['status'];
                                                                                    $dept_id=$row['department_id'];
                                                                        ?>
                                                        <option value="<?php echo $dept_id; ?>"><?php echo $dept;?></option>
                                                <?php }?>
                                                    </select>
			
			  </div>
 <div class="form-group">
				<label class="control-label" for="name1">Position</label>
				<div class="controls">
                                    <input type="text" class="form-control" id="fullname" name="position"  placeholder="enter Position" value="<?php echo $position1; ?>" required="required">
</div>
			  </div>
        <div class="checkbox">
                    <input type="checkbox" name="headline" <?php if ($director == 1){ echo "checked" ;} ?> value="yes" id="is_pastor">
                      <label for="is_pastor">  Is Department Leader Director ?</label>
                  </div>

			

      <div class="form-group">
				<label class="control-label" for="name1">Married to</label>
				<div class="controls">
                                    <input type="text" class="form-control" id="username"  name="wife2" value="<?php echo $wife1;?>"  placeholder="enter your wife/husband's name">
				 
				</div>
			  </div>

          <div class="form-group">
				<label class="control-label" for="name1">Date of Birth</label>
				
                                <input type="text" class="form-control" id="dob"  name="dob2" placeholder="enter date of birth" value="<?php echo $dob1; ?>" required="required"> 				 
				
			  </div>
    
   
           <div class="form-group">
				<label class="control-label" for="name1">Year when Leadership was started</label>
				
                                <input type="text" class="form-control" name="year2"   placeholder="enter year when pastorship was started" value="<?php echo $date1; ?>" required="required">
				
			  </div>

     <div class="form-group">
				<label class="control-label" for="textarea">Enter Biography</label>
				
                                <textarea class="ckeditor" cols="70" id="editor1" name="bio2" rows="10" required="required" ><?php echo $bio1;?></textarea>
                                </div>
			

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                Submit
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
        <!--<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>-->

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
		</script>



	</body>

</html>