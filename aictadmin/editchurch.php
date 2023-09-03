<?php
include 'includes/conn.php';
  $id=$_GET['id'];
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');
}  else {

 if ((isset($_POST['church'.$id]))){         
       $church=mysqli_real_escape_string($con,trim($_POST['church'.$id]));
      mysqli_query($con,"UPDATE churches  SET church='$church'  WHERE church_id='$id'") or die(mysqli_error($con));
   header('Location:'.$_SERVER['HTTP_REFERER']);
                }
                else {
                    header('Location:'.$_SERVER['HTTP_REFERER']);
}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
