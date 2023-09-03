<!DOCTYPE html>
<?php
include '../includes/conn2.php';
$id=$_GET['c'];
?>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Open Constitution Forum</title>

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
                            <a  href="index"   class="btn btn-primary">Visit Private Forum</a>   
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
              
                <div class="container" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                             <?php
                           $getcats=  mysqli_query($con,"SELECT * FROM forumcategories WHERE forumcategory_id='$id'");
                        $row = mysqli_fetch_array($getcats);
                         $forumcategory_id=$row['forumcategory_id'];
                         $forumcategory=$row['forumcategory'];
                      ?>
                        <h1 style="color:#333"><?php echo $forumcategory; ?></h1>                
                            <?php
                     $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE status=1 AND type='yes' AND category_id='$id' ORDER BY topic_id DESC");
                     while ($row = mysqli_fetch_array($gettopics)) {
                         $topic_id=$row['topic_id'];
                         $topic=$row['topic'];
                         $timestamp=$row['timestamp'];
                          $getcomments=  mysqli_query($con,"SELECT * FROM topiccomments WHERE topic_id='$topic_id' AND status=1");
               ?>
                               <div class="post">
                                <div class="wrap-ut pull-left">
                                    
                                    <div class="userinfo pull-left">
<div class="comments">
    <div class="commentbg" style="background:#5e0568;padding: 6px 8px;">
                                             <?php echo 'Maoni '.mysqli_num_rows($getcomments); ?>
                                            <div class="mark" style="background:#5e0568;left: 37%;"></div>
                                        </div>

                                    </div>

                                    </div>
                                    <div class="posttext pull-left">
                                        <h2  style="margin:0px"><?php echo $topic; ?></h2>
                                        <!--<p>It's one thing to subject yourself to a Halloween costume mishap because, hey, that's your prerogative.</p>-->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="postinfo pull-left">
                                    <a  class="btn btn-primary btn-xs" href="details?id=<?php echo $topic_id; ?>" style="padding: 5px 10px;font-size: 12px;line-height: 1.5;background: #0c7692;margin-top:15px;margin-left: 5px;border-radius: 3px;">Details</a>
                                   
                                    <!--<div class="time"><i class="fa fa-calendar"></i> 24/9/2017</div>-->                                    
                                </div>
                                <div class="clearfix"></div>
                            </div><!-- POST -->
                            <div id="modal-form<?php echo $topic_id; ?>" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">          
                                          <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Post Comment</h3>
</div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <form role="form" method="POST" action="postcomment?t=<?php echo $topic_id; ?>" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label>* Fullname</label>
                                                            <input type="text"  name="fullname" required="required" class="form-control"></div>
                                                               <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text"  name="phone" class="form-control"></div>
                                                               <div class="form-group">
                                                                   <label>Email</label>
                                                            <input type="email"  name="email"  class="form-control"></div>
                                                               <div class="form-group">
                                                                   <label>* Comment</label>
                                                                   <textarea  name="comment" class="form-control" required="required"></textarea>
                                                               </div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Post</strong></button>
                                                                                                                </div>
                                                    </form>
                                                </div>
                                                
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        <?php } ?>
                        </div>
                      <div class="col-lg-4 col-md-4">

                            <!-- -->
                            <div class="sidebarblock">
                                <h3>Categories</h3>
                                <div class="divline"></div>
                                <div class="blocktxt">
                                    <ul class="cats">
                                       <?php
                            $getcats=  mysqli_query($con,"SELECT * FROM forumcategories WHERE status=1");
                     while ($row = mysqli_fetch_array($getcats)) {
                         $forumcategory_id=$row['forumcategory_id'];
                         $forumcategory=$row['forumcategory'];
                                                                   $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE category_id='$forumcategory_id' AND type='yes'");
                            ?>
                                        <li><a href="category?c=<?php echo $forumcategory_id; ?>"><?php echo $forumcategory; ?><span class="badge pull-right badge-primary"><?php echo mysqli_num_rows($gettopics); ?></span></a></li>
                     <?php }?>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </section>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 logo "><a href="#"><img src="http://localhost/aict/images/aictlogo2.jpg" alt="" class="img img-responsive"></a></div>
                        <div class="col-lg-8 col-xs-9 col-sm-5 ">All Rights reserved to AICT Tanzania. Powered by  <a href="http://ufanisiafrica.com" target="_blank">Ufanisi Africa</a></div>
                        <div class="col-lg-3 col-xs-12 col-sm-5 sociconcent">
                            <ul class="socialicons">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
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