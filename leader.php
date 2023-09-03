<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php';
  $id=$_GET['id'];
       $deptleaders=  mysqli_query($con,"SELECT * FROM deptleaders WHERE status='active' AND deptleader_id='$id'");
                                                                 
                  $row=mysqli_fetch_array($deptleaders);

             $fullname=$row['fullnames'];
             $activate=$row['status'];
             $date=$row['start_date'];
              $dob=$row['dob'];
                $dept_id=$row['dept_id'];
                $id=$row['deptleader_id'];
                $position=$row['position'];
                $wife=$row['wife'];
                $bio=$row['bio'];
                $ext=$row['ext'];
                $cvs=$row['cvs'];
                 $church_id=$row['church_id'];
                     $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id'");
                                       $row4=  mysqli_fetch_array($getdept);
                                         $department=$row4['department'];
                     $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                      $pastorate_id=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate=$row3['pastorate'];
             $diocese_id=$row3['diocese_id'];
               $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese_id'");
                                       $row5=  mysqli_fetch_array($getdioceses);
                                         $diocese=$row5['diocese'];
  ?>
<head>
  <title>Leader <?php echo $fullname; ?> profile,Messages,Photos</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All about  <?php echo   $fullname; ?>,Know about <?php echo   $fullname; ?>,View  <?php echo   $fullname; ?> photos
      Read   <?php echo   $fullname; ?> messages
      " />   
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
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo BASE_URL;?>/leaders/deptleaders/<?php echo md5($id).'.'.$ext;?>" alt="" width="100%"/>
							<div class="space20"></div>
							<div class="line"></div>
						</div>
						<div class="col-md-11 team-single">
							<h4><?php echo $fullname; ?> <span> profile</span></h4>
                            <div class="line"></div>
							<ul class="team-single-meta">
                            <li><strong> Full names:</strong><br/> <em><?php echo $fullname;?></em></li>
                                         <li><strong>Department: </strong><br/> <em> <?php echo $department;?></em></li>
                                         <li><strong>Position: </strong><br/> <em> <?php echo $position;?></em></li>
                                        <li><strong>Date Of Birth:</strong><br/> <em><?php echo $dob;?></em></li>
                                        <li><strong>Married to: </strong> <br/><em><?php echo $wife;?></em></li>
                                         <li><strong>Church:</strong><br/> <em><?php echo $church;?></em></li>
                                        
                                        <li><strong>Joined Department  in:</strong><br/> <em>  <?php echo $date;?></em></li>
							</ul>
                            <div class="line"></div>
                            <h4>Biography</h4>   
                            <p><?php echo $bio;?></p>
                            <div class="line"></div>
                            <h4>Posts</h4>
                            <ul style="list-style: none">
                                                <?php
                                        $posts=mysqli_query($con,"SELECT * FROM posts WHERE poster_id='$id' ORDER BY post_id DESC");
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


</html>	
