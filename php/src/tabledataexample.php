<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';
// Database use name
$user = 'MYSQL_USER';
//database user password
$pass = 'MYSQL_PASSWORD';

// check the MySQL connection status
$conn = mysqli_connect($host, $user, $pass,"MYSQL_DATABASE") or die("Error : ".
        mysqli_error($conn));

mysqli_query($conn, "SET NAMES 'utf8' ");
?>