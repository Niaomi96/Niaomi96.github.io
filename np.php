<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wolves";

 echo '<p>Page visited at '.date('H:i, jS F Y').'</p>';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>