<?php
$server='localhost';
$username='root';
$password= '';
$database= 'fbp';

  try {
    $conn= new PDO("mysql:host=$server;dbname=$database;",$username, $password);
  } catch (PDOException $e) {
    die('Ha ocurrido un error en la base de datos: '.$e->getMessage());

  }

 ?>