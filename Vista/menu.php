<?php
session_start();
if (empty($_SESSION['id'])) {
  header("location:/registro_visitas");
}
?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Registro de Visitas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  <script src="https://kit.fontawesome.com/3da35ea7f2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  <div class="justify-content-between d-flex p-2  ">
    <h3>Sistemas de Registro de Visitas</h3>
    <b>
      <div class="d-flex justify-content-between" style="width: 350px;">
        <div><input class="border border-0 fw-bold bg-transparent" style="width: 257px;" value="<?php echo $fecha ?>"
            disabled></input>
        </div>
        <div>
          <label class="fw-blod opacity-75" id="hora_visitante" name="hora_visitante">
            <script src="../scripts/tiemporeal.js"></script>
          </label>
        </div>
      </div>
    </b>
    <a type="button" class="btn btn-danger" href="../Controlador/C_cerrar_session.php">Salir</a>
  </div>

  <nav class="navbar bg-territary border-bottom border-body navbar-expand-lg">
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
        <?php if ($_SESSION['nivel'] == '1') { ?>
          <button type="button" class="btn btn-warning"><a href="area.php"
              class="link-offset-2 link-underline link-underline-opacity-0 text-dark">Registrar Area</a></button>
        <?php } ?>
        <?php echo "<strong>" . $_SESSION['nombre'] . " " . $_SESSION['apellidos'] . "</strong>"; ?>
      </div>
    </div>
  </nav>


</body>
</html>