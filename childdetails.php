<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php';
$id=$_GET['id'];
 $children=mysqli_query($con, "SELECT * FROM children WHERE status='published' AND child_id='$id' ORDER BY child_id DESC");
                                 $row=mysqli_fetch_array($children);
                                            $child_id=$row['child_id'];
                                            $name=$row['child_name'];
                                            $dob=$row['dob'];
                                            $gender=$row['gender'];
                                            $ext=$row['ext'];
                                            $story=$row['story'];
                                            $center=$row['center'];
              
            ?>
<head>
    <title>Sponsor <?php echo $name;?> -Africa Inland Church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo strip_tags($story);?>">
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
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/children/<?php echo md5($child_id).'.'.$ext;?>" alt="Sponsor <?php echo $name; ?>" class="img-responsive" alt=""/>
							<div class="space20"></div>
							<div class="line"></div>
							<!-- <ul class="team-single-meta">
								<li><a href="#"><span><i class="fa fa-envelope"></i></span> E-mail me</a></li>
								<li><a href="#"><span><i class="fa fa-skype"></i></span> Add me on Skype</a></li>
								<li><a href="#"><span><i class="fa fa-facebook"></i></span> Find me on Facebook</a></li>
								<li><a href="#"><span><i class="fa fa-twitter"></i></span> Follow me on Twitter</a></li>
								<li><a href="#"><span><i class="fa fa-rss"></i></span> Reply my Blog</a></li>
							</ul> -->
						</div>
						<div class="col-md-11 team-single">
							<h4><?php echo $name;?> <span>Bring a smile to the face of <?php echo $name;?> by showing him a giving heart</span></h4>
                            <div class="line"></div>
                            <ul class="team-single-meta">
                                         <li><strong>Date Of Birth:</strong><br/> <em><?php echo $dob;?></em></li>
                                        <li><strong>Gender:</strong> <br/><em><?php echo $dob;?></em></li>
                                        <li><strong>Center: </strong><br/> <em><?php echo $center;?></em></li>
<!--                                        <li><strong>Joined Center in:</strong><br/> <em> 20/12/2014</em></li>-->
                                        <li><strong>Story:</strong><br/> <em>
                                             <?php echo $story;?>
                                            </em></li>
                            </ul>
                            <div class="line"></div>
                            <h4>More Children</h4>   
                            <div class="container team2">
                            <?php 
                                    $children=mysqli_query($con, "SELECT * FROM children WHERE status='published' AND child_id!='$id' ORDER BY child_id DESC LIMIT 6");
                                    if(mysqli_num_rows($children)>0){
                                        while($row=mysqli_fetch_array($children)){
                                            $child_id=$row['child_id'];
                                            $name=$row['child_name'];
                                            $dob=$row['dob'];
                                            $ext=$row['ext'];
                                    ?>
                                    <div class="col-md-4">
                                            
                                            <a href="<?php echo BASE_URL;?>/child/<?php echo $child_id.'/'.str_replace(' ','-',$name).'.html';?>">
                                            <div style="height:150px;overflow: hidden;">
                                            <img class="img img-responsive" src="<?php echo BASE_URL;?>/children/thumbs/<?php echo md5($child_id).'.'.$ext;?>" title="Sponsor <?php echo $name;?>" alt="Sponsor <?php echo $name;?>" width="100%"/></div>
                                        </a>
                                        
             <h4><small><a href=""><?php echo $name;?></a></small></h4>
             <p><?php echo $dob; ?></p>
                                        <div class="line"></div>
                                        <a href="<?php echo BASE_URL;?>/child/<?php echo $child_id.'/'.str_replace(' ','-',$name).'.html';?>"><i class="fa fa-leaf"></i> Sponsor Me</a>
                                        
                                    </div> 
                                <?php }}?>
                                </div>                                           
						</div>
					</div>
				</div>
				<aside class="col-md-4">
					<div class="side-widget">
						<h5></h5>
						<ul class="categories">
							<li><a href="<?php echo BASE_URL;?>/bishops">Bishops</a></li>
							<li><a href="<?php echo BASE_URL;?>/pastors">Pastors</a></li>
							<li><a href="<?php echo BASE_URL;?>/deptleaders">Department Leaders</a></li>
						</ul>
					</div>
					<div class="space50"></div>
					
				</aside>
			</div>
			<!-- Main content -->
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

