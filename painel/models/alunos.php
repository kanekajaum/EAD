<?php  
class Alunos extends model {

	protected $db;
	private $info;

	public function __construct(){
		global $db;
		$this->db = $db;
	}

	public function isLogged(){
		if (isset($_SESSION['lgaluno']) && !empty($_SESSION['lgaluno'])) {
			return true;
		}else{
			return false;
		}
	}

	public function fazerLogin($email, $senha){

		$sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";
		$sql = $this->db->query($sql);

		// echo $sql;exit;

		if ($sql->rowCount() > 0) {
			$row = $sql->fetch();

			$_SESSION['lgaluno'] = $row['id'];

			return true;
		}

		return false;
	}
	public function isInscrito($id_curso){
		$sql = "SELECT * FROM aluno_curso WHERE id_aluno = '".($this->info['id'])."' AND id_curso = '$id_curso'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function setAlunos($id){
		$sql = "SELECT * FROM alunos WHERE id = '$id'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0) {
			$this->info = $sql->fetch(); 
		}
	}

	public function getNome(){
		return $this->info['nome'];
	}

	public function getId(){
		return $this->info['id'];
	}

}
?>