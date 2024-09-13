<?php
session_start();
require_once '../Modelo/M_login.php';
$conn = new conectar();
$consulta = new M_login();
if (isset($_POST['btningresar'])) {
    $usuario = $conn->Escapar_Caracteres($_POST['usuario']);
    $contra = $conn->Escapar_Caracteres($_POST['contra']);
    //$_SESSION["sms_login"] = "";
    $mensaje="";
    $resultado = $consulta->verificar_login($usuario, $contra);
    if ($datos = $resultado->fetch_object()) {
        $_SESSION['id'] = $datos->id;
        $_SESSION['nombre'] = $datos->nombre;
        $_SESSION['apellidos'] = $datos->apellidos;
        $_SESSION['nivel'] = $datos->nivel;
        //header("location:/registro_visitas/Vista/inicio.php");
        echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas/Vista/inicio.php'>";
    } else {
        echo "<META HTTP-EQUIV = REFRESH CONTENT='0;URL=/registro_visitas'>";
        $_SESSION["sms_login"] = '<center><div class="alert alert-danger">Usuario o Contraseña vacio</div></center>';
    }
}
