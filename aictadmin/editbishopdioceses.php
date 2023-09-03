<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
   $id=$_GET['id'];
   $bishop=  mysqli_query($con,"SELECT * FROM bishops WHERE bishop_id='$id' ORDER BY bishop_id DESC");
   if(mysqli_num_rows($bishop)>0){
                           $row2=  mysqli_fetch_array($bishop);
$b_id=$row2['bishop_id'];
$full_name=$row2['fullname'];
$activate=$row2['status'];
$date=$row2['startdate'];
$dob=$row2['dob'];
$ext=$row2['ext'];
   $diocese=$row2['diocese'];}
   ?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Bishop Dioceses</title>
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
                                <h4 class="page-title"><?php echo $full_name;?> Dioceses </h4>
                                <a href="bishops.php" class="btn btn-primary waves-effect waves-light pull-right">Back to Bishops</a>
                                </div>
                                
                                <div class="card-box">
                                  <!-- add dioceses -->
                                <?php 
                                // update specific diocese
                                if (isset($_POST['updatedetailssubmit'])){                                  
                                    $id=$_POST['update_id'];
                                    $diocese=mysqli_real_escape_string($con,trim($_POST['u_diocese'.$id]));
                                    $year = mysqli_real_escape_string($con,trim($_POST['u_date'.$id]));
                                    mysqli_query($con,"UPDATE bishopdioceses SET diocese='$diocese', startdate='$year' WHERE id='$id'") or die(mysqli_error($con));
                                    echo '<div class="alert alert-success">Bishop Diocese Updated successfully</div>';    
                                }
                                ?>
                                    <h4 class="header-title m-t-0 m-b-30">All Dioceses</h4>

                                    <div class="row">
                                                                  <div class="col-md-12">
                                                                      <table class="table  table-striped  table-responsive">
                                   
                                      <?php
                                           $bishops=  mysqli_query($con,"SELECT * FROM bishopdioceses WHERE bishop_id='$b_id' order by startdate DESC");
           if(mysqli_num_rows($bishops)<=0)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no bishops Dioceses added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
                <th>DIOCESE</th>
                    <th>START DATE</th>
                    <!-- <th>STATUS</th> -->
               <?php if($_SESSION['aictlevel']==1){ ?>
                                                      <th>ACTION</th>
                                                        <th>&nbsp;</th>
                                  <?php }?>
                </tr></thead> <tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($bishops)){

             $id=$row['id'];
            //  $activate=$row['status'];
             $date=$row['startdate'];
                $dioces_e=$row['diocese'];
                  $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$dioces_e'");
                                       $row4=  mysqli_fetch_array($getdioceses);
                                         $diocesename=$row4['diocese'];
                                                  
                      ?> 
                                     
        <tr>

                              <td><?php  echo $date; ?></td>
             <?php if($_SESSION['aictlevel']==1){ ?>   
                              <td>
        <?php  echo $diocesename; ?>
                    </td>
<td>                           
      <a href="activatebisdio?id=<?php echo $id;?>&&status=1" onclick="return approve<?php echo $id; ?>()">
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
<h3 id="myModalLabel">Edit Diocese Information</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="" method="post">

<fieldset>
    <input type="hidden" name="update_id" value="<?php echo $id; ?>">
       
			   <div class="form-group">
				<label class="control-label" for="name1">Diocese</label>
				<div class="controls">
				   <select class="form-control select2" name="u_diocese<?php echo $id; ?>">
                                                             <!-- <option value="<?php echo $diocese; ?>"><?php echo $diocesename; ?></option> -->
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
        <select   class="form-control" name='u_date<?php echo $id; ?>'>
                              <!-- <option value="<?php echo $date; ?>" selected="selected"><?php echo $date; ?></option> -->
                              <?php
                              $startyear=(date('Y',time()));
                              $endyear=$startyear-80;
                              print($endyear);
                                for($x=$startyear;$x>=$endyear;$x--){
                              ?>
                              <option value="<?php echo $x; ?>"  <?php if($x==$date){ ?> selected<?php } ?>><?php echo $x; ?></option>
                              <?php } ?>
                          </select>
				  <!-- <input type="text" class="form-control"  name='date<?php echo $id; ?>'  value='<?php echo $date; ?>' placeholder="enter year when diocese was joined"> -->
				 
				</div>
			  </div>
          
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" name="updatedetailssubmit">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

     <!-- <a href="bishopphotos?id=<?php echo $id;?>"><button class="btn btn-xs btn-info">photos</button></a> -->
     <!-- <a  href="#editbishopdiocese<?php echo $id;?>" data-toggle="modal" class="btn btn-xs btn-info">Add Diocese</a> -->
     <!-- <a href="editbishopdioceses?id=<?php echo $id;?>"><button class="btn btn-xs btn-primary">Edit Dioceses</button></a> -->
     <div id="editbishopdiocese<?php echo $id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Move <?php echo $full_name;?> to Another Diocese</h3>
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