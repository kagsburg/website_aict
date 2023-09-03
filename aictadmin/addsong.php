<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Add Audio - Aic Admin</title>
 <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">
<?php include 'includes/header.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
				<div class="container">
					  <div class="row">
                            <div class="col-sm-12">
                               
                                <h4 class="page-title">Add Audio</h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-10">
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30">Add Audio</h4>
                                   
       
             <?php
                               if(isset($_POST['submit'])){
                                     $image_name=$_FILES['audio_file']['name'];
$image_size=$_FILES['audio_file']['size'];
$image_temp=$_FILES['audio_file']['tmp_name'];
  $name=  mysqli_real_escape_string($con,trim($_POST['name']));
  $artistes=  mysqli_real_escape_string($con,trim($_POST['artistes']));
  //$allowed_ext=array('jpg','jpeg','png','gif','');
//$image_ext=strtolower(end(explode('.',$image_name)));
$kaboom = explode(".", $image_name); // Split file name into an array using the dot
$image_ext= end($kaboom);
//$name=md5($id);

if(($image_ext!='mp3')&&($image_ext!='ogg')&&($image_ext!='wav')){
    echo '<div class="alert alert-danger"><i class="fa fa-warning"></i> Incorpatible File Format</div>';
}else{
            mysqli_query($con,"INSERT INTO audios(song_name,artistes,ext,status,plays,downloads) VALUES('$name','$artistes','$image_ext','published','0','0')") or die(mysql_error());
               $last_id=mysqli_insert_id($con);
               $image_file=$name.'-'.$artistes.'_'.$last_id.'[aictanzania.org]'.'.'.$image_ext;
              // $image_file=md5($last_id).'.'.$image_ext;
move_uploaded_file($image_temp,'../audio_files/'.$image_file) or die(mysql_error());
$last_audio=mysqli_query($con,"SELECT * FROM audios WHERE song_id='$last_id'");
$row=mysqli_fetch_array($last_audio);
$name=$row['song_name'];
$artistes=$row['artistes'];
                   $string='{
  "id":"gearContainer",
  "albumCover":"img/thumbs/01.jpg",
  "albumTitle":"'.$name.'",
  "albumAuthor":"'.$artistes.'",
  "soundcloudEnabled":false,
  "soundcloudClientID":"go to http://soundcloud.com/you/apps/new and get your client ID there",
  "soundcloudSet":"this should be something like http://soundcloud.com/you/sets/youralbum",
  "soundcloudOverwrite":false,
  "autoPlay": true,
  "shuffle": false,
  "volume": 100,
  "peak": true,
  "equalizer": true,
  "equalizerSVG":false,
  "equalizerSize":200,
  "equalizerPadding":25,
  "equalizerColor":"#EAEAEA",
  "equalizerBars":128,
  "equalizerRatio":0.6,
  "width": 800,
  "height": 800,
  "outerRay": 100,
  "innerRay": 90,
  "outerPadding":20,
  "innerPadding":20,
  "sectorPadding":2.5,
  "trackColor":"#111111",
  "loadedColor": "#222222",
  "progressColor": "#EAEAEA",
  "loadedThickness":26,
  "progressThickness":18,
  "timeColor":"#FFFFFF",
  "timeSize": 20,
  "randomColors": true,
  "textColor": "#FFFFFF",
  "overColor": "#F2F2F2",
  "titleSize": 14,
  "authorSize": 12,
  "dockToRight": false,
  "entries": [
      {"title":"'.$name.'", "author":"'.$artistes.'", "media":"'.BASE_URL.'/audio_files/'.$image_file.'", "link":"'.BASE_URL.'/song/'.$last_id.'/'.str_replace(' ','-',$name).'.html", "color":"#56B0E8" }
     
    ]
}';
   $photo="../player/json/".md5($last_id).".json";

//Write out data to file
if( $fp = fopen( $photo, 'wb' ) )
{
//Write data to the file
fwrite( $fp, $string );
 
//Close the file
fclose( $fp );
//echo 'Data safely recieved';
}
else
{
die( "Error writing to json file $photo" );
}
  echo '<div class="alert alert-success"><i class="icon-ok"></i> Song Uploaded successfully</div>';
                               }}
                            
                            ?>
           
                                    <form action="#" data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="userName">Audio Name*</label>
                                            <input type="text" name="name" parsley-trigger="change" required     placeholder="Enter Audio Name" class="form-control" id="title">
                                        </div>
                                           <div class="form-group">
                                            <label for="userName">Audio Author(s)*</label>
                                            <input type="text" name="artistes" parsley-trigger="change" required     placeholder="Enter Audio Artistes" class="form-control" id="title">
                                        </div>
                                            <div class="form-group">
                                            <label for="userName">Upload Audio*</label>
                                            <input type="file" name="audio_file" parsley-trigger="change" required    class="form-control" id="title">
                                        </div>
 
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                Submit
                                            </button>
                                          
                                        </div>

                                    </form>
                      
                                </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                </div> <!-- content -->

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
               $('#cstatus').on('change', function() {
               var getselect=$(this).val();
  if(getselect==='2'){
         $('.diocese').show();
         }else{
         $('.diocese').hide();
  }
});
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>



	</body>

</html>