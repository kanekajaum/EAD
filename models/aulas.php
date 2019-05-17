<?php 

class Aulas extends model {
	protected $db;

	public function __construct(){
		global $db;
		$this->db = $db;
	}

	public function marcarAssistido($id){
		$aluno = $_SESSION['lgaluno'];
		$sql = "INSERT INTO historico SET data_viewed = NOW(), id_aluno = '$aluno',id_aula = '$id'";
		$sql = $this->db->query($sql);
	}

	public function getAulasDoModulo($id){
		$array = array();

		$sql = "SELECT * FROM aulas WHERE id_modulo = '$id' ORDER BY ordem";
		$sql = $this->db->query($sql);

		// print_r($sql);exit;


		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();

			foreach ($array as $aulaChave => $aula) {
				
				if ($aula['tipo'] == 'video') {
					$sql = "SELECT nome FROM  videos WHERE id_aula = '".($aula['id'])."'";
					$sql = $this->db->query($sql)->fetch();
					$array[$aulaChave]['nome'] = $sql['nome'];
				}
				elseif($aula['tipo'] == 'poll'){
					$array[$aulaChave]['nome'] = "Questionários";
				}

			}
		}

		return $array;
	}

	public function getCursoDeAula($id_aula){

		$sql = "SELECT id_curso FROM aulas WHERE id = '$id_aula'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$row = $sql->fetch();

			return $row['id_curso'];
		}else{
			return 0;
		}

	}

	public function getAula($id_aula){
		$array = array();

		$sql = "SELECT tipo FROM aulas WHERE id = '$id_aula'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$row = $sql->fetch();

			if ($row['tipo'] == 'video') {
				
				$sql = "SELECT * FROM videos WHERE id_aula = '$id_aula'";
				$sql = $this->db->query($sql);

				$array = $sql->fetch();
				$array['tipo'] = 'video';

			}
			elseif($row['tipo'] == 'poll'){

				$sql = "SELECT * FROM questionarios WHERE id_aula = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'poll';
			}
		}

		return $array;

		}
	public function setDuvida($duvida, $aluno){
		
		$sql = "INSERT INTO duvidas SET data_duvida = NOW(), duvida =  '$duvida', id_aluno = '$aluno'";
		$sql = $this->db->query($sql);

	}

	public function getDuvidas(){
		$array = array();
		$sql = "SELECT * FROM duvidas ORDER BY data_duvida";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;

	}
}

 ?>