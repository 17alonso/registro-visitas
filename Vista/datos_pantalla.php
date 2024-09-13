<?php
session_start();
if (empty($_SESSION['id'])) {
    //header("location:/registro_visitas");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Registro de Visitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/autofill/2.7.0/css/autoFill.bootstrap4.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.bootstrap4.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3da35ea7f2.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="../CSS/menu.css" rel="stylesheet">
    <link rel="icon" href="../Img/logo_muni.png">
</head>

<body>
    <div>
        <table class="table table-striped table-bordered table-hover" style="font-size: 35px;">
            <thead>
                <tr>
                    <th scope="col" style="width: fit-content; color:red;" class="bg-transparent">
                        <center>N°</center>
                    </th>
                    <th scope="col" style="width: fit-content; color:red;" class="bg-transparent">
                        <center>NOMBRE</center>
                    </th>
                    <th scope="col" style="width: fit-content; color:red;" class="bg-transparent">
                        <center>APELLIDOS</center>
                    </th>
                    <th scope="col" style="width: fit-content; color:red;" class="bg-transparent">
                        <center>AREA</center>
                    </th>
                    <th scope="col" style="width: fit-content; color:red;" class="bg-transparent">
                        <center>HORA</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../Modelo/M_visitante.php';
                $consulta = new M_visitante();
                $resultado = $consulta->traer_visitante();
                $num = 1;
                while ($datos = $resultado->fetch_object()) { ?>
                    <tr>
                        <td id="nombre" name="nombre" style="width: fit-content" class="bg-transparent">
                            <center><?php echo "<b>$num</b>"; ?></center>
                        </td>
                        <td id="nombre" name="nombre" style="width: fit-content" class="bg-transparent">
                            <center><?php echo "<b>" . $datos->nombre . "</b>"; ?></center>
                        </td>
                        <td id="apellido" name="apellido" style="width: fit-content" class="bg-transparent">
                            <center><?php echo "<b>" . $datos->apellido . "<b>"; ?></center>
                        </td>
                        <td style="width: fit-content" class="bg-transparent">
                            <center><?php echo "<b>" . $datos->area . "<b>"; ?></center>
                        </td>
                        <td style="width: fit-content" class="bg-transparent">
                            <center><?php echo "<b>" . $datos->hora . "<b>"; ?></center>
                        </td>
                        <?php
                        $num = $num + 1;
                }
                ?>
    </div>
</body>