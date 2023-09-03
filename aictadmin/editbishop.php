<?php
include 'includes/conn.php';
  $id=$_GET['id'];
   if((!isset($_SESSION['05069']))||($_SESSION['aictlevel']!=1)){
 header('Location:index.php');
}
 if ((isset($_POST['submit']))){
          $fullname=mysqli_real_escape_string($con,trim($_POST['fullname'.$id]));
       $diocese=mysqli_real_escape_string($con,trim($_POST['diocese'.$id]));
        $dob=mysqli_real_escape_string($con,trim($_POST['dob'.$id]));
         $wife=mysqli_real_escape_string($con,trim($_POST['wife'.$id]));
          $year=mysqli_real_escape_string($con,trim($_POST['date'.$id]));
           $bio=$_POST['bio'.$id];
           $actret=$_POST['actret'.$id];
           $actrank=$_POST['actrank'.$id];
  mysqli_query($con,"UPDATE bishops SET fullname='$fullname',dob='$dob',diocese='$diocese',startdate='$year',wife='$wife',bio='$bio',actret='$actret', rank='$actrank' WHERE bishop_id='$id'") or die(mysqli_error($con));
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
