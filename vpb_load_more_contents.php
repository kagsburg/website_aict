<?php

include "includes/conn2.php";

if(isset($_POST["last_loaded_id"]) && !empty($_POST["last_loaded_id"]))
{
//       $articles=  mysqli_query($con, "SELECT * FROM news WHERE published='published'  ORDER BY article_id DESC limit 1");
	$articles = mysqli_query($con, "select * from news where published='published'  and  article_id < '".mysqli_real_escape_string($con, strip_tags($_POST['last_loaded_id']))."' order by `article_id` desc limit 4");
	
	if(mysqli_num_rows($articles) > 0)
	{
		 while($row = mysqli_fetch_array($articles))
		 {
                     $subject=stripSlashes($row['article_title']);
                      $subject2 = trim(preg_replace('/[^a-zA-Z0-9\-]/', ' ', $subject)); 
$description=$row['article_description'];
         $id = strip_tags($row["article_id"]);
             $timestamp=$row['timestamp'];
               $photo=  mysqli_query($con, "SELECT * FROM news_photos WHERE article_id='$id'") or die(mysqli_error($con));
                     $row2= mysqli_fetch_array($photo);
          $ext=$row2['ext'];
          $photo_name=$row2['photo_name'];
                     		 
                                 
			 ?>
             <div class="ministries-list">
                                <div class="row">
                                    <div class="col-md-4"><img class="img-responsive"  src="<?php echo BASE_URL.'/newsphotos/'.$photo_name.'.'.$ext;?>" title="<?php echo $subject2;?>:aictanzania.org" alt="<?php echo $subject;?>:aictanzania.org" width="100%"/></div>
                                    <div class="col-md-12">
                                        <!-- <ul class="hb-social">
                                            <li class="hb-fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="hb-tw"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="hb-plus"><a href="#"><i class="fa fa-plus"></i></a></li>
                                        </ul> -->
                                        <h4><a href="<?php echo BASE_URL.'/article/'.$id.'/'.str_replace(' ','-',$subject2).'.html"'; ?>"><?php echo $subject;?></a></h4>
                                        <p><?php echo strip_tags(substr($description,0,170)).'...';?></p>
                                    </div>
                                </div>
                            </div>
			 <?php
		 }
		 ?>
        <script type="text/javascript"> $(document).ready(function(){ $("#last_loaded_id").val(parseInt('<?php echo $id; ?>'));  }); </script>
        <?php
	}
	else
	{
		 ?>
         <script type="text/javascript"> $(document).ready(function(){ $("#vpb_more_button").remove(); });</script>
         
		 
         <div class="vpb_show_more_or_the_ends" align="center"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:gray;">No more Articles</font></div>
         
		 <br clear="all" />
		 <?php
		 exit;
	}
}
else
{
	echo "Sorry, data could not be passed at the moment. Please try again or contact this website admin to report this error message if the problem persist. Thanks...";
}

?>
