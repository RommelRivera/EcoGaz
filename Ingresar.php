<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

include('db.php');

if (isset($_POST['Guardar']) && !empty($_POST['Nombre']) && !empty($_POST['Departamento']) && !empty($_POST['Direccion'])
    && !empty($_POST['Especial']) && !empty($_POST['Regular']) && !empty($_POST['Diesel'])) {
  $Nombre = $_POST['Nombre'];
  $Departamento = $_POST['Departamento'];
  $Direccion = $_POST['Direccion'];
  $Especial = $_POST['Especial'];
  $Regular = $_POST['Regular'];
  $Diesel= $_POST['Diesel'];
  $query = $conn->prepare('INSERT INTO precios_combustible(Nombre, Departamento,Direccion,Especial,Regular,Diesel)
                          VALUES (:Nombre,:Departamento,:Direccion,:Especial,:Regular,:Diesel)');
  $query->bindParam(':Nombre',$Nombre);
  $query->bindParam(':Departamento',$Departamento);
  $query->bindParam(':Direccion',$Direccion);
  $query->bindParam(':Especial',$Especial);
  $query->bindParam(':Regular',$Regular);
  $query->bindParam(':Diesel',$Diesel);
  
  if(!$query->execute()) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Ingresado correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: List.php');

} else {
  $_SESSION['message'] = 'Datos vacíos';
  $_SESSION['message_type'] = 'danger';
  header('Location: List.php');
}

?>
