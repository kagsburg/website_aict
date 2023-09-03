<?php 
  include 'includes/conn2.php';
  ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>Secretaries-Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All AIC tanzania Secretaries,profiles of AIC tanzania Secretaries,all you need to know about AIC Secretaries">
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
<link id="theme-style" rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/styles-red.css">
     <script language="JavaScript" src="<?php echo BASE_URL;?>/js/gen_validatorv4.js" type="text/javascript"></script>
    </head> 

<body id="pages">
<div class="body">
        <div class="slider-wrap">
                <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>
        </div>
        <!-- ******HEADER****** --> 
        <div class="white-bg">            

        <!-- Team content -->
        <div class="main-wrap">
			<!-- <div class="space90"></div> -->
			<div class="container team2">
				<div class="col-md-16">
					<h5>Secretaries</h5>
				</div>
                <?php
                                  $getsecs=  mysqli_query($con, "SELECT * FROM  secretaries WHERE status=1");
                                  while ($row1 = mysqli_fetch_array($getsecs)){
                                       $secretary_id=$row1['secretary_id'];
                                       $pastor_id=$row1['pastor_id'];
                                       $position_id=$row1['position_id'];
                                       $getpos=mysqli_query($con,"SELECT * FROM secpositions  WHERE secposition_id='$position_id'");
                                       $row2=  mysqli_fetch_array($getpos);
                                       $secposition=$row2['secposition'];
                                  $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  pastor_id='$pastor_id' AND status='active'");
                          $row=mysqli_fetch_array($pastors);
             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                $ext=$row['ext'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                        ?>
                           <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/secretary/<?php echo $secretary_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/pastors/<?php echo md5($pastor_id).'.'.$ext;?>" alt="Pastor <?php echo $pastorname; ?>" />
                                </a>
                        </div>
					<h4>Pastor <?php echo $pastorname; ?></h4>
                    <h4><?php echo $secposition; ?></h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/secretary/<?php echo $secretary_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">Read more</a>
					
				</div>
                             <?php } ?>
                
                
                
			</div>
		</div>
			

        </div>

    </div><!--//wrapper-->

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

