<?php
include 'includes/conn2.php';
     if(isset($_SESSION['aicfollower'])){
header('Location:index');
     }
         ?> 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Register | aictanzania.org</title>
<meta name="description" content="Create an Account now" /> 
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "01b7cf85-e9af-439c-9bfd-9da6c12f14e4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        	 </head>

<body id="pages">
    <div id="fb-root"></div>
                <script>
                    window.fbAsyncInit = function() {
                        // init the FB JS SDK
                        FB.init({
                            appId: '471963152929479', // App ID from the app dashboard
                            channelUrl: 'http://www.aictanzania.org/', // Channel file for x-domain comms
                            status: true, // Check Facebook Login status
                            xfbml: true // Look for social plugins on the page
                        });

                        // Additional initialization code such as adding Event Listeners goes here
                    };

                    // Load the SDK asynchronously
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {
                            return;
                        }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
    <div class="body">
        <!-- ******HEADER****** --> 
        <div class="slider-wrap">
  <?php include 'includes/header.php';?>
        </div><!--//slider-wrap-->
        <!-- ******NAV****** -->
        <div class="white-bg">
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container login-wrap">
				<div class="col-md-12">
					<div class="l-info">
						<div class="line-sep"></div>
						<h3>Register Now</h3>
                        <?php
                                               if(isset($_POST['submit'])){
                                                $name=  mysqli_real_escape_string($con,  trim($_POST['name']));
                                                $occupation=  mysqli_real_escape_string($con,  trim($_POST['occupation']));
                                                $gender=  mysqli_real_escape_string($con,  trim($_POST['gender']));
                                                $day=  mysqli_real_escape_string($con,  trim($_POST['day']));
                                                $month=  mysqli_real_escape_string($con,  trim($_POST['month']));
                                                $year=  mysqli_real_escape_string($con,  trim($_POST['year']));
                                                $diocese=  mysqli_real_escape_string($con,  trim($_POST['diocese']));
                                                $pastorate=  mysqli_real_escape_string($con,  trim($_POST['pastorate']));
                                                $church=  mysqli_real_escape_string($con,  trim($_POST['church']));
                                                $username=  mysqli_real_escape_string($con,  trim($_POST['username']));
                                                $phone=  mysqli_real_escape_string($con,  trim($_POST['phone']));
                                                $password=  mysqli_real_escape_string($con,  trim($_POST['password']));
                                                $repeat=  mysqli_real_escape_string($con,  trim($_POST['repeat']));
                                                $employee=$_POST['employee'];
                                                $status='waiting';
                                                $no='no';
                                                if($employee=='no'){
                                                $position='follower';
                                                }  else {
                                                    $designation=  mysqli_real_escape_string($con,$_POST['position']);
                                                    $department=$_POST['department'];
                                                      $position='employee';
                                                }
                                                if((empty($name))||(empty($occupation))||(empty($gender))||(empty($day))||(empty($month))||(empty($year))||(empty($phone))||(empty($username))||(empty($password))||(empty($repeat))){
                                         $errors[]='All Fields Should be Filled';
                                                    }
                                                    if((checkdate($month, $day, $year))==FALSE){
                                                        $errors[]='Date is invalid';
                                                    }
                                                    if($employee=='yes'){
                                                        if((empty($department))||(empty($designation))){
                                                            $errors[]='Department and Designation empty';
                                                        }
                                                    }
                                                    $check=  mysqli_query($con,"SELECT * FROM  registered_users WHERE username='$username'");
                                                    if(mysqli_num_rows($check)>0){
                                                        $errors[]='Username already exists';
                                                    }
                                                    if(!empty($errors)){
                                                        foreach ($errors as $error) {
                                                            echo '<div class="alert alert-danger">'.$error.'</div>';
                                                        }
                                                    }  else {
                                                        $pass=md5($password);
                                                        $dob=$month.'/'.$day.'/'.$year;
                                                        $address=$username.'@aict.org';
                          $stmt=$con->prepare("INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)") or die(mysqli_error($con));
                                     $stmt->bind_param('ssssssssssss',$name,$position,$phone,$gender,$dob,$occupation,$church,$username,$address,$pass,$no,$status) or die(mysqli_error($con));
                                     $stmt->execute();
                                     $stmt2=$con->prepare("INSERT INTO employees(fullnames,dob,position,phone,gender,dept_id,username,status) VALUES(?,?,?,?,?,?,?,?)") or die(mysqli_error($con));
                                     $stmt2->bind_param('ssssssss',$name,$dob,$designation,$phone,$gender,$department,$username,$status) or die(mysqli_error($con));
                                     $stmt2->execute();
                                     echo '<div class="alert alert-success">Data successfully Added.Allow us to review it before verification</div>';
                                                    }
                                                }
                                            ?>
						<p>Fill Form Below</p>
						<div class="space40"></div>
						<form action="" method="post" name="form" >
                        <label class="control-label">Names</label>
                        <input id="name" class="form-control" name="name" placeholder="Enter your name" type="text" required="required">
                        <div id='form_name_errorloc' class='text-danger'></div>
                        <label class="control-label">Occupation</label>
                        <input id="occupation"  name="occupation" class="form-control" placeholder="Enter your occupation" type="text" required="required">
                                       <div id='form_occupation_errorloc' class='text-danger'></div>
                                       <label for="phone">Employee of AICT?</label>
                                    <select class="form-control" name="employee" id="employee">                                    
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    <label for="phone">Select Department</label>
                                    <select class="form-control" name="department">
                                           <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
                                                        $dept=$row['department'];
                                                        $status=$row['status'];
                                                                    $dept_id=$row['department_id'];
                                            ?>
                                                        <option value="<?php echo $dept_id; ?>"><?php echo $dept;?></option>
                                                <?php }?>
                                    </select>
                                    <label for="position"> Position</label>
                                    <input id="position" class="form-control mt-3" name="position" placeholder="Enter your position" type="text">
                                    <select class="form-control" name="gender">
                                        <option value="" selected="selected">select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                       <div id='form_gender_errorloc' class='text-danger'></div>
                                       <div class="form-group phone">
                                      <label class="control-label" for="phone">* Date of Birth</label>
                         <div class="row">
                      <div class="col-md-4">
                          <select   class="form-control" name="day">
                              <option value="" selected="selected">Day</option>
                              <?php
                              for($x=1;$x<=31;$x++){
                              ?>
                              <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
                              <div id='form_day_errorloc' class='text-danger'></div>
                      </div>
                               <div class="col-md-4">
                    <select   class="form-control" name="month">
                              <option value="" selected="selected">Month</option>
                               <option value="1">Jan</option>
                               <option value="2">Feb</option>
                               <option value="3">Mar</option>
                               <option value="4">Apr</option>
                               <option value="5">May</option>
                               <option value="6">Jun</option>
                               <option value="7">Jul</option>
                               <option value="8">Aug</option>
                               <option value="9">Sept</option>
                               <option value="10">Oct</option>
                               <option value="11">Nov</option>
                               <option value="12">Dec</option>
                             
                          </select>
                                       <div id='form_month_errorloc' class='text-danger'></div>
                      </div>
                              
                               <div class="col-md-4">
                              
                    <select   class="form-control" name="year">
                              <option value="" selected="selected">Year</option>
                              <?php
                              $startyear=(date('Y',time()))-10;
                              $endyear=$startyear-80;
                                for($x=$startyear;$x>=$endyear;$x--){
                              ?>
                              <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
                                     <div id='form_year_errorloc' class='text-danger'></div>
                      </div>
                    
                                    
                                </div>
                                      </div>
                                      <select   name = "diocese" id="diocese" class="form-control">
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
                                                  <div id='form_diocese_errorloc' class='text-danger'></div>
                                                  <div class="form-group">
                                      <label class="control-label"> *Select Pastorate</label>

                                 <select name = "pastoratename" id="pastoratename" class="form-control">
						<option value="">Select Pastorate...</option>
					</select>
                                                     <?php 
                                             $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'");
                                                             while($row2=  mysqli_fetch_array($getdioceses)){
                                                    $diocese_id=$row2['diocese_id'];
                                                  
                                            ?>
					
                              <select name = "pastorate" id="pastorate<?php echo $diocese_id;?>" style="display:none;" class="pastorates form-control">
					                                <option value="">Select Pastorate ...</option>
                                                                    <?php                        
                                                                                $dioceses=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1'  AND diocese_id='$diocese_id' ORDER BY pastorate");
                                                                                    while ($row=mysqli_fetch_array($dioceses)){
                                                    $pastorate=$row['pastorate'];
                                                    $status=$row['status'];
                                                                $pastorate_id=$row['pastorate_id'];
                                                                ?>
                                                                <option value="<?php echo $pastorate_id; ?>"><?php echo $pastorate; ?></option>
                                                                <?php } ?>					
                                                        </select>
                                                             <?php }?>
                                              
                                                                                                              
                                </div>
                                <div class="form-group">
                                      <label class="control-label">Local Church</label>

                                 <select name = "church" id="churchname" class="form-control">
						<option value="">Select Local Church</option>
					</select>
                                                                                                 <?php 
                                      $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1' ");
                                 while ($row=mysqli_fetch_array($pastorates)){
                                                $pastorate_id=$row['pastorate_id'];
                                                  
                                            ?>
					
                                                        <select name = "church" id="church<?php echo $pastorate_id;?>" style="display:none;" class="churches form-control">
                                                                        
                                                                    <?php                        
                                                                                    $churches=  mysqli_query($con,"SELECT * FROM churches WHERE pastorate_id='$pastorate_id' ORDER BY church");
                                                                                    while ($row=mysqli_fetch_array($churches)){
                                                    $church=$row['church'];
                                                    $status=$row['status'];
                                                                $church_id=$row['church_id'];
                                                                ?>
                                                                <option value="<?php echo $church_id; ?>" class="mine"><?php echo $church; ?></option>
                                                                <?php } ?>					
                                                                </select>
                                                             <?php }?>
                                      </div>
                                      <label class="control-label">Phone Number</label>
                                      <input id="name" class="form-control" name="phone" placeholder="Enter your phone number" type="text" required="required">
                                       <div id='form_phone_errorloc' class='text-danger'></div>
                                       <div class="form-group">
                                    <label for="username">Email Address</label>
                                     <div class="input-group">
                                        <input class="form-control" name="username" id="username" placeholder="eg example" type="text">
                                        <span class="input-group-addon bg-default no-border">@aict.org</span>
                                    </div>
                                       <div id='form_username_errorloc' class='text-danger'></div>
                                </div>
                                <label class="control-label">Password</label>
                                <input id="name" class="form-control" name="password" placeholder="Enter your password" type="password" required="required">
                                       <div id='form_password_errorloc' class='text-danger'></div>
                                        <label class="control-label">Repeat Password</label>
                                       <input id="name" class="form-control" name="repeat" placeholder="Enter your password" type="password" required="required">
                                       <div id='form_repeat_errorloc' class='text-danger'></div>
                                       <a class="forgot-pass" href="<?php echo BASE_URL;?>/login">Sign In</a>
							 <button type="submit" name="submit" class="l-btn">Register</button>
						</form>
					</div>
				</div>
				<div class="col-md-4">
                <aside class="col-md-16">
					<div class="space50"></div>
					<div class="side-widget">
						<h5>Other News</h5>
						<ul class="sermon-list">
                        <?php 
                          $articles=  mysqli_query($con,"SELECT * FROM news WHERE  published='published' ORDER BY article_id LIMIT 4");
                          if(mysqli_num_rows($articles)>0){
                            
                                                    while($rows=  mysqli_fetch_array($articles)){
                                                        $subject2=$rows['article_title'];
                                        $id2=$rows['article_id'];
                                        $headphotos=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id2'") or die(mysqli_error($con));
                                                $row2= mysqli_fetch_array($headphotos);
                                    $ext2=$row2['ext'];
                                    $photo_name2=$row2['photo_name'];    
                          
                                                             ?>
                                                             <li>
                                                             <a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>">
                                        <img src="<?php echo BASE_URL.'/newsphotos/'.$photo_name2.'.'.$ext2;?>" class="s-thumb"  title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject2;?>:aictanzania.org" /></a>
								<!-- <img  src="demo/xtra/2.jpg" alt=""/> -->
								<h4 style="font-size: 10px;"> <a href="<?php echo BASE_URL.'/article/'.$id2.'/'.str_replace(' ','-',$subject2).'.html"'; ?>">
                                                <?php echo $subject2;?></a>
								</h4>
								<div class="clear"></div>
								
							</li>
                               <!--//news-item-->
                                <?php }}?>
						</ul>
					</div>
				</aside>
					<!-- <div class="l-info">
						<h3>GUEST CHECKOUT</h3>
						<p>Phasellus bibendum, neque id ultricies sollicitudin, dolor sem vehicula nibh, eget mollis dolor mi id purus. Phasellus a nisi ac quam ullamcorper iaculis at id lectus. </p>
						<p>Integer sollicitudin nisl nec leo imperdiet, ut sollicitudin felis adipiscing. Cum sociis natoque penatibus.</p>
						<div class="space60"></div>
						<a href="#" class="l-btn">Continue as Guest</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- Main content -->

	</div>
    
        <!-- ******CONTENT****** --> 
   
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
     <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script> 
        <script language="JavaScript" src="<?php echo BASE_URL;?>/js/gen_validatorv4.js" type="text/javascript"></script>
    
</body>
<script>
      $('#pastoratename').click(function() {
        if ( $('#diocese').val() === '') {
        	alert("Please Select a Diocese First");
        }     
    });   
    
          $('#diocese').change(function() {
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#pastoratename").hide();
                 $( ".pastorates" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });

             $("#pastorate"+ $('#diocese').val()).show();
             var townid=  $("#pastorate"+ $('#diocese').val());
  $('.pastorates').change(function() {
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#churchname").hide();
                 $( ".churches" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });
                              $("#church"+ $(townid).val()).show();
                         
                
                    }
                      else {
       	
             $("#churchname").show();
                 $( ".churches" ).hide();
                                   }
      
  });
        }
       else {
       	
             $("#pastoratename").show();
                 $( ".pastorates" ).hide();
                   $("#churchname").show();
                 $( ".churches" ).hide();
            
                     }
    });
     $('#employee').on('change', function() {
               var getselect=$(this).val();
  if(getselect==='yes'){
         $('.foremployees').show();
         }else{
         $('.foremployees').hide();
  }
});
 var frmvalidator  = new Validator("form");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();            
                       frmvalidator.addValidation("name","req","*Name is Required");
                       frmvalidator.addValidation("gender","req","*Gender is Required");
                       frmvalidator.addValidation("occupation","req","*Occupation  is Required");
                      frmvalidator.addValidation("day","req","*Day Required");
                      frmvalidator.addValidation("username","req","*Username Required");
                frmvalidator.addValidation("month","req","*Month Required");
                frmvalidator.addValidation("year","req","*Year Required");
                 frmvalidator.addValidation("password","req","*Password  Required");
                 frmvalidator.addValidation("diocese","req","*Diocese  Required");
                 frmvalidator.addValidation("phone","req","*Phone  Required");
                             frmvalidator.addValidation("repeat","req","*Repeat Required");
              frmvalidator.addValidation("password","minlength=6","*password  should atleast be 6 characters");
 frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

</script>

</html> 

