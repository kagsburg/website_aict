<?php
include 'includes/conn.php';    
 if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:index.php');
   }else{
  $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE events  SET published='canceled' WHERE event_id='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>