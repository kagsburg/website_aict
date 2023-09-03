<?php include "includes/conn2.php"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Africa Inland Church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta name="robots" content="INDEX,FOLLOW">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Africa Inland Church Tanzania(AICT) Official site for all latest news,AIC tanzania pastors and bishops information,AIC tanzania upcoming events,AIC tanzania administration structure,AIC tanzania departments">
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
    <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     
    <![endif]-->
    <script>
//      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
//    
//      ga('create', 'UA-24707561-9', '3rdwavemedia.com');
//      ga('send', 'pageview');
    
    </script>
    <meta name="google-site-verification" content="bwGUb9TdOUbYQCCizb510Ul-a54By7SFjbhur0MdG54" />
</head> 

<body class="slide-full">
    <div class="body">
        <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>

        <!-- Slider -->
		<div class="slider-wrapper theme-default">
			<div id="owl-homeslider" class="owl-carousel">
            <?php 
                             $headlines=  mysqli_query($con,"SELECT * FROM news WHERE published='published' AND headline='yes' ORDER BY article_id DESC LIMIT 4");
                             if(mysqli_num_rows($headlines)>0){
                                                 while($rows=  mysqli_fetch_array($headlines)){
            $subject2=$rows['article_title'];
            $description2=$rows['article_description'];
             $id2=$rows['article_id'];
               $headphotos=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id2'") or die(mysqli_error($con));
                     $row2= mysqli_fetch_array($headphotos);
          $ext2=$row2['ext'];
          $photo_name2=$row2['photo_name'];
                    ?>
                    <div class="item main-header">
					<img alt="" class="" src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>">
				<div class="nivo-caption">
						<!-- <h2>Changing <br>School Culture</h2> -->
						<p><?php echo $subject2; ?></p>
					</div>
				</div>
                  <?php }}?>
			</div>
		</div>
		<!-- Slider -->
        <!-- Home Shop -->
	<div class="home-shop">
		<div class="container">
			<h3>Lastest News</h3>
			<div id="hshop-slider" class="owl-carousel">
				
				
                <?php 
                             $headlines=  mysqli_query($con,"SELECT * FROM news WHERE published='published'  ORDER BY article_id DESC LIMIT 8");
                             if(mysqli_num_rows($headlines)>0){
                                                 while($rows=  mysqli_fetch_array($headlines)){
                                                                                                        $article_title=StripSlashes($rows['article_title']);
                                                    $subject2 = trim(preg_replace('/[^a-zA-Z0-9\-]/', ' ', $article_title)); 
                                                $description2=$rows['article_description'];
                                                $id2=$rows['article_id'];
                                                $headphotos=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id2'") or die(mysqli_error($con));
                                                        $row2= mysqli_fetch_array($headphotos);
                                            $ext2=$row2['ext'];
                                            $photo_name2=$row2['photo_name'];
                                                        ?>
                                                        <div class="item">
                                <div class="col-md-16 shop-item">
						<img src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>" title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject2;?>:aictanzania.org"/>
						<h5 class="product-title"><a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>"><?php echo $subject2;?></a></h5>
						
						<p><?php echo strip_tags(substr($description2,0,90)).'...';?></p>
					</div>
                    </div>
                                 <?php }} ?>
					
				
				
			</div>
		</div>
	</div>
	<!-- Home Shop -->

    	<!-- Sermons Videos -->
	<div class="home-wrap">
		<div class="container">
			<div class="col-md-8 music-wrap">
				<div class="row">
					<div id="sermons-slider" class="owl-carousel">
                    <?php 
                                  $videos=mysqli_query($con,"SELECT * FROM videos WHERE status='published' ORDER BY video_id DESC");
                                    if(mysqli_num_rows($videos)>0){
                                    $row=mysqli_fetch_array($videos);
                                    $video_id=$row['video_id'];
                                    $img=$row['image'];
                                    $video_name=$row['video_name'];
                                    ?>
                                    <div class="item">
							
                                        <h4>Lastest Videos </h4>
                                        <a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>">
                                        <img src="http://i1.ytimg.com/vi/<?php echo $img;?>/mqdefault.jpg" alt="<?php echo $video_name;?>"  class="img-responsive" width="100%" alt=""/>
                                        <!-- <iframe width="100%" height="400" src="//www.youtube.com/embed/<?php echo $img;?>" frameborder="0" allowfullscreen></iframe> -->
                                        <!-- <iframe class="video-iframe" src="http://www.youtube.com/embed/<?php echo $img;?>?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe> -->
                                            <p><?php echo $video_name; ?></p>
                                        </a>
                                        <a href="<?php echo BASE_URL;?>/videos" class="hb-more">Archive of Videos</a>
						            </div>
                                      <?php 
                                $othervideos=mysqli_query($con,"SELECT * FROM videos WHERE status='published' AND video_id!='$video_id' ORDER BY video_id DESC LIMIT 5");
                                
                                    while($row=mysqli_fetch_array($othervideos)){
                                      $video_id2=$row['video_id'];
                                        $img2=$row['image'];
                                        $video_name2=$row['video_name'];
                                    ?>
                                    <div class="item">
                                        <h4>Lastest Videos </h4>
                                        <a href="<?php echo BASE_URL.'/video/'.$video_id.'/'.str_replace(' ','-',$video_name).'.html"'; ?>">
                                        <img src="http://i1.ytimg.com/vi/<?php echo $img2;?>/mqdefault.jpg" alt="<?php echo $video_name2;?>"  class="img-responsive" width="100%" alt=""/>
                                        <!-- <iframe width="100%" height="400" src="//www.youtube.com/embed/<?php echo $img;?>" frameborder="0" allowfullscreen></iframe> -->
                                        <!-- <iframe class="video-iframe" src="http://www.youtube.com/embed/<?php echo $img2;?>?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe> -->
                                            <p><?php echo $video_name2; ?></p>
                                        </a>
                                        <a href="<?php echo BASE_URL;?>/videos" class="hb-more">Archive of Videos</a>
						            </div>
                                   <?php }  }else{
                                        echo '<div class="alert alert-warning">No videos Uploaded yet</div>';
                                    }
                                   ?>
                                   
					</div>
				</div>
			</div>
			<!-- Sermons Wrap -->

			<!-- Events Wrap -->
			<div class="col-md-8 events-wrap">
				<ul>
                <?php 
                          $time=  time();
                         $featured=  mysqli_query($con,"SELECT * FROM events WHERE  published='published' AND (event_date-$time)>=0 ORDER BY event_date  LIMIT 3");
                         if (mysqli_num_rows($featured)>0){
                                                   while($row=  mysqli_fetch_array($featured)){
                                $id=$row['event_id'];
                              $name=$row['event_name'];
                              $venue=$row['event_venue'];
                              $date=$row['event_date'];
                               $time=$row['event_time'];
                              $description=$row['event_description'];
                                 $category=$row['event_category'];
                               $event_photo= mysqli_query($con,"SELECT * FROM event_photos WHERE event_id='$id'");
                              $row2=  mysqli_fetch_array($event_photo);
                              $image_name=$row2['image_name'];
                              $ext=$row2['ext'];
                          ?>
                          <li>
						<div class="row">
							<div class="col-md-12">
								<div class="date"><?php echo date('d',$date);?><span><?php echo date('M',$date); ?></span></div>
								<h4><?php echo $name; ?></h4>
								<div class="time"><?php echo $time; ?> - <?php echo $venue; ?></div>
							</div>
                            <a class="read-more" href="<?php echo BASE_URL.'/event/'.$id.'/'.str_replace(' ','-',$name).'.html"'; ?>">read more<i class="fa fa-chevron-right"></i></a>
						</div>
					</li>	
                    
                            <?php } }
                            else { ?>
                            <div class="alert alert-warning">No events available</div>
                            <?php } ?>
				</ul>
				<div class="line"></div>
				<a href="<?php echo BASE_URL;?>/events/meetings.html" class="hb-more">See rest of events</a>
			</div>
			<!-- Events Wrap -->
		</div>
	</div>
    <!-- Sermons Videos -->

    	<!-- bible Wrap -->
	<div class="donation-wrap">
		<div class="container">
			<div class="col-md-16">
				<div id="donation-slider" class="flexslider">
					<ul class="slides">
                    <?php
                    $verses=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  ORDER BY verse_id DESC");
                           $row=mysqli_fetch_array($verses);
                            $verse=$row['verse'];
                            $id1=$row['verse_id'];
                          $published=$row['published'];
                                ?> 
                                    <li>
							<h3>Bible Quotes </h3>
							                                 
                                            <p class="bq"><i class="fa fa-quote-left"></i><?php echo $verse;  ?></p>
						</li>
                                       <?php
                    $verses2=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  AND verse_id!='$id1' ORDER BY verse_id DESC");
                         while($row=mysqli_fetch_array($verses2)){
                            $verse2=$row['verse'];
                            $id2=$row['verse_id'];
                          $published2=$row['published'];
                                    ?> 
                                     <li>
							<h3>Bible Quotes </h3>
							<p class="bq">                                  
                            <i class="fa fa-quote-left"></i><?php echo $verse2;  ?>
                            </p>
						</li>
                                   
                                  <?php }?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Bible Wrap -->
    <div class="home-wrap">
		<div class="container">
			<div class="col-md-8 music-wrap">
				<div class="row">
					<div  class="owl-carousel music-slider">
						
                        <?php 
                           $songs=  mysqli_query($con,"SELECT * FROM audios WHERE status='published' ORDER BY song_id DESC LIMIT 5");
                                                                                 if(mysqli_num_rows($songs)){
                                                                        while($row=  mysqli_fetch_array($songs)){
                                                                        $song_name=$row['song_name'];
                                                                        $song_id=$row['song_id'];
                                                                        $plays=$row['plays'];
                                                                        $downloads=$row['downloads'];
                                                                        $artists=$row['artistes'];
                                                                        $songext=$row['ext'];
                                              
                                                                              ?>
                                                                              <div class="item">
                                                                              <div class="col-md-8 image-container-music">
                                                                              <img class="img-responsive" src="<?php echo BASE_URL; ?>/assets/images/speakers.png">	
							</div>
                            <div class="col-md-8">
								<h4>Latest Audio</h4>
								<div class="music-info">
									<h5><?php echo $song_name;?></h5>
									<p> <a href="<?php echo BASE_URL; ?>/download.php?path=audio_files/<?php echo $song_name.'-'.$artists.'_'.$song_id.'[aictanzania.org]'.'.'.$songext;?>&&uh=<?php echo $song_id; ?>"><?php echo $artists;?></a></p>
								</div>
								<ul class="m-ico">
									<li><a href="<?php echo BASE_URL; ?>/download.php?path=audio_files/<?php echo $song_name.'-'.$artists.'_'.$song_id.'[aictanzania.org]'.'.'.$songext;?>&&uh=<?php echo $song_id; ?>" class="m-ico3"></a></li>
									<!-- <li><a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>" class="m-ico2"></a></li> -->
									<!-- <li><a href="#" class="m-ico3"></a></li> -->
								</ul>
								<div class="line"></div>
								<a href="<?php echo BASE_URL;?>/audios" class="hb-more">Archive of Audios</a>
								
							</div>
                            </div>
                            <?php }}?>
							
						
					</div>
				</div>
			</div>
			<!-- Sermons Wrap -->

			<!-- Events Wrap -->
			<div class="col-md-8 music-wrap">
                <div class="row">
                    <div class="owl-carousel music-slider">
                    <?php  
                                        $albums=  mysqli_query($con,"SELECT * FROM albums WHERE published='published' ORDER BY album_id DESC LIMIT 3");
                                        
                                            while($row = mysqli_fetch_array($albums)){
                                                $album_id=$row['album_id'];
                                                $album_name=$row['album_name'];
                                                $description=$row['description'];
                                                $image=  mysqli_query($con,"SELECT * FROM covers WHERE album_id='$album_id'") or die(mysqli_error($con));
                                                            $row2= mysqli_fetch_array($image);
                                                $ext=$row2['ext'];
                                                $image_name=$row2['image_name'];
                                                if(mysqli_num_rows($albums)>0){
                                                ?>
                                                 <div class="item">
                                                                              <div class="col-md-8">
                                                                              <a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace(' ','-',$album_name).'.html"'; ?>"><img class="img-responsive" src="<?php echo BASE_URL.'/albums/'.$image_name.'.'.$ext;?>" width="100%" alt="<?php echo $album_name;?>" /></a>
							</div>
                            <div class="col-md-8">
								<h4>Photo Albums</h4>
								<div class="music-info">
									<p> <a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace(' ','-',$album_name).'.html"'; ?>"><?php echo $album_name;?></a></p>
								</div>
								
							</div>
                            </div>
                        <!-- <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                            <div class="album-cover">
                                <a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace(' ','-',$album_name).'.html"'; ?>"><img class="img-responsive" src="<?php echo BASE_URL.'/albums/'.$image_name.'.'.$ext;?>" width="100%" alt="<?php echo $album_name;?>" /></a>
                                <div class="desc">
                                    <h4><small><a href="<?php echo BASE_URL.'/photos/'.$album_id.'/'.str_replace(' ','-',$album_name).'.html"'; ?>"><?php echo $album_name;?></a></small></h4>
                                                                   </div>
                            </div>
                        </div> -->
                           <?php }}?>
                    </div>
                </div>
				
				<div class="line"></div>
				<a href="<?php echo BASE_URL;?>/gallery" class="hb-more">See rest of gallery</a>
			</div>
			<!-- Events Wrap -->
		</div>
	</div>	

</div>


      
                                                    
    <!-- ******FOOTER****** --> 
    <?php include 'includes/footer.php'; ?>
    <!-- *****CONFIGURE STYLE****** -->  

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