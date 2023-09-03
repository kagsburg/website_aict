<?php
include 'includes/conn.php';
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:index.php');
   }else{
$id=$_GET['id'];
$level=$_GET['level'];
if($level=='0'){
$change=  mysqli_query($con,"UPDATE users SET level='1' WHERE user_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE users  SET level='0' WHERE user_id='$id'") or die(mysql_error()); 
}
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>