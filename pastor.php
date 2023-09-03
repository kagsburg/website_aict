<?php 
  include 'includes/conn2.php';
    $past_id=$_GET['id'];
          $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  status='active' AND pastor_id='$past_id' ORDER BY pastor_id DESC");
                 $row=mysqli_fetch_array($pastors);     
             $pastor_id1=$row['pastor_id'];
             $pastorname1=$row['fullnames'];
             $status1=$row['status'];
             $church_id=$row['church_id'];
             $poster_id1=$row['poster_id'];
              $dob1=$row['dob'];
                           $date1=$row['start_date'];
                   $wife1=$row['wife'];
                $bio1=$row['bio'];
                $ext1=$row['ext'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                      $pastorate_id=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate=$row3['pastorate'];
             $diocese_id=$row3['diocese_id'];
               $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese_id'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocese=$row4['diocese'];
                                                  
                                                  
  ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
  <title>Pastor <?php echo $pastorname1; ?> profile,Messages,Photos</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All about pastor <?php echo $pastorname1; ?>,Know about <?php echo $pastorname1; ?>,View pastor <?php echo $pastorname1; ?> photos
      Read Pastor <?php echo $pastorname1; ?> messages
      " />  
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
<link href="<?php echo BASE_URL;?>.js/owl-carousel/owl.carousel.css" rel="stylesheet">
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
    
        <!-- ******CONTENT****** --> 
        <div class="white-bg">
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/leaders/pastors/<?php echo md5($past_id).'.'.$ext1;?>" alt="Pastor <?php echo $pastorname1;?>" width="100%"/>
							<div class="space20"></div>
							<div class="line"></div>
						</div>
						<div class="col-md-11 team-single">
							<h4><?php echo $pastorname1; ?> profile <span>Pastor</span></h4>
                            <div class="line"></div>
							<ul class="team-single-meta">
                            <li><strong> Full names:</strong><br/> <em>  <?php echo $pastorname1;?></em></li>
                                        <li><strong>Church:</strong><br/> <em><?php echo $church;?></em></li>
                                         <li><strong>Pastorate  name: </strong><br/> <em> <?php echo $pastorate;?></em></li>
                                         <li><strong>Diocese name: </strong><br/> <em> <?php echo $diocese;?></em></li>
                                        <li><strong>Date Of Birth:</strong><br/> <em><?php echo $dob1;?></em></li>
                                        <li><strong>Married to: </strong> <br/><em><?php echo $wife1;?></em></li>
                                                                               <li><strong>Joined Pastorship in:</strong><br/> <em>  <?php echo $date1;?></em></li>
							</ul>
                            <div class="line"></div>
                            <h4>Biography</h4>   
                            <p><?php echo $bio1;?></p>
                            <div class="line"></div>
                            <h4>Posts</h4>
                            <ul style="list-style: none">
                                                <?php
                                        $posts=mysqli_query($con,"SELECT * FROM posts WHERE poster_id='$poster_id1' ORDER BY post_id DESC");
                                        if(mysqli_num_rows($posts)>0){
                                        while($row=  mysqli_fetch_array($posts)){
                                            $post_title=$row['post_title'];
                                            $post_id=$row['post_id'];
                                            $post=$row['post'];
                                            echo ' <li><a href="#myModal'.$post_id.'"  data-toggle="modal"><i class="fa fa-caret-right"></i>  '.$post_title.'</a></li>';
                                            ?>
                                        <div id="myModal<?php echo $post_id; ?>" class="modal hide fade" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 id="myModalLabel"><?php echo $post_title; ?></h4>
                                            </div>
                                            <div class="modal-body">
                                            <p><?php echo $post; ?></p>
                                            </div>

                                            </div>   
                                                <script>
                                                    $(document).ready(function(){
                                            $('#myModal<?php echo $post_id; ?>').modal(options) ;})  
                                            </script>
                                                <?php }}  else {
                                                            echo '<div class="alert alert-warning">No posts made yet by this leader</div>';
                                                        }?>
                                            </ul>
                                            <div class="line"></div>
                                            <h4>Photos</h4>
                                            <?php
                                                                     $photos=  mysqli_query($con,"SELECT * FROM pastorphotos WHERE pastor_id='$p_id' AND published='published'");
                                                                    if(mysqli_num_rows($photos)>0){
                                                                        while($row=mysqli_fetch_array($photos)){
                                                                                $photo_id=$row['photo_id'];
                                                $album_id=$row['bishop_id'];
                                                $caption=$row['caption'];
                                                                    $photo_ext=$row['ext'];
                                                $published=$row['published'];
                                                                    ?>
                                                <a class="prettyphoto col-md-3 col-sm-4 col-xs-6" rel="prettyPhoto[gallery]" title="<?php echo $caption;?>" href="<?php echo BASE_URL.'/leaders/bishops/photos/'.md5($photo_id).'.'.$photo_ext;?>"style="height: 100px;
                                                                            overflow: hidden;" >
                                                    <img class="img-responsive img-thumbnail" src="<?php echo BASE_URL.'/leaders/bishops/photos/'.md5($photo_id).'.'.$photo_ext;?>" alt="<?php echo $caption;?>" width="100%"></a>
                                               <?php }}else{
                                                   echo '<div class="alert alert-warning">No photos uploaded yet</div>';
                                               }?>
						</div>
					</div>
				</div>
				<aside class="col-md-4">
					<div class="side-widget">
						<h5></h5>
						<ul class="categories">
							<li><a href="<?php echo BASE_URL;?>/bishops">Bishops</a></li>
							<li><a href="<?php echo BASE_URL;?>/pastors">Pastors</a></li>
							<li><a href="<?php echo BASE_URL;?>/deptleaders">Department Leaders</a></li>
						</ul>
					</div>
					<div class="space50"></div>
					
				</aside>
			</div>
			<!-- Main content -->
		</div>
	</div>

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