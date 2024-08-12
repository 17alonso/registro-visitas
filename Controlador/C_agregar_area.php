<?php
session_start();
require_once '../Modelo/M_area.php';
date_default_timezone_set('America/Lima');
if (!empty("btn_guardar") and !empty($_POST["jefe_area"]) and !empty($_POST["nombre_area"])) {
  $jefe_area = $_POST["jefe_area"];
  $nombre_area = $_POST["nombre_area"];
  $estado="1";
  $_SESSION["sms_registro"] = "";
  $nuevo = new M_area();
  $nuevo->M_agregar_area($jefe_area, $nombre_area, $estado);
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
      title: "Exito: Area registrada"
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
    title: "Error: No se pudo registrar el Area"
  });
  </script>';
  header("location:/registro_visitas/Vista/registrar.php");
}

