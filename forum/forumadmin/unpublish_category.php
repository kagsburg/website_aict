<?php
include 'includes/conn.php';    
   if(!isset($_SESSION['forum_admin'])){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE forumcategories  SET status='0' WHERE forumcategory_id=$id ") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>