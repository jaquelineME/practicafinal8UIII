<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM proveedor_30 WHERE Codigo_proovedor =$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    //mis campos

    //$codigo = $row['Codigo_proovedor'];
    $razon = $row['Razon_social'];
    $direccion = $row['Direccion'];
    $telefono = $row['Telefono'];
    $mail = $row['Email'];

  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];

  //mis campos
  //$codigo = $_POST['codprov'];
  $razon = $_POST['Razon_social'];
  $direccion = $_POST['Direccion'];
  $telefono = $_POST['Telefono'];
  $mail = $_POST['Email'];

//Codigo_proovedor,Razon_social,Direccion,Telefono,Email
  $query = "UPDATE proveedor_30 set Razon_social = '$razon', Direccion = '$direccion', Telefono = '$telefono', Email = '$mail' WHERE Codigo_proovedor = $id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

        <div class="form-group">
          <input name="Razon_social" type="text" class="form-control" value="<?php echo $razon; ?>" placeholder="Actualizar razon social">
        </div>
        <div class="form-group">
          <input name="Direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Actualizar direccion">
        </div>
        <div class="form-group">
          <input name="Telefono" type="tel" class="form-control" value="<?php echo $telefono; ?>" placeholder="Actualizar telefono">
        </div>
        <div class="form-group">
          <input name="Email" type="email" class="form-control" value="<?php echo $mail; ?>" placeholder="Actualizar direccion de correo electronico">
        </div>
        
        <button class="btn-success" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
