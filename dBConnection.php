<?php
$servername = "localhost";
$username = "experiment";
$password = "Password123!";
$database = "speechPerception";

global $conn;
$conn = new mysqli($servername, $username, $password, $database);

?>
