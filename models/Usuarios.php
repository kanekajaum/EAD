<?php 

Class Usuarios extends model{

	public function getUsuario($id){
		global $db;
		//print_r($id);

		$sql = $db->prepare("SELECT * from usuarios where id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			return $sql;
		}else{
			return 0;
		}
		

	}
	public function getUsersAll(){
		global $db;
		//print_r($id);
		$array = array();

		$sql = $db->query("SELECT * from usuarios");
		$sql->execute();

		if($sql->rowCount() > 0){
				$array = $sql->fetchAll();
		}

		return $array;
		

	}

		
}