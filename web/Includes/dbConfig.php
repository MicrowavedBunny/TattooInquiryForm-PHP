<?php
$servername = "YourServerIp";
$username = "DB_USERNAME";
$password = "DB_PASSWORD";
$dbname = 'DB_NAME';

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
?>