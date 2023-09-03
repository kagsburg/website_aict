<?php
include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }
$id=$_GET['album_id'];
 if ((isset($_POST['album'],$_POST['description']))&&(!empty($_POST['description']))&&(!empty($_POST['album']))){
          $album=mysqli_real_escape_string($con,trim($_POST['album']));
       $description=mysqli_real_escape_string($con,trim($_POST['description']));
  mysqli_query($con,"UPDATE albums SET album_name='$album',description='$description' WHERE album_id='$id'") or die(mysql_error());
   header('Location:'.$_SERVER['HTTP_REFERER']);
                }
                else {
                    header('Location:'.$_SERVER['HTTP_REFERER']);
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
