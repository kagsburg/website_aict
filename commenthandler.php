  <?php
include 'includes/conn2.php';
if(isset($_SESSION['aicfollower'])){
$comment=  strip_tags($_POST['comment']);
$time=time();
$status=1;
$id=$_GET['a'];

  if((empty($comment))){
      $errors[]='All Fields are required';
  }
  
         if(!empty($errors)){
foreach($errors as $error){ 
 ?>
  <div class="alert alert-danger"><?php echo $error; ?></div>
<?php 
   }
   
}
        else{

  
      $stmt3=$con->prepare("INSERT INTO comments(comment,follower_id,article_id,timestamp,status) VALUES(?,?,?,?,?)") or die(mysqli_errno($con));
                                                                              $stmt3->bind_param('siiii',$comment,$_SESSION['aicfollower'],$id,$time,$status);
                                                                               $stmt3->execute();
                                                                      $getfollower=  mysqli_query($con,"SELECT * FROM followers WHERE follower_id='".$_SESSION['aicfollower']."'");
                                                $row3=  mysqli_fetch_array($getfollower);
                                                $fullname=$row3['fullname'];
                                                $occupation=$row3['occupation'];
                                                $church_id=$row3['church_id'];
                                                $gender=$row3['gender'];
                                                     $churches=  mysqli_query($con,"SELECT * FROM churches WHERE status=1 AND church_id='$church_id'");
                                 $row=mysqli_fetch_array($churches);
                          $church=$row['church'];
                      ?>
                            <article class="events-item page-row has-divider clearfix">
                                <div class="date-label-wrapper col-md-1 col-sm-2">
                                    <p class="date-label">
                                        <img src="<?php echo BASE_URL;?>/images/avatar.png" class="img img-responsive">
                                    </p>
                                </div><!--//date-label-wrapper-->
                                <div class="details col-md-11 col-sm-10">
                                    <h4 class="title" style="font-size: 14px;font-weight: 600;margin-bottom: 5px"><?php echo $fullname; ?></h4>
                                    <p class="meta"><span class="time"><i class="fa fa-calendar"></i><?php echo date('d/M/Y',$time); ?></span><span class="location"><i class="fa fa-map-marker"></i><a href="#"><?php echo $church; ?></a></span></p>  
                                    <p class="desc"><?php echo $comment; ?></p>                       
                                </div><!--//details-->
                            </article><!--//events-item-->
<?php
        }
        }
?>