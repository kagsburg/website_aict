<?php
include 'includes/conn2.php';
$id=$_GET['id'];
             $article=  mysqli_query($con,"SELECT * FROM news  WHERE  article_id='$id'");
                                  $row=mysqli_fetch_array($article);
$subject=$row['article_title'];
$description=$row['article_description'];
             $id=$row['article_id'];
             $timestamp=$row['timestamp'];
             $cstatus=$row['cstatus'];
               $photo=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id'") or die(mysqli_error($con));
                     $row2= mysqli_fetch_array($photo);
          $ext=$row2['ext'];
          $photo_name=$row2['photo_name'];
         ?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="<?php echo $subject;?> | aictanzania.org" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo BASE_URL.'/article/'.$id.'/'.str_replace(' ','-',$subject);?>.html" />
<meta property="og:fb:app_id" content="471963152929479" />
        <meta property="og:image" content="http://www.aictanzania.org/newsphotos/<?php echo $photo_name.'.'.$ext;?>" />
        <meta property="og:site_name" content="AICT Tanzania" />
               <meta property="og:description" content="<?php echo strip_tags($description); ?>" />
<title><?php echo $subject;?> | aictanzania.org</title>
<meta name="description" content="<?php  echo strip_tags(strtolower($description)); ?>" /> 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
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
								<img src="<?php echo BASE_URL.'/newsphotos/'.$photo_name.'.'.$ext;?>" class="img-responsive" alt=""/>
								<div class="space15"></div>
							</div>
							<div class="col-md-11">
								<h4><?php echo $subject;?></h4>
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
					
						<div class="comment-wrap">
                            <?php if(isset($_SESSION['aictmedia'])){
                                $getfollower=  mysqli_query($con,"SELECT * FROM registered_users WHERE user_id='".$_SESSION['aictmedia']."'");
                                $row=  mysqli_fetch_array($getfollower);
                                $fullname=$row['fullnames'];
                                $occupation=$row['occupation'];
                                $church_id=$row['church_id'];
                                $gender=$row['gender'];
                                
                              $churches=  mysqli_query($con,"SELECT * FROM churches WHERE status=1 AND church_id='$church_id'");
                                                $row=mysqli_fetch_array($churches);
                                        $pastorate_id=$row['pastorate_id'];
                                $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id'  AND status=1 ");
                                            $row2=mysqli_fetch_array($pastorates);
                                                    $pastorate=$row2['pastorate'];
                                                    $diocese_id=$row2['diocese_id'];
                                                    $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$diocese_id' ORDER BY diocese");
                                                        $row3=mysqli_fetch_array($dioceses);
                                $diocese=$row3['diocese'];
                                if($cstatus==2){
                                $getallowed=  mysqli_query($con,"SELECT * FROM allowedregion WHERE article_id='$id'");
                                $row3=  mysqli_fetch_array($getallowed);
                                $diocese_id2=$row3['diocese_id'];
                                $dioceses2=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$diocese_id2'");
                                $row4= mysqli_fetch_array($dioceses2);
                                $diocese2=$row4['diocese'];
                                if($diocese_id==$diocese_id2){
                                
                                ?>
                        <h5>Leave a comment</h5>
							<form class="comment-form">
								<div class="row">
									<div class="col-md-12">
										<textarea rows="8" placeholder="Your comment here" required="required"></textarea>
										<a class="c-btn pull-right" href="#" id="submit">Send Comment</a>
									</div>
								</div>
							</form>
                            
                            <?php                                         
                                        }else{ ?>
                                            <div class="alert alert-warning">Only Members from <?php echo $diocese2; ?> Allowed to comment</div>
                                        <?php }
                                        }  else { ?>
                                            <h5>Leave a comment</h5>
							<form class="comment-form">
								<div class="row">
									<div class="col-md-12">
										<textarea rows="8" placeholder="Your comment here" required="required"></textarea>
										<a class="c-btn pull-right" href="#" id="submit">Send Comment</a>
									</div>
								</div>
							</form>
                                    <?php }?>

                            <?php }else{?>
                                <div class="alert alert-warning">You must sign in to comment.Click <a href="<?php echo BASE_URL;?>/login"><strong>Here</strong></a> to Sign In or  <a href="<?php echo BASE_URL;?>/register"><strong>Here</strong></a> to Register</div>
                                  <?php   }?>
							<h5>Comments</h5>
							<ul class="comments-content">
                            <?php
                                                $comments=  mysqli_query($con,"SELECT * FROM comments WHERE article_id='$id' AND status=1");
                                                if (mysqli_num_rows($comments)>0) {
                                                while ($row = mysqli_fetch_array($comments)) {        
                                                    $time=$row['timestamp'];
                                                    $comment=$row['comment'];
                                                    $follower_id=$row['follower_id'];
                                                    $getfollower=  mysqli_query($con,"SELECT * FROM followers WHERE follower_id='$follower_id'");
                                                $row3=  mysqli_fetch_array($getfollower);
                                                $fullname=$row3['fullname'];
                                                $occupation=$row3['occupation'];
                                                $church_id=$row3['church_id'];
                                                $gender=$row3['gender'];
                                                     $churches=  mysqli_query($con,"SELECT * FROM churches WHERE status=1 AND church_id='$church_id'");
                                 $row=mysqli_fetch_array($churches);
                          $church=$row['church'];
                      ?>
                        <li>
									<div class="comment_author"><img src="<?php echo BASE_URL;?>/images/avatar.png" alt=""/></div>
									<div class="comment_info">
										<div class="name"><?php echo $fullname; ?> <span>at <?php echo date('d/M/Y',$time); ?></span> <em><a href="#">Reply</a></em></div>
										<p><?php echo $comment; ?></p>
									</div>
								</li>
                           
                                                <?php } }else{?>   
                              <!-- error -->
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i> No comments found
                                </div>
                                <?php } ?>
							</ul>
							<!-- <a class="comments-more">Load more comments</a> -->
							
							<div class="space40"></div>
						</div>
					</div>
				</div>
				<aside class="col-md-4">
                <div class="side-widget">
						<h5>Article Categories</h5>
						<ul class="sermon-list">
                        <?php 
                          $categories=  mysqli_query($con,"SELECT * FROM category WHERE status='1' ORDER BY category_id DESC");
                          if(mysqli_num_rows($categories)>0){
                            
                                                    while($rows=  mysqli_fetch_array($categories)){
                                                        $subject2=$rows['category'];
                                        $id2=$rows['category_id']; 
                          
                                                             ?>
                                                             <li>
								 <a href="<?php echo BASE_URL.'/category?id='.$id2.'"'; ?>">
                                                <?php echo $subject2;?></a>
															
							</li>
                               <!--//news-item-->
                                <?php }}?>
						</ul>
					</div>
					<div class="space50"></div>
					<div class="side-widget">
						<h5>Other News</h5>
						<ul class="sermon-list">
                        <?php 
                          $articles=  mysqli_query($con,"SELECT * FROM news WHERE article_id!='$id' AND published='published' ORDER BY article_id LIMIT 4");
                          if(mysqli_num_rows($articles)>0){
                            
                                                    while($rows=  mysqli_fetch_array($articles)){
                                                        $subject2=$rows['article_title'];
                                        $id2=$rows['article_id'];
                                        $headphotos=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id2'") or die(mysqli_error($con));
                                                $row2= mysqli_fetch_array($headphotos);
                                    $ext2=$row2['ext'];
                                    $photo_name2=$row2['photo_name'];    
                          
                                                             ?>
                                                             <li>
                                                             <a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>">
                                        <img src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>" class="s-thumb"  title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject2;?>:aictanzania.org" /></a>
								<!-- <img  src="demo/xtra/2.jpg" alt=""/> -->
								<h4 style="font-size: 10px;"> <a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>">
                                                <?php echo $subject2;?></a>
								</h4>
								<div class="clear"></div>
								
							</li>
                               <!--//news-item-->
                                <?php }}?>
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
<script>
$(document).ready(function(){
$("#submit").click(function(e){
e.preventDefault();
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

