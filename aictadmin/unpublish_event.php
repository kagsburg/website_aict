<?php
include 'includes/conn.php';    
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
  $id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysqli_query($con,"UPDATE events SET published='unpublished' WHERE event_id='$id'") or die(mysqli_error($con));
}
 else {
   $change=  mysqli_query($con,"UPDATE events  SET published='published' WHERE event_id='$id'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>