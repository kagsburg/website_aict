<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php 
  include 'includes/conn2.php'; 
    $id=$_GET['id'];
      $depts=  mysqli_query($con,"SELECT * FROM departments WHERE department_id='$id'");
                                                     $row = mysqli_fetch_array($depts);
                                                          $dept_id=$row['department_id'];
                                                          $deptname=$row['department'];
  ?>
<head>
    <title><?php echo $deptname; ?>-Africa Inland Church Tanzania</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $deptname; ?> ,all about  Aic tanzania <?php echo $deptname; ?>,Location of Aic tanzania <?php echo $deptname; ?>,
          Aic tanzania <?php echo $deptname; ?>">
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
    <div>
    <div class="main-wrap">
			<div class="container">

				<!-- Ministries Content -->
				<div class="col-md-12">
					<div class="ministries-single">
						<h4><a href="#"><?php echo $deptname; ?></a></h4>
                        <h3> About Us</h3> 
                        <?php
                        $getdetails=  mysqli_query($con,"SELECT * FROM deptdetails WHERE dept_id='$id'");
                        $row=  mysqli_fetch_array($getdetails);
                        if (mysqli_num_rows($getdetails)==0){
                            $aboutus="No details available";
                            $whatwedo="No details available";
                            $sponsors="No details available";
                            $programs="No details available";
                            $contacts="No details available";
                        }else{
                        $aboutus=$row['aboutus'];
                        $whatwedo=$row['whatwedo'];
                        $sponsors=$row['sponsors'];
                        $programs=$row['programs'];
                        $contacts=$row['contacts'];
                        }
                        ?>
						<p><?php echo $aboutus;?> </p>
						<div class="space90" style="border-bottom: 1px solid #cbc6ac;"></div>
                        <div class="faq-wrapper col-md-16 col-sm-8">                         
                            <div class="panel-group" id="accordion">
                                
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-2">
                                           What We Do
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                   <?php echo $whatwedo; ?>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-3">
                                            Programs
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                       <?php echo $programs; ?>
                                        </div><!--//panel-body-->
                                    </div><!--//panel-colapse-->
                                </div><!--//panel-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-4">
                                            Our Staff
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                        <div class="row">
                                                  <?php
                                   $deptleaders=  mysqli_query($con,"SELECT * FROM deptleaders WHERE status='active'   AND  dept_id='$id' ORDER BY level");
                                        if(mysqli_num_rows($deptleaders)>0)
                                            {
                                                                                        
                                                    while ($row=mysqli_fetch_array($deptleaders)){

                                            $fullname=$row['fullnames'];
                                            $activate=$row['status'];
                                            $date=$row['start_date'];
                                            $dob=$row['dob'];
                                                $dept_id=$row['dept_id'];
                                                $deptleader_id=$row['deptleader_id'];
                                                $position=$row['position'];
                                                $wife=$row['wife'];
                                                $bio=$row['bio'];
                                                $ext=$row['ext'];
                                                    $getdept=  mysqli_query($con,"SELECT * FROM departments  WHERE department_id='$dept_id'");
                                                                    $row4=  mysqli_fetch_array($getdept);
                                                                        $department=$row4['department'];
                                                        ?>
                            <div class="col-lg-6 staffleader">
                                <figure class="thumb col-lg-5" style="max-height:120px;overflow: hidden">
                                      <a href="<?php echo BASE_URL; ?>/deptleader/<?php echo $deptleader_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/deptleaders/<?php echo md5($deptleader_id).'.'.$ext;?>" alt="Leader <?php echo $fullname?>" />
                                </a>
                                </figure>
                                <div class="details col-lg-7">
                                    <a href="<?php echo BASE_URL; ?>/deptleader/<?php echo $deptleader_id.'/'.str_replace(' ','-',$fullname).'.html';?>">
                                    <h3 class="title" style="margin-bottom:0px;font-size:15px"><?php echo $fullname?></h3></a>
                                    <h4 style="margin: 2px;font-size:13px"><?php echo $position; ?></h4>
                                  
                                </div>                               
                            </div>
                             <?php }}?>
                                               </div>
                                            <h4>Other Members</h4>
                                            <table class="table table-bordered table-condensed">
                                                <thead>
                                                    <th>Fullname</th>
                                                    <th>Gender</th>
                                                    <th>Position</th>
                                                </thead>
                                                <tbody>
                                                  
                                                        <?php
                                                          $employees=  mysqli_query($con,"SELECT * FROM employees  WHERE dept_id='$id' and status!='inactive' ");
                                                          while ($row = mysqli_fetch_array($employees)) {
                                                                  $employee_id=$row['employee_id'];
$fullname=$row['fullnames'];
             $dob=$row['dob'];
               $position=$row['position'];
               $dept_id=$row['dept_id'];
               $status=$row['status'];
               $gender=$row['gender'];
               ?> 
                                                    <tr><td><?php echo $fullname; ?></td><td><?php echo $gender; ?></td><td><?php echo $position; ?></td> </tr>
                                                        
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
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-5">
                                         Announcements
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-5" class="panel-collapse collapse">
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
                                                          $deptposts=  mysqli_query($con,"SELECT * FROM deptposts  WHERE dept_id='$id'  AND status='1'");
                                                          while ($row = mysqli_fetch_array($deptposts)){
                                                               $title=$row['post_title'];
             $description=$row['description'];
               $ext=$row['ext'];
               $deptpost_id=$row['deptpost_id'];
               $timestamp=$row['timestamp'];
                            ?> 
                                                    <tr>
                                                        <td><img src=""><img src="<?php echo BASE_URL; ?>/deptposts/thumbs/<?php echo md5($deptpost_id).'.'.$ext; ?>" width="100"></td>
                                                                    <td><?php echo $title; ?></td>
                                                                    <td><?php echo date('d/M/Y',$timestamp); ?></td> 
                                                                    <td><a href="<?php echo BASE_URL.'/post/'.$deptpost_id.'/'.str_replace(' ','-',$title);?>.html" class="btn btn-xs btn-info">Details</a></td> 
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
                                            <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse-6">
                                        Sponsors and partners
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
                                          Location and Contacts
                                            </a>
                                        </h3>
                                    </div><!--//pane-heading-->
                                    <div id="collapse-7" class="panel-collapse collapse">
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
						<h5>Other Departments</h5>
						<ul class="categories">
                        <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
                        $dept=$row['department'];
                        $status=$row['status'];
                                    $dept_id=$row['department_id'];
                                    ?>   
          <li><a  href="<?php echo BASE_URL; ?>/dept/<?php echo $dept_id.'/'.str_replace(' ','-',$dept).'.html';?>" style="margin-bottom: 5px"><?php echo $dept; ?></a></li>
                                       
                                                <?php }?>
						</ul>
					</div>
				</aside>
				<!-- Ministries Content -->
			</div>
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

