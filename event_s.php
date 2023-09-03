<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<?php 
  include 'includes/conn2.php';
//   $type=$_GET['type'];
  ?>
<head>
<meta name="robots" content="INDEX,FOLLOW">
    <title>Events - Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Latest Aic tanzania <?php echo $type; ?>,All  <?php echo $type; ?> that are happening with Aic Tanzania">
    <meta name="author" content="">    
    <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>    
    <!-- Global CSS -->
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
        <div class="white-bg">
		<div class="main-wrap">
			<div class="container">
				<!-- Events content -->
				<div class="col-md-12">
					<div class="events-wrap events-wrap-big">
						<ul>
                        <?php 
                          $time=  time();
                         $featured=  mysqli_query($con, "SELECT * FROM events WHERE  published='published' AND (event_date-$time)>=0 ORDER BY event_date");
                             if(mysqli_num_rows($featured)>0){
                                                   while($row=  mysqli_fetch_array($featured)){
                                $id=$row['event_id'];
                              $name=stripSlashes($row['event_name']);
                                    $name2 = trim(preg_replace('/[^a-zA-Z0-9\-]/', ' ', $name)); 
                              $venue=$row['event_venue'];
                              $date=$row['event_date'];
                               $time=$row['event_time'];
                              $description=$row['event_description'];
                                 $category=$row['event_category'];
                               $event_photo= mysqli_query($con, "SELECT * FROM event_photos WHERE event_id='$id'");
                              $row2=  mysqli_fetch_array($event_photo);
                              $image_name=$row2['image_name'];
                              $ext=$row2['ext'];
                          ?>	
                          <li>
								<div class="row">
									<div class="col-md-12">
										<div class="date"><?php echo date('d',$date); ?><span><?php echo date('M',$date); ?></span></div>
										<h4><a href="<?php echo BASE_URL.'/event/'.$id.'/'.str_replace(' ','-',$name2).'.html"'; ?>"><?php echo $name; ?></a> <span><?php echo substr($description,0,200).'...'; ?></span></h4>
										<div class="time"><?php echo $time; ?> - <?php echo $venue; ?></div>
                                        <a class="read-more pull-right" href="<?php echo BASE_URL.'/event/'.$id.'/'.str_replace(' ','-',$name2).'.html"'; ?>">read more<i class="fa fa-chevron-right"></i></a>
									</div>
									<!-- <div class="col-md-4">
										<ul class="hb-social">
											<li class="hb-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="hb-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="hb-plus"><a href="#"><i class="fa fa-plus"></i></a></li>
										</ul>
									</div> -->
								</div>
							</li>
                                    <?php }}else{
                                        echo '<div class="alert alert-warning">No Events Posted Yet</div>';
                                    }?> 
							
							
						</ul>
					</div>
					<!-- <div class="page-meta">
						<div class="space25"></div>
						<ul class="page-nav">
							<li>Page 1 of 5 
							<li>
							<li class="active"><a href="#">1</a>
							<li>
							<li><a href="#">2</a>
							<li>
							<li><a href="#">3</a>
							<li>
							<li><a href="#">4</a>
							<li>
							<li><a href="#">5</a>
							<li>
						</ul>
						<ul class="page-nav-links">
							<li><a href="#">&laquo; Previous page</a></li>
							<li><a href="#">Next page &raquo;</a></li>
						</ul>
					</div> -->
				</div>
				<aside class="col-md-4">
					<!-- <div class="side-widget">
						<h5>Events Category</h5>
						<ul class="categories">
							<li><a href="<?php echo BASE_URL;?>/events/services.html">Services</a></li>
							<li><a href="<?php echo BASE_URL;?>/events/weddings.html">Weddings</a></li>
							<li><a href="<?php echo BASE_URL;?>/events/meetings.html">Meetings</a></li>
						</ul>
					</div> -->
					<div class="space50"></div>
					<!-- <div class="side-widget">
						<h5>Sort by months</h5>
						<ul class="categories">
							<li><a href="#">September 2013</a></li>
							<li><a href="#">October 2013</a></li>
							<li><a href="#">November 2013</a></li>
							<li><a href="#">December 2013</a></li>
							<li><a href="#">January 2014</a></li>
							<li><a href="#">February 2014</a></li>
							<li><a href="#">March 2013</a></li>
						</ul>
					</div> -->
					<!-- <div class="space50"></div>
					<div class="side-widget">
						<h5>Newsletter</h5>
						<div class="newsletter">
							<p class="space15">Sign up and be first to know about new events and other stuff</p>
							<input type="text" placeholder="Your E-mail afres">
							<a href="#">Sign up</a>
						</div>
					</div> -->
				</aside>
				<!-- Events content -->
			</div>
		</div>




	</div>
    

    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
   
    <!-- Javascript -->          
     <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
 <!-- JavaScript -->
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