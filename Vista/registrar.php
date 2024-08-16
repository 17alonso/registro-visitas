<?php
include "../Vista/menu.php";
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
</head>
<script>
    function confirmar() {
        var respuesta = confirm("¿Los datos son correctos?");
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
    <form action="../Controlador/C_agregar_visitante.php" method="POST">
        <div>
            <div class="d-grid gap-2  mx-auto d-flex p-2" style="width:21%">
                <input type="text" class="form-control " name="dni_visitante" id="dni_visitante" placeholder="DNI"
                    pattern="^[0-9]\d*$" maxlength="8" autofocus required
                    onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                <button type="button" class="btn btn-info btn-sm" id="validar_dni" name="validar_dni" disabled>Validar
                    DNI</button>
            </div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control fw-bold" name="nombre_visitante" id="nombre_visitante" readonly
                    placeholder="Nombre(s)">
            </div>
            <div class="d-flex gap-2  mx-auto p-2" style="width:21%">
                <div>
                    <input type="text" class="form-control fw-bold" name="apellido_paterno" id="apellido_paterno"
                        readonly placeholder="Apellido Paterno">
                </div>
                <div>
                    <input type="text" class="form-control fw-bold" name="apellido_materno" id="apellido_materno"
                        readonly placeholder="Apellido Materno">
                </div>
            </div>
            <div class="d-grid gap-2  mx-auto p-2 " style="width:21%">
                <select id="area_visitante" name="area_visitante" class="form-select" onchange="seleciona_jefe(event)"
                    required>
                    <option selected value="" disabled>Seleccione Area</option>
                    <?php
                    require_once '../Modelo/M_visitante.php';
                    $nuevo = new M_visitante();
                    $resultado = $nuevo->traer_area();
                    while ($datos = $resultado->fetch_object()) {
                        echo "<option nombre_jefe='$datos->jefe' value='$datos->nombre'>$datos->nombre</option>";
                    } ?>
                </select>
            </div>
            <div class="d-grid gap-2 mx-auto p-2" style="width:21%">
                <input type="text" class="form-control fw-bold" name="jefe_visitante" id="jefe_visitante" readonly
                    placeholder="Jefe o Responsable de area">
            </div>

            <div class="col-2 mx-auto">
                <div>
                    <?php
                    date_default_timezone_set('America/Lima');
                    $fecha = date('d-m-Y');
                    ?>
                    <b><input type="hidden" name="fecha_visitante" id="fecha_visitante" class="border border-0 w-50"
                            type="datetime" value="<?php echo $fecha ?>"></b>
                </div>
            </div>
            <div class="d-grid gap-2 mx-auto p-2" style="width:21%">
                <textarea type="text" class="form-control" style="height: 150; resize:none" name="detalle_visitante"
                    id="detalle_visitante" placeholder="Detalle su Visita" required minlength="20" wrap="hard" ></textarea>
            </div>
    </form>
    <div class="d-grid gap-2 col-2 mx-auto">
        <button  type="submit"  class="btn btn-success btn-sm" name="btn_guardar" id="btn_guardar"
         value="ok">Registrar e Imprimir Ticket</button>
    </div>
</body>


<script src="../Scripts/sms.js"></script>
<script src="../Scripts/buscar_dni.js"></script>
<script src="../Scripts/nombre_jefe.js"></script>
<script src="../Scripts/validar_boton.js"></script>

</html>