<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
?>
<head>
    <title>Management Services-Africa Inland Church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AIC tanzania management services,AIC tanzania sponsors,AIC tanzania Donations">
    <meta name="author" content="">    
        <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
       	<!-- Bootstrap core CSS -->
           <link href="<?php echo BASE_URL;?>/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome icons CSS -->
<link href="<?php echo BASE_URL;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Theme Styles CSS-->
<link href="<?php echo BASE_URL;?>/css/style.css" rel="stylesheet">

<link href="<?php echo BASE_URL;?>/css/flexslider.css" rel="stylesheet">
<link href="<?php echo BASE_URL;?>/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo BASE_URL;?>/js/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body id="pages">
    <div class="body">
        <!-- ******HEADER****** --> 
        <div class="slider-wrap">
        <?php include 'includes/header.php';?>
        </div>
        <!-- ******NAV****** -->
        <div class="white-bg">
	<div class="main-wrap">
		<div class="container">

			<!-- Donation Content -->
			<div class="col-md-12 donation-wrap2">
                <div class="container team2">
                <div class="col-md-12">
					<h5>AICT Management Services</h5>
				</div>
                <?php 
                                    $service=mysqli_query($con, "SELECT * FROM services WHERE status='1' ORDER BY service_id DESC");
                                    if(mysqli_num_rows($service)>0){
                                        while($row=mysqli_fetch_array($service)){
                                            $service_id=$row['service_id'];
                                            $name=$row['service_name'];
                                          
                                            $ext=$row['ext'];
                                    ?>
                                    <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL;?>/service/<?php echo $service_id.'/'.str_replace(' ','-',$name).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/services/thumbs/<?php echo md5($service_id).'.'.$ext;?>" alt="Sponsor <?php echo $name; ?>" title="Sponsor <?php echo $name; ?>" />
                        </a>
                        </div>
                        <h4><small><a href=""><?php echo $name;?></a></small></h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL;?>/service/<?php echo $service_id.'/'.str_replace(' ','-',$name).'.html';?>" class="hb-more">Read More</a>
					
				</div>
                                 <!-- <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="album-cover">
                                        <a href="<?php echo BASE_URL;?>/service/<?php echo $service_id.'/'.str_replace(' ','-',$name).'.html';?>">
                                            <div style="height:150px;overflow: hidden;">
                                            <img class="img img-responsive" width="100%" src="<?php echo BASE_URL;?>/services/thumbs/<?php echo md5($service_id).'.'.$ext;?>" alt="Sponsor <?php echo $name; ?>" title="Sponsor <?php echo $name; ?>"/></div>
                                        </a>
                                        <div class="desc" >
             <h4 style="margin-top:0px"><small><a href=""><?php echo $name;?></a></small></h4>
             
                                            <a href="<?php echo BASE_URL;?>/service/<?php echo $service_id.'/'.str_replace(' ','-',$name).'.html';?>" > Read More</a>
                                        </div>
                                    </div>
                                </div>      -->
                                <?php }}  else {
                                        echo '<div class="col-md-12 col-sm-6 col-xs-12 text-center"><div class="alert alert-warning">No Services added yet</div></div>';
                                    }?>
                </div>
			</div>
			<aside class="col-md-4">
				<div class="side-widget">
                <ul class="categories">
							<li><a href="<?php echo BASE_URL;?>/bishops">Bishops</a></li>
							<li><a href="<?php echo BASE_URL;?>/pastors">Pastors</a></li>
							<li><a href="<?php echo BASE_URL;?>/deptleaders">Department Leaders</a></li>
						</ul>
				</div>
				<div class="space50"></div>
				<!-- <div class="side-widget">
					<h5>Featured posts</h5>
					<ul class="causes">
						<li>
							<img src="demo/donate/6.jpg" class="img-responsive" alt=""/>
							<h4><a href="#">Education books for poor kids</a></h4>
							<div class="donation-progress-wrap">
								<div class="donation-amount">$1741 <span>$3000 Goal</span></div>
								<div class="donate-progress"><span style="width:50%;"></span></div>
							</div>
						</li>
						<li>
							<img src="demo/donate/7.jpg" class="img-responsive" alt=""/>
							<h4><a href="#">Clean water for kids</a></h4>
							<div class="donation-progress-wrap">
								<div class="donation-amount">$58387 <span>$175000 Goal</span></div>
								<div class="donate-progress"><span style="width:30%;"></span></div>
							</div>
						</li>
					</ul>
				</div> -->
			</aside>
			<!-- Donation Content -->
		</div>
	</div>
	</div>
    </div><!--//wrapper-->

  <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script>   
    <script type="text/javascript" src="assets/js/map.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>          
    
    
</body>

</html> 

