<?php
include 'includes/conn.php';    
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE employees  SET status='inactive' WHERE employee_id ='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>