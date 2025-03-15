<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Creacion de cuenta</title>
  <link rel="stylesheet" type="text/css" href="css/reserva.css">
</head>

<body>

<?php include 'php/header.php';?>

  <div class="col-5 mx-auto my-3">
    <fieldset class="border border-dark rounded-2 p-2">
      <legend class="float-none w-auto">Reserva</legend>
      <form action="php/crear_reserva.php" method="post">

        <div class="px-1">
          <label class="col-2">Nombre</label>
          <input class="col-12 mb-2 rounded border-1" type="text" name="nombre_reserva" required>
        </div>

        <div class="rounded px-1">
          <label class="col-2">Telefono</label>
          <input class="col-12 mb-2 rounded border-1" type="tel" name="telefono_reserva" required>
        </div>


        <div class=" rounded px-1">
          <label class="col-2">Fecha</label>
          <input class="col-12 mb-2 rounded border-1" type="date" name="fecha_reserva" required>
        </div>



        <div class=" rounded px-1">
          <label class="col-2">Hora</label>
          <input class="col-12 mb-2 rounded border-1" type="time" name="hora_reserva" required>
        </div>

        <div class="d-md-flex gap-2 d-grid justify-content-md-center">
          <button type="submit" class="btn btn-primary ">Registrarse</button>
          <button type="reset" class="btn btn-primary ms-md-2">Limpiar</button>
        </div>

      </form>
    </fieldset>
  </div>

</body>

</html>