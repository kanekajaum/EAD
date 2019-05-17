<?php   

class loginController extends controller{
	public function __construct(){
		
	}
	public function index(){

		$array = array(
			'erro' => '' 
		);

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$alunos = new Alunos();

			if ($alunos->fazerLogin($email, $senha)) {
				header("Location: ".BASE);
			}

		}else{
			$dados['erro'] = "Preencha todos os campos";
		}


		$this->loadTemplate('login', $array);
	}

	public function logout(){
		unset($_SESSION['lgaluno']);
		header("Location: ".BASE);
	}


	
	
}