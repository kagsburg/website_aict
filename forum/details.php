<!DOCTYPE html>
<?php
include '../includes/conn2.php';
$id=$_GET['id'];
  $gettopics=  mysqli_query($con,"SELECT * FROM topics WHERE topic_id='$id' AND type='yes' ORDER BY topic_id DESC");
  if(mysqli_num_rows($gettopics)<1){
      header("location:index");
  }
                     $row = mysqli_fetch_array($gettopics);
                         $topic_id=$row['topic_id'];
                         $topic=$row['topic'];
                         $timestamp=$row['timestamp'];
?>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $topic;  ?></title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom -->
        <link href="css/custom2.css" rel="stylesheet">

   

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
                     
                        <div class="col-lg-12" style="text-align: center">         
                            <h1 style="margin-top:10px;color: #333;font-family: 'HelveticaNeue',helvetica,arial;"> <?php echo $topic; ?></h1>
                            <!--<a  href="index"   class="btn btn-primary">Visit Private Forum</a>-->   
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
              
                <div class="container" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->
                     <?php
              $getcomments=  mysqli_query($con,"SELECT * FROM topiccomments WHERE  status=1 AND topic_id='$id'");
              if(mysqli_num_rows($getcomments)>0){
              while ($row=  mysqli_fetch_array($getcomments)){
                  $comment=$row['comment'];
                  $fullname=$row['fullname'];
               ?>
                      <div class="post">
                                <div class="wrap-ut pull-left">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="images/avatar.png" alt="" class="img img-responsive">
                                            <div class="status green">&nbsp;</div>
                                        </div>

                                    </div>
                                    <div class="posttext pull-left">
                                        <strong style="color:#b01e4b"><?php echo $fullname; ?></strong>
                                        <p style="color:#555"><?php echo $comment;?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                               
                                <div class="clearfix"></div>
                            </div>
                       
              <?php }}  else { ?>
                            <div class="alert alert-info">Be the first to comment on this post</div>
<?php } ?>
                              <div class="latest-com-loading"></div>
           <div class="latest-com"></div>
                            <div class="post" style="padding:15px">
                                <h2>Post Comment</h2>
                                     <div class="reply-msg"></div>
                                  
                                                        <div class="form-group">
                                                            <label>* Fullname</label>
                                                            <input type="text"  name="fullname" required="required" class="form-control" id="fullname"></div>
                                                               <div class="form-group">
                                                            <label>Phone Number</label>
                                                            <input type="text"  name="phone" class="form-control" id="phone"></div>
                                                               <div class="form-group">
                                                                   <label>Email</label>
                                                                   <input type="email"  name="email"  class="form-control" id="email"></div>
                                                               <div class="form-group">
                                                                   <label>* Comment</label>
                                                                   <textarea  name="comment" class="form-control" required="required" id="comment"></textarea>
                                                               </div>
                                                        <div>
                                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" id="submit"><strong>Post</strong></button>
                                                                                                                </div>
                                                                                  <div style="clear:both"></div>
                            </div>
                            </div>
                          <div class="col-lg-4 col-md-4">
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
        <script>
$(document).ready(function(){
$("#submit").click(function(){
var comment = $("#comment").val();
var fullname = $("#fullname").val();
var phone = $("#phone").val();
var email = $("#email").val();
// Returns successful data submission message when the entered information is stored in database.
//var dataString = 'comment='+ comment;
var dataString = 'fullname='+ fullname + '&comment='+ comment+'&phone='+phone+'&email='+email;
if((comment=='')||(fullname==''))
{
//$('.reply-msg').html('<div class="alert alert-danger"><i class="fa fa-warning"></i> Enter all fields  to proceed</div>');
alert("Comment or fullname is  empty");
}
else
{
    // AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "commenthandler.php?a=<?php echo $id; ?>",
data: dataString,
cache: false,
beforeSend: function() 
		{
	$(".latest-com-loading").html('<center><div align="center"><img src="images/lightbox-ico-loading.gif" align="absabsmiddle" title="Loading more..." /></div></center>');
		},
success: function(result){
$('.latest-com').html(result);
$(".latest-com-loading").html('');
}
});

}
return false;
});

});
</script>

        <!-- END REVOLUTION SLIDER -->
    
</body></html>