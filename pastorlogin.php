<?php 
include 'includes/conn2.php';        
if(isset($_SESSION['aictmedia'])){
header('Location:pastorhome.php');
}
                                    
   if(isset($_POST['username'],$_POST['password'])){
     $name=mysqli_real_escape_string($con,$_POST['username']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
if($name&&$pass){
$cust=mysqli_query($con,"SELECT * FROM registered_users  WHERE address='$name' AND password='".md5($pass)."' AND position='pastor' AND  status='active'");
$rows=mysqli_num_rows($cust);
if($rows>0){
$row=mysqli_fetch_array($cust);
$cust_id=$row['user_id'];
$church_id=$row['church_id'];
$position=$row['position'];
$_SESSION['aictmedia']=$cust_id;
$_SESSION['aicchurch']=$church_id;
$_SESSION['aicpos']=$position;
header("location:pastorhome.php");
}else{
header("location:pastorattempt.php");
}
}}
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AICT|LOGIN</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>

<?php
//$section=$_GET['section'];
?>
 <style>
 .fixed{position: fixed;top:0px;}
 #nav a:hover {
	background: #dedede;
}
#nav .current a {
	background: #666;
	color: #ededed;
}
.current {
	background: red;
}
  input[type="text"], input[type="password"]{ width: 280px; height:28px; border-radius: 3px; color:#06c;  border: 1px solid #666; background: #f9f9f9}
.input:focus{ border:1px solid #666; box-shadow: 0px 0px 8px 1px #333}
.show{border:1px solid #000;width:200px;
display:none}
.fixed{display:none;}
.normal{ display: none;}
        </style>
	 </head>

<body style="background:#f0f0f0">
   

<!--    <div class='nav'>
        <ul>
       <li><a href='home'>HOME</a></li>
            <li><a href='About-us'>ABOUT US</a></li>
                       <li><a href='Ministries'>MINISTRIES</a></li>
         <li><a href='Events'>EVENTS</a></li>
            <li><a href='Gallery'>GALLERY</a></li>
            <li><a href='News' >NEWS</a></li>
                       <li><a href='Contact'>CONTACT US</a></li>
                        <li><a href='Login' style='color:#660066'>LOGIN</a></li>
        </ul>
          <div style='clear: both;'></div>
            </div>-->
    <!--<img src='pic1.JPG'>-->
        <div class='login'>
                               
                           
                    <div class="login_slider">
                      <div class="ads-top-header" id="ads-top-header">
    <img class="active" src="../images/pic1.jpg"  style="width: 100%;cursor: pointer;" onclick="scroReg();"/>
    <img src="../images/pic2.jpg"  style="width: 100%; cursor: pointer; "/>
    <img src="../images/pic3.JPG"  style="width: 100%;" onclick="scroReg();"/>
 
    <div class="clear"></div>
</div>
                    </div>
                             <div class="login_area">
                                 <div style="width: 120px;z-index: 3;background: #000;color: yellow;text-align: center;margin-top: -10px;margin-left: 5px;font-weight: bold;font-family: century gothic">PASTOR LOGIN</div>
                                   <div class="login_area_inner">
        
                              <div id="validate_area" class="validate_area"style="font-weight: bold;color:red; width: 89%; text-align: center;float:left; margin-left: 5px;padding: 5px; margin-top:10px; font-size:12px;"></div>
 
   
       <form action="" method="post" name="form"   style=" color: #fff;font-size:13px; margin: 20px auto;font-weight: bold;" onsubmit="return validate();">
 <div style=" margin-top:0px;">
Email<br/>
<input type="text" name="username" id="username" class="input">
</div>
           <div style=" margin-top:20px;">
Password <br/>
<input type="password" name="password" id="password" class="input">
</div>
              <div style=" margin-top:18px;">
<button type="submit" class="button blue big  " style="padding:5px 10px;font-size: 13px;">Login</button></div>
</form> 
                                      <div style='clear: both;'></div>
                                   </div>
                                    <div style='clear: both;'></div>
                             </div>
                           
        
                        
              <div style='clear: both;'></div>
        </div>
    <div style='clear: both;'></div>

</body>
   
    </html>

  <script type="text/javascript">
   
                   function validate()
{
	var username = $("#username").val();
	var password = $("#password").val();
                   
	 if(username== "")
	{
		$("#validate_area").hide().fadeIn('slow').html('Please enter your username to proceed');
		$("#username").focus();
                $('#validate_area').removeClass('validate_area');
                return false;
	}
        else if(password== "")
	{
		$("#validate_area").hide().fadeIn('slow').html('Please enter your password to proceed');
		$("#password").focus();
                $('#validate_area').removeClass('validate_area');
                return false;
	}
        
        else{
           
            return true;
        }
    }
    
  function validatesearch()
{
	
        var search = $("#search").val();
	 if(search=="")
	{
		                return false;
	}
	      
       	        else{
                    return true;
                }}
             function cycleImages() {
        var $active = $('#ads-top-header .active');
        var $next = ($active.next().length > 0) ? $active.next() : $('#ads-top-header img:first');
        $next.css('z-index', 2); //move the next image up the pile
        $active.fadeOut(1000, function() {//fade out the top image
            $active.css('z-index', 1).show().removeClass('active'); //reset the z-index and unhide the image
            $next.css('z-index', 3).addClass('active'); //make the next image the top one
        });
    }

    $(document).ready(function() {
        // run every 4s
        setInterval('cycleImages()', 4000);
    });
</script>

