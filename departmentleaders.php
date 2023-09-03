<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php';
    $d=$_GET['d'];
         $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$d'");
                                       $row4=  mysqli_fetch_array($getdept);
                                         $depart_ment=$row4['department'];
  ?>
<head>
   <title><?php echo $depart_ment; ?> Leaders-AICT</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All AIC tanzania bishops,profiles of AIC tanzania bishops,all you need to know about AIC bishops">
    <meta name="author" content="">    
    <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>    
    <!-- Global CSS -->
     <meta name="robots" content="INDEX,FOLLOW">
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
					<h3><?php echo $depart_ment;?> Leaders</h3>
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
			<!-- <div class="space90"></div> -->
			<div class="container team2">
				<div class="col-md-16">
					<h5><?php echo $depart_ment;?> Leaders</h5>
				</div>
                <?php
                                   $deptleaders=  mysqli_query($con,"SELECT * FROM deptleaders WHERE status='active'  AND dept_id='$d' ORDER BY deptleader_id DESC");
           if(mysqli_num_rows($deptleaders)>0)
               {
                                                         
                     while ($row=mysqli_fetch_array($deptleaders)){

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
                     $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id'");
                                       $row4=  mysqli_fetch_array($getdept);
                                         $department=$row4['department'];
                        ?>
                        <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/deptleader/<?php echo $id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/deptleaders/<?php echo md5($id).'.'.$ext;?>" alt="Leader <?php echo $fullname?>" />
                                </a>
                        </div>
					<h4><span><?php echo $fullname; ?></span></h4>
                    <h4><?php echo $department; ?></h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/deptleader/<?php echo $id.'/'.str_replace(' ','-',$fullname).'.html';?>" class="hb-more">Read more</a>
					
				</div>
            
                             <?php }}?>
                
                
			</div>
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