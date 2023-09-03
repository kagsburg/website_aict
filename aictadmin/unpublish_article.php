<?php
include 'includes/conn.php';    
    if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
header('Location:index.php');
   }else{
 $id=$_GET['id'];
$published=$_GET['published'];
if($published=='published'){
$change=  mysqli_query($con,"UPDATE news  SET published='unpublished' WHERE article_id=$id ") or die(mysqli_error($con));
}
 else {
   $change=  mysqli_query($con,"UPDATE news  SET published='published' WHERE article_id=$id ") or die(mysqli_error($con)); 
}
//$image_query=mysql_query("SELECT * FROM images WHERE article_id='$id'") or die(mysql_error());
//$image_result=mysql_fetch_assoc($image_query);
//$image_ext=$image_result['image_ext'];
//    unlink('../article_photos/'.md5($id).'.'.$image_ext);
//    unlink('../article_photos/thumbs/'.md5($id).'.'.$image_ext);
//    mysql_query("DELETE FROM articles WHERE article_id='$id'") or die(mysql_error());
//    mysql_query("DELETE FROM images WHERE article_id='$id'") or die(mysql_error());
//header('Location:'.$_SERVER['HTTP_REFERER']);
}
header('Location:'.$_SERVER['HTTP_REFERER']);
?>