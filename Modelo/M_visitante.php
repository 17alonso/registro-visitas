<?php
require_once 'conexion.php';
class M_visitante
{
    function M_agregar_visitante($dni, $nombre, $apellido, $area, $jefe, $fecha, $hora,$detalle,$estado)
    {
        $query = "insert into visitante (dni,nombre,apellido,area,jefe,fecha,hora,detalle,estado) values 
        ('$dni','$nombre','$apellido','$area','$jefe','$fecha','$hora','$detalle','$estado')";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }

    function traer_area(){
        $query="select * from area where estado='1'";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }

    function traer_visitante(){
        date_default_timezone_set('America/Lima');
        $fecha = date('Y-m-d');
        $query="select * from visitante where fecha='$fecha' and estado='1' and atendido='0'";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    
    function traer_visitante_reporte($fecha_ini,$fecha_fin){
        $query="select * from visitante where fecha BETWEEN '$fecha_ini' and '$fecha_fin' and estado='1' and atendido='1' order by fecha asc";
        $conn = new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    function eliminar_visitante($id){
        $query="update visitante set estado='0' where id='$id'";
        $conn=new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    function traer_visitante_editar($id){
        $query="select * from visitante where id='$id'";
        $conn=new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    function editar_visitante($id,$area_visitante_e,$jefe_visitante_e,$detalle_visitante_e){
        $query="update visitante set area='$area_visitante_e',jefe='$jefe_visitante_e',detalle='$detalle_visitante_e' where id='$id'";
        $conn=new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }

    function contar_visitante(){
        date_default_timezone_set('America/Lima');
        $fecha = date('Y-m-d');
        $query="select count(*) as total from visitante where fecha='$fecha' and estado=1";
        $conn=new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
    function atender_visitante($id){
        $query="update visitante set atendido='1' where id='$id'";
        $conn=new conectar();
        $resultado = $conn->Ejecutar_Consulta($query);
        return $resultado;
    }
}