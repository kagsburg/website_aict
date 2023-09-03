<?php
session_start();
include '../conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }
  $id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysql_query("UPDATE slider_photos SET published='unpublished' WHERE slider_id='$id'") or die(mysql_error());
}
 else {
   $change=  mysql_query("UPDATE slider_photos  SET published='published' WHERE slider_id='$id'") or die(mysql_error()); 
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>