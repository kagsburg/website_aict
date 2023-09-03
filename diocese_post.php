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
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        	 </head>

<body  id="pages">
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
  <?php include 'includes/header.php';?>
        </div><!--//slider-wrap-->
        
        <!-- ******NAV****** -->
         
	<div class="white-bg">
		<!-- Sermons Content -->
		<div class="main-wrap">
			<div class="container">
				<div class="col-md-12">
					<div class="sermon-content-single">
						<div class="row">
							<div class="col-md-16">
								<img src="<?php echo BASE_URL.'/diocese/'.md5($id).'.'.$ext;?>" class="img-responsive" alt=""/>
								<div class="space15"></div>
							</div>
							<div class="col-md-11">
								<h4><?php echo $title;?></h4>
								<span class="post-meta"><?php echo 'Posted on '.date('d/m/Y',$timestamp).' at '.  date('H:i',$timestamp); ?></span>
								<!-- <ul class="hb-social">
									<li class="hb-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="hb-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="hb-plus"><a href="#"><i class="fa fa-plus"></i></a></li>
								</ul> -->
							</div>
							<div class="col-md-16">
								
								<p><?php echo $description; ?></p>
							</div>
						</div>
					
					</div>
				</div>
				<aside class="col-md-4">
					<div class="space50"></div>
					<div class="side-widget">
						<h5>Other Diocese Posts</h5>
						<ul class="sermon-list">
                        <?php 
                          $articles=  mysqli_query($con,"SELECT * FROM dioceseposts  WHERE diocese_id='$diocese_id'  AND diocesepost_id!='$id' AND status='1' LIMIT 4");
                          if(mysqli_num_rows($articles)>0){
                            
                                                    while($rows=  mysqli_fetch_array($articles)){
                                                        $title=$rows['title'];
                                                        $description=$rows['description'];
                                                          $ext=$rows['ext'];
                                                          $diocesepost_id=$rows['diocesepost_id'];
                                                          $timestamp=$rows['timestamp'];
                          
                                                             ?>
                                                             <li>
                                                             <a href="<?php $tit= str_replace('/','-',$title); echo BASE_URL.'/post/'.$diocesepost_id.'/'.str_replace(' ','-',$tit);?>.html">
                                        <img src="<?php  echo BASE_URL.'/diocese/'.md5($diocesepost_id).'.'.$ext;?>" class="s-thumb"  title="<?php echo $title;?>:aictanzania.org" alt="<?php echo $title;?>:aictanzania.org" /></a>
								<!-- <img  src="demo/xtra/2.jpg" alt=""/> -->
								<h4 style="font-size: 10px;"> <a href="<?php echo BASE_URL.'/post/'.$diocesepost_id.'/'.str_replace(' ','-',$tit);?>.html">
                                                <?php echo $title;?></a>
								</h4>
								<div class="clear"></div>
								
							</li>
                               <!--//news-item-->
                                <?php }}else{?>
                                <li>
                                    <h4>No Posts</h4>
                                </li>
                                <?php }?>
						</ul>
					</div>
				</aside>
			</div>
		</div>
		<!-- Sermons Content -->



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

