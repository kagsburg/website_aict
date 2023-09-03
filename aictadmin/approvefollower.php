<?php
include 'includes/conn.php';
   if(!isset($_SESSION['aicpastor'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
$st=$_GET['st'];
if($st=='waiting'){
$change=  mysqli_query($con,"UPDATE registered_users  SET status='inactive'  WHERE user_id='$id' AND church_id='".$_SESSION['aicchurch']."' ") or die(mysqli_error($con));
}
 else {
   $change=  mysqli_query($con,"UPDATE registered_users  SET status='waiting'  WHERE user_id='$id' AND church_id='".$_SESSION['aicchurch']."' ") or die(mysqli_error($con));
}
}

header('Location:'.$_SERVER['HTTP_REFERER']);
?>