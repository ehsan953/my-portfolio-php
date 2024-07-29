<?php
error_reporting(1);
session_start();
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // Local environment settings
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = '';
  $db_name = 'myportfolio';
} else {
  // Production environment settings
  $db_host = 'sql206.infinityfree.com';
  $db_user = 'if0_36998646';
  $db_pass = 'efPfBGGxEz';
  $db_name = 'if0_36998646_myportfolio';
}

// Establish database connection
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Database not connected");

// $db = mysqli_connect('sql206.infinityfree.com','if0_36998646','efPfBGGxEz','if0_36998646_myportfolio') or die("database not connected");
// $db = mysqli_connect('localhost','root','','myportfolio') or die("database not connected");
?>