<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['id'];
$position=$_GET['pos'];
$status=$_GET['status'];
if($status=='active'){
$change=  mysqli_query($con,"UPDATE deptleaders SET status='Inactive' WHERE deptleader_id='$id'") or die(mysqli_error($con));
} else {
   $change=  mysqli_query($con,"UPDATE deptleaders SET status='active' WHERE deptleader_id='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>