<?php
include 'includes/conn.php';    
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE deptposts  SET status='0' WHERE deptpost_id='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>