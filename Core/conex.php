<?php 
class Conectarse{
	public function Conecta(){
		$mysql = new mysqli("127.0.0.1","root","","recepcion");
		if($mysql->connect_errno) echo "ERROR AL CONECTARSE A LA BD";
		return $mysql;
	}

}
?>