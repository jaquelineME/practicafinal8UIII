<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'bd_proveedores'
) or die(mysqli_erro($mysqli));

?>
