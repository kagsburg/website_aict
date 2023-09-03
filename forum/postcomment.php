<!DOCTYPE html>
<?php
include '../includes/conn.php';
$id=$_GET['t'];
?>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Constitution Forum</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom -->
        <link href="css/custom.css" rel="stylesheet">

   

        <!-- fonts -->
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

        <!-- CSS STYLE-->
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen">
        <style>
            .slotholder h1{
                margin: 0;position: relative;text-align: center;color: #fff;font-size: 60px;top: 30%;vertical-align: middle;text-shadow: 1px 1px 0px #000;font-family: georgia;
            }
               @media (max-width: 550px) {
          .slotholder h1{
  top: 20%;font-size: 50px
     }
        </style>
    </head>
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container" style="overflow: visible;">
                <div class="tp-banner revslider-initialised tp-simpleresponsive" style="max-height: 278px; height: 278px;" id="revslider-861">
                    <ul style="display: block; overflow: hidden; width: 100%; height: 100%; max-height: none;">	
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" style="width: 100%; height: 100%; overflow: hidden; visibility: visible; left: 0px; top: 0px; z-index: 20; opacity: 1;">
                            <!-- MAIN IMAGE -->
                                    <div class="slotholder" style="width:100%;height:100%;"><div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" data-lazydone="undefined" data-src="images/slide.jpg" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url(&quot;images/slide.jpg&quot;); background-size: cover; background-position: left top; width: 100%; height: 100%; opacity: 1; position: relative;">
                                            <h1>MAONI YA KATIBA MPYA YA AICT</h1>
                                            
                                </div></div>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                    <div class="tp-loader" style="display: none;"></div><div class="tp-bannertimer" style="visibility: hidden; width: 0%;"></div>
                    
                
                </div>
            </div>
            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                     
                        <div class="col-lg-12  avt" style="text-align: center">                            
                            <a  href="index.php"   class="btn btn-primary">Back to  Forum</a>   
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
              
                <div class="container" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-lg-offset-2">
                            <?php
                            if(isset($_POST['fullname'],$_POST['email'],$_POST['comment'],$_POST['phone'])){
                                $fullname=  mysqli_real_escape_string($con,  trim($_POST['fullname']));
                                $email=  mysqli_real_escape_string($con,  trim($_POST['email']));
                                $comment=  mysqli_real_escape_string($con,  trim($_POST['comment']));
                                $phone=mysqli_real_escape_string($con,  trim($_POST['phone']));
                                if((empty($fullname))||(empty($comment))){
                                    echo '<div class="alert alert-danger">Fields marked with * shouldnt be blank</div>';
                                }  else {
                                    mysqli_query($con,"INSERT INTO topiccomments(comment,topic_id,fullname,email,phone,timestamp,status) VALUES('$comment','$id','$fullname','$email','$phone',UNIX_TIMESTAMP(),'1')") or die(mysqli_error($con));    
                                       echo '<div class="alert alert-success">Your Comment has been Successsfully Posted</div>';
                                }
                            }
                            
                            ?>
                         
                        </div>
                      
                    </div>
                </div>


            </section>

           
        </div>

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="js/jquery_003.js"></script>
 

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="js/jquery_002.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>

        <script src="js/bootstrap.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">
            
            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    
</body></html>