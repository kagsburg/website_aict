<?php
include 'includes/conn2.php';
$file= $_GET['path'];
$id=$_GET['uh'];
  mysqli_query($con, "UPDATE audios SET downloads=downloads+1 WHERE song_id='$id'");
   header("Content-type: application/force-download");
header("Content-Transfer-Encoding: Binary");
header("Content-length: " . filesize($file));
header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
readfile($file);
//exit();
//showing the path to the server where the file is to be download
  
?>

//CREATE/OUTPUT THE HEADER
