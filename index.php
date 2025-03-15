<html lang="en">

<?php
include_once 'php/conexion.php';
$stmt = $base->query("SELECT * FROM reserva_entregable");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$cantidad = 0;
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Restaurante</title>
  <link rel="stylesheet" type="text/css" href="css/landing.css">
</head>

<body>
  <?php include 'php/header.php'; ?>


  <div class="container mt-5">
    <h1 class="text-center">Lista de Reservas</h1>
    <table class="table table-striped reserva">
      <tr>
        <th>N°</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Fecha</th>
        <th>Hora</th>
      </tr>
      <tr>
        <?php
        while ($fila = $stmt->fetch()):
          $cantidad = $cantidad + 1 ?>
          <td><?php echo $fila->id_reserva?></td>
          <td><?php echo $fila->nombre ?></td>
          <td><?php echo $fila->telefono ?></td>
          <td><?php echo $fila->fecha ?></td>
          <td><?php echo $fila->hora ?></td>
        </tr>
      <?php endwhile; ?>

    </table>
  </div>


</body>

</html>