<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['id'];
$status=$_GET['status'];
if($status=='active'){
$change=  mysqli_query($con,"UPDATE bishops SET status='Inactive' WHERE bishop_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE bishops SET status='active' WHERE bishop_id='$id'") or die(mysql_error()); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>