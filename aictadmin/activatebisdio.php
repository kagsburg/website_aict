<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['id'];
$status=$_GET['status'];
if($status=='1'){
// delete from database
$change = mysqli_query($con,"DELETE FROM bishopdioceses WHERE id='$id'") or die(mysqli_error($con));
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>