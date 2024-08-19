<?php
include "../Vista/menu.php";
require_once '../Modelo/M_visitante.php';
if (empty($_SESSION['id'])) {
    //header("location:/registro_visitas");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
}
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<script>
    function confirmar() {
        var respuesta = confirm("¿Esta seguro de eliminar el registro.?");
        return respuesta
    }
</script>

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
    
    <div  style="margin-left:250px;margin-right:50px;" class="p-3">
    <center><h3>INICIO</h3></center>
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
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $consulta = new M_visitante();
                $resultado = $consulta->traer_visitante();
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
                            <center><?php echo nl2br($datos->detalle); ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $datos->fecha; ?></center>
                        </td>
                        <td style="width: fit-content">
                            <center><?php echo $datos->hora; ?></center>
                        </td>
                        <td style="width: fit-content;">
                            <center> <a href="editar.php?id=<?php echo $datos->id ?>" class="btn btn-small btn-warning"
                                    title="Editar"><i class="fa-regular fa-pen-to-square"></i></a>
                            </center>
                        </td>
                        <?php if ($_SESSION['nivel'] == '1') { ?>
                            <td style="width: fit-content;">
                                <center><a onclick="return confirmar()"
                                        href="../Controlador/C_eliminar_visitante.php?id=<?php echo $datos->id ?>"
                                        class="btn btn-small btn-danger" title="Eliminar"><i class="fa-solid fa-trash"></i></a>
                                </center>
                            </td>
                        <?php } else { ?>
                            <td style="width: fit-content;">
                                <center><a
                                        href="impresion.php?num=<?php echo $num ?>&nombre=<?php echo $datos->nombre . " " . $datos->apellido; ?>&area=<?php echo $datos->area; ?>&fecha=<?php echo $datos->fecha; ?>&hora=<?php echo $datos->hora; ?>"
                                        class="btn btn-small btn-info" title="Imprimir"><i class="fa-solid fa-print"></i></a>
                                </center>
                            </td>
                        <?php } ?>
                    </tr>
                    <?php $num = $num + 1;
                } ?>
            </tbody>
        </table>
    </div>
</body>

<script src="../Scripts/tabla.js"></script>
<!-- <script type="text/javascript" src="jquery.dataTables.js"></script>
<script type="text/javascript" src="dataTables.search.html.js"></script>-->

</html>