<?php
class conectar
{
	private $miConexion;
	private $servername = "";
	private $database = "";
	private $username = "";
	private $password = "";
	private $host = "";
	function __construct()
	{
		$this->servername = "localhost";
		$this->database = "registro_visitas";
		$this->username = "root";
		$this->password = "";
		$this->host = "3306";

		$this->miConexion = new mysqli($this->servername, $this->username, $this->password, $this->database, $this->host);
	}
	function Ejecutar_Consulta($strQuery)
	{
		$resultado = $this->miConexion->query($strQuery);
		return $resultado;

	}

	function Escapar_Caracteres($texto){

		return mysqli_real_escape_string($this->miConexion, $texto);

	}
}