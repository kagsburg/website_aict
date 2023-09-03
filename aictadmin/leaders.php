<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
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

		<title>Leaders | Aic Admin</title>
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
                            
                                <h4 class="page-title">All Leaders</h4>
                                <div class="card-box">
                                  

                                    <h4 class="header-title m-t-0 m-b-30">All Leaders</h4>

                                    <div class="row">
                                        <div class="col-lg-12">

                                 <div class="card-box card-tabs">
                                     <ul class="nav nav-pills" style="margin-bottom: 30px;">
                                        <li class="active">
                                            <a href="#cardpills-1" data-toggle="tab" aria-expanded="true">BISHOPS</a>
                                        </li>
                                        <li >
                                            <a href="#cardpills-2" data-toggle="tab" aria-expanded="false">PASTORS</a>
                                        </li>
                                       
                                    </ul>
                                   

                                    <div class="tab-content">
                                        <div id="cardpills-1" class="tab-pane fade active in">
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
                $diocese=$row['diocese'];
                $wife=$row['wife'];
                $bio=$row['bio'];
                  $getdioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE diocese_id='$diocese'");
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
<td width="180">                             <?php if($activate=="active"){?>
        <a href="activatebishop.php?id=<?php echo $id;?>&&status=<?php echo $activate;?>"><button class="btn btn-xs btn-danger">Deactivate <i class="fa  fa-thumbs-down"></i></button></a>
        <?php }  else { ?>
                         <a href="activatebishop.php?id=<?php echo $id;?>&&status=<?php echo $activate;?>"><button class="btn btn-xs btn-success">Activate <i class="fa fa-thumbs-up"></i></button></a>
              <?php   } ?>
  
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
				   <select class="form-control select2" name="diocese1">
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
				  <input type="text" class="form-control"  name='date<?php echo $id; ?>'  value='<?php echo $date; ?>' placeholder="enter year when diocese was joined">
				 
				</div>
			  </div>
          <div class="form-group">
				<label class="control-label" for="textarea">Enter Biography</label>
				<div class="controls">
				  <textarea class="ckeditor"  id="editor1" rows="10" name="bio<?php echo $id;?>"   rows="5"  required="required"><?php echo $bio; ?></textarea>
			
                                </div>
			  </div>
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" style="margin-right:">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
     <a href="bishopphotos.php?id=<?php echo $id;?>"><button class="btn btn-xs btn-info">photos</button></a>
   
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
                                        <div id="cardpills-2" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-12">
            <table  class="table table-responsive table-striped">
                                      <?php
                                           $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE status='active' ORDER BY pastor_id DESC");
           if(mysqli_num_rows($pastors)<1)
               {
               echo '<div class="alert alert-error" style="text-align:center">Oops!! no pastors added yet</div>';
               }else{
                                      ?>
                                      <thead>
            <tr>
          <th >FULLNAMES</th>
                    <th >DOB</th>
                    <th>START DATE</th>
                      <th>CHURCH</th>
                    <?php if($_SESSION['aictlevel']==1){ ?>      
                                                      <th>ACTION</th>
                                  <?php }?>
                </tr></thead><tbody>
 <?php 
        
                        while ($row=mysqli_fetch_array($pastors)){

             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id1=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                   $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id1'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church1=$row2['church'];
                      $pastorate_id1=$row2['pastorate_id'];
                            $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id1'  AND status=1 ");
                               $row2=mysqli_fetch_array($pastorates);
                                    $pastorate1=$row2['pastorate'];
                                    $diocese_id1=$row2['diocese_id'];
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$diocese_id1' ORDER BY diocese");
                                           $row3=mysqli_fetch_array($dioceses);
$diocese1=$row3['diocese'];
                      ?> 
                                      
        <tr>
   <td><?php echo $pastorname;?></td>
   <td><?php echo $dob;?></td>
                              <td><?php  echo $date; ?></td>
                                 <td><?php  echo $church1; ?></td>
                                                                         
             <?php if($_SESSION['aictlevel']==1){ ?>   
                        
<td width="180">                             <?php if($status2=="active"){?>
        <a href="activatepastor.php?pastor_id=<?php echo $pastor_id;?>&&status=<?php echo $status2;?>"><button class="btn btn-xs btn-danger">Deactivate <i class="fa  fa-thumbs-down"></i></button></a>
        <?php }  else { ?>
                         <a href="activatepastor.php?pastor_id=<?php echo $pastor_id;?>&&status=<?php echo  $status2;?>"><button class="btn btn-mini btn-success">Activate <i class="fa  fa-thumbs-up"></i></button></a>
              <?php   } }
              
              ?>  
                     <a  href="#editpastor<?php echo $pastor_id;?>" data-toggle="modal" button class="btn btn-xs btn-warning">Edit</a>
               
       <div id="editpastor<?php echo $pastor_id;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Edit pastor Information</h3>
</div>
<div class="modal-body">
<!--       <div class="well-small" id="reg_area" style="color: red;text-align: center">
                       </div>-->
<form action="editpastor.php?id=<?php echo $pastor_id;?>" method="post" data-parsley-validate novalidate>

<fieldset>
			  <div class="control-group">
				<label class="control-label" for="name1">Full Names</label>
				<div class="controls">
				  <input type="text" class="form-control" id="fullname" name="fullname2<?php echo $pastor_id;?>" value='<?php echo $pastorname;?>' placeholder="enter fullname" parsley-trigger="change" required >
</div>
			  </div>
      <div class="form-group">
          
				<label class="control-label" for="name1">Diocese/Pastorate/church</label>
				<div class="controls">
				 <select class="form-control chosen-select" name="church" parsley-trigger="change" required>
                                                          <option value="<?php echo $church_id1; ?>"> <?php echo $diocese1.'/'.$pastorate1.'/'.$church1; ?></option>
                                                            <?php
                                                                 $churches=  mysqli_query($con,"SELECT * FROM churches WHERE status=1");
                                 while ($row=mysqli_fetch_array($churches)){
$church=$row['church'];
$status=$row['status'];
             $church_id=$row['church_id'];
             $pastorate_id=$row['pastorate_id'];
            $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id'  AND status=1 ");
                               $row2=mysqli_fetch_array($pastorates);
                                    $pastorate=$row2['pastorate'];
                                    $diocese_id=$row2['diocese_id'];
                                       $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1'  AND diocese_id='$diocese_id' ORDER BY diocese");
                                           $row3=mysqli_fetch_array($dioceses);
$diocese=$row3['diocese'];
            ?>
                                                            <option value="<?php echo $church_id; ?>"> <?php echo $diocese.'/'.$pastorate.'/'.$church; ?></option>
                                 <?php } ?>
                                                        </select>
				  <div id='form_church_errorloc' class='text-danger'></div> 
				</div>
			  </div>
			
          <div class="control-group">
				<label class="control-label" for="name1">Date of Birth</label>
				<div class="controls">
	  <input type="text" class="form-control" id="password"  name='dob2<?php echo $pastor_id; ?>' value="<?php echo $dob;?>" placeholder="enter date of birth" parsley-trigger="change" required > 
				 
				</div>
			  </div>
     <div class="form-group">
				<label class="control-label" for="name1">Married to</label>
				<div class="controls">
	<input type="text" class="form-control" id="username"  name="wife2<?php echo $pastor_id;?>"  value='<?php echo $wife;?>' placeholder="enter your wife/husband's name">
				 
				</div>
			  </div>
   
           <div class="form-group">
				<label class="control-label" for="name1">Year when Church was joined</label>
				<div class="controls">
	 <input type="text" class="form-control"  name='date2<?php echo $pastor_id; ?>'  value='<?php echo $date; ?>' placeholder="enter year when diocese was joined" parsley-trigger="change" required >
				 
				</div>
			  </div>
      <div class="form-group">
				<label class="control-label" for="textarea">Enter Biography</label>
				<div class="controls">
				  <textarea class="ckeditor" cols="70" id="editor1" rows="10"  name="bio2<?php echo $pastor_id;?>"><?php echo $bio; ?></textarea>
			
                                </div>
			  </div>
<div class="control-group">
                                                                           <div class="controls">
			 <button type="submit" class="btn btn-primary" style="margin-right:">Save Changes</button>
				</div></div>
</fieldset>
</form>
</div>
</div>
</div>
</div>
               <a href="pastorphotos.php?id=<?php echo $pastor_id;?>"><button class="btn btn-xs btn-info">photos </i></button></a>                
    </td>
                               
                                       
  </tr>
        
                        <?php  } }?>
                    </tbody>   
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