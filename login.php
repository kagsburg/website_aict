<?php
include 'includes/conn2.php'; 
     if(isset($_SESSION['aictmedia'])){
header('Location:index');
     }
      if(isset($_POST['username'],$_POST['password'])){
      $username=mysqli_real_escape_string($con,$_POST['username']);
$pass=mysqli_real_escape_string($con,$_POST['password']);

$cust=mysqli_query($con,"SELECT * FROM  registered_users WHERE address='$username' AND password='".md5($pass)."' AND status='active'");
$rows=mysqli_num_rows($cust);
if($rows>0){
$row=mysqli_fetch_array($cust);
$user_id=$row['user_id'];
$_SESSION['aictmedia']=$user_id;
header("Location:index");
}
else{
    header("Location:loginattempt");
//echo "<div class='errors' style='color:yellow; width: 89%; text-align: center;float:left; margin-left: 5px;padding: 5px; margin-top:10px; font-size:12px;'>unable to login,please try again </div><br/>";
}
}
    ?>
<!DOCTYPE html>
 <html lang="en"> <!--<![endif]-->  

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Login | aictanzania.org</title>
<meta name="description" content="Create an Account now" /> 
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
<link href="<?php echo BASE_URL;?>.js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo BASE_URL;?>/js/owl-carousel/owl.theme.css" rel="stylesheet">   
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
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container login-wrap">
				<div class="col-md-12">
					<div class="l-info">
						<div class="line-sep"></div>
						<h3>Sign in</h3>
                        
						<p>Fill Form Below</p>
						<div class="space40"></div>
                        <form action="" method="post" name="form">
                        <label for="username">User Address</label>
                                    <input id="name" class="form-control" name="username" placeholder="e.g example@aict.org" type="text" required="required">
                                       <div id='form_username_errorloc' class='text-danger'></div>
                                       <label for="password">Password</label>
                                    <input id="name" class="form-control" name="password" placeholder="Enter your password" type="password" required="required">
                                       <div id='form_password_errorloc' class='text-danger'></div>
							<a class="forgot-pass" href="<?php echo BASE_URL;?>/register">Register</a>
                            <button type="submit" class="l-btn" name="submit">Login</button>
							<!-- <a href="#" class="l-btn">Sign In</a> -->
						</form>
						
					</div>
				</div>
				<div class="col-md-4">
                <aside class="col-md-16">
					<div class="space50"></div>
					<div class="side-widget">
						<h5>Other News</h5>
						<ul class="sermon-list">
                        <?php 
                          $articles=  mysqli_query($con,"SELECT * FROM news WHERE  published='published' ORDER BY article_id LIMIT 4");
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
					<!-- <div class="l-info">
						<h3>GUEST CHECKOUT</h3>
						<p>Phasellus bibendum, neque id ultricies sollicitudin, dolor sem vehicula nibh, eget mollis dolor mi id purus. Phasellus a nisi ac quam ullamcorper iaculis at id lectus. </p>
						<p>Integer sollicitudin nisl nec leo imperdiet, ut sollicitudin felis adipiscing. Cum sociis natoque penatibus.</p>
						<div class="space60"></div>
						<a href="#" class="l-btn">Continue as Guest</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- Main content -->

	</div>
     
    
     
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
     <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          

        <script language="JavaScript" src="<?php echo BASE_URL;?>/assets/js/gen_validatorv4.js" type="text/javascript"></script>
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

