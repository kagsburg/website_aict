<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
  $id=$_GET['id'];
  mysqli_query($con, "UPDATE audios SET plays=plays+1 WHERE song_id='$id'");
   $song=mysqli_query($con, "SELECT * FROM audios WHERE song_id='$id'");
 $row=  mysqli_fetch_array($song);
  $song_name=$row['song_name'];
$song_id=$row['song_id'];
    $songext=$row['ext'];
     $artists=$row['artistes'];
   $plays=$row['plays'];
   $downloads=$row['downloads'];
    
 ?>
<head>
  <title><?php echo $song_name.' by '.$artists; ?>-Play and Download mp3 at www.aictanzania.org</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Play <?php echo $song_name.'by '.$artists; ?>,Download <?php echo $song_name.'by '.$artists; ?>,listen to <?php echo $song_name.'by '.$artists; ?> from  www.aictanzania.org" />   
        <meta property="og:title" content="<?php echo $song_name.' by '.$artists; ?> | aictanzania.org" />
                <meta property="og:type" content="song" />
                <meta property="og:url" content="<?php echo BASE_URL; ?>/song/<?php echo $id.'/'.str_replace(' ','-',$song_name).'.html';?>" />
                <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/images/aictcover.jpg" />
                <meta property="og:site_name" content="aictanzania.org" />
                            <meta property="og:fb:app_id" content="471963152929479" />
                            <meta property="og:description" content="Play and Download this song from our official website:aictanzania.org" />
    <meta name="author" content="">    
    <meta name="robots" content="INDEX,FOLLOW">
    <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>    
    <!-- Global CSS -->
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/player/css/gear.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link href="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/css/prettyPhoto.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/styles-red.css">
     
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
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
<div class="wrapper">
        <!-- ******HEADER****** --> 
  <?php include 'includes/header.php';?>
    
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left"><?php echo $song_name.' by '.$artists; ?></h1>
                    <div class="breadcrumbs pull-right">
                       
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="team-wrapper col-md-8 col-sm-7">        
                            <div class="row page-row" >
                                <figure class="thumb col-lg-4">
                                      <div class="gearWrap" style="background:#fff;"> <div id="gearContainer" class="gear" data-gear="<?php echo BASE_URL;?>/player/json/<?php echo md5($id);?>.json"></div>
       
   </div>
                                </figure>
                                <div class="details col-lg-8">
                                    <div class="page-row box box-border">
                                  <ul class="list-unstyled">
                                    <li><strong>Plays:</strong> <?php echo $plays;?></li>
                                    <li><strong>Downloads:</strong> <?php echo $downloads;?></li>
                                                                   </ul>
                                         <div class="col-lg-4"  style="width:90px">
                                                   <div  class="fb-like"
                                                     data-href="<?php echo BASE_URL; ?>/song/<?php echo $id.'/'.str_replace(' ','-',$song_name).'.html';?>" data-layout="button_count" 
                                                     data-action="like" data-show-faces="true" data-share="false">
                                                                                                          </div>
                                                                                                          </div> <div class="col-lg-8">
<!--<span class='st_sharethis_hcount' displayText='ShareThis' ></span>-->
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>

<div style="clear:both"></div>
          </div>
                                        <a href="<?php echo BASE_URL; ?>/download.php?path=audio_files/<?php echo $song_name.'-'.$artists.'_'.$id.'[aictanzania.org]'.'.'.$songext;?>&&uh=<?php echo $id; ?>" class="btn btn-info" style="margin-top:8px"><i class="fa fa-download"></i> Download song</a>
                                </div>
                                                                    
                                </div>                               
                            </div>
                    <h1 class="has-divider text-highlight">More songs</h1>
                    <div class="row page-row" >
                        <?php 
                           $songs=  mysqli_query($con, "SELECT * FROM audios WHERE status='published' AND song_id!='$id' ORDER BY song_id DESC LIMIT 9");
                                                                                 if(mysqli_num_rows($songs)){
 while($row=  mysqli_fetch_array($songs)){
  $song_name=$row['song_name'];
$song_id=$row['song_id'];
   $plays=$row['plays'];
  $downloads=$row['downloads'];
   $artists=$row['artistes'];                                              
                                                                              ?>
                                                    <div class="col-lg-4"> <a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>" class="">
                             <table class="table has-divider"> <tr><td rowspan="4" width="40">
                               <a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>"> <img src="<?php echo BASE_URL; ?>/assets/images/speakers.png" width="50" ></a></td></tr><tr><td> 
                                 <label style="padding-left:3px"><?php echo $song_name;?></label></td> </tr>
                         <tr><td><?php echo $artists;?> </td></tr></table></a> </div>
                            <?php }}?>
                             
                        </div>
                        </div><!--//team-wrapper-->
                        <aside class="page-sidebar  col-lg-3">   
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAICTanzania&amp;width=250&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=462377847232869" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:290px;" allowTransparency="true"></iframe>
                    <section class="testimonials" style="margin-top: 20px">
                        <h1 class="section-heading text-highlight"><span class="line">Bible Quotes</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                     <?php
                    $verses=  mysqli_query($con, "SELECT * FROM verses WHERE published='published'  ORDER BY verse_id DESC");
                           $row=mysqli_fetch_array($verses);
$verse=$row['verse'];
             $id1=$row['verse_id'];
                          $published=$row['published'];
         ?> 
                                   
                 
                     
                                    <div class="item active">
                                        <blockquote class="quote">                                  
                                            <p><i class="fa fa-quote-left"></i><?php echo $verse;  ?></p>
                                        </blockquote>                
                                                                    
                                    </div><!--//item-->
                                       <?php
                    $verses2=  mysqli_query($con, "SELECT * FROM verses WHERE published='published'  AND verse_id!='$id1' ORDER BY verse_id DESC");
                         while($row=mysqli_fetch_array($verses2)){
$verse2=$row['verse'];
             $id2=$row['verse_id'];
                          $published2=$row['published'];
         ?> 
                                    <div class="item">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>    <?php echo $verse2;  ?>            </p>
                                        </blockquote>
                                                      
                                    </div><!--//item-->
                                  <?php }?>
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
  <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script src="<?php echo BASE_URL; ?>/player/js/foundation.min.js"></script>
<!-- <script src="http://connect.soundcloud.com/sdk.js"></script>-->
 <script src="<?php echo BASE_URL; ?>/player/js/jquery.gearplayer.libs.min.js"></script>
 <script src="<?php echo BASE_URL; ?>/player/js/jquery.gearplayer.js"></script>
 <script src="<?php echo BASE_URL; ?>/player/js/app.js"></script>
    
</body>


</html>	