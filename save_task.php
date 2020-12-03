<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $razon = $_POST['Razon_social'];
  $direccion = $_POST['Direccion'];
  $telefono = $_POST['Telefono'];
  $mail = $_POST['Email'];

  $query = "INSERT INTO proveedor_30 (Razon_social,Direccion,Telefono,Email) VALUES ('$razon','$direccion','$telefono','$mail')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error al insertar datos.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
