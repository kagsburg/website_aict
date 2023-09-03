<?php
include 'includes/conn.php';
   if(!isset($_SESSION['aictleader'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
$st=$_GET['st'];
$user=$_GET['user'];
if($st=='waiting'){
$change=  mysqli_query($con,"UPDATE employees  SET status='approved'  WHERE employee_id='$id' AND dept_id='".$_SESSION['aictdept']."' ") or die(mysqli_error($con));
$change=  mysqli_query($con,"UPDATE registered_users  SET status='active'  WHERE username='$user' AND position='employee'") or die(mysqli_error($con));
}
 else {
$change=  mysqli_query($con,"UPDATE employees  SET status='waiting'  WHERE employee_id='$id' AND dept_id='".$_SESSION['aictdept']."' ") or die(mysqli_error($con));
$change=  mysqli_query($con,"UPDATE registered_users  SET status='waiting'  WHERE username='$user' AND position='employee'") or die(mysqli_error($con));
}
}

header('Location:'.$_SERVER['HTTP_REFERER']);
?>