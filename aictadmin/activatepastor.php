<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['pastor_id'];
$status=$_GET['status'];
if($status=='active'){
$change=  mysqli_query($con,"UPDATE pastors SET status='Inactive' WHERE pastor_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE pastors SET status='active' WHERE pastor_id='$id'") or die(mysql_error()); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>