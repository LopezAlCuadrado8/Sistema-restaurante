<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Creacion de cuenta</title>
</head>

<body>

  <?php include 'php/header.php';?>

  <div class="col-3 mx-auto my-3">
    <fieldset class="border border-success rounded p-2">
      <legend class="float-none w-auto">Crear Cuenta</legend>
      <form action="formulario.php" method="post">

        <div class="border border-success rounded px-1">
          <label class="col-2">Usuario</label>
          <input class="col-12 mb-2 rounded border-1" type="email" name="email">
        </div>

        <div class="border border-success rounded px-1">
          <label class="col-2">Contraseña</label>
          <input class="col-12 mb-2 rounded border-1" type="email" name="email">
        </div>


        <div class="border border-success rounded px-1">
          <label class="col-2">Correo</label>
          <input class="col-12 mb-2 rounded border-1" type="email" name="email">
        </div>



        <div class="border border-success rounded px-1">
          <label class="col-2">Telefono</label>
          <input class="col-12 mb-2 rounded border-1" type="email" name="email">
        </div>

        <div class="d-md-flex gap-2 d-grid justify-content-md-center">
          <button type="submit" class="btn btn-dark ">Registrarse</button>
          <button type="reset" class="btn btn-dark ms-md-2">Limpiar</button>
        </div>

      </form>
    </fieldset>
  </div>

  </div>
</body>

</html>