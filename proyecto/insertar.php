<?php
include "../conexion/conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$sql = "INSERT INTO personas (nombre, apellido) VALUES('$nombre', '$apellido')";
echo mysqli_query($conexion, $sql);
?>