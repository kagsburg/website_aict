<?php
include 'includes/conn.php';    
      if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');
}
$id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysqli_query($con,"UPDATE verses  SET published='unpublished' WHERE verse_id=$id ") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE verses SET published='published' WHERE verse_id=$id ") or die(mysql_error()); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>