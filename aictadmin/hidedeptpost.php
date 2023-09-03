<?php
include 'includes/conn.php';    
   if((isset($_SESSION['aictleader']))||(isset($_SESSION['05069']))){
   $id=$_GET['id'];
   $change=  mysqli_query($con,"UPDATE deptposts  SET status='0' WHERE deptpost_id='$id' AND dept_id='".$_SESSION['aictdept']."'") or die(mysqli_error($con)); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>