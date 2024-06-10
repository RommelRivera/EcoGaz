 
 
<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
  header('Location: index.php');
}

include("db.php"); ?> 

  <?php include('includes/header.php'); ?> 

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="Ingresar.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Departamento" class="form-control" placeholder="Departamento" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Direccion" class="form-control" placeholder="Direccion" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Especial" class="form-control" placeholder="Especial" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Regular" class="form-control" placeholder="Regular" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="Diesel" class="form-control" placeholder="Diesel" autofocus>
          </div>
          
          <input type="submit" name="Guardar" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre de la sucursal</th>
            <th>Departamento</th>
            <th>Direccion</th>
            <th>Especial</th>
            <th>Regular</th>
            <th>Diesel</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $records = $conn->prepare('SELECT * FROM precios_combustible');
          $records->execute();   

          while($row = $records->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo $row['Nombre'];                 ?></td>
            <td><?php echo $row['Departamento'];                 ?></td>
            <td><?php echo $row['Direccion'];              ?></td>
            <td><?php echo $row['Especial'];                   ?></td>
            <td><?php echo $row['Regular'];                ?></td>
            <td><?php echo $row['Diesel'];                   ?></td>
            <td>
              <a href="Modificar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="Eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>
</main>


