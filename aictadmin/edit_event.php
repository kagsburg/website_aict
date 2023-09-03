<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
   $event_id=$_GET['event_id'];
$poster=$_GET['poster'];
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Edit Event- Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <!--<link rel="stylesheet" href="ckeditor/samples/sample.css">-->
      <link href="assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
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
                               
                                <h4 class="page-title">Add Event</h4>
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

                                    <h4 class="header-title m-t-0 m-b-30">Add Event</h4>
           
                <?php
                        if (isset($_POST['event'],$_POST['date'],$_POST['time'],$_POST['category'],$_POST['venue'],$_POST['description'])){
       
$event=mysqli_real_escape_string($con,trim($_POST['event']));
$venue=mysqli_real_escape_string($con,trim($_POST['venue']));
$category=$_POST['category'];
$time=mysqli_real_escape_string($con,trim($_POST['time']));
$date=strtotime(mysqli_real_escape_string($con,trim($_POST['date'])));
$description=mysqli_real_escape_string($con,trim($_POST['description']));

  mysqli_query($con,"UPDATE events SET event_name='$event',event_venue='$venue',event_date='$date',event_time='$time',event_category='$category',event_description='$description',published='unpublished'
          WHERE event_id='$event_id'") or die(mysqli_error($con));
           echo '<div class="alert alert-success" style="text-align:center">Event has been edited successfully,it has been sent for approval</div>'; 
            }
           
           $event_data= mysqli_query($con,"SELECT * FROM events WHERE event_id='$event_id'") or die(mysqli_error());
$row= mysqli_fetch_array($event_data);
$event1=$row['event_name'];
$venue1=$row['event_venue'];
$category1=$row['event_category'];
$time1=$row['event_time'];
$date1=$row['event_date'];
$description1=$row['event_description'];             
    ?>  
                                    <form action="" data-parsley-validate novalidate method="post" enctype="multipart/form-data" >
                                        
                                        <div class="form-group">
                                            <label for="userName">Event Name*</label>
                                            <input type="text" name="event" parsley-trigger="change" required     placeholder="Enter Event title" class="form-control" id="title" value="<?php echo $event1;?>">
      <div class="form-group">
                                            <label for="userName">Event date*</label>
                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="date" id="datepicker-autoclose" value="<?php echo date('d-M-Y',$date1);?>" parsley-trigger="change" required >
                                                                <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                                                            </div><!-- input-group -->
                                        </div>
                                              <div class="form-group">
                                            <label for="userName">Event Venue*</label>
                                            <input type="text" name="venue" parsley-trigger="change" required     placeholder="Enter event venue" value="<?php echo $venue1;?>"  class="form-control" id="title">
                                        </div>
                                                <div class="form-group">
                                            <label for="userName">Event Time*</label>
                                            <input type="text" name="time" parsley-trigger="change" required     placeholder="Enter event time"  value="<?php echo $time1;?>" class="form-control" id="title">
                                        </div>
                                    
                                           <div class="form-group">
				<label  for="name1">Category</label>				
                                            <select name="category" class="form-control" parsley-trigger="change" required>
		      <option value="<?php echo $category1;?>" selected="selected"><?php echo $category1;?></option>
		      <option value="Marriages">Wedding</option>
	                         <option value="Meetings">Meeting</option>
		<option value="Services">Services</option>
                                                                      </select>		
</div>
 
      <div class="form-group">
         <label  for="name1">Event Description</label>
				 
         <textarea class="ckeditor" cols="70" id="editor1"  rows="10"  name="description" parsley-trigger="change" required >
             <?php echo $description1;?>
         </textarea>
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
<script src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
           
			$(document).ready(function() {
                             $('#datepicker').datepicker();
            $('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
				$('form').parsley();
			});
		</script>



	</body>

</html>