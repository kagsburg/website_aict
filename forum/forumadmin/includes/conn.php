<?php
 session_start();
$hostname="localhost";
$username="aict_db";
$password="aict_db123";
$database="aict_db";
$con = new mysqli($hostname,$username,$password,$database);
if (mysqli_connect_errno())
       die(mysqli_connect_error()); 
 define('BASE_URL', 'http://www.aictanzania.org/media');
?>