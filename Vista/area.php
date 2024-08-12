<?php
include "../Vista/menu.php";
if (empty($_SESSION['id'])) {
    header("location:/registro_visitas");
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
    <form action="../Controlador/C_agregar_area.php" method="POST">
        <div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control fw-bold" name="jefe_area" id="jefe_area" placeholder="Jefe" required>
            </div>
            <div class="d-grid gap-2  mx-auto p-2" style="width:21%">
                <input type="text" class="form-control fw-bold" name="nombre_area" id="nombre_area" placeholder="Area" required>
            </div>
        </div>
        <div class="d-grid gap-2 col-1 mx-auto">
            <button type="submit" class="btn btn-success btn-sm" name="btn_guardar" id="btn_guardar"
                value="ok">Registrar Area</button>
        </div>
    </form>
</body>