<?php
include 'includes/conn.php';    
if(!isset($_SESSION['05069'])){
header('Location:index.php');
}

$id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysqli_query($con,"UPDATE children  SET status='unpublished' WHERE child_id=$id ") or die(mysql_error());
}
 else {
   $change=  mysqli_query($con,"UPDATE children  SET status='published' WHERE child_id=$id ") or die(mysql_error()); 
}

header('Location:'.$_SERVER['HTTP_REFERER']);
?>