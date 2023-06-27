<?php 

$host = "localhost";
$user = "root";
$pass = "EitbTjpUeLHHJ6nC";
$db   = "place2place";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>