<?php
session_start();
if (empty($_SESSION['id'])) {
    //header("location:/registro_visitas");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="../CSS/pantalla.css" rel="stylesheet">
    <link rel="icon" href="../Img/logo_muni.png">
</head>
<script type="text/javascript">
    $(document).ready(function () {
        setInterval(
            function () {
                $('#seccionRecargar').load('datos_pantalla.php');
            }, 1000
        );
    });
</script>

<body>
    <audio id="sound" src="../Img/sonido.mp3"></audio>
    <script>
        function checkSound() {
            if (localStorage.getItem('playSound') === 'true') {
                document.getElementById('sound').play();
                localStorage.setItem('playSound', 'false');
            }
        }
        setInterval(checkSound, 100); // Verifica cada segundo
    </script>
    <div class="d-flex justify-content-between p-2">
        <label></label>
        <center>
            <h1 class="fw-bold">MUNICIPALIDAD DISTRITAL DE OLLANTAYTAMBO</h1>
            <h5 class="fw-bold">Pueblo Inka Sonqonchispi</h5>
        </center>
        <label class="fw-blod" id="hora_visitante" name="hora_visitante" style="font-size: 40px;">
            <script src="../Scripts/tiemporeal.js"></script>
        </label>
    </div>
    <div id="seccionRecargar" style="margin-left:20px;margin-right:20px;"></div>
</body>

</html>