<?php

$servername = "servername";
$username = "username";
$password = "password";
$dbname = "dbname";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>