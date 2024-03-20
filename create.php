<?php
  header('Content-Type: text/html; charset=utf-8');
  include 'db.php';
  $texto = $conn->real_escape_string($_POST["texto"]);
  $sql = "insert into tabla1 (texto) values ('$texto')";
  $conn->query($sql);
  $conn->close();
  header("location: read.php");
?>