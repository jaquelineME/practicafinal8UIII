<?php include("db.php"); ?>

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
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">

        <!--Codigo_proovedor,Razon_social,Direccion,Telefono,Email-->

          <div class="form-group">
            <input type="text" name="Razon_social" class="form-control" placeholder="Razon social">
          </div>

          <div class="form-group">
            <input type="text" name="Direccion" class="form-control" placeholder="Direccion">
          </div>

          <div class="form-group">
            <input type="tel" name="Telefono" class="form-control" placeholder="Numero telefonico">
          </div>

          <div class="form-group">
            <input type="email" name="Email" class="form-control" placeholder="Correo electonico">
          </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar proveedor">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Codigo del Proveedor</th>
            <th>Razon social</th>
            <th>Direccion</th>
            <th>Numero telefonico</th>
            <th>Correo electronico</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM proveedor_30";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Codigo_proovedor']; ?></td>
            <td><?php echo $row['Razon_social']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['Codigo_proovedor']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['Codigo_proovedor']?>" class="btn btn-danger">
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

<?php include('includes/footer.php'); ?>
