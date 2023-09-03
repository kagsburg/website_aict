<?php
include 'includes/conn2.php';
session_start();
session_destroy();
header('Location:index.php');

exit();


?>