<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<?php
include 'includes/conn2.php';
     ?>
<head>
  <title>Songs,mp3,music downloads-aictanzania.org</title>
    <!-- Meta -->
     <meta name="robots" content="INDEX,FOLLOW">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Play and download church music from our official site:www.aictanzania.org">
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body id="pages">
<div class="body">
        <!-- ******HEADER****** --> 
        <div class="slider-wrap">
  <?php include 'includes/header.php';?>
        </div><!--//slider-wrap-->

        
	<div class="white-bg">
                    <!-- Welcome info -->
		<div class="welcome-wrap">
			<div class="container">
				<div class="col-md-16">
					<h3>Audios</h3>
				</div>
			</div>
		</div>
		<!-- Main content -->
		<div class="main-wrap">
			<div class="container">
				<div class="row" id="more_tutorials_loaded">
                <?php 
                           $songs=  mysqli_query($con, "SELECT * FROM audios WHERE status='published' ORDER BY song_id DESC LIMIT 5");
                                                                                 if(mysqli_num_rows($songs)){
                                                while($row=  mysqli_fetch_array($songs)){
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
                            <?php }}?>
							<div ></div>
							     
                        <!-- Holds the id of the last loaded content for the next contents to load -->
                        <input type="hidden" id="last_loaded_audio_id" value="<?php echo $song_id; ?>" />
						
					<!-- <div class="page-meta">
						<div class="space20"></div>
						<ul class="page-nav">
							<li>Page 1 of 5 
							<li>
							<li class="active"><a href="#">1</a>
							<li>
							<li><a href="#">2</a>
							<li>
							<li><a href="#">3</a>
							<li>
							<li><a href="#">4</a>
							<li>
							<li><a href="#">5</a>
							<li>
						</ul>
						<ul class="page-nav-links">
							<li><a href="#">&laquo; Previous page</a></li>
							<li><a href="#">Next page &raquo;</a></li>
						</ul>
					</div> -->
				</div>
				<?php if(mysqli_num_rows($songs)>4){?>
                            <button type="button" id="song_more_button" class="comments-more">Load more Audios</button>
                                <?php }?>
                <div class="main-wrap">
			<!-- <div class="space90"></div> -->
			<div class="container team2">
				<div class="col-md-16">
					<h5>Most Played Songs</h5>
				</div>
                <?php 
                           $songs=  mysqli_query($con, "SELECT * FROM audios WHERE status='published' ORDER BY plays DESC LIMIT 9");
                                                                                 if(mysqli_num_rows($songs)){
                                                            while($row=  mysqli_fetch_array($songs)){
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
									<li><a href="<?php echo BASE_URL; ?>/download.php?path=audio_files/<?php echo $song_name.'-'.$artists.'_'.$song_id.'[aictanzania.org]'.'.'.$songext;?>&&uh=<?php echo $song_id; ?>" class="m-ico3"></a></li>
								</ul>
								
							</div>
						</div>
					</div>
                                                    <!-- <div class="col-lg-4"> <a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>" class="">
                             <table class="table"> <tr><td rowspan="4" width="40">
                               <a href="<?php echo BASE_URL; ?>/song/<?php echo $song_id.'/'.str_replace(' ','-',$song_name).'.html'; ?>"> <img src="<?php echo BASE_URL; ?>/assets/images/speakers.png" width="50" ></a></td></tr><tr><td> 
                                 <label style="padding-left:3px"><?php echo $song_name;?></label></td> </tr>
                         <tr><td><?php echo $artists;?> </td></tr></table></a> </div> -->
                        
                            <?php }}?>
                
                
			</div>
		</div>
				
			</div>
			<!-- Main content -->
		</div>

	</div>
    
        <!-- ******CONTENT****** --> 
 
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
  <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
	<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script>
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
<!-- <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> -->
</body>

<script type="text/javascript">
// 	 var audio = document.getElementById('audioPlayer');
//   var playButton = document.getElementById('playButton');
//   var pauseButton = document.getElementById('pauseButton');

//   playButton.addEventListener('click', function() {
//     audio.play();
//   });
  $(document).on('click', '.m-ico1',function(){
	var song_id = $(this).attr('data-id');
	var plays = $(this).attr('data-plays');
	var audio = document.getElementById(`audioPlayer${song_id}`);
	audio.play();
	
	// send ajax request to increment plays
	$.ajax({
		url: 'increment_plays.php',
		type: 'POST',
		data: {song_id: song_id, plays: plays},
		success: function(data){
			// console.log(data);
			if (data == 'success') {
				plays=parseInt(plays)+1;
				// hide listen button
	$(`#playr${song_id}`).html(
		`<a href="javascript:void(0)" class="m-ico2" data-id="${song_id}" data-plays="${plays}"></a>`
	);
			}
		},
		error: function(err){
			console.log(err);
		},
	});
  })
  $(document).on('click', '.m-ico2',function(){
	var song_id = $(this).attr('data-id');
	var plays = $(this).attr('data-plays');
	var audio = document.getElementById(`audioPlayer${song_id}`);
	audio.pause();
	// hide listen button
	$(`#playr${song_id}`).html(
		`<a href="javascript:void(0)" class="m-ico1" data-id="${song_id}" data-plays="${plays}"></a>`
	);
  })
  $(document).on('click','#song_more_button',function(){
	
	var last_loaded_id = $("#last_loaded_audio_id").val();
	var dataString = "last_loaded_audio_id="+ last_loaded_id;
	
	$.ajax({
		type: "POST",
		url: "increment_plays.php",
		data: dataString,
		dataType: "html",
		success: function(response) 
		{
			console.log(response);
			// 
			$("#more_tutorials_loaded").append(response);
			
		}
	});
  })

</script>
</html>	

