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
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
</head>

<script>
    function confirmar() {
        var respuesta = confirm("¿Esta seguro de eliminar el registro.?");
        return respuesta
    }
</script>

<script>
    // Configuración de Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyC21nuGkReKkL1A0QrKz_pZ1eOrR7j4W7Q",
        authDomain: "registro-de-visitas-e4293.firebaseapp.com",
        databaseURL: "https://registro-de-visitas-e4293-default-rtdb.firebaseio.com", // URL de tu base de datos
        projectId: "registro-de-visitas-e4293",
        storageBucket: "registro-de-visitas-e4293.appspot.com",
        messagingSenderId: "771455874969",
        appId: "1:771455874969:web:96cd07835adf82f02ec508",
        measurementId: "G-GE6XX7CTV4"
    };
    // Inicializa Firebase
    firebase.initializeApp(firebaseConfig);
    const database = firebase.database();
    //console.log("Firebase inicializado:", firebase);
</script>

<script>
    function confirmar_atencion(event) {
        event.preventDefault(); // Evita la redirección inmediata
        if (confirm("¿Seguro que termino la Atención?")) {
            firebase.database().ref('playSound').set(true)
                .then(() => {
                    //console.log("Valor establecido en la base de datos");
                    const href = event.target.closest('a').href; // Obtiene el href del enlace más cercano
                    window.location.href = href; // Redirige después de que la operación se complete
                })
                .catch((error) => console.error("Error al establecer el valor:", error));
        }
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
    <center>
        <h3>INICIO</h3>
    </center>
    <div style="margin-left:250px;margin-right:50px;" class="p-3">
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
                        <?php if ($_SESSION['nivel'] != '3') { ?>
                            <td style="width: fit-content;">
                                <center> <a href="editar.php?id=<?php echo $datos->id ?>" class="btn btn-small btn-warning"
                                        title="Editar"><i class="fa-regular fa-pen-to-square"></i></a>
                                </center>
                            </td>
                        <?php } else { ?>
                            <td style="width: fit-content;">
                                <center> <a onclick="return confirmar_atencion(event)"
                                        href="../Controlador/C_atendido.php?id=<?php echo $datos->id ?>"
                                        class="btn btn-small btn-success" title="Atentido"><i
                                            class="fa-duotone fa-solid fa-circle-check"></i></a>
                                </center>
                            </td>
                        <?php }
                        if ($_SESSION['nivel'] == '1') { ?>
                            <td style="width: fit-content;">
                                <center><a onclick="return confirmar()"
                                        href="../Controlador/C_eliminar_visitante.php?id=<?php echo $datos->id ?>"
                                        class="btn btn-small btn-danger" title="Eliminar" name="btneliminar" value="ok"><i
                                            class="fa-solid fa-trash"></i></a>
                                </center>
                            </td>
                        <?php } elseif ($_SESSION['nivel'] == '2') { ?>
                            <td style="width: fit-content;">
                                <center><a
                                        href="impresion.php?num=<?php echo $num ?>&nombre=<?php echo $datos->nombre . " " . $datos->apellido; ?>&area=<?php echo $datos->area; ?>&fecha=<?php echo $datos->fecha; ?>&hora=<?php echo $datos->hora; ?>"
                                        class="btn btn-small btn-info" title="Imprimir"><i class="fa-solid fa-print"></i></a>
                                </center>
                            </td>
                        <?php } else { ?>
                            <td style="width: fit-content;">
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