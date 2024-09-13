<?php
session_start();
require_once '../Modelo/M_visitante.php';

date_default_timezone_set('America/Lima');
if (!empty("btn_guardar") and !empty($_POST["dni_visitante"]) and !empty($_POST["area_visitante"]) and !empty($_POST["nombre_visitante"])) {
  $dni = $_POST["dni_visitante"];
  $nombre = $_POST["nombre_visitante"];
  $apellido = $_POST["apellido_paterno"] . ' ' . $_POST["apellido_materno"];
  $area = $_POST["area_visitante"];
  $jefe = $_POST["jefe_visitante"];
  $fecha = $_POST["fecha_visitante"];
  $hora = date('h:i:s a', time());
  $detalle = $_POST["detalle_visitante"];
  $estado = '1';
  $_SESSION["sms_registro"] = "";
  $nuevo = new M_visitante();
  $nuevo->M_agregar_visitante($dni, $nombre, $apellido, $area, $jefe, $fecha, $hora, $detalle, $estado);
  $resultado = $nuevo->contar_visitante();
  $datos = $resultado->fetch_object();
  $num=$datos->total;
  $_SESSION['sms_registro'] = '<script>
    const Toast = Swal.mixin({
      toast: true,
      position: "top-end",
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true
    });
    Toast.fire({
      icon: "success",
      title: "Exito: Visitante registrado"
    });
    </script>';
  //header("location:/registro_visitas/Vista/impresion.php?num=$num&nombre=$nombre $apellido&area=$area&jefe=$jefe&hora=$hora&fecha=$fecha");
  echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/impresion.php?num=$num&nombre=$nombre $apellido&area=$area&jefe=$jefe&hora=$hora&fecha=$fecha'>";
} else {
  $_SESSION['sms_registro'] = '<script>
  const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true
  });
  Toast.fire({
    icon: "error",
    title: "Error: No se pudo registrar al visitante"
  });
  </script>';
  //header("location:/registro_visitas/Vista/registrar.php");
  echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/registrar.php'>";
}

