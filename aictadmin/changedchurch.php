 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<?php
include 'includes/conn.php';
$id=$_GET['id'];
$us=$_GET['us'];
    if($_SESSION['aicwork']!='diocese secretary'){
header('Location:pastorlogin.php');
   }
     ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Change pastor's church- Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
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
                               
                                <h4 class="page-title">New Church</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Select New Church</h4>
                                   
       
             <?php
                               if(isset($_POST['submit'])){
                                        if(!empty($church)){
        
               mysqli_query($con, "UPDATE pastors SET church_id='$church'  WHERE pastor_id='$id'") or die(mysqli_error($con));
               mysqli_query($con, "UPDATE deptleaders  SET church_id='$church'  WHERE username='$us'") or die(mysqli_error($con));
               mysqli_query($con, "UPDATE registered_users SET church_id='$church'  WHERE username='$us'") or die(mysqli_error($con));
               echo '<div class="span9"><div class="alert alert-success">Church successfully Changed.Click <a href="dpastors">Here</a> to go back to pastors</div></div>';
           }else{
               echo '<div class="span9"><div class="alert alert-danger">Church shouldnt be empty. Click <a href="dpastors">Here</a> to go back</div></div>';
           
              
   }
                               
}
                            
                            ?>
           
                                    <form action="#" data-parsley-validate novalidate method="post">
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
						<option value="">Select Local Church</option>
					</select>
                                                                                                 <?php 
                                      $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1' ");
                                 while ($row=mysqli_fetch_array($pastorates)){
             $pastorate_id=$row['pastorate_id'];
                                                  
                                            ?>
					
    <select name = "church" id="church<?php echo $pastorate_id;?>" style="display:none;" class="churches form-control">
					<option value="">Select Local Church</option>
				  <?php                        
                                  $churches=  mysqli_query($con,"SELECT * FROM churches WHERE pastorate_id='$pastorate_id' ORDER BY church");
                                 while ($row=mysqli_fetch_array($churches)){
$church=$row['church'];
$status=$row['status'];
             $church_id=$row['church_id'];
            ?>
        
            <option value="newchurch?ch=<?php echo $church_id; ?>&&id=<?php echo $id;?>&&us=<?php echo $us; ?>" class="mine"><?php echo $church; ?></option>
            <?php } ?>					
</select>
                                                             <?php }?>
				</div>
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

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

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
		</script>



	</body>

</html>