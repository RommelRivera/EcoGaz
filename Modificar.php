<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

include("db.php");

$Nombre='' ;
$Departamento='' ;
$Direccion ='';
$Especial = '';
$Regular = '';
$Diesel= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = $conn->prepare('SELECT * FROM precios_combustible WHERE id=:id');
  $query->bindParam(':id', $id);
  
  if(!$query->execute()){
    die("Query Failed.");
  }

  $count = $query->rowCount();
  if ($count == 1) {
    $row = $query->fetch(PDO::FETCH_ASSOC);

    $Nombre=$row['Nombre'];      
    $Departamento=$row['Departamento'];
    $Direccion =$row['Direccion'];   
    $Especial =$row['Especial'];    
    $Regular =$row['Regular'];     
    $Diesel= $row['Diesel'];       
  }
}

if (isset($_POST['update']) && !empty($_POST['Nombre']) && !empty($_POST['Departamento']) && !empty($_POST['Direccion'])
    && !empty($_POST['Especial']) && !empty($_POST['Regular']) && !empty($_POST['Diesel'])) {
  $id = $_GET['id'];
  $Nombre=$_POST['Nombre'];      
  $Departamento=$_POST['Departamento'];
  $Direccion =$_POST['Direccion'];   
  $Especial =$_POST['Especial'];    
  $Regular =$_POST['Regular'];     
  $Diesel= $_POST['Diesel'];
  $query = $conn->prepare('UPDATE precios_combustible set Nombre = :Nombre,Departamento = :Departamento,
                          Direccion = :Direccion,Especial = :Especial,Regular = :Regular,Diesel = :Diesel WHERE id=:id');
  $query->bindParam(':Nombre',$Nombre);
  $query->bindParam(':Departamento',$Departamento);
  $query->bindParam(':Direccion',$Direccion);
  $query->bindParam(':Especial',$Especial);
  $query->bindParam(':Regular',$Regular);
  $query->bindParam(':Diesel',$Diesel);
  $query->bindParam(':id',$id);

  if(!$query->execute()) {
    die("Query Failed.");
  }
  
  $_SESSION['message'] = 'Actualizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: List.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Modificar.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <div class="form-group">
            <label><b>Nombre</b></label>
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" value=<?= $Nombre ?> autofocus>
          </div>
          <div class="form-group">
            <label><b>Departamento</b></label>
            <input type="text" name="Departamento" class="form-control" placeholder="Departamento" value=<?= $Departamento ?> autofocus>
          </div>
          <div class="form-group">
            <label><b>Dirección</b></label>
            <input type="text" name="Direccion" class="form-control" placeholder="Direccion" value=<?= $Direccion ?> autofocus>
          </div>
          <div class="form-group">
            <label><b>Epecial</b></label>
            <input type="text" name="Especial" class="form-control" placeholder="Especial" value=<?= $Especial ?> autofocus>
          </div>
          <div class="form-group">
            <label><b>Regular</b></label>
            <input type="text" name="Regular" class="form-control" placeholder="Regular" value=<?= $Regular ?> autofocus>
          </div>
          <div class="form-group">
            <label><b>Diesel</b></label>
            <input type="text" name="Diesel" class="form-control" placeholder="Diesel" value=<?= $Diesel ?> autofocus>
          </div>
        <button class="btn btn-success btn-block" name="update">
         Actualizar
</button>
      </form>
      <br>
      <a href="List.php" class="btn btn-danger btn-block">Cancelar</a>
      </div>
    </div>
  </div>
</div>


