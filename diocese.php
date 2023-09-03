<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php'; 
    $id=$_GET['id'];
      $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE diocese_id='$id'");
                                                     $row = mysqli_fetch_array($dioceses);
                                                          $dept_id=$row['diocese_id'];
                                                          $diocese=$row['diocese'];
   ?>
<head>
    <title><?php echo $diocese; ?> Diocese-Africa Inland Church Tanzania</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $diocese; ?> Diocese,all about  Aic tanzania <?php echo $diocese; ?> Diocese,Location of Aic tanzania <?php echo $diocese; ?> Diocese,
          Aic tanzania <?php echo $diocese; ?> Diocese">
    <meta name="author" content="">    
   <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" /> 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>    
    <!-- Global CSS -->

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
    <style>
        .staffleader{height:120px;margin-bottom: 10px;}
        .staffleader .thumb{max-height:120px;overflow: hidden;}
         @media (max-width: 600px) {
          .staffleader{
 height: auto;
     }
        .staffleader .thumb{max-height: 500px;overflow: hidden}
     }
    </style>
</head> 


<body id="pages">
    <div class="body">

    <div class="slider-wrap">
        <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>
    
	</div>
    <div class="white-bg">
		<div class="main-wrap">
			<div class="container">

				<!-- Ministries Content -->
				<div class="col-md-12">
					<div class="ministries-single">
						<!-- <ul class="hb-social">
							<li class="hb-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="hb-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="hb-plus"><a href="#"><i class="fa fa-plus"></i></a></li>
						</ul> -->
						<h4><a href="#"><?php echo $diocese; ?> Diocese</a></h4>
                        <!--  -->
                        <h3>Brief History</h3> 
                        <?php
                        $getdetails=  mysqli_query($con,"SELECT * FROM diocesedetails WHERE diocese_id='$id'");
                        $row=  mysqli_fetch_array($getdetails);
                        $history=$row['history'];
                        $vision=$row['vision'];
                        $mission=$row['mission'];
                        $corevalues=$row['corevalues'];
                        $contacts=$row['contacts'];
                        $departments=$row['diocesedepts'];
                        $sponsors=$row['sponsors'];
                        ?> 
						<!-- <p class="strong">Donec ac turpis non ligula pulvinar commodo a sit amet quam. Donec eu mi et tellus aliquam scelerisque. Vivamus sagittis semper ante a hendrerit. Quisque in dui aliquam, pharetra leo vitae, facilisis risus. </p> -->
						<p><?php echo $history;?> </p>
						<div class="space90" style="border-bottom: 1px solid #cbc6ac;"></div>
                        <div class="faq-wrapper col-md-16">   
                         
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-2">
                                           Vision
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                   <?php echo $vision; ?>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-3">
                                            Mission
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                       <?php echo $mission; ?>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-4">
                                                                            Objectives
                                                                            </a>
                                                                        </h3>
                                                                    </div><!--//pane-heading-->
                                                                    <div id="collapse-4" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                    <?php echo $corevalues; ?>
                                                                        </div><!--//panel-body-->
                                                                    </div><!--//panel-colapse-->
                                                                </div><!--//panel-->
                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-5">
                                                                            Departments
                                                                            </a>
                                                                        </h3>
                                                                    </div><!--//pane-heading-->
                                                                    <div id="collapse-5" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                    <?php echo $departments; ?>
                                                                        </div><!--//panel-body-->
                                                                    </div><!--//panel-colapse-->
                                                                </div><!--//panel-->
                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-6">
                                                                        Sponsors and Partners
                                                                            </a>
                                                                        </h3>
                                                                    </div><!--//pane-heading-->
                                                                    <div id="collapse-6" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                    <?php echo $sponsors; ?>
                                                                        </div><!--//panel-body-->
                                                                    </div><!--//panel-colapse-->
                                                                </div><!--//panel-->
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title">
                                                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-7">
                                                                            Our Staff
                                                                            </a>
                                                                        </h3>
                                                                    </div><!--//pane-heading-->
                                                                    <div id="collapse-7" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                    
                                <table class="table table-condensed">
                                                                                <thead>
                                                                                    <th>Image</th>
                                                                                    <th>Name</th>
                                                                                    <th>Gender</th>
                                                                                    <th>Position</th>
                                                                                    <th>Phone</th>
                                                                                <th>Email</th>
                                                                                
                                                                                </thead>
                                                                                <tbody>
                                <?php
                                                $leaders=  mysqli_query($con,"SELECT * FROM diocesestaff WHERE diocese_id='$id' AND status=1 ORDER BY level");
                                                                                        
                                                    while ($row=mysqli_fetch_array($leaders)){ 
                                            $diocesestaff_id=$row['diocesestaff_id'];
                                            $fullname=$row['fullnames'];
                                            $email=$row['email'];
                                            $position=$row['position'];
                                            $ext=$row['ext']; 
                                            $phone=$row['phone']; 
                                            $gender=$row['gender'];
                                            
                                                        ?>
                                                <tr>
                                <td>
                                    <?php if($ext==''){?>
                                    <img src="<?php echo BASE_URL;?>/leaders/avatar.png?<?php echo time(); ?>" class="img img-responsive" width="80">
                                    <?php }else{ ?>
                                        <img src="<?php echo BASE_URL;?>/staff/thumbs/<?php echo md5($diocesestaff_id).'.'.$ext.'?'.time(); ?>" class="img img-responsive" width="80">
                                    <?php }?>
                                </td>
                                <td><?php echo $fullname; ?></td>
                                <td><?php  echo $gender; ?></td>
                                <td><?php echo $position; ?></td>
                                <td><?php echo $phone; ?></td>
                                <td><?php echo $email; ?></td>
                                </tr>
                                                    
                                <?php }?>

                                                </tbody></body></table>
                                                 
                           
                             
                                                                                 
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-8">
                                        Announcements
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                      <table class="table table-condensed ">
                                                <thead>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Posted on</th>
                                                    <th>Action</th>
                                                </thead>
                                                <tbody>
                                                  
                                                        <?php
                                                          $deptposts=  mysqli_query($con,"SELECT * FROM dioceseposts  WHERE diocese_id='$id'  AND status='1'");
                                                          while ($row = mysqli_fetch_array($deptposts)){
                                                               $title=$row['title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $diocesepost_id=$row['diocesepost_id'];
               $timestamp=$row['timestamp'];
                            ?> 
                                                    <tr>
                                                        <td><img src=""><img src="<?php echo BASE_URL; ?>/diocese/thumbs/<?php echo md5($diocesepost_id).'.'.$ext; ?>" width="100"></td>
                                                                    <td><?php echo $title; ?></td>
                                                                    <td><?php echo date('d/M/Y',$timestamp); ?></td> 
                                                                    <td><a href="<?php 
                                                                    // remove / from the title
                                                                    $title=str_replace('/','',$title);
                                                                    echo BASE_URL.'/dpost/'.$diocesepost_id.'/'.str_replace(' ','-',$title);?>.html" class="btn btn-xs btn-info">Details</a></td> 
                                                                    </tr>
                                                        
                                                            <?php      }
                                                        ?>
                                                 
                                                </tbody>
                                            </table>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-9">
                                          Location and Contacts
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                         <?php echo $contacts; ?>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                               
                               
                            </div><!--//panel-group-->                                                
                        </div><!--//faq-wrapper-->
						
					</div>
				</div>
				<aside class="col-md-4">
                    <div class="side-widget">
						<ul class="categories">
							<li>
                            <a href="<?php echo BASE_URL;?>/diocesepastors?d=<?php echo $id; ?>" >Pastors</a>
							</li>
						</ul>
					</div>
						<h5>Other Dioceses</h5>
						<ul class="categories">
                        <?php
                                   $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE status=1");
                                   while ($row = mysqli_fetch_array($dioceses)){
                                                          $diocese_id=$row['diocese_id'];
                                                          $diocese=$row['diocese'];
                                                          if ($diocese_id!=$id){
                                                              
                                                            ?>
                                <li><a href="<?php echo BASE_URL; ?>/diocese/<?php echo $diocese_id.'/'.str_replace(' ','-',$diocese).'.html';?>" ><?php echo $diocese; ?></a></li>
                                       
                                                <?php }}?>

						</ul>
					</div>
				</aside>
				<!-- Ministries Content -->
			</div>
		</div>


	</div>
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
  <?php include 'includes/footer.php'; ?>
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

