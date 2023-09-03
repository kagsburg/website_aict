<?php
include 'includes/conn2.php';
$id=$_GET['id'];
                  $deptposts=  mysqli_query($con,"SELECT * FROM dioceseposts  WHERE diocesepost_id='$id' ");
                                           $row = mysqli_fetch_array($deptposts);
                                                               $title=$row['title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $diocese_id=$row['diocese_id'];
               $diocesepost_id=$row['diocesepost_id'];
               $timestamp=$row['timestamp'];
         ?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="<?php echo $title;?> | aictanzania.org" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo BASE_URL.'/post/'.$id.'/'.str_replace(' ','-',$title);?>.html" />
<meta property="og:fb:app_id" content="471963152929479" />
<meta property="og:image" content="<?php echo BASE_URL; ?>/dioceseposts/<?php echo md5($id).'.'.$ext;?>" />
        <meta property="og:site_name" content="AICT Tanzania" />
               <meta property="og:description" content="<?php echo strip_tags($description); ?>" />
<title><?php echo $title;?> | aictanzania.org</title>
<meta name="description" content="<?php  echo strip_tags(strtolower($description)); ?>" /> 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>     
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/css/prettyPhoto.css">    
    <!-- Theme CSS -->  
     <link id="theme-style" rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/styles-red.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
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
        
        <!-- ******NAV****** -->
     
    
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left"><?php echo $title;?></h1>
                    
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class=" col-md-7 col-sm-6"> 
                        <div class="news-wrapper"> 
                               

                            <article class="news-item">
                                <p class="meta text-muted"><?php echo 'Posted on '.date('d/m/Y',$timestamp).' at '.  date('H:i',$timestamp); ?></p>
                                <span class='st_sharethis_hcount' displayText='ShareThis' ></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<p class="featured-image"><img class="img-responsive" src="<?php echo BASE_URL.'/diocese/'.md5($id).'.'.$ext;?>" alt="" /></p>
                            <?php echo $description; ?>
       
                            </article><!--//news-item-->
                                                                </div>                      
                        </div>
                       
                        <aside class="page-sidebar  col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1">                       
                            <section class="widget has-divider">
                                <h3 class="title">Other Diocese Posts</h3>                            
                          <?php 
                         $deptposts=  mysqli_query($con,"SELECT * FROM dioceseposts  WHERE diocese_id='$diocese_id'  AND diocesepost_id!='$id'    AND status='1'");
                                                          while ($row = mysqli_fetch_array($deptposts)){
                                                               $title=$row['title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $diocesepost_id=$row['diocesepost_id'];
               $timestamp=$row['timestamp'];
                          
                                                             ?>
                               <article class="news-item row">       
                                    <figure class="thumb col-md-2 col-sm-3 col-xs-3">
                                        <a href="<?php echo BASE_URL.'/post/'.$diocesepost_id.'/'.str_replace(' ','-',$title);?>.html">
                                            <img src="<?php echo BASE_URL.'/diocese/'.md5($diocesepost_id).'.'.$ext;?>"  style="width: 110px;height: auto" title="<?php echo $title;?>:aictanzania.org" alt="<?php echo $title;?>:aictanzania.org" /></a>
                                    </figure>
                                    <div class="details col-md-10 col-sm-9 col-xs-9">
                                        <h4 class="title" style="margin-left:53px">
                                         <a href="<?php echo BASE_URL.'/dpost/'.$diocesepost_id.'/'.str_replace(' ','-',$title);?>.html">
                                                <?php echo $title;?></a></h4>
                                    </div>
                                </article><!--//news-item-->
                                <?php }?>
                            </section><!--//widget-->
                           <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line">Bible Quotes</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                     <?php
                    $verses=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  ORDER BY verse_id DESC");
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
                    $verses2=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  AND verse_id!='$id1' ORDER BY verse_id DESC");
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
                             </section>         
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
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script> 
    
</body>
<script>
$(document).ready(function(){
$("#submit").click(function(){
var comment = $("#comment").val();
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'comment='+ comment;
//var dataString = 'fullname='+ fullname + '&comment='+ comment+'&blank='+blank;
if(comment=='')
{
//$('.reply-msg').html('<div class="alert alert-danger"><i class="fa fa-warning"></i> Enter all fields  to proceed</div>');
alert("Comment empty");
}
else
{
    // AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "<?php echo BASE_URL;?>/commenthandler.php?a=<?php echo $id; ?>",
data: dataString,
cache: false,
beforeSend: function() 
		{
	$(".latest-com-loading").html('<center><div align="center"><img src="<?php echo BASE_URL;?>/img/lightbox-ico-loading.gif" align="absabsmiddle" title="Loading more..." /></div></center>');
		},
success: function(result){
$('.latest-com').html(result);
$(".latest-com-loading").html('');
}
});

}
return false;
});

});
</script>
</html> 

