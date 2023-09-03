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

		<title>Aic Admin</title>

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
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77043005-1', 'auto');
    ga('send', 'pageview');

</script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">
<?php include 'includes/header.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                         <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <?php
                                        $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE status='1'");
                                        ?>
                                        <h2 class="text-custom" data-plugin="counterup"><?php echo mysqli_num_rows($getdioceses); ?></h2>
                                        <h5>Dioceses</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                          <?php
                                        $getpastorates=  mysqli_query($con,"SELECT * FROM pastorates WHERE status='1'");
                                        ?>
                                        <h2 class="text-custom" data-plugin="counterup"><?php echo mysqli_num_rows($getpastorates); ?></h2>
                                        <h5>Pastorates</h5>
                                    </div>
                                </div>
                            </div>
                               <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <?php
                                        $getchurches=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'");
                                        ?>
                                        <h2 class="text-custom" data-plugin="counterup"><?php echo mysqli_num_rows($getchurches); ?></h2>
                                        <h5>Churches</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                             <?php
                                        $getfollowers=  mysqli_query($con,"SELECT * FROM registered_users WHERE status='active'");
                                        ?>
                                        <h2 class="text-custom" data-plugin="counterup"><?php echo mysqli_num_rows($getfollowers); ?></h2>
                                        <h5>Registered Users</h5>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div> <!-- container -->

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>

</html>