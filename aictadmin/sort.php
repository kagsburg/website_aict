<?php
include 'includes/conn.php';
foreach($_GET['item'] as $key=>$id) {
mysqli_query($con,"UPDATE diocesestaff  SET level = $key+1 WHERE diocesestaff_id ='" . $id . "'") or die(mysqli_error($con));
}

?>