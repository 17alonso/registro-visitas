<?php
session_start();
require_once '../Modelo/M_visitante.php';

$id_estado = $_GET['id'];

$nuevo = new M_visitante();
$nuevo->eliminar_visitante($id_estado);

$_SESSION['sms_registro'] = '<script>
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 2000
});
Toast.fire({
  icon: "success",
  title: "Se Elimino Correctamente"
});
</script>';

header("location:/registro_visitas/Vista/inicio.php");

