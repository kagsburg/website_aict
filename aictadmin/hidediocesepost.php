<?php
include 'includes/conn.php';    
 if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }else {
   $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE dioceseposts  SET status='0' WHERE diocesepost_id='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>