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
<?php
date_default_timezone_set('America/Lima');
$numero_dia = date('N');
$dia = date('d');
$mes = date('m');
$año = date('Y');

$nombre_mes = array(
  '01' => 'Enero',
  '02' => 'Febrero',
  '03' => 'Marzo',
  '04' => 'Abril',
  '05' => 'Mayo',
  '06' => 'Junio',
  '07' => 'Julio',
  '08' => 'Agosto',
  '09' => 'Septiembre',
  '10' => 'Octubre',
  '11' => 'Noviembre',
  '12' => 'Diciembre'
);

$dias_semana = [
  '',
  'Lunes',
  'Martes',
  'Miercoles',
  'Jueves',
  'Viernes',
  'Sabado',
  'Domingo',
];

$fecha = $dias_semana[$numero_dia] . ', ' . $dia . ' de ' . $nombre_mes[$mes] . ' del ' . $año . '.';
?>

<body>
  <div class="justify-content-between d-flex ">

    <div id="wrapper">
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav" style="margin-left:5px;">
          <h4 class="text-white text-center p-2">Registro de Visitas</h4>
          <li class="sidebar-brand">
            <a id="menu-toggle" style="margin-top:20px;float:right;" title="Ocultar Menu"> <i class="fa fa-bars"></i>
          </li>
          <li>
            <a href="inicio.php"><i class="fa-sharp-duotone fa-solid fa-house" aria-hidden="true"> </i> <span
                style="margin-left:10px;">Inicio</span> </a>
          </li>
          <li>
            <a href="registrar.php"> <i class="fa-solid fa-user-plus" aria-hidden="true"></i> <span
                style="margin-left:10px;">
                Registrar</span> </a>
          </li>
          <li>
            <a href="reportes.php"> <i class="fa-solid fa-file-lines" aria-hidden="true"></i> <span
                style="margin-left:10px;">
                Reportes</span> </a>
          </li>
          <li>
            <a href="pantalla.php"> <i class="fa-solid fa-file-lines" aria-hidden="true"></i> <span
                style="margin-left:10px;">
                Pantalla</span> </a>
          </li>

          <div>
            <li>
              <?php if ($_SESSION['nivel'] == '1') { ?>
                <a href="area.php"><i class="fa-duotone fa-solid fa-address-card"></i><span style="margin-left:10px;">
                    Registrar Area</span></a>
                    <a href="usuario.php"><i class="fa-solid fa-person-circle-plus"></i><span style="margin-left:10px;">
                    Registrar Usuario</span></a>
              <?php } ?>
            </li>
            

            <!--<li>
            <a href="#"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section</span>
            </a>
            </li>
            <li>
            <a href="#"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">Section
            </span> </a>
            </li>
            <li>
            <a href="#"> <i class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;">
              Section</span> </a>
            </li>
            <li style="margin-left:40px;">
              <a type="button" class="btn btn-danger" href="../Controlador/C_cerrar_session.php"></i><span
                  class="text-white">Salir</span></a>
            </li>-->
          </div>
        </ul>
      </div>
    </div>

    <b>
      <div class="d-flex justify-content-between p-2" style="width: 650px;">
        <div><h3><input class="border border-0 fw-bold bg-transparent" style="width: 480px;" value="<?php echo $fecha ?>"
            disabled></input></h3>
        </div>
        <div>
          <h4><label class="fw-blod opacity-75" id="hora_visitante" name="hora_visitante">
            <script src="../Scripts/tiemporeal.js"></script>
          </label></h4>
        </div>
      </div>
    </b>
    <div class="p-2">
      <div><a type="button" class="btn btn-danger" href="../Controlador/C_cerrar_session.php">Salir</a></div>
      <div style="margin-top: 10px;">
        <?php echo "<strong>" . $_SESSION['nombre'] . " " . $_SESSION['apellidos'] . "</strong>"; ?></div>
    </div>
    <!--<div class="p-2">
  
    </div>-->
  </div>





  <!-- <nav class="navbar bg-territary border-bottom border-body navbar-expand-lg">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
        <ul class="nav nav-underline">
          <li class="nav-item ">
            <a class="nav-link" aria-current="page" href="inicio.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrar.php">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="reportes.php">Reportes</a>
          </li>
        </ul>
        <?php //if ($_SESSION['nivel'] == '1') { ?>
          <button type="button" class="btn btn-warning"><a href="area.php"
              class="link-offset-2 link-underline link-underline-opacity-0 text-dark">Registrar Area</a></button>
        <?php //} ?>
        <?php //echo "<strong>" . $_SESSION['nombre'] . " " . $_SESSION['apellidos'] . "</strong>"; ?>
      </div>
    </div>
  </nav>-->


</body>
<script>
  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"> </script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"> </script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"> </script>

</html>