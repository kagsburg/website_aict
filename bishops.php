<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php';
  ?>
<head>
   <title>Bishops-Africa inland church Tanzania(AICT)</title>
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
      <link href="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.css" rel="stylesheet">
    <!-- Theme CSS -->  

     <script language="JavaScript" src="<?php echo BASE_URL;?>/assets/js/gen_validatorv4.js" type="text/javascript"></script>
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
        <div class="slider-wrap">
                <!-- ******HEADER****** --> 
        <?php include 'includes/header.php';?>
        </div>
        <!-- ******HEADER****** --> 
        <!-- ******CONTENT****** --> 
        <div class="white-bg">
            <!-- Welcome info -->
		<div class="welcome-wrap" style="border-bottom: none;">
			<div class="container">
				<div class="col-md-16">
					<h3>BISHOPS</h3>
					<p><form class="course-finder-form" action="bishop" name="form" method="get">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 subject">
                                        <select name="id" data-placeholder="Choose a bishop..." class="chosen-select form-control subject" style="height:50px" >
                                        <option value="" selected="selected">choose bishop... </option>
                                        <?php
                                             $bishops=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' ORDER BY bishop_id DESC");
                                            if(mysqli_num_rows($bishops)>0)
                                                {
                                                                                            
                                                            while ($row=mysqli_fetch_array($bishops)){
                                    //$subject=$row['article_title'];
                                                $bish_id=$row['bishop_id'];
                                                $fullname=$row['fullname'];
                                                $activate=$row['status'];
                                                $date=$row['startdate'];
                                                $dob=$row['dob'];
                                                    $diocese=$row['diocese'];
                                        $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                                        ?>
                                        <option value="<?php echo $bish_id;?>"><?php echo $fullname;?></option>
                                           <?php }}?>
                                                                                  </select>
                                        <div id='form_id_errorloc' class='text-danger'></div>
                                    </div> 
                                    <div class="col-md-3 col-sm-3 keywords">
                                                                               <button type="submit" class="btn btn-theme">Choose Bishop</button>
                                    </div> 
                                </div>                     
                            </form><!--//course-finder-form--></p>
				</div>
			</div>
            <div class="home2_wrap1">
            <div class="container">
            <?php
                                    $bishop=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' AND actret='active' and rank='2' ORDER BY bishop_id DESC");
                                    if(mysqli_num_rows($bishop)>0){
                                                            while($row2=  mysqli_fetch_array($bishop)){
                          $bishop_id=$row2['bishop_id'];
                            $fullname=$row2['fullname'];
                            $activate=$row2['status'];
                            $date=$row2['startdate'];
                            $rank = $row2['rank'];
                            $dob=$row2['dob'];
                                $ext=$row2['ext'];
                                $diocese=$row2['diocese'];
                                $bio=$row2['bio'];
                                $wife=$row2['wife'];
                                $poster_id=$row2['poster_id'];
                    $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                        ?>
                          <div class="col-md-4">
                          <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/leaders/bishops/<?php echo md5($bishop_id).'.'.$ext;?>" alt="Bishop <?php echo $fullname?>" class="img-responsive team-staff"/>
                        </a>
                        </div>
                    <h4>Arch-Bishop<span style="font-size: 13px;
font-weight: 400;
display: block;"><?php echo $fullname?></span></h4>
                    <h4><?php echo $diocesename; ?> diocese</h4>
                    <div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>" class="hb-more">Read more</a>
                </div>
                             <?php }}else{?>
                <div class="col-md-8">
                    <h4>No Arch-Bishop Assigned</h4>
                </div>
                <?php }?>
            </div>
        </div>
		</div>
		<!-- Welcome info -->


        <!-- Team content -->
		<div class="main-wrap">
			<div class="container team2" style="margin-bottom: 30px;">
				<div class="col-md-16">
					<h5>Active Bishops</h5>
				</div>
                <?php
                                    $bishop=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' AND actret='active' and rank='1' ORDER BY bishop_id DESC");
                                    if(mysqli_num_rows($bishop)>0){
                                                            while($row2=  mysqli_fetch_array($bishop)){
                          $bishop_id=$row2['bishop_id'];
                            $fullname=$row2['fullname'];
                            $activate=$row2['status'];
                            $date=$row2['startdate'];
                            
                            $dob=$row2['dob'];
                                $ext=$row2['ext'];
                                $diocese=$row2['diocese'];
                                $bio=$row2['bio'];
                                $wife=$row2['wife'];
                                $poster_id=$row2['poster_id'];
                    $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                        ?>
                        <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/leaders/bishops/<?php echo md5($bishop_id).'.'.$ext;?>" alt="Bishop <?php echo $fullname?>" class="img-responsive team-staff"/>
                        </a>
                        </div>
					<h4>Bishop <span><?php echo $fullname?></span></h4>
                    <h4><?php echo $diocesename; ?> diocese</h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>" class="hb-more">Read more</a>
					
				</div>
                             <?php }}?>
			</div>
            <div class="container team2" style="margin-bottom: 30px;">
				<div class="col-md-16">
					<h5>Retired Bishops</h5>
				</div>
                <?php
                                    $bishop=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' AND actret='retired' ORDER BY bishop_id DESC");
                                    if(mysqli_num_rows($bishop)>0){
                                                            while($row2=  mysqli_fetch_array($bishop)){
                          $bishop_id=$row2['bishop_id'];
                            $fullname=$row2['fullname'];
                            $activate=$row2['status'];
                            $date=$row2['startdate'];
                            $dob=$row2['dob'];
                            $rank = $row2['rank'];
                                $ext=$row2['ext'];
                                $diocese=$row2['diocese'];
                                $bio=$row2['bio'];
                                $wife=$row2['wife'];
                                $poster_id=$row2['poster_id'];
                    $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                        ?>
                        <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/leaders/bishops/<?php echo md5($bishop_id).'.'.$ext;?>" alt="Bishop <?php echo $fullname?>" class="img-responsive team-staff"/>
                        </a>
                        </div>
					<h4><?php if($rank == "1"){ ?> Bishop<?php }else{ ?>Arch-Bishop <?php } ?> <span><?php echo $fullname?></span></h4>
                    <h4><?php echo $diocesename; ?> diocese</h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>" class="hb-more">Read more</a>
					
				</div>
                             <?php }}?>
			</div>
            <div class="container team2">
				<div class="col-md-16">
					<h5>Passed Away Bishops</h5>
				</div>
                <?php
                                    $bishop=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' AND actret='passed away' ORDER BY bishop_id DESC");
                                    if(mysqli_num_rows($bishop)>0){
                                                            while($row2=  mysqli_fetch_array($bishop)){
                          $bishop_id=$row2['bishop_id'];
                            $fullname=$row2['fullname'];
                            $activate=$row2['status'];
                            $date=$row2['startdate'];
                            $dob=$row2['dob'];
                            $rank = $row2['rank'];
                                $ext=$row2['ext'];
                                $diocese=$row2['diocese'];
                                $bio=$row2['bio'];
                                $wife=$row2['wife'];
                                $poster_id=$row2['poster_id'];
                    $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                        ?>
                        <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                        <img src="<?php echo BASE_URL;?>/leaders/bishops/<?php echo md5($bishop_id).'.'.$ext;?>" alt="Bishop <?php echo $fullname?>" class="img-responsive team-staff"/>
                        </a>
                        </div>
					<h4><?php if($rank == "1"){ ?> Bishop<?php }else{ ?>Arch-Bishop <?php } ?>  <span><?php echo $fullname?></span></h4>
                    <h4><?php echo $diocesename; ?> diocese</h4>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/bishop/<?php echo $bishop_id.'/'.str_replace(' ','-',$fullname).'.html';?>" class="hb-more">Read more</a>
					
				</div>
                             <?php }}?>
			</div>
		</div>
        </div>
    </div><!--//wrapper-->

        <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->   
    <script src="<?php echo BASE_URL;?>/js/jquery.js"></script>
<script src="<?php echo BASE_URL;?>/js/bootstrap.js"></script>
<script src="<?php echo BASE_URL;?>/js/jquery.mobilemenu.js"></script>       
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script> -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script>  -->
    <!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script>   -->
    <script src="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.jquery.js"></script>
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
    <!-- <script src="<?php echo BASE_URL;?>/js/main.js"></script> -->
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
  
 var frmvalidator  = new Validator("form");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
             
              frmvalidator.addValidation("id","req","*Select bishop to proceed ");
            
              //            frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

        </script>

</html>	