<?php
include 'includes/conn.php';
session_start();
session_destroy();
header('Location:index.php');

exit();


?>