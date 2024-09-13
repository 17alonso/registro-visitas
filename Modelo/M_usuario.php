<?php
require_once 'conexion.php';
class M_usuario
{
    function M_agregar_usuario($nombre,$apellidos,$usuario,$contra,$nivel)
    {
        $query = "insert into usuarios (nombre,apellidos,usuario,contra,nivel) values ('$nombre','$apellidos','$usuario','$contra','$nivel')";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    function traer_usuario(){
        $query="select * from usuarios where nivel !=1";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
}