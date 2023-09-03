<?php
include 'includes/conn.php';
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
$st=$_GET['st'];
$user=$_GET['user'];
if($st=='waiting'){
$change=  mysqli_query($con,"UPDATE employees  SET status='approved'  WHERE employee_id='$id'") or die(mysqli_error($con));
$change=  mysqli_query($con,"UPDATE registered_users  SET status='active'  WHERE username='$user' AND position='employee'") or die(mysqli_error($con));
}
 else {
$change=  mysqli_query($con,"UPDATE employees  SET status='waiting'  WHERE employee_id='$id'") or die(mysqli_error($con));
$change=  mysqli_query($con,"UPDATE registered_users  SET status='waiting'  WHERE username='$user' AND position='employee'") or die(mysqli_error($con));
}
}

header('Location:'.$_SERVER['HTTP_REFERER']);
?>