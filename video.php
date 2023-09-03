<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
    $id=$_GET['id'];
  mysqli_query($con, "UPDATE videos SET views=views+1 WHERE video_id='$id'");
 $video=mysqli_query($con, "SELECT * FROM videos WHERE video_id='$id'");
 $row=  mysqli_fetch_array($video);
  $video_name=stripslashes($row['video_name']);
  $video_id=$row['video_id'];
                                    $img=$row['image'];
                                    $video_name=$row['video_name'];
 ?>
<head>
  <title><?php echo $video_name; ?> video on aictanzania.org(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Watch and share <?php echo $video_name; ?>  from our official site:www.aictanzania.org">
   <meta property="og:title" content="<?php echo $video_name; ?> | Aictanzania.org" />
                <meta property="og:type" content="Video" />
                  <meta property="og:url" content="<?php echo BASE_URL; ?>/video/<?php echo $id.'/'.str_replace(' ','-',$video_name).'.html';?>" />
                <meta property="og:image" content="http://i1.ytimg.com/vi/<?php echo $img;?>/0.jpg" />
                <meta property="og:site_name" content="Eachamps.com" />
                            <meta property="og:fb:app_id" content="471963152929479" />
                            <meta property="og:description" content="Watch <?php echo $video_name;?>"> 
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
       
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body id="pages">
    <div id="fb-root"></div>
                <script>
                    window.fbAsyncInit = function() {
                        // init the FB JS SDK
                        FB.init({
                            appId: '471963152929479', // App ID from the app dashboard
                            channelUrl: 'http://www.aictanzania.org/', // Channel file for x-domain comms
                            status: true, // Check Facebook Login status
                            xfbml: true // Look for social plugins on the page
                        });

                        // Additional initialization code such as adding Event Listeners goes here
                    };

                    // Load the SDK asynchronously
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
     <div class="body">
        <!-- ******HEADER****** --> 
        <div class="slider-wrap">
                <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>
        </div>
        <div class="white-bg">
            <!-- Welcome info -->
		<div class="welcome-wrap">
			<div class="container">
				<div class="col-md-16">
					<h3><?php echo $video_name; ?></h3>
					<p> <iframe width="100%" height="400" src="//www.youtube.com/embed/<?php echo $img;?>" frameborder="0" allowfullscreen></iframe></p>
				</div>
			</div>
		</div>
		<!-- Welcome info -->

        <!-- Team content -->
        <div class="main-wrap">
			<!-- <div class="space90"></div> -->
			<div class="container team2">
				<div class="col-md-16">
					<h5>More Videos</h5>
				</div>
                <?php 
                                    $videos=mysqli_query($con, "SELECT * FROM videos WHERE status='published' AND video_id!='$id' ORDER BY video_id DESC LIMIT 9");
                                    if(mysqli_num_rows($videos)>0){
                                    while($row=  mysqli_fetch_array($videos)){
                                    $video_id=$row['video_id'];
                                    $img=$row['image'];
                                    $video_name=$row['video_name'];
                                 
                                                                               
                                                                              ?>
                                                   <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                                    <div class="album-cover" style="height: 180px;">
                                        <a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>">
                                            <div style="height:auto;">
                                            <img class="img-responsive" src="http://i1.ytimg.com/vi/<?php echo $img;?>/mqdefault.jpg" alt="<?php echo $video_name;?>" /></div>
                                        </a>
                                        <div class="desc">
             <h4><small><a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>"><?php echo $video_name; ?></a></small></h4>
                                                                                   </div>
                                    </div>
                                </div>
                            <?php }}else{
                                echo '<div class="alert alert-warning">No More Videos Added yet</div>';
                            }?>
                
                
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
