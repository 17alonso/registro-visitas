<?php
include "../Vista/menu.php";
require_once '../Modelo/M_visitante.php';
if (empty($_SESSION['id'])) {
    header("location:/registro_visitas");
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        <!--Inicio mensaje Toast Sweet alert-->
        <div>
            <?php
            if (!empty($_SESSION['sms_registro'])) { ?>
                <div>
                    <?php echo $_SESSION['sms_registro']; ?>
                </div>
                <?php
                unset($_SESSION['sms_registro']);
            }
            ?>
        </div>
        <!--Fin mensaje Toast Sweet alert-->
        <div style="margin-left:250px;margin-right:50px;">
            <div class="mx-auto" style="width: 75%">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label><b>Del Dia</b></label>
                                <input type="date" class="form-control fw-bold p-2 gap-2" style="width: fit-content"
                                    name="fecha_ini" id="fecha_ini" value="<?php echo $_GET["fecha_ini"] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label><b> Hasta el Dia</b></label>
                                <input type="date" class="form-control fw-bold" style="width: fit-content"
                                    name="fecha_fin" id="fecha_fin" value="<?php echo $_GET["fecha_fin"] ?>"required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <br>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
            <div class="mx-auto" style="width: fit-content">
                <table class="table table-striped table-hover table-sm" id="mitabla">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" style="width: fit-content;">
                                <center>ID</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>N°</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>DNI</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>NOMBRE</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>APELLIDOS</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>AREA</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>JEFE</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>DETALLE</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>FECHA</center>
                            </th>
                            <th scope="col" style="width: fit-content">
                                <center>HORA</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        error_reporting(0);
                        $fecha_ini_1 = date("d-m-Y", strtotime($_GET["fecha_ini"]));
                        $fecha_fin_1 = date("d-m-Y", strtotime($_GET["fecha_fin"]));
                        $consulta = new M_visitante();
                        $resultado = $consulta->traer_visitante_reporte($fecha_ini_1, $fecha_fin_1);
                        $num = 1;
                        while ($datos = $resultado->fetch_object()) { ?>
                            <tr>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->id ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $num; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->dni; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->nombre; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->apellido; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->area; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->jefe; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->detalle; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->fecha; ?></center>
                                </td>
                                <td style="width: fit-content">
                                    <center><?php echo $datos->hora; ?></center>
                                </td>
                                <!-- <td style="width: fit-content;">
                                <center> <a href="editar.php?id=<?php //echo $datos->id ?>"
                                        class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                </center>
                            </td>
                            <td style="width: fit-content;">
                                <center><a onclick="return confirmar()"
                                        href="../Controlador/C_eliminar_visitante.php?id=<?php //echo $datos->id ?>"
                                        class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </center>
                            </td>-->
                            </tr>
                            <?php $num = $num + 1;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script src="../Scripts/tabla2.js"></script>
</body>
</html>