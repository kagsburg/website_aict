<?php

include "includes/conn2.php";

if (isset($_POST['song_id'])){
    // update the song's plays
    $song_id = $_POST['song_id'];
    $plays = $_POST['plays'];
    $plays++;
    // $sql = "UPDATE songs SET plays = WHERE id = $song_id";
    $result = mysqli_query($con, "UPDATE audios SET plays=plays+1 WHERE song_id='$song_id'");
    if ($result){
        echo "success";
    } else {
        echo "error";
    }
}
if (isset($_POST["last_loaded_audio_id"]) && !empty($_POST["last_loaded_audio_id"])){
    $articles = mysqli_query($con, "SELECT * FROM audios WHERE status='published'  and  song_id < '".mysqli_real_escape_string($con, strip_tags($_POST['last_loaded_audio_id']))."' order by `song_id` desc limit 4");
    	
	if(mysqli_num_rows($articles) > 0)
	{
		 while($row = mysqli_fetch_array($articles))
		 {
            $song_name=$row['song_name'];
            $song_id=$row['song_id'];
            $plays=$row['plays'];
            $songext=$row['ext'];
            $downloads=$row['downloads'];
            $artists=$row['artistes'];
                     		 
                                 
			 ?>
              <div class="sermon-content col-md-4">
						<div class="">
							
							<audio id="audioPlayer<?php echo $song_id;?>" src="<?php echo BASE_URL; ?>/audio_files/<?php echo $song_name.'-'.$artists.'_'.$song_id.'[aictanzania.org]'.'.'.$songext;?>"></audio>
							<div class="">
								<h4><?php echo $song_name;?></h4>
								<span class="post-meta"><?php echo $artists;?></span>
                                <ul class="m-ico">
									<li id="playr<?php echo $song_id;?>"><a href="javascript:void(0)" data-id="<?php echo $song_id;?>" data-plays="<?php echo $plays;?>" class="m-ico1"></a></li>
									<!-- <li><a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>" class="m-ico2"></a></li> -->
                                    
									<li><a  href="<?php echo BASE_URL; ?>/download.php?path=audio_files/<?php echo $song_name.'-'.$artists.'_'.$song_id.'[aictanzania.org]'.'.'.$songext;?>&&uh=<?php echo $song_id; ?>"class="m-ico3"></a></li>
								</ul>
								
							</div>
						</div>
					</div>
			 <?php
		 }
		 ?>
        <script type="text/javascript"> $(document).ready(function(){ $("#last_loaded_audio_id").val(parseInt('<?php echo $song_id; ?>'));  }); </script>
        <?php
	}else
	{
		 ?>
         <script type="text/javascript"> $(document).ready(function(){ $("#song_more_button").remove(); });</script>
         
		 
         <div class="vpb_show_more_or_the_ends" align="center"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:gray;">No more Audios </font></div>
         
		 <br clear="all" />
		 <?php
		 exit;
	}
}