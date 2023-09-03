           <?php
           include '../includes/conn2.php';
           $id=$_GET['a'];
                            if(isset($_POST['fullname'],$_POST['comment'],$_POST['phone'])){
                                $fullname=  mysqli_real_escape_string($con,  trim($_POST['fullname']));
                                                                $comment=  mysqli_real_escape_string($con,  trim($_POST['comment']));
                                $phone=mysqli_real_escape_string($con,  trim($_POST['phone']));
                                if((empty($fullname))||(empty($comment))){
                                    echo '<div class="alert alert-danger">Fields marked with * shouldnt be blank</div>';
                                }  else {
                                    mysqli_query($con,"INSERT INTO topiccomments(comment,topic_id,fullname,phone,timestamp,status) VALUES('$comment','$id','$fullname','$phone',UNIX_TIMESTAMP(),'1')") or die(mysqli_error($con));    
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
                               <?php  }
                            }
                            
                            ?>