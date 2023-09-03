<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

  <?php 
  include 'includes/conn2.php';
$id=$_GET['id'];
            $album=  mysqli_query($con,"SELECT * FROM albums WHERE  album_id='$id'");
             $row = mysqli_fetch_array($album);
          $album_id=$row['album_id'];
          $album_name=$row['album_name'];
          $desc=$row['description'];
 $image=  mysqli_query($con,"SELECT * FROM covers WHERE album_id='$album_id'") or die(mysqli_error($con));
                    $row2= mysqli_fetch_array($image);
          $ext=$row2['ext'];
          $image_name=$row2['image_name'];
              
            ?>
<head>
    <title><?php echo $album_name; ?> photos | aictanzania.org</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="View <?php echo $album_name; ?> photos,Take a look at <?php echo $album_name; ?> photos,<?php echo $album_name; ?>">
    <meta name="author" content=""> 
    <meta name="robots" content="INDEX,FOLLOW">   
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
                        <!-- Welcome info -->
		<div class="welcome-wrap">
			<div class="container">
				<div class="col-md-16">
					<h3><?php echo $album_name; ?> photos</h3>
					<p> </p>
				</div>
			</div>
		</div>
		<!-- Welcome info -->
        
    	<!-- bible Wrap -->
	<div class="donation-wrap" data-stellar-background-ratio="0.10">
		<div class="container">
			<div class="col-md-16">
				<div id="donation-slider" class="flexslider">
					<ul class="slides">
                    <?php
                    $verses=  mysqli_query($con,"SELECT * FROM photos WHERE album_id='$id' AND published='published'") or die(mysqli_error($con));
                    // $verses2=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  AND verse_id!='$id1' ORDER BY verse_id DESC");
                    while($row=mysqli_fetch_array($verses)){
                        $photo_id=$row['photo_id'];
          //$album_id=$row3['album_id'];
          $caption=$row['caption'];
                             $ext=$row['ext'];
                                ?> <li>
                                         <a class="" title="<?php echo $caption; ?>" href="<?php echo BASE_URL.'/albums/photos/'.md5($photo_id).'.'.$ext;?>"><img class="img-responsive" src="<?php echo BASE_URL.'/albums/photos/'.md5($photo_id).'.'.$ext;?>" alt="<?php echo $caption; ?>" /></a>
                                            </li>
                                   
                                  <?php }?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Bible Wrap -->


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
