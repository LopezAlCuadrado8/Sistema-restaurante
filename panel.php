<html lang="en">
<?php
include_once 'php/conexion.php';

#Sesion para almacenar valores
session_start();
$btn_limpiar = 'Sin Reserva';
$btn_modificar = 'Sin Reserva';
$reserva = ''; // Variable inicial vacía para mostrar mensajes después


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar el nombre enviado desde el formulario
    $nombre_reserva = $_POST['nombre_reserva'];
    // Preparar la consulta para buscar la reserva
    $stmt = $base->prepare("SELECT * FROM reserva_entregable WHERE nombre = :nombre");
    $stmt->bindParam(':nombre', $nombre_reserva);
    $stmt->execute();

    // Verificar si hay resultados
    if ($fila = $stmt->fetch(PDO::FETCH_OBJ)) {
        $reserva = 'Nombre: ' . $fila->nombre . '<br>Fecha: ' . $fila->fecha . '<br>Hora: ' . $fila->hora;
        $btn_limpiar = 'Borrar';
        $btn_modificar = 'Modificar';
        // Almacenar valor en sesion
        $_SESSION['nombre_reserva'] = $fila->nombre;

    } else {
        $reserva = 'Reserva no encontrada';
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Creacion de cuenta</title>
    <link rel="stylesheet" type="text/css" href="css/reserva.css">
</head>

<body>

    <?php include 'php/header.php';
    include_once 'php/conexion.php'; ?>


    <div class="col-5 mx-auto my-3">
        <fieldset class="border border-dark rounded-2 p-2">
            <legend class="float-none w-auto">Encontrar Reserva</legend>
            <form action="" method="post">

                <div class="px-1">
                    <label class="col-2">Nombre</label>
                    <input class="col-12 mb-2 rounded border-1" type="text" name="nombre_reserva">
                </div>

                <!-- Muestra el resultado de la búsqueda -->
                <!-- <div class="mb-2 text-black">
                    <?php echo $reserva; ?>
                </div> -->

                <div class="d-md-flex gap-2 d-grid justify-content-md-center">
                    <button type="submit" class="btn btn-primary ">Encontrar</button>
                </div>

            </form>
        </fieldset>
    </div>

    <div class="d-flex align-items-stretch">

        <div class="col-5 mx-auto my-3  d-flex flex-column">
            <fieldset class="border border-dark rounded-2 p-2 d-flex flex-column flex-grow-1">
                <legend class="float-none w-auto">Eliminar Reserva</legend>
                <form action="" method="post" class="d-flex flex-column flex-grow-1">
                    <!-- Muestra el resultado de la búsqueda -->
                    <div class="mb-2 text-black">
                        <?php echo $reserva; ?>
                    </div>

                    <!-- Espaciador flexible -->
                    <div class="d-md-flex gap-2 d-grid justify-content-md-center mt-auto">
                        <button type="submit" formaction="php/borrar_reserva.php"
                            class="btn btn-primary ms-md-2"><?php echo $btn_limpiar ?></button>
                    </div>
                </form>
            </fieldset>
        </div>



        <div class="col-5 mx-auto my-3">
            <fieldset class="border border-dark rounded-2 p-2">
                <legend class="float-none w-auto">Modificar Reserva</legend>
                <form action="php/modificar_reserva.php" method="post">

                    <div class=" rounded px-1">
                        <label class="col-2">Fecha</label>
                        <input class="col-12 mb-2 rounded border-1" type="date" name="fecha_reserva" required>
                    </div>



                    <div class=" rounded px-1">
                        <label class="col-2">Hora</label>
                        <input class="col-12 mb-2 rounded border-1" type="time" name="hora_reserva" required>
                    </div>

                    <!-- Muestra el resultado de la búsqueda -->
                    <div class="mb-2 text-black">
                        <?php echo $reserva; ?>
                    </div>

                    <div class="d-md-flex gap-2 d-grid justify-content-md-center">
                        <button type="submit" class="btn btn-primary ms-md-2"><?php echo $btn_modificar ?></button>
                    </div>

                </form>
            </fieldset>
        </div>



    </div>



</body>

</html>