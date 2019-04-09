<?php  

Class Anuncios extends model{


	public function getQuantidade(){
		global $db;
		$sql = "SELECT COUNT(*) as c FROM anuncios";
		$sql = $db->query($sql);
		if($sql->rowCount() > 0){
			$sql = $sql->fetch();
			return $sql['c'];
		}else{
			return 0;
		}
	}
}