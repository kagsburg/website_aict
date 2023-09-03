<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<?php 
  include 'includes/conn2.php'; ?>
<head>
    <title>News-Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Latest Aic tanzania news,All that is happening with Aic Tanzania">
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
		<div class="main-wrap">
			<div class="container">
				<!-- Latest News content -->
				<div class="col-md-16">
					<div class="ministries-head">
						<h5>Latest News</h5>
						
					</div>
                    <?php
                            $allarticles=  mysqli_query($con, "SELECT * FROM news WHERE published='published'  ORDER BY article_id DESC LIMIT 5");
                             if(mysqli_num_rows($allarticles)>0){
                                                 while($rows=  mysqli_fetch_array($allarticles)){
                                        $article_title=StripSlashes($rows['article_title']);
                                            $subject2 = trim(preg_replace('/[^a-zA-Z0-9\-]/', ' ', $article_title)); 
                            $description2=$rows['article_description'];
                                        $id2=$rows['article_id'];
                                        $headphotos=  mysqli_query($con, "SELECT * FROM news_photos WHERE article_id='$id2'") or die(mysqli_error($con));
                                                $row2= mysqli_fetch_array($headphotos);
                                    $ext2=$row2['ext'];
                                    $photo_name2=$row2['photo_name'];
                            ?>
                            <div class="ministries-list">
                                <div class="row">
                                    <div class="col-md-4"><img class="img-responsive"  src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>" title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject2;?>:aictanzania.org" width="100%" /></div>
                                    <div class="col-md-12">
                                        <!-- <ul class="hb-social">
                                            <li class="hb-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="hb-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="hb-plus"><a href="#"><i class="fa fa-plus"></i></a></li>
                                        </ul> -->
                                        <h4><a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>"><?php echo $subject2;?></a></h4>
                                        <p><?php echo strip_tags(substr($description2,0,170)).'...';?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <article class="news-item page-row has-divider clearfix row">       
                                <figure class="thumb col-md-4 col-sm-6 col-xs-8">
                                    <img class="img-responsive"  src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>" title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject2;?>:aictanzania.org" width="100%" />
                                </figure>
                                <div class="details col-md-8 col-sm-6 col-xs-7">
                                    <h3 class="title"><a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>"><?php echo $subject2;?></a></h3>
                                    <p><?php echo strip_tags(substr($description2,0,170)).'...';?></p>
                                    <a class="btn btn-theme read-more" href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>">Read more<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </article>//news-item -->
                            <?php }}?>
                            <div id="more_tutorials_loaded"></div>
     
     
                        <!-- Holds the id of the last loaded content for the next contents to load -->
                        <input type="hidden" id="last_loaded_id" value="<?php echo $id2; ?>" />
                        
                        <!-- This is the load more contents button -->
                        <!--<div id="more_contents_loading"></div>-->
                            <?php if(mysqli_num_rows($allarticles)>4){?>
                            <button type="button" id="vpb_more_button" class="comments-more" onclick="Vasplus_Programming_Blog_Load_More_Contents();">Load more Articles</button>
                                <?php }?>
                </div>
				<!-- Ministries content -->
			</div>
		</div>


	</div>
        <!-- ******CONTENT****** --> 

    </div><!--//wrapper-->
  

    <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <!-- JavaScript -->
 <!-- <script src="<?php echo BASE_URL;?>/js/jquery.js"></script> -->
 <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script>
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
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/vpb_load_more_contents.js"></script>
</body>


</html> 