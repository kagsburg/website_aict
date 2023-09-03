<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['id'];
$activate=$_GET['activate'];
if($activate=='active'){
$change=  mysqli_query($con,"UPDATE users SET activate='Inactive' WHERE user_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE users  SET activate='active' WHERE user_id='$id'") or die(mysql_error()); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>