<?php
include_once 'header.php';
include_once 'conexion.php';

session_start();

$nombre=$_SESSION['nombre_reserva'];

$fecha = $_POST['fecha_reserva'];
$hora = $_POST['hora_reserva'];

$sql = $base->prepare("UPDATE reserva_entregable SET fecha=:fecha, hora=:hora  WHERE nombre=:nombre");

$sql->bindParam(":nombre", $nombre);

$sql->bindParam(":fecha", $fecha);
$sql->bindParam(":hora", $hora);

$sql->execute();


?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="3;../index.php" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Creacion de cuenta</title>
  <link rel="stylesheet" type="text/css" href="css/reserva.css">
</head>

<style>
.text-reserva{
  font-weight: bold;
  font-size: 2em;
}
</style>

<body>


  <div class="col-12 mx-auto my-3">
    <p class="text-center text-reserva">Reserva modificada exitosamente.</p>
    <p class="text-center">Volviendo al inicio...</p>
  </div>
</body>

</html>