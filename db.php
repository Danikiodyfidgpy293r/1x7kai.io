<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $database = "hosting";

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
  }
?>