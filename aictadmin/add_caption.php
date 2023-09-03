<?php 
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
$id=$_GET['id'];
         if ((isset($_POST['caption'.$id]))&&(!empty($_POST['caption'.$id]))){
       $caption=mysqli_real_escape_string($con,trim($_POST['caption'.$id]));
  mysqli_query($con,"UPDATE photos SET caption='$caption' WHERE photo_id='$id'") or die(mysqli_error());
   header('Location:'.$_SERVER['HTTP_REFERER']);
                }
                else {
                    header('Location:'.$_SERVER['HTTP_REFERER']);
}
    ?>