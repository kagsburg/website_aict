<?php
include 'includes/conn.php';
    if($_SESSION['aicwork']!='general secretary'){
header('Location:pastorlogin.php');
   }?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Bishops</title>
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
<?php include 'includes/pastormenu.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <h4 class="page-title">All Bishops</h4>
                               
                                <div class="card-box">
                                  

                                    <h4 class="header-title m-t-0 m-b-30">All Bishops</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                                                                      <table class="table  table-striped  table-responsive">
                                   
                                      <?php
                                           $bishops=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' ORDER BY bishop_id DESC");
           if(mysqli_num_rows($bishops)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no bishops added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
          <th >FULLNAMES</th>
                    <th >DOB</th>
                    <th>START DATE</th>
                    <th>DIOCESE</th>
            
                </tr></thead> <tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($bishops)){

             $id=$row['bishop_id'];
             $fullname=$row['fullname'];
             $activate=$row['status'];
             $date=$row['startdate'];
              $dob=$row['dob'];
                $diocese=$row['diocese'];
                $wife=$row['wife'];
                $bio=$row['bio'];
                  $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                                                  
                      ?> 
                                     
        <tr>
   <td><?php echo $fullname;?></td>
   <td><?php echo $dob; ?></td>
                              <td><?php  echo $date; ?></td>
          
                              <td>
        <?php  echo $diocesename; ?>
                    </td>

  </tr>
                                                  
                        <?php  } 
                                }?>
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
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script type="text/javascript">
        			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

	</body>

</html>