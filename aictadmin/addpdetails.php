 <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <?php
    include 'includes/conn.php';
    if (!isset($_SESSION['05069'])) {
        header('Location:index.php');
    } else {
        $church_id = $_GET['p'];
        if (isset($_POST['submit'])) {
            $image_name2 = $_FILES['image2']['name'];
            $image_size2 = $_FILES['image2']['size'];
            $image_temp2 = $_FILES['image2']['tmp_name'];
            $allowed_ext2 = array('jpg', 'jpeg', 'png', 'gif', 'JPG', 'PNG', 'JPEG');
            $image_ext = explode('.', $image_name2);
            $image_ext2 = end($image_ext);
            $name2 = mysqli_real_escape_string($con, trim($_POST['fullname2']));
            $dob2 = mysqli_real_escape_string($con, trim($_POST['dob2']));
            $bio2 = mysqli_real_escape_string($con, trim($_POST['bio2']));
            $wife2 = mysqli_real_escape_string($con, trim($_POST['wife2']));
            $password = ''; //mysqli_real_escape_string($con,trim($_POST['password']));
            $repeat = ''; //mysqli_real_escape_string($con,trim($_POST['repeat']));
            $username = ''; //mysqli_real_escape_string($con,trim($_POST['username']));
            $status2 = 'active';
            $year2 = mysqli_real_escape_string($con, trim($_POST['year2']));
            $errors2 = array();
            // $check=  mysqli_query($con,"SELECT * FROM registered_users WHERE username='$username'");
            if (in_array($image_ext2, $allowed_ext2) === false) {
                $errors2[] = 'File type not allowed';
            }
            if ($image_size2 > 10097152) {
                $errors2[] = 'Maximum size is 10Mb';
            }
            // if($password!=$repeat){
            // $errors2[]='Passwords Dont Match';
            // }
            // if(mysqli_num_rows($check)>0){
            //     $errors2[]='Username already exists.';
            // }
            if (empty($church_id)) {
                $errors2[] = 'Church is empty';
            }
            if (is_numeric($church_id) == FALSE) {
                $errors2[] = 'Wrong Value for Church';
            }
            if (!empty($errors2)) {
                foreach ($errors2 as $error2) {
                    echo '<div class="span9"><div class="alert alert-error">' . $error2 . 'Click <a href="addpastor">Here</a> to go back</div></div>';
                }
            } else {
                $position = 'pastor';
                mysqli_query($con, "INSERT INTO pastors(fullnames,dob,church_id,start_date,wife,poster_id,bio,ext,username,password,status)  VALUES('$name2','$dob2','$church_id','$year2','$wife2','" . $_SESSION['05069'] . "','$bio2','$image_ext2','$username','" .  md5($password) . "','$status2')") or die(mysqli_error($con));
                $pastor_id =  mysqli_insert_id($con);
                $image_name2 = md5($pastor_id);
                //   $address=$username.'@aict.org';
                //   $adduser=  mysqli_query($con,"INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES('$name2','$position','null','null','$dob2','$position','$church_id','$username','$address','".  md5($password)."','$image_ext2','$status2')") or die(mysqli_error($con));

                $image_file2 = $image_name2 . '.' . $image_ext2;
                move_uploaded_file($image_temp2, '../leaders/pastors/' . $image_file2);
                // create_thumb('../article_photos/',$image_file,'../article_photos/thumbs/');
                //mysql_query("INSERT INTO  VALUES('','$album_id','$image_name','$image_ext')") or die(mysql_error());
                echo '<div class="span9"><div class="alert alert-success" style="text-align:center">New Pastor Profile Added.Click <a href="pastors">Here</a> to go back to pastors</div></div>';
            }
        }
    }
    ?>