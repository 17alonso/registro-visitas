<?php
session_start();
require_once '../Modelo/M_visitante.php';

date_default_timezone_set('America/Lima');
if (!empty("btn_guardar") and !empty($_POST["detalle_visitante"]) ){
    $id_e=$_GET["id"];
    $area = $_POST["area_visitante"];
    $jefe = $_POST["jefe_visitante"];
    $detalle = $_POST["detalle_visitante"];
    $_SESSION["sms_registro"] = "";
    $nuevo = new M_visitante();
    $nuevo->editar_visitante($id_e,$area,$jefe,$detalle);
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
      title: "Exito: Se guardo correctamente la edicion"
    });
    </script>';
    header("location:/registro_visitas/Vista/inicio.php");
}else{
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
    title: "Error: No se guardo la edicion correctamente"
  });
  </script>';
  header("location:/registro_visitas/Vista/editar.php");
}

