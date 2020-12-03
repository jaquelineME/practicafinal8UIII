<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM proveedor_30 WHERE Codigo_proovedor = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error al eliminar.");
  }

  $_SESSION['message'] = 'Task Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>
