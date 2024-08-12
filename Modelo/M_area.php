<?php
require_once 'conexion.php';
class M_area
{
    function M_agregar_area($jefe,$nombre,$estado)
    {
        $query = "insert into area (jefe,nombre,estado) values ('$jefe','$nombre','$estado')";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
}