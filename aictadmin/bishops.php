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

		<title>Bishops</title>
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

						<!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div>
                                <h4 class="page-title">All Bishops</h4>
                                <a href="addbishop" class="btn btn-info btn-lg" style="margin:5px 0px"><i class="fa fa-plus"></i> Add Bishop</a>
                                <div class="pull-right" style="margin-top: -56px;">
                                <h4 class="page-title">Add Arch-Bishop</h4>
                                <a href="#addarchbishop" data-toggle="modal"  class="btn btn-warning btn-lg style="margin:5px 0px"><i class="fa fa-plus"></i> Add Arch-Bishop</a>
                                </div>
                                </div>
                                
                                <div class="card-box">
                                  
                                <?php if (isset($_POST['move_submit'])){
                                    $id=$_POST['id'];
                                    $diocese=mysqli_real_escape_string($con,trim($_POST['mdiocese'.$id]));
                                    $year = mysqli_real_escape_string($con,trim($_POST['myear'.$id]));
                                    $DS = mysqli_real_escape_string($con,trim($_POST['DS'.$id]));
                                    if ($DS == "2"){
                                        // Current Diocese
                                    mysqli_query($con,"UPDATE bishops SET diocese='$diocese', startdate='$year' WHERE bishop_id='$id'") or die(mysqli_error($con));
                                    }
                                    // INSERT INTO BISHOPDIOCESE TABLE
                                    mysqli_query($con,"INSERT INTO bishopdioceses (bishop_id,diocese,startdate) VALUES ('$id','$diocese','$year')") or die(mysqli_error($con));
                                    echo '<div class="alert alert-success">Bishop Diocese added successfully</div>';

                                }
                                if (isset($_POST['archbishop_submit'])){                                  
                                  $bishop=mysqli_real_escape_string($con,trim($_POST['selectedarch']));
                                  // get previous archbishop
                                  $getprev=  mysqli_query($con,"SELECT * FROM bishops WHERE rank='2'");
                                  if (mysqli_num_rows($getprev)>0){

                                    $rowprev=  mysqli_fetch_array($getprev);
                                    $prev=$rowprev['bishop_id'];
                                    // update previous archbishop
                                    mysqli_query($con,"UPDATE bishops SET rank='1' WHERE bishop_id='$prev'");
                                    // update new archbishop
                                    mysqli_query($con,"UPDATE bishops SET rank='2' WHERE bishop_id='$bishop'");
                                  }else{
                                    
                                    // no previous archbishop
                                    // update current selected bishop
                                    mysqli_query($con,"UPDATE bishops SET rank='2' WHERE bishop_id='$bishop'");
                                  }
                                  echo '<div class="alert alert-success">Archbishop updated successfully</div>';
                                  


                                }
                                ?>
                                    <h4 class="header-title m-t-0 m-b-30">All Bishops</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                                                                      <table class="table  table-striped  table-responsive">
                                   
                                      <?php
                                           $bishops=  mysqli_query($con,"SELECT * FROM bishops WHERE status='active' ORDER BY bishop_id DESC");
           if(mysqli_num_rows($bishops)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no bishops added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
          <th >FULLNAMES</th>
                    <th >DOB</th>
                    <th>START DATE</th>
                    <th>DIOCESE</th>
                    <th>STATUS</th>
               <?php if($_SESSION['aictlevel']==1){ ?>
                                                      <th>ACTION</th>
                                                        <th>&nbsp;</th>
                                  <?php }?>
                </tr></thead> <tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($bishops)){

             $id=$row['bishop_id'];
             $fullname=$row['fullname'];
             $activate=$row['status'];
             $date=$row['startdate'];
              $dob=$row['dob'];
                $dioces_e=$row['diocese'];
                $wife=$row['wife'];
                $bio=$row['bio'];
                $actret=$row['actret'];
                  $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$dioces_e'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                                                  
                      ?> 
                                     
        <tr>
   <td><?php echo $fullname;?></td>
   <td><?php echo $dob; ?></td>
                              <td><?php  echo $date; ?></td>
             <?php if($_SESSION['aictlevel']==1){ ?>   
                              <td>
        <?php  echo $diocesename; ?>
                    </td>
                     <td>
        <?php  echo $actret; ?>
                    </td>
<td>                           
      <a href="activatebishop.php?id=<?php echo $id;?>&&status=<?php echo $activate;?>" onclick="return approve<?php echo $id; ?>()">
            <button class="btn btn-xs btn-danger">Remove <i class="icon-white icon-thumbs-down"></i></button></a>
             <script type="text/javascript">
function approve<?php echo $id; ?>() {
  return confirm("You are about to unpublish data.Are u sure you want to proceed?");
}
</script>
                               <?php   } ?>
                         <a  href="#editbishop<?php echo $id;?>" data-toggle="modal" button class="btn btn-xs btn-warning">Edit</a>
                                    
                                              <div id="editbishop<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit Bishop Information</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="editbishop.php?id=<?php echo $id;?>" method="post">

<fieldset>
			  <div class="form-group">
				<label for="name1">Full Names</label>
				<div class="controls">
				  <input type="text" class="form-control" id="fullname" name="fullname<?php echo $id;?>" value='<?php echo $fullname;?>' placeholder="enter fullname" required="required">
</div>
			  </div>
       
			   <div class="form-group">
				<label class="control-label" for="name1">Diocese</label>
				<div class="controls">
				   <select class="form-control select2" name="diocese<?php echo $id; ?>">
                                                             <option value="<?php echo $diocese; ?>"><?php echo $diocesename; ?></option>
                                                            <?php
                                      
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                       while ($row3=mysqli_fetch_array($dioceses)){
                                     $diocese_id=$row3['diocese_id'];
                                     $diocese=$row3['diocese'];
            ?>
                                                            <option value="<?php echo $diocese_id; ?>"> <?php echo $diocese; ?></option>
                                 <?php } ?>
                                                        </select>	
				</div>
			  </div>
          <div class="form-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
				  <input type="text" class="form-control" id="password"  name='dob<?php echo $id; ?>' value="<?php echo $dob;?>" placeholder="enter date of birth" required="required"> 
				 
				</div>
			  </div>
     <div class="control-group">
				<label class="control-label" for="name1">Married to</label>
				<div class="controls">
				  <input type="text" class="form-control" id="username"  name="wife<?php echo $id;?>"  value='<?php echo $wife;?>' placeholder="enter your wife/husband's name">
				 
				</div>
			  </div>
   
           <div class="control-group">
				<label class="control-label" for="name1">Year when diocese was joined</label>
				<div class="controls">
        <select   class="form-control" name='date<?php echo $id; ?>'>
                              <option value="<?php echo $date; ?>" selected="selected"><?php echo $date; ?></option>
                              <?php
                              $startyear=(date('Y',time()));
                              $endyear=$startyear-80;
                              print($endyear);
                                for($x=$startyear;$x>=$endyear;$x--){
                              ?>
                              <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
				  <!-- <input type="text" class="form-control"  name='date<?php echo $id; ?>'  value='<?php echo $date; ?>' placeholder="enter year when diocese was joined"> -->
				 
				</div>
			  </div>

			   <div class="form-group">
				<label  for="name1">Select Status</label>
				
                                <select class="form-control" name="actret<?php echo $id;?>">
                                                            <option value="<?php echo $actret; ?>" selected="selected"><?php echo $actret; ?></option>
                                                            <option value="active">Active</option>
                                                            <option value="retired">Retired</option>
                                                            <option value="passed away">Passed Away</option>
                                                            </select>
                        </div>
          <div class="form-group">
				<label class="control-label" for="textarea">Enter Biography</label>
				<div class="controls">
				  <textarea class="ckeditor"  id="editor1" rows="10" name="bio<?php echo $id;?>"   rows="5"  required="required"><?php echo $bio; ?></textarea>
			
                                </div>
			  </div>
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

     <a href="bishopphotos?id=<?php echo $id;?>"><button class="btn btn-xs btn-info">photos</button></a>
     <a  href="#editbishopdiocese<?php echo $id;?>" data-toggle="modal" class="btn btn-xs btn-info">Add Diocese</a>
     <a href="editbishopdioceses?id=<?php echo $id;?>"><button class="btn btn-xs btn-primary">Edit Dioceses</button></a>
     <div id="editbishopdiocese<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Move <?php echo $fullname;?> to Another Diocese</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="" method="post">

<fieldset>
  <input type="hidden" name="id" value="<?php echo $id;?>">
       
			   <div class="form-group">
				<label class="control-label" for="name1">Diocese</label>
				<div class="controls">
				   <select class="form-control select2" name="mdiocese<?php echo $id; ?>" required >
                                                             <!-- <option value="<?php echo $dioces_e; ?>"><?php echo $diocesename; ?></option> -->
                                                            <?php
                                      
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                       while ($row3=mysqli_fetch_array($dioceses)){
                                     $diocese_id=$row3['diocese_id'];
                                     $diocese=$row3['diocese'];
            ?>
                                                            <option value="<?php echo $diocese_id; ?>"
                                                                    <?php if($diocese_id==$dioces_e){ ?> selected<?php } ?>
                                                            > <?php echo $diocese; ?></option>
                                 <?php } ?>
                                                        </select>	
				</div>
			  </div>
   
           <div class="control-group">
				<label class="control-label" for="name1">Year when diocese was joined</label>
				<div class="controls">
        <select   class="form-control" name='myear<?php echo $id; ?>' required>
                              <option value="" selected="selected">Year</option>
                              <?php
                              $startyear=(date('Y',time()));
                              $endyear=$startyear-80;
                              print($endyear);
                                for($x=$startyear;$x>=$endyear;$x--){
                              ?>
                              <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
				  
				 
				</div>
			  </div>
        <div class="control-group">
				<label class="control-label" for="name1">Diocese Status</label>
				<div class="controls">
        <select   class="form-control" name='DS<?php echo $id; ?>' required >
                              <option value="1" selected="selected">Old Diocese</option>
                              <option value="2" selected="selected">Current Diocese</option>
                            
                          </select>
				  
				 
				</div>
			  </div>
          
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" name="move_submit">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
                              </td>
  </tr>
             <script>
            $(document).ready(function(){
$('#editbishop<?php echo $id; ?>').modal(options);
     });
             </script>
                                      
                        <?php  } 
                                }?>
                    </tbody>   
           </table>
           <div id="addarchbishop" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Select Arch-Bishop</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="" method="post">

<fieldset>
       
			   <div class="form-group">
				<label class="control-label" for="name1">Bishops</label>
				<div class="controls">
				   <select class="form-control select2" name="selectedarch" required >
                                                          
                                                            <?php
                                      
                                       $bishop_ss=  mysqli_query($con,"SELECT * FROM bishops WHERE actret='active' and rank='1' and status='active' ORDER BY bishop_id DESC");
                                       while ($row3=mysqli_fetch_array($bishop_ss)){
                                        $b_id=$row3['bishop_id'];
                                        $b_fullname=$row3['fullname'];
            ?>
                                                            <option value="<?php echo $b_id; ?>"> <?php echo $b_fullname; ?></option>
                                 <?php } ?>
                                                        </select>	
				</div>
			  </div>
        
          
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" name="archbishop_submit">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
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
<script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
  <script type="text/javascript">
        			$(document).ready(function() {
				$('form').parsley();
			});
		</script>

	</body>

</html>