<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = $conn->prepare('DELETE FROM precios_combustible WHERE id=:id');
  $query->bindParam(':id', $id);
  
  if(!$query->execute()){
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Eliminado Correctamente';
  $_SESSION['message_type'] = 'danger';
  header('Location: List.php');
}

?>
