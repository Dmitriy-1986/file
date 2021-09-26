<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "file";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}
