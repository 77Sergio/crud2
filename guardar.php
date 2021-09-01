<?php

include('includes/db.php');


$libro = $_POST['libro'];
$descripcion = $_POST['descripcion'];

$insertar = "INSERT INTO tabla1(nombre, descripcion) VALUES('$libro', '$descripcion')";
$query = mysqli_query($datos, $insertar);

if (!$query) {
    echo 'Error al guardar';
}
echo 'Guardado!!!';
