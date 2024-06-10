<?php

$server = 'localhost';
$username = 'root';//'id17483468_admin';
$password = '';//'n{qtyIis8s8\wJ52';
$database = 'ecogaz';//'id17483468_ecogaz';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
