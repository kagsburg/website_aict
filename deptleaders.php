<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php';
  ?>
<head>
   <title>Department Leaders-Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All AIC tanzania department Leaders,profiles of AIC tanzania leaders,all you need to know about AIC leaders">
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
     <script language="JavaScript" src="<?php echo BASE_URL;?>/assets/js/gen_validatorv4.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 


<body id="pages">
<div class="body">
        <div class="slider-wrap">
                <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>
        </div>
        <!-- ******HEADER****** --> 
        <div class="white-bg">
            <!-- Welcome info -->
		<div class="welcome-wrap">
			<div class="container">
				<div class="col-md-16">
					<h3>Department Leaders</h3>
					<p> <form class="course-finder-form" action="departmentleaders" name="form" method="GET">
                              
                              <div class="col-md-8 col-sm-8 subject">
                                                             
                                    <select name="d" id="filterdepartment" data-placeholder="Choose a pastor..."class="form-control subject filterresults">
                                                    <option value="">Select Department..</option>
                                                   <?php 
                              $getdept=  mysqli_query($con,"SELECT * FROM departments");
                                 while($row4=  mysqli_fetch_array($getdept)){
                                   $department=$row4['department'];
                                    $dept_id=$row4['department_id'];
                                      ?>
                                                  <option value="<?php echo $dept_id; ?>"><?php echo $department;?></option>
                                          <?php }?>
                                              </select>
                         
          
                                 
                                 
                              </div> 
                                
                              <div class="col-md-1 col-sm-1 keywords">
                                                                         <button type="submit" class="btn btn-theme">Select</button>
                              </div> 
                                        
                      </form><!--//course-finder-form--></p>
				</div>
			</div>
		</div>
		<!-- Welcome info -->

        <!-- Team content -->
		<div class="main-wrap">
			<!-- <div class="container team">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-8">
							<img src="demo/team/1.jpg" class="img-responsive team-staff" alt=""/>
						</div>
						<div class="col-md-8">
							<h4>David Kowalsky <span>Executive Pastor</span></h4>
							<p>Mauris sit amet leo neque. Etiam tempus massa dolor, ac tempor ligula pharetra ut. Proin in ornare dui. In ut orci feugiat, dignissim massa in, dignissim felis.</p>
							<div class="line"></div>
							<a href="#" class="hb-more">Read more</a>
							<ul class="hb-social">
								<li class="hb-sky"><a href="#"><i class="fa fa-skype"></i></a></li>
								<li class="hb-mail"><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-8">
							<img src="demo/team/2.jpg" class="img-responsive team-staff" alt=""/>
						</div>
						<div class="col-md-8">
							<h4>Bruce Magic<span>Lead Pastor</span></h4>
							<p>Mauris sit amet leo neque. Etiam tempus massa dolor, ac tempor ligula pharetra ut. Proin in ornare dui. In ut orci feugiat, dignissim massa in, dignissim felis.</p>
							<div class="line"></div>
							<a href="#" class="hb-more">Read more</a>
							<ul class="hb-social">
								<li class="hb-sky"><a href="#"><i class="fa fa-skype"></i></a></li>
								<li class="hb-mail"><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div class="space90"></div> -->
                	<!-- bible Wrap -->
	<div class="donation-wrap" data-stellar-background-ratio="0.10">
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
                                            <p style="width: 629px;
    margin-left: 195px;"><i class="fa fa-quote-left"></i><?php echo $verse;  ?></p>
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
							<p style="width: 629px;
    margin-left: 195px;">                                  
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
			
		</div>
        </div>
        <!-- ******CONTENT****** --> 
    </div><!--//wrapper-->

        <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script>  
    <script src="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.jquery.js"></script>
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
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
    

        </script>

</html>	