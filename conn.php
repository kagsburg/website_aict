<?php

          
//Variables for connecting to your database.
            //These variable values come from your hosting account.
            $hostname = "localhost";
            $username = "aict_db";
            $dbname = "aict_db";

            //These variable values need to be changed by you before deploying
            $password = "aict_db123";
        
            //Connecting to your database
             $con = mysqli_connect($hostname, $username, $password) OR DIE ("Unable to 
            connect to database! Please try again later.");
            mysqli_select_db($con, $dbname);


session_start();
define('BASE_URL', 'http://www.aictanzania.org');

?>