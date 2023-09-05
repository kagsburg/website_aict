<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
<?php
 include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }else{
       $church_id=$_GET['l']; 
            if (isset($_POST['submit'])){   
                if ($_FILES["image2"]['size'] > 0){       
$image_name2=$_FILES['image2']['name'];
$image_size2=$_FILES['image2']['size'];
$image_temp2=$_FILES['image2']['tmp_name'];
$allowed_ext2=array('jpg','jpeg','png','gif','JPG','PNG','JPEG');
$image_ext=explode('.',$image_name2);
$image_ext2=end($image_ext);
if (in_array($image_ext2,$allowed_ext2)===false){
    $errors2[]='image File type not allowed';
    }
    if($image_size2>10097152){
        $errors2[]='Maximum image size is 10Mb';
        }
}else{
    $image_ext2='';
}
$isdirector = isset($_POST['headline']) ? $_POST['headline'] : '';
if ($_FILES["pddf"]['size'] > 0){
$cv_name2=$_FILES['pddf']['name'];
$cv_size2=$_FILES['pddf']['size'];
$cv_temp2=$_FILES['pddf']['tmp_name'];
$allowedcv_ext2=array('doc','docx','DOC','DOCX','PDF','pdf');
$cv_ext=explode('.',$cv_name2);
$cv_ext2=end($cv_ext);
}else{
    $cv_ext2='';
}

$name2=mysqli_real_escape_string($con,trim($_POST['fullname2']));
$position=mysqli_real_escape_string($con,trim($_POST['position']));
$department=mysqli_real_escape_string($con,trim($_POST['department']));
$dob2=mysqli_real_escape_string($con,trim($_POST['dob2']));
$bio2=mysqli_real_escape_string($con,trim($_POST['bio2']));
 $wife2= mysqli_real_escape_string($con,trim($_POST['wife2']));
$status2='active';
$year2=mysqli_real_escape_string($con,trim($_POST['year2']));
$errors2=array();
if ($isdirector == 'yes') {
    $director = '1';
    $check =  mysqli_query($con, "SELECT * FROM deptleaders WHERE status='active' and dept_id='$department' and fullname='$name1' and is_director=1");
    if ($check > 0) {
      $errors[] = 'Department Director already exists.';
    }
  } else {
    $director = '0';
  }
// $check=  mysqli_query($con,"SELECT * FROM registered_users WHERE username='$username'");

if((empty($department))||(empty($position))){
    $errors2[]='Some fields shouldnt be empty';
}

if(!empty($cv_name2)){
    if (in_array($cv_ext2,$allowedcv_ext2)===false){
$errors2[]='CV File type not allowed';
}
if($cv_size2>5097152){
$errors2[]='Maximum CV size is 5Mb';
}
}
// if($password!=$repeat){
// $errors2[]='Passwords Dont Match';
// }
// if(mysqli_num_rows($check)>0){
//     $errors2[]='Username already exists.';
// }
if(empty($church_id)){
    $errors2[]='Church is empty';
}
if(is_numeric($church_id)==FALSE){
    $errors2[]='Wrong Value for Church';
}
if(!empty($errors2)){
foreach($errors2 as $error2){ 
echo '<div class="span9"><div class="alert alert-error">'.$error2.'Click <a href="adddeptleader">Here</a> to go back</div></div>';
}
}
else{
    $ext='no';
       mysqli_query($con,"INSERT INTO deptleaders(fullnames,dob,position,dept_id,church_id,is_director,start_date,wife,poster_id,bio,ext,username,password,level,cvs,status)  
       VALUES('$name2','$dob2','$position','$department','$church_id','$director','$year2','$wife2','".$_SESSION['05069']."','$bio2','$image_ext2','$username','".  md5($password)."','0','$cv_ext2','$status2')") or die(mysqli_error($con));
     $pastor_id=  mysqli_insert_id($con);
     $image_name2=md5($pastor_id);
//   $address=$username.'@aict.org';
//   $adduser=  mysqli_query($con,"INSERT INTO registered_users(fullnames,position,phone,gender,dob,occupation,church_id,username,address,password,ext,status) VALUES('$name2','deptleader','null','null','$dob2','$position','$church_id','$username','$address','".  md5($password)."','no','$status2')") or die(mysqli_error($con));
if ($_FILES["image2"]['size'] > 0){ 
$image_file2=$image_name2.'.'.$image_ext2;
$cv_file2=$image_name2.'.'.$cv_ext2;
move_uploaded_file($image_temp2,'../leaders/deptleaders/'.$image_file2) or die(mysqli_error($con));
}
       if(!empty($cv_name2)){
           move_uploaded_file($cv_temp2,'../cvs/'.$cv_file2) or die(mysqli_error($con));
       }
           echo '<div class="span9"><div class="alert alert-success" style="text-align:center">New Leader Added.Click <a href="deptleaders">Here</a> to go back to Leaders</div></div>';  
            }
            
}
}

?>               
