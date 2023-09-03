<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
?>
<head>
    <title>Sponsor a Child-Africa Inland Church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sponsor a child at AIC tanzania,Change a child's life at AIC Tanzania,AIC tanzania Children">
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
<link href="<?php echo BASE_URL;?>.js/owl-carousel/owl.carousel.css" rel="stylesheet">
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
				<div class="row">
					<ul class="donation-inner">
						<li>
							<div class="col-md-11">
								<h4>AICT Children</h4>
								<p>
                                Bring a Smile to a Child's face because love and care is only what they need</p>
								<!-- <div class="donation-progress-wrap">
									<div class="donation-amount">$1741 <span>$3000 Goal</span></div>
									<div class="donate-progress"><span style="width:50%;"></span></div>
								</div> -->
								<div class="donation-btn">
									<a href="#">Donate now</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
                <div class="line"></div>
                <div class="container team2">
                <?php 
                                    $children=mysqli_query($con, "SELECT * FROM children WHERE status='published' ORDER BY child_id DESC");
                                    if(mysqli_num_rows($children)>0){
                                        while($row=mysqli_fetch_array($children)){
                                            $child_id=$row['child_id'];
                                            $name=$row['child_name'];
                                            $dob=$row['dob'];
                                          
                                            $ext=$row['ext'];
                                    ?>
                                    <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL;?>/child/<?php echo $child_id.'/'.str_replace(' ','-',$name).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/children/thumbs/<?php echo md5($child_id).'.'.$ext;?>" alt="Sponsor <?php echo $name; ?>" title="Sponsor <?php echo $name; ?>" class="img-responsive team-staff" />
                        </a>
                        </div>
                        <h4><small><a href=""><?php echo $name;?></a></small></h4>
             <p><?php echo $dob;?></p>
					<div class="line"></div>
					<a href="<?php echo BASE_URL;?>/child/<?php echo $child_id.'/'.str_replace(' ','-',$name).'.html';?>" class="hb-more">Sponsor Me</a>
					
				</div>
                                     
                                <?php }}  else {
    echo '<div class="col-md-4"><div class="alert alert-warning">No children added yet</div></div>';
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
    <script src="<?php echo BASE_URL;?>/js/jquery.js"></script>
<script src="<?php echo BASE_URL;?>/js/bootstrap.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.mobilemenu.js"></script>
<script src="<?php echo BASE_URL;?>/js/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.flexslider.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.easing.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="<?php echo BASE_URL;?>/js/jquery-ui.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.accordion.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.animateNumber.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.appear.js"></script>
<script src="<?php echo BASE_URL;?>/js/main.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.stellar.js"></script>           
    
    
</body>

<!-- Mirrored from themes.3rdwavemedia.com/college-green/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 07 Jun 2014 07:17:21 GMT -->
</html> 

