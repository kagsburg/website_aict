<?php 
  include 'includes/conn2.php';
  $id=$_GET['d'];
              $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$id' ORDER BY diocese");
       $row=mysqli_fetch_array($dioceses);
$dioces_e=$row['diocese'];
$status=$row['status'];

  ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title><?php echo $dioces_e; ?> Pastors-AICT</title>
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
					<h3>Pastors</h3>
					<p><form class="course-finder-form" action="diocesepastors" name="form" method="GET">
                                
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
			<!-- <div class="space90"></div> -->
			<div class="container team2">
				<div class="col-md-16">
					<h5><?php echo $dioces_e?> Diocese Pastors</h5>
				</div>
                <?php
                                  $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  status='active' ORDER BY pastor_id DESC");
           if(mysqli_num_rows($pastors)>0)
               {
               
                   while ($row=mysqli_fetch_array($pastors)){

             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                $ext=$row['ext'];
                $diocese_id=$row['diocese_id'];
                if ($church_id == 0){
                    continue;
                }
                if ($church_id!=0){
                $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                      $pastorate_id=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate=$row3['pastorate'];
             $diocese_id=$row3['diocese_id'];
                }
                           if($id==$diocese_id){
                        ?>
                        <div class="col-md-4">
                        <div style="max-height:250px;overflow: hidden">
                        <a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/pastors/<?php echo md5($pastor_id).'.'.$ext;?>" alt="Pastor <?php echo $pastorname; ?>" />
                                </a>
                        </div>
					<h4>Pastor <span><?php echo $pastorname; ?></span></h4>
                    <?php if ($church_id!=0){?>
                    <h4><?php echo $church; ?></h4>
                    <?php } ?>
					<div class="line"></div>
					<a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>" class="hb-more">Read more</a>
					
				</div>
                            <!-- <div class="col-lg-6" style="margin-bottom:10px">
                                <figure class="thumb col-lg-5" style="max-height:120px;overflow: hidden">
                                      <a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/pastors/<?php echo md5($pastor_id).'.'.$ext;?>" alt="Pastor <?php echo $pastorname; ?>" />
                                </a>
                                </figure>
                                <div class="details col-lg-7">
                                    <a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <h3 class="title">Pastor <?php echo $pastorname; ?></h3></a>
                                    <h4><?php echo $church; ?></h4>
                                  
                                </div>                               
                            </div> -->
                   <?php }}} ?>
                
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
  
 $('#pastorname').click(function() {
        if ( $('#filter1').val() === '') {
        	alert("Please Select a Filter First");
        }     
    });   
    
          $('#filter1').change(function() {
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#pastorname").hide();
                 $( ".filterresults" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });

             $("#filter"+ $('#filter1').val()).show();
            var filterval=$("#filter"+ $('#filter1').val()).show();
         $(".filterresults").change(function() {
        if ( $(this).val() !== '') {
       	 $(this).closest("form").attr('action',  $(this).val());
        }
        });
        }
               else {
       	
             $("#pastorname").show();
                 $( ".filterresults" ).hide();
                
            
                     }
    });

        </script>

</html>	

