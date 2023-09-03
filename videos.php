<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
     ?>
<head>
  <title>Music Videos-aictanzania.org(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
     <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Watch and share all church videos  from our official site:www.aictanzania.org">
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
        </div><!--//slider-wrap-->
    
        <div class="white-bg">
		<div class="main-wrap">
			<div class="container">

				<!-- Ministries Content -->
				<div class="col-md-16">
					<div class="ministries-head">
						<h5>Recently Added Videos</h5>
						<!-- <ul>
							<li class="grid"><a href="#"><i class="fa fa-th-large"></i> Grid</a></li>
							<li class="list"><a href="#"><i class="fa fa-bars"></i> List</a></li>
						</ul> -->
					</div>
					<div class="row">
                    <?php 
                                    $videos=mysqli_query($con, "SELECT * FROM videos WHERE status='published' ORDER BY video_id DESC LIMIT 8");
                                    if(mysqli_num_rows($videos)>0){
                                    while($row=  mysqli_fetch_array($videos)){
                                    $video_id=$row['video_id'];
                                    $img=$row['image'];
                                    $video_name=$row['video_name'];
                                 
                                                                               
                                                                              ?>
                                                                              <div class="col-md-4 ministries-grid">
                                                                                <a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>">
							<img src="http://i1.ytimg.com/vi/<?php echo $img;?>/mqdefault.jpg" alt="<?php echo $video_name;?>"  class="img-responsive" alt=""/>
							<h4><a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>"><?php echo $video_name;?></a></h4>
                                                    </a>
						</div>         
                              <?php }}else{
                                echo '<div class="alert alert-warning">No Videos Added yet</div>';
                            }?>
						
					</div>
				</div>
                <div class="col-md-16">
					<div class="ministries-head">
						<h5>Most Played Videos</h5>
						<!-- <ul>
							<li class="grid"><a href="#"><i class="fa fa-th-large"></i> Grid</a></li>
							<li class="list"><a href="#"><i class="fa fa-bars"></i> List</a></li>
						</ul> -->
					</div>
					<div class="row">
                    <?php 
                                    $videos=mysqli_query($con, "SELECT * FROM videos WHERE status='published' ORDER BY views DESC LIMIT 12");
                                    if(mysqli_num_rows($videos)>0){
                                    while($row=  mysqli_fetch_array($videos)){
                                    $video_id=$row['video_id'];
                                    $img=$row['image'];
                                    $video_name=$row['video_name'];
                                 
                                                                               
                                                                              ?>
                                                                              <div class="col-md-4 ministries-grid">
                                                                                <a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>">
							<img src="http://i1.ytimg.com/vi/<?php echo $img;?>/mqdefault.jpg" alt="<?php echo $video_name;?>"  class="img-responsive" alt=""/>
							<h4><a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>"><?php echo $video_name;?></a></h4>
                                                    </a>
						</div>         
                              <?php }}else{
                                echo '<div class="alert alert-warning">No Videos Added yet</div>';
                            }?>
						
					</div>
				</div>
				<!-- Ministries Content -->
			</div>
		</div>


	</div>
        <!-- ******CONTENT****** --> 
       
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
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


</html>	

