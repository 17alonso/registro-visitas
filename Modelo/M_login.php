<?php
require_once 'conexion.php';
class M_login
{

    function verificar_login($usuario, $contra)
    {
        $query = "select * from usuarios where usuario='$usuario' and contra='$contra'";
        $conn = new conectar();
        $resultado=$conn->Ejecutar_Consulta($query);
        return $resultado;
    }
}