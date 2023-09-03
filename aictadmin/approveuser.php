<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
$st=$_GET['st'];
if($st=='1'){
$change=  mysqli_query($con,"UPDATE followers  SET status='2'  WHERE follower_id='$id'") or die(mysqli_error($con));
}
 else if($st=='2'){
   $change=  mysqli_query($con,"UPDATE followers  SET status='0'  WHERE follower_id='$id'") or die(mysqli_error($con));
}
}

header('Location:'.$_SERVER['HTTP_REFERER']);
?>