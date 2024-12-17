<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "employee_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>