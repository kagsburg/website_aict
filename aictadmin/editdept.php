<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
   $id=$_GET['id'];
   $dept=$_GET['dept'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add / Edit department Details- Aic Admin</title>
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
                               
                                <h4 class="page-title">Addd or Edit <?php echo $dept; ?></h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add / Edit </h4>
                                                   <?php
            if (isset($_POST['whatwedo'],$_POST['aboutus'],$_POST['sponsors'],$_POST['programs'],$_POST['contacts'])){          
$whatwedo=mysqli_real_escape_string($con,trim($_POST['whatwedo']));
$aboutus=mysqli_real_escape_string($con,trim($_POST['aboutus']));
$sponsors=mysqli_real_escape_string($con,trim($_POST['sponsors']));
$programs=mysqli_real_escape_string($con,trim($_POST['programs']));
$contacts=mysqli_real_escape_string($con,trim($_POST['contacts']));
if((empty($whatwedo))&&(empty($aboutus))&&(empty($sponsors))&&(empty($programs))&&(empty($contacts))){
    $errors[]='All Fields shouldnt be empty';
}
if(!empty($errors)){
foreach($errors as $error){ 
echo '<div class="alert alert-danger">'.$error.'</div><br/>';
}
}
else{
    $check=  mysqli_query($con, "SELECT * FROM deptdetails WHERE dept_id='$id'");
    if(mysqli_num_rows($check)>0){
        mysqli_query($con, "UPDATE deptdetails SET aboutus='$aboutus',whatwedo='$whatwedo',programs='$programs',sponsors='$sponsors',contacts='$contacts' WHERE dept_id='$id'") or die(mysqli_error($con));
    }  else {
        mysqli_query($con,"INSERT INTO deptdetails(dept_id,aboutus,whatwedo,programs,sponsors,contacts) VALUES('$id','$aboutus','$whatwedo','$programs','$sponsors','$contacts')") or die(mysqli_error($con));
    }
   ?>
            <div class="alert alert-success">Data successfully Posted</div>
<?php            }}
                  
   $getdetails=  mysqli_query($con, "SELECT * FROM deptdetails WHERE dept_id='$id'");
  $row= mysqli_fetch_array($getdetails);
       $aboutus1=$row['aboutus'];
       $whatwedo1=$row['whatwedo'];
       $programs1=$row['programs'];
       $sponsors1=$row['sponsors'];
       $contacts1=$row['contacts'];
   
    ?>             
                              
                                    <form action="" method="post" enctype="multipart/form-data"  name="form">
                    
            <div class="form-group">
				<label class="control-label" for="textarea">About Us</label>
				<div class="controls">
				<textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="aboutus"><?php  echo $aboutus1; ?></textarea>                                                                   
			
                                </div>
			  </div>
                            <div class="form-group">
				<label class="control-label" for="textarea">What We do</label>
				<div class="controls">
				<textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="whatwedo"><?php echo $whatwedo1; ?></textarea>                                                                   
			
                                </div>
			  </div>
                             <div class="form-group">
				<label class="control-label" for="textarea">Programs</label>
				<div class="controls">
				<textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="programs"><?php echo $programs1; ?></textarea>                                                                   
			
                                </div>
			  </div>
                             <div class="form-group">
				<label class="control-label" for="textarea">Sponsors</label>
				<div class="controls">
				<textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="sponsors"><?php echo $sponsors1; ?></textarea>                                                                
			
                                </div>
			  </div>
                                        <div class="form-group">
				<label class="control-label" for="textarea">Contacts and Location</label>
				<div class="controls">
				<textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="contacts"><?php echo $contacts1; ?></textarea>                                                                   
			
                                </div>
			  </div>
			

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-info waves-effect waves-light" type="submit" name="submit">
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
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#churchname").hide();
                 $( ".churches" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });
                              $("#church"+ $(townid).val()).show();
                              
                           $('.churches').change(function() {                               
             	 $(this).closest("form").attr('action',  $(this).val());                  
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
			$(document).ready(function() {
//				$('form').parsley();
                                 $(".select2").select2();

              
			});
                               var frmvalidator  = new Validator("form");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
              frmvalidator.addValidation("diocese1","req","*Select Diocese to proceed");
              frmvalidator.addValidation("password","minlength=6","*password  should atleast be 6 characters");
 frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

    
		</script>



	</body>

</html>