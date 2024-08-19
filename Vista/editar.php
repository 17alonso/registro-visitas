<?php
include "menu.php";
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
</head>
<?php

$id_e = $_GET['id'];
$nuevo = new M_visitante();
$resultado = $nuevo->traer_visitante_editar($id_e);
?>

<body>
    <form action="../Controlador/C_editar_visitante.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div>
            <?php while ($datos_e = $resultado->fetch_object()) { ?>
                <div class="d-grid gap-2 mx-auto d-flex p-2" style="width:21%">
                    <input type="hidden" class="form-control fw-bold" name="dni_visitante" id="dni_visitante"
                        placeholder="DNI" pattern="^[0-9]\d*$" maxlength="8" autofocus required
                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" readonly
                        value="<?php echo $datos_e->dni; ?>">
                </div>
                <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                    <input type="hidden" class="form-control fw-bold" name="id_editar" id="id_editar" readonly
                        value="<?php echo $datos_e->id; ?>">
                </div>
                <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                    <input type="text" class="form-control fw-bold" name="nombre_visitante" id="nombre_visitante" readonly
                        placeholder="Nombre(s)" value="<?php echo $datos_e->nombre; ?>">
                </div>
                <div class="d-flex gap-2  mx-auto p-2" style="width:21%">
                    <input type="text" class="form-control fw-bold" name="apellido_paterno" id="apellido_paterno" readonly
                        placeholder="Apellido Paterno" value="<?php echo $datos_e->apellido; ?>">
                </div>
                <div class="d-grid gap-2  mx-auto p-2 " style="width:21%">
                    <select id="area_visitante" name="area_visitante" class="form-select" onchange="seleciona_jefe(event)"
                        required>
                        <option hidden selected value="<?php echo $datos_e->area; ?>"><?php echo $datos_e->area; ?></option>
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
                        placeholder="Jefe o Responsable de area" value="<?php echo $datos_e->jefe; ?>">
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
                    <textarea type="text" class="form-control" style="height: 140; resize:none" name="detalle_visitante"
                        id="detalle_visitante" placeholder="Detalle su Visita"
                        required wrap="hard"><?php echo $datos_e->detalle; ?></textarea>
                </div>
            <?php } ?>
            <div class="d-grid gap-2 col-1 mx-auto">
                <button type="submit" class="btn btn-success btn-sm" name="btn_guardar" id="btn_guardar" value="ok"
                    onsubmit=onkeydown>Guardar</button>
            </div>
    </form>
</body>

<script src="../Scripts/sms.js"></script>
<script src="../Scripts/nombre_jefe.js"></script>

</html>