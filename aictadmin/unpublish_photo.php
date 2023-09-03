<?php
include 'includes/conn.php';    
      if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');
}else{
$id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysqli_query($con,"UPDATE photos SET published='unpublished' WHERE photo_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE photos  SET published='published' WHERE photo_id='$id'") or die(mysql_error()); 
}}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>