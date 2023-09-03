<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php'; ?>
<head>
<meta name="robots" content="INDEX,FOLLOW">
    <title>Photo Gallery-Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aic tanzania photos,photos of aic tanzania,event photos of aic tanzania">
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
						<h5>Photo Gallery</h5>
					</div>
					<div class="row">
                    <?php 
                          $morealbums=  mysqli_query($con,"SELECT * FROM albums  WHERE published='published' ORDER BY album_id DESC");
                                    if(mysqli_num_rows($morealbums)>0){
                                        while($row = mysqli_fetch_array($morealbums)){
                                            $album_id=$row['album_id'];
                                            $album_name=$row['album_name'];
                                            $description=$row['description'];
                                            $image=  mysqli_query($con,"SELECT * FROM covers WHERE album_id='$album_id'") or die(mysqli_error($con));
                                                        $row2= mysqli_fetch_array($image);
                                            $ext=$row2['ext'];
                                            $image_name=$row2['image_name'];
                                            ?>
                                            <div class="col-md-4">
                            <a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace('/','_', str_replace(' ','-',$album_name)).'.html'; ?>" >
							<img src="<?php echo BASE_URL.'/albums/'.$image_name.'.'.$ext;?>"  class="img-responsive" alt=""/>
							<h4><a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace('/','_', str_replace(' ','-',$album_name)).'.html'; ?>" style="font-size:15px;"><?php echo $album_name; ?></a></h4>
                                                    </a>
						</div>                                   
                                         <?php }}else{
                                echo '<div class="alert alert-warning">No Photo Gallery Added yet</div>';
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
