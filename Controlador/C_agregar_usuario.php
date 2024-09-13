<?php
session_start();
require_once '../Modelo/M_usuario.php';

date_default_timezone_set('America/Lima');
if (!empty("btn_guardar") and !empty($_POST["nombre_usuario"]) and !empty($_POST["apellido_usuario"]) and !empty($_POST["usuario"]) and !empty($_POST["contra"]) and !empty($_POST["nivel"])) {
    $nombre = $_POST["nombre_usuario"];
    $apellido = $_POST["apellido_usuario"];
    $usuario = $_POST["usuario"];
    $contra = $_POST["contra"];
    $nivel = $_POST["nivel"];
    $_SESSION["sms_registro"] = "";
    $nuevo = new M_usuario();
    $nuevo->M_agregar_usuario($nombre, $apellido, $usuario, $contra, $nivel);
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
      title: "Exito: usuario registrado"
    });
    </script>';
    //header("location:/registro_visitas/Vista/usuario.php");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/usuario.php'>";
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
    title: "Error: No se pudo registrar al usuario"
  });
  </script>';
    //header("location:/registro_visitas/Vista/registrar.php");
    echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/registrar.php'>";
}