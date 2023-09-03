<?php
include 'includes/conn.php';
 if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:login.php');
   }?>
<!DOCTYPE html>
<html>
	
<!-- Mirrored from coderthemes.com/flacto_1.1/layout_2_green/page-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2016 11:40:49 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Aic Admin</title>

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

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                            
                                <h4 class="page-title">All UnApproved Content</h4>
                                <div class="card-box">
                                  

                                    <h4 class="header-title m-t-0 m-b-30">All Content</h4>

                                    <div class="row">
                                        <div class="col-lg-12">

                                 <div class="card-box card-tabs">
                                     <ul class="nav nav-pills" style="margin-bottom: 30px;">
                                        <li class="active">
                                            <a href="#cardpills-1" data-toggle="tab" aria-expanded="true">ARTICLES</a>
                                        </li>
                                        <li >
                                            <a href="#cardpills-2" data-toggle="tab" aria-expanded="false">EVENTS</a>
                                        </li>
                                        <li class="">
                                            <a href="#cardpills-3" data-toggle="tab" aria-expanded="false">ALBUMS</a>
                                        </li>
                                          <li class="">
                                            <a href="#cardpills-4" data-toggle="tab" aria-expanded="false">PHOTOS</a>
                                        </li>
                                          <li class="">
                                            <a href="#cardpills-5" data-toggle="tab" aria-expanded="false">VERSES</a>
                                        </li>
                                    </ul>
                                   

                                    <div class="tab-content">
                                        <div id="cardpills-1" class="tab-pane fade active in">
                                            <div class="row">
                                                <div class="col-md-12">
                                                                      <table class="table  table-striped  table-responsive">
                                      <thead>
            <tr>
      <th>IMAGE</th>
    <th >TOPIC</th>
    <th >POSTED BY</th>
          <th >TIME</th>
                          <th>&nbsp;</th>
                             <th>&nbsp;</th>
                </tr></thead>
 <?php 
             $articles=  mysqli_query($con,"SELECT * FROM news  WHERE published='unpublished' ORDER BY article_id DESC");
               if(mysqli_num_rows($articles)<1){
                 echo '<div style="float:left;width: 75%; text-align: center; margin-left: 10px; border: 1px solid rgb(255, 224, 51); padding: 3px;background-color: rgb(255, 250, 194); margin-top:20px; font-size:12px;">No articles posted yet</div>';
             }
           else{
             while ($row=mysqli_fetch_array($articles)){
$subject=$row['article_title'];
$description=$row['article_description'];
             $id=$row['article_id'];
               $poster=$row['poster'];
             $timestamp=$row['timestamp'];
             $published=$row['published'];
              $headphotos=  mysqli_query($con,"SELECT * FROM news_photos WHERE article_id='$id'") or die(mysql_error());
                     $row2= mysqli_fetch_array($headphotos);
          $ext=$row2['ext'];
          $image_name=$row2['photo_name'];
         ?> 
       <tbody class=""> <tr>
      <td> <a  href="<?php echo '../newsphotos/'.$image_name.'.'.$ext;?>" alt="<?php echo $subject;?>" >
       <img  src="<?php echo '../newsphotos/'.$image_name.'.'.$ext;?>"  alt="<?php echo $subject; ?>"  alt="<?php echo $subject;?>" title="<?php echo $subject;?>"  style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a></td>
   <td><?php echo $subject;?></td>
   <td><?php echo $poster;?></td>
                <td><?php  echo date('d/M',$timestamp).' at '.  date('H:i',$timestamp); ?></td>
              <td width="80">
               <?php   if(($poster==$fullname)||($_SESSION['aictlevel']==1)){  ?>
        <a  class="btn btn-xs  btn-warning" href="#edit<?php echo $id;?>" data-toggle="modal" >
        edit article</a>
               <?php } ?>
        <div id="edit<?php echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit article</h3>
</div>
<div class="modal-body">
                                                                                                      <form class="form" action="edit_article.php?id=<?php echo $id;?>&&poster=<?php echo $poster; ?>" method="post" name="form<?php echo $id;?>">

          <fieldset>
			  <div class="control-group">
				<label class="control-label" for="name1">Edit Subject</label>
				<div class="controls">
				  <input type="text" class="input-xlarge" style="width:500px"  name="subject<?php echo $id;?>" value='<?php echo $subject;?>' placeholder="enter article title" required="required">
				 <div id='form<?php echo $id;?>_subject<?php echo $id;?>_errorloc' class='text-error'>
</div>
				</div>
			  </div>
<div class="control-group">
				<label class="control-label" for="textarea" required="required">Edit Article Details</label>
				<div class="controls" style="width:500px;">
				  <textarea  class="jqte-test input-xxlarge"  id="question" name="details<?php echo $id;?>" rows="3" style="min-height:100px;width:500px"  required="required">
<?php echo $description;?>
                                  </textarea>
                                    <div id='form<?php echo $id;?>_details<?php echo $id;?>_errorloc' class='text-error'>
</div>
				</div>
			  </div>
    
           
<div class="control-group">
                                                                           <div class="controls">
			 <button  class="btn btn-primary ">Edit Article</button>
				</div></div>
                 </fieldset>                                        
        
</form>
            </div></div>                                        
                  <script>
               
     $(document).ready(function(){
$('#edit<?php echo $id;?>').modal(options);
     });
           
 var frmvalidator  = new Validator("form<?php echo $id;?>");
 frmvalidator.EnableOnPageErrorDisplay();
 frmvalidator.EnableMsgsTogether();
 
      frmvalidator.addValidation("subject<?php echo $id;?>","req","Title empty");
        frmvalidator.addValidation("details<?php echo $id;?>","req","Description empty");
</script>                                  
      </td>
                 <?php if($_SESSION['aictlevel']==1){ ?>
                <td width="80">
                                        <?php if($published=="published"){?>
        <a href="unpublish_article.php?id=<?php echo $id;?>&&published=<?php echo $published;?>" class="ask"><button class="btn btn-xs btn-danger">unpublish <i class="fa fa-thumbs-down"></i></button></a>
        <?php }  else { ?>
                         <a href="unpublish_article.php?id=<?php echo $id;?>&&published=<?php echo $published;?>"><button class="btn btn-xs btn-success">publish <i class="fa fa-thumbs-up"></i></button></a>
              <?php   } ?>
                       <a href="cancelarticle.php?id=<?php echo $id;?>" class="btn btn-xs btn-danger">Cancel </a>
    </td>
             <?php   } ?>    
  </tr></tbody>
             
             <?php   }}?>
           </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cardpills-2" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-12">
                                                                                                                                       <?php  
  $events=  mysqli_query($con,"SELECT * FROM events WHERE published='unpublished'  ORDER BY event_date");
  if(mysqli_num_rows($events)<1){
  echo '<div class="alert alert-error" style="text-align:center;"> Oop!!You have No Events posted yet</div>';  }
  else{ ?>
                                                                                   <table class="table  table-striped table-responsive">
                                                                                        
                                      <thead>
            <tr>
                <th >PHOTO</th>
        <th >TOPIC</th>
             <th >DATE</th>
                          <th>VENUE</th>
                             <th>TIME</th>
                             <th>&nbsp;</th>
                </tr></thead>
                    <tbody>
                        
  <?php
      while ($row = mysqli_fetch_array($events)) {
          $event_id=$row['event_id'];
          $event_name=$row['event_name'];
          $venue=$row['event_venue'];
          $date=$row['event_date'];
           $time=$row['event_time'];
          $published=$row['published'];
            $poster=$row['poster'];
          $description=$row['event_description'];
          $image=  mysqli_query($con,"SELECT * FROM event_photos WHERE event_id='$event_id'") or die(mysqli_error($con));
                     $row2= mysqli_fetch_array($image);
          $ext=$row2['ext'];
          $image_name=$row2['image_name'];
          ?>
            <tr>
                            
                    <td> <a  href="<?php echo '../events/'.$image_name.'.'.$ext;?>" alt="<?php echo $event_name;?>" >
       <img  src="<?php echo '../events/'.$image_name.'.'.$ext;?>"  alt="<?php echo $event_name;?>"  alt="<?php echo $event_name;?>" title="<?php echo $event_name;?>"  style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a></td>
       <td class="media-heading" style="font-size:13px;"><?php    echo  $event_name;  ?>
             </td>
              <td>  
            <?php echo date('d/M/Y',$date); ?>
          </td>
      <td>  <?php echo $venue; ?></td>
      <td>  <?php echo $time; ?></td>
      <td width="130">
            <?php
              if(($poster==$fullname)||($_SESSION['aictlevel']==1)){  ?>
            <a class="btn btn-xs btn-info" href="edit_event.php?event_id=<?php echo $event_id; ?>&&poster=<?php echo $poster; ?>">Edit event</a>           
              <?php
              }
              if($_SESSION['aictlevel']==1){ 
              if($published=="published"){?>
        <a href="unpublish_event.php?id=<?php echo $event_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger">unpublish <i class="fa fa-thumbs-down"></i></a>
        <?php }  else { ?>
                        <a href="unpublish_event.php?id=<?php echo $event_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-success">publish <i class="fa fa-thumbs-up"></i></a>
      <?php }} ?>        
        <a href="cancelevent.php?id=<?php echo $event_id;?>" class="btn btn-xs btn-danger">Cancel </a>
	       </td>
       
               </tr>
                            <?php
      }
  }
  ?>
                                                                                        </tbody>
          </table> 
                                                </div>
                                            </div>
                                        </div>
                                        <div id="cardpills-3" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-12">
                                                           
 <table class="table table-responsive table-striped">
                                      <thead>
            <tr>
      <th>COVER</th>
      <th >NAME</th>
    <th >CREATED BY</th>
    <th >PHOTOS</th>
          
                          <th>&nbsp;</th>
                             <th>&nbsp;</th>
                </tr></thead>
         <tbody>  
  <?php  
  $albums=  mysqli_query($con,"SELECT * FROM albums WHERE published='unpublished'");
  if(mysqli_num_rows($albums)<1){
  echo '<div class="alert alert-warning" style="text-align:center;"> Oop!!You have No albums awaiting approval yet</div>';  }
  else{
      while ($row = mysqli_fetch_array($albums)) {
          $album_id=$row['album_id'];
          $album_name=$row['album_name'];
          $description=$row['description'];
          $published=$row['published'];
                    $creator=$row['creator'];
          $image=  mysqli_query($con,"SELECT * FROM covers WHERE album_id='$album_id'") or die(mysql_error());
            $photos=  mysqli_query($con,"SELECT * FROM photos WHERE album_id='$album_id'") or die(mysql_error());
            $count=  mysqli_num_rows($photos);
          $row2= mysqli_fetch_array($image);
          $ext=$row2['ext'];
          $image_name=$row2['image_name'];?>
           
         <tr>
                             <td>
                     <a class="pull-left" href="<?php echo '../albums/'.$image_name.'.'.$ext;?>" >
       <img class="media-object" src="<?php echo '../albums/'.$image_name.'.'.$ext;?>" alt="<?php echo $album_name; ?>" title="click to view photos" style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a>
                                 </td>
              <td><div class="media-heading" style="font-size:13px;height: 35px"><?php echo $album_name; ?> </td>
              <td><?php echo $creator;?></td>
        <td> <?php echo $count.' photos';?></td>
     
         <td>
            <a class="btn btn-xs  btn-info" href="photos.php?album_id=<?php echo $album_id; ?>">View photos</a> 
             </td>
          <?php if($_SESSION['aictlevel']==1){ ?>
           <td>
               
              <?php if($published=="published"){?>
        <a href="unpublish_album.php?id=<?php echo $album_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-danger">unpublish <i class="fa fa-thumbs-down"></i></a>
        <?php }  else { ?>
                        <a href="unpublish_album.php?id=<?php echo $album_id;?>&&published=<?php echo $published;?>" class="btn btn-xs  btn-success">publish <i class="fa fa-thumbs-up"></i></a>
                                  <?php } ?>
                                    <a href="cancelalbum.php?id=<?php echo $album_id;?>" class="btn btn-xs btn-danger">Cancel </a>
	       </td>   
      <?php } ?>  
</div>

       </tr>               
                          
             
                            <?php
      }
   
  }
  ?>
        
                 </tbody>                                                              
            </table>    
                                                </div>
                                            </div>
                                        </div>
                                            <div id="cardpills-4" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-12">
                                                           <table  class="table table-responsive table-striped">
                                      <?php
                                           $photos=  mysqli_query($con,"SELECT * FROM photos WHERE published='unpublished' ORDER BY photo_id DESC");
           if(mysqli_num_rows($photos)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no photos awaiting approval</div>';
               }else{
                                                       ?>
                                      <thead>
            <tr>
          <th >PHOTO</th>
          <th>CAPTION</th>
                    <th >ALBUM</th>
                    
                                       <?php if($_SESSION['aictlevel']==1){ ?>      
                                                      <th>ACTION</th>
                                                       
                                  <?php }?>
                </tr></thead> <tbody>
<?php 
        
                        while ($row=mysqli_fetch_array($photos)){
                    $photo_id=$row['photo_id'];
                    $album_id=$row['album_id'];
                $caption=$row['caption'];
                $published=$row['published'];
                  $photo_ext=$row['ext']; 
                  $album=mysqli_query($con,"SELECT * FROM albums WHERE album_id='$album_id'");
                  $row2=mysqli_fetch_array($album);
                  $album_name=$row2['album_name'];
                      ?> 
                                      
        <tr>
     <td> <a  href="<?php echo '../albums/photos/'.md5($photo_id).'.'.$photo_ext;?>" alt="<?php echo $caption;?>" >
       <img  src="<?php echo '../albums/photos/'.md5($photo_id).'.'.$photo_ext;?>"  alt="<?php echo $caption;?>" title="<?php echo $caption;?>"  style="font-size:10px;color: #333;max-height: 60px" width="100"  height="60">
   </a></td>
   <td><?php echo $caption;?></td>
                              <td><?php  echo $album_name; ?></td>
                                
                                 
                                       
             <?php if($_SESSION['aictlevel']==1){ ?>   
                        
<td width="180">                        
   <a href="unpublish_photo.php?id=<?php echo $photo_id;?>&&published=<?php echo $published; ?>"><button class="btn btn-xs btn-success">Activate <i class="fa fa-thumbs-up"></i></button></a>
        <?php }  ?>
          <a href="cancelphoto.php?id=<?php echo $photo_id;?>" class="btn btn-xs btn-danger">Cancel </a>
        </td>               
              </tr>
                    </tbody>   
                        <?php }}?>
           </table>
                                    </div>
                                    </div>
                                    </div>
                                               <div id="cardpills-5" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-12">
                                                      <?php 
             $verses=  mysqli_query($con,"SELECT * FROM verses  WHERE published='unpublished' ORDER BY verse_id DESC");
               if(mysqli_num_rows($verses)<1){
                 echo '<div class="alert alert-danger" style="text-align:center">No verses awaiting to be approved yet</div>';
             }
           else{
               ?>
                                  <table class="table table-responsive table-striped"> <thead>
            <tr>
      
    <th >VERSE</th>
       <th>POSTED BY</th>
                               <th>ACTION</th>
                </tr>
                                           </thead>
 <?php
             while ($row=mysqli_fetch_array($verses)){
$verse=$row['verse'];
//$description=$row['article_description'];
             $id=$row['verse_id'];
                          $published=$row['published'];
                          $poster=$row['poster'];
         ?> 
                                      <tbody>
        <tr>
     <td style="width:500px"><?php echo $verse;?></td>
             <td><?php echo $poster;?></td>
              <td>
     
       
    
                                        <?php if($published=="published"){ ?>
        <a href="unpublish_verse.php?id=<?php echo $id;?>&&published=<?php echo $published;?>" class="btn btn-xs btn-danger">unpublish <i class="fa fa-thumbs-down"></i></a>
        <?php }  else { ?>
                         <a href="unpublish_verse.php?id=<?php echo $id;?>&&published=<?php echo $published;?>" class="btn btn-xs btn-success">publish <i class="fa fa-thumbs-up"></i></a>
              <?php   } ?>
                <a href="cancelverse.php?id=<?php echo $id;?>" class="btn btn-xs btn-danger">Cancel </a>
    </td>
  </tr>
      </tbody>       
             <?php   }}?>
           </table>
                                </div>
                                </div>
                                </div>
                                            
                                        </div><!-- end col -->


                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>
                        </div>




                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            

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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	</body>

</html>