<?php
 session_start();
$hostname="localhost";
$username="root";
$password="";
$database="aictanzania_website_db";
$con = new mysqli($hostname,$username,$password,$database);
if (mysqli_connect_errno())
       die(mysqli_connect_error()); 
 define('BASE_URL', 'http://localhost/aict_website');
?>