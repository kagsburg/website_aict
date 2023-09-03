<?php 
  include 'includes/conn2.php';
  ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title>Pastors-Africa inland church Tanzania(AICT)</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All AIC tanzania Pastors,profiles of AIC tanzania Pastors,all you need to know about AIC Pastors">
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
        <div class="white-bg">
            <!-- Welcome info -->
		<div class="welcome-wrap">
			<div class="container">
				<div class="col-md-16">
					<h3>PASTORS</h3>
					<p> <form class="course-finder-form" action="diocesepastors" name="form" method="GET">
                                
                                <div class="col-md-8 col-sm-8 subject">
                                                                      <select name="d" id="filterdiocese" data-placeholder="Choose a pastor..."class="form-control subject filterresults">
                                                      <option value="">Select Diocese..</option>
                                                     <?php 
                                            $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                                            while ($row=mysqli_fetch_array($dioceses)){
                                            $diocese=$row['diocese'];
                                            $status=$row['status'];
                                                    $diocese_id=$row['diocese_id'];
                                        ?>
                                                    <option value="<?php echo $diocese_id; ?>"><?php echo $diocese;?></option>
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
                                            <p class="bq"><i class="fa fa-quote-left"></i><?php echo $verse;  ?></p>
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
							<p class="bq">                                  
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
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script>   -->
      <script src="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.jquery.js"></script>
    
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
  
             
              //            frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

        </script>

</html>	

