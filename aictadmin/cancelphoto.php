<?php
include 'includes/conn.php';    
      if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');
}else{
$id=$_GET['id'];
$change=  mysqli_query($con,"UPDATE photos SET published='canceled' WHERE photo_id='$id'") or die(mysql_error());
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>