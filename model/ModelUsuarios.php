<?php
require_once ("config/db_local.php");

class ModelUsuarios extends Conexiones{
    //public string $tabla;

    public function __construct() {
        // Inicialización.
        $this->tabla = "usuario";
    }

    public function login_access($data)
	{
		
		$sentencia = "SELECT usu.idusuario,usu.nombrecompleto,usu.nickname,usu.correo,usu.telefono,usu.fecha_creacion FROM $this->tabla usu
        WHERE usu.nickname=:nickname AND usu.password=SHA1(':password');";
        //echo $sentencia; exit;
		$resultado = $this->pdo->prepare($sentencia);
		$resultado->execute($data);

		$num = $resultado->fetchAll();

		
		$valor = array();
		$valor = array(
		"data"=> $num
		); 
		//header('Content-type: application/json');
		//echo json_encode($valor);
		//print_r($datos);
		return $valor;
	}
    public function login_access2($nickname,$pass)
	{
		if (! $this->pdo) {
			die('ERR -> No hay conexión con la BD');
		}
		
		$sentencia = "SELECT usu.idusuario,usu.nombrecompleto,usu.nickname,usu.correo,usu.telefono,usu.fecha_creacion FROM $this->tabla usu
        WHERE usu.nickname='$nickname' AND usu.password=SHA1('$pass');";
        //var_dump($this->pdo); exit;
		$resultado = $this->pdo->prepare($sentencia);
		$resultado->execute();

		$num = $resultado->fetchAll();

		
		$valor = array();
		$valor = array(
		"data"=> $num
		); 
		//header('Content-type: application/json');
		//echo json_encode($valor);
		//print_r($datos);
		return $valor;
	}
}

?>