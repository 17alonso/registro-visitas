<?php
session_start();
if (empty($_SESSION['id'])) {
  //header("location:/registro_visitas");
  echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
}
require_once '../Modelo/M_visitante.php';
  $id_atendido = $_GET['id'];
  $nuevo = new M_visitante();
  $nuevo->atender_visitante($id_atendido);

  $_SESSION['sms_registro'] = '<script>
const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 2000
});
Toast.fire({
  icon: "success",
  title: "Se Atendio Correctamente"
});
</script>';
  //header("location:/registro_visitas/Vista/inicio.php");
  echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/inicio.php'>";
