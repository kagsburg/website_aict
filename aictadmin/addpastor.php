<?php
include 'includes/conn.php';
if (!isset($_SESSION['05069'])) {
  header('Location:login.php');
} ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="icon" type="image/png" href="assets/images/fav.png" />

  <title>Add Pastor- Aic Admin</title>
  <script src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="ckeditor/samples/sample.css">
  <link href="assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
  <link href="assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

  <script src="assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

  <!-- Begin page -->
  <div id="wrapper">
    <?php include 'includes/header.php'; ?>
    <div class="content-page">
      <!-- Start content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

              <h4 class="page-title">Add Pastor</h4>
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

                <h4 class="header-title m-t-0 m-b-30">Add Pastor</h4>
                <?php
                if (isset($_POST['submit'])) {
                  if ($_FILES['image1']['size'] > 0){
                    $image_name1 = $_FILES['image1']['name'];
                    $image_size1 = $_FILES['image1']['size'];
                    $image_temp1 = $_FILES['image1']['tmp_name'];
                    $allowed_ext1 = array('jpg', 'jpeg', 'png', 'gif', 'PNG', 'JPG', 'JPEG', '');
                    $image_ext = explode('.', $image_name1);
                    $image_ext1 = end($image_ext);
                    if (in_array($image_ext1, $allowed_ext1) === false) {
                      $errors[] = 'File type not allowed';
                    }
                    if ($image_size1 > 10097152) {
                      $errors[] = 'Maximum size is 10Mb';
                    }
                  }else {
                    $image_ext1 = '';
                  }
                  $name1 = mysqli_real_escape_string($con, trim($_POST['fullname1']));
                  $diocese1 = mysqli_real_escape_string($con, trim($_POST['diocese1']));
                  $dob1 = mysqli_real_escape_string($con, trim($_POST['dob1']));
                  $bio1 = $_POST['bio1'];
                  $actret = $_POST['actret'];
                  $wife1 = mysqli_real_escape_string($con, trim($_POST['wife1']));
                  $password = ''; //mysqli_real_escape_string($con,trim($_POST['password']));
                  $repeat = ''; //mysqli_real_escape_string($con,trim($_POST['repeat']));
                  $username = ''; //mysqli_real_escape_string($con,trim($_POST['username']));
                  $status1 = 'active';
                  $year1 = mysqli_real_escape_string($con, trim($_POST['year1']));
                  $errors = array();
                  $check =  mysqli_query($con, "SELECT * FROM registered_users WHERE username='$username'");
                  
                  // if($password!=$repeat){
                  // $errors[]='Passwords Dont Match';
                  // }
                  // if(mysqli_num_rows($check)>0){
                  //     $errors[]='Username already exists.';
                  // }
                  
                  if (!empty($errors)) {
                    foreach ($errors as $error) {
                      echo '<div class="alert alert-danger">' . $error . '</div>';
                    }
                  } else {
                    $position = 'pastor';
                    mysqli_query($con, "INSERT INTO pastors(fullname,dob,diocese,startdate,wife,poster_id,bio,ext,actret,status)  
                    VALUES('$name1','$dob1','$diocese1','$year1','$wife1','0','$bio1','$image_ext1','$actret','$status1')") or die(mysqli_error($con));
                    $image_name1 = md5(mysqli_insert_id($con));
                    $address = ''; //$username.'@aict.org';
                    // $adduser=  mysqli_query($con,"INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES('$name1','$position','null','null','$dob1','$position','$diocese1','$username','$address','".  md5($password)."','$image_ext1','$status1')") or die(mysqli_error($con));
                    if ($_FILES['image1']['size'] > 0) {
                      $image_file1 = $image_name1 . '.' . $image_ext1;
                      move_uploaded_file($image_temp1, '../leaders/pastors/' . $image_file1);
                    }                  
                    // create_thumb('../article_photos/',$image_file,'../article_photos/thumbs/');
                    //        mysql_query("INSERT INTO  VALUES(NULL,'$album_id','$image_name','$image_ext')") or die(mysql_error());
                    echo '<div class="alert alert-success" style="text-align:center">New Pastor Profile Added</div>';
                  }
                }

                ?>

                <form action="" method="post" name="form" enctype="multipart/form-data">

                  <div class="form-group">
                    <label class="control-label" for="name1">Full Names</label>

                    <input type="text" class="form-control" id="fullname" name="fullname2" placeholder="enter fullname" required="required">
                  </div>

                  <div class="form-group">
                    <label class="control-label" for="name1">Profile picture</label>
                    <div class="controls">
                      <input type="file" class="form-control" name="image2" >
                    </div>
                  </div>
                  <div class="form-group">

                    <label class="control-label" for="name1">Diocese</label>
                    <div class="controls">
                      <select name="diocese" id="diocese" class="form-control">
                        <option value="">Select Diocese..</option>
                        <?php
                        $dioceses =  mysqli_query($con, "SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                        while ($row = mysqli_fetch_array($dioceses)) {
                          $diocese = $row['diocese'];
                          $status = $row['status'];
                          $diocese_id = $row['diocese_id'];
                        ?>
                          <option value="<?php echo $diocese_id; ?>"><?php echo $diocese; ?></option>
                        <?php } ?>
                      </select>

                    </div>
                  </div>
                  <div class="form-group">

                    <label class="control-label" for="name1">Pastorate</label>
                    <div class="controls">
                      <select name="pastoratename" id="pastoratename" class="form-control">
                        <option value="">Select Pastorate...</option>
                      </select>
                      <?php
                      $getdioceses =  mysqli_query($con, "SELECT * FROM dioceses  WHERE status='1'");
                      while ($row2 =  mysqli_fetch_array($getdioceses)) {
                        $diocese_id = $row2['diocese_id'];

                      ?>

                        <select name="pastorate" id="pastorate<?php echo $diocese_id; ?>" style="display:none;" class="pastorates form-control">
                          <option value="">Select Pastorate ...</option>
                          <?php
                          $dioceses =  mysqli_query($con, "SELECT * FROM pastorates  WHERE status='1'  AND diocese_id='$diocese_id' ORDER BY pastorate");
                          while ($row = mysqli_fetch_array($dioceses)) {
                            $pastorate = $row['pastorate'];
                            $status = $row['status'];
                            $pastorate_id = $row['pastorate_id'];
                          ?>
                            <option value="<?php echo $pastorate_id; ?>"><?php echo $pastorate; ?></option>
                          <?php } ?>
                        </select>
                      <?php } ?>

                    </div>
                  </div>
                  <div class="form-group">

                    <div class="controls">
                      <label class="control-label">Local Church</label>

                      <select name="churchname" id="churchname" class="form-control">
                        <option value="">Select Local Church</option>
                      </select>
                      <?php
                      $pastorates =  mysqli_query($con, "SELECT * FROM pastorates  WHERE status='1' ");
                      while ($row = mysqli_fetch_array($pastorates)) {
                        $pastorate_id = $row['pastorate_id'];

                      ?>

                        <select name="church" id="church<?php echo $pastorate_id; ?>" style="display:none;" class="churches form-control">
                          <option value="">Select Local Church</option>
                          <?php
                          $churches =  mysqli_query($con, "SELECT * FROM churches WHERE pastorate_id='$pastorate_id' ORDER BY church");
                          while ($row = mysqli_fetch_array($churches)) {
                            $church = $row['church'];
                            $status = $row['status'];
                            $church_id = $row['church_id'];
                          ?>
                            <option value="addpdetails?p=<?php echo $church_id; ?>" class="mine"><?php echo $church; ?></option>
                          <?php } ?>
                        </select>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="name1">Married to</label>
                    <div class="controls">
                      <input type="text" class="form-control" id="username" name="wife2" placeholder="enter your wife/husband's name">

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="name1">Date of Birth</label>
                    <div class="controls">
                      <input type="text" class="form-control" id="dob" name="dob2" placeholder="enter date of birth" >

                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label" for="name1">Year when pastorship was started</label>
                    <div class="controls">
                      <input type="text" class="form-control" name="year2" placeholder="enter year when pastorship was started" required="required">

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label" for="textarea">Enter Biography</label>
                    <div class="controls">
                      <textarea class="ckeditor" cols="70" id="editor1" name="bio2" rows="10" required="required"></textarea>
                    </div>
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
  <script src="assets/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>
  <!-- Validation js (Parsleyjs) -->
  <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

  <!-- App js -->
  <script src="assets/js/jquery.core.js"></script>
  <script src="assets/js/jquery.app.js"></script>
  <script src="../js/gen_validatorv4.js"></script>
  <script type="text/javascript">
    $('#pastoratename').click(function() {
      if ($('#diocese').val() === '') {
        alert("Please Select a Diocese First");
      }
    });

    $('#diocese').change(function() {
      if ($(this).val() !== '') {
        //       	 $(this).closest("form").attr('action',  $(this).val());
        $("#pastoratename").hide();
        $(".pastorates").each(function(index) {

          // console.log(this.id);
          $("#" + this.id).hide();


        });

        $("#pastorate" + $('#diocese').val()).show();
        var townid = $("#pastorate" + $('#diocese').val());
        $('.pastorates').change(function() {
          if ($(this).val() !== '') {
            //       	 $(this).closest("form").attr('action',  $(this).val());
            $("#churchname").hide();
            $(".churches").each(function(index) {
              // console.log(this.id);
              $("#" + this.id).hide();
            });
            $("#church" + $(townid).val()).show();

            $('.churches').change(function() {
              if ($(this).val() !== '') {
                $(this).closest("form").attr('action', $(this).val());

              }
            });
          } else {
            $("#churchname").show();
            $(".churches").hide();
          }

        });
      } else {

        $("#pastoratename").show();
        $(".pastorates").hide();
        $("#churchname").show();
        $(".churches").hide();

      }
    });
    var frmvalidator = new Validator("form");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("password", "minlength=6", "*password  should atleast be 6 characters");
    frmvalidator.addValidation("repeat", "eqelmnt=password", "*The passwords dont match");
  </script>



</body>

</html>