<?php   

class cursosController extends controller{
	public function __construct(){
		$alunos = new Alunos();
		if (!$alunos->isLogged()) {
			header("Location: ".BASE."login");
		
		}
	}
	public function index(){
		 header("Location: ".BASE);
	}

	public function entrar($id){

		$dados = array(
			'curso' => array(),
			'modulos' => array(),
			'info' => array()
		);
		$alunos = new Alunos();
		$alunos->setAlunos($_SESSION['lgaluno']);
		$dados['info'] = $alunos;


		if ($alunos->isInscrito($id)) {
			$curso = new Cursos();
			$curso->setCurso($id);
			$dados['curso'] = $curso;

			$modulos = new Modulos();
			$dados['modulos'] = $modulos->getModulos($id);

			$this->loadTemplate('curso_entrar', $dados);
		}else{
			header("Location: ".BASE);
		}

	}
	public function aula($id_aula){

		$dados = array(
			'info' => array(),
			'curso' => array(),
			'modulos' => array(),
			'aula_info' => array(),
			'duvidas' => array()
		);

		$alunos = new Alunos();
		$alunos->setAlunos($_SESSION['lgaluno']);
		$dados['info'] = $alunos;

		$aula = new Aulas();
		$id = $aula->getCursoDeAula($id_aula);

		if ($alunos->isInscrito($id)) {
			$curso = new Cursos();
			$curso->setCurso($id);
			$dados['curso'] = $curso;

			$modulos = new Modulos();
			$dados['modulos'] = $modulos->getModulos($id);
			$dados['aula_info'] = $aula->getAula($id_aula);
			$dados['duvidas'] = $aula->getDuvidas();


			if ($dados['aula_info']['tipo'] == 'video') {

				// print_r($dados['aula_info']);
				$view = 'cursos_aula_video';

			}else{
				// print_r($dados['aula_info']);

				$view = 'cursos_aula_poll';


			}

			if (isset($_POST['duvida']) && !empty($_POST['duvida'])) {
				$duvida = addslashes($_POST['duvida']);
				$aula->setDuvida($duvida, $alunos->getId());

			}
			if (isset($_POST['opcao']) && !empty($_POST['opcao'])) {
				
				$opcao = addslashes($_POST['opcao']);
				if ($opcao == $dados['aula_info']['resposta']) {

					$dados['resposta'] = true;
				}else{
					$dados['resposta'] = false;
				}

			}

			$this->loadTemplate($view, $dados);
		}else{
			header("Location: ".BASE);
		}
	}

	
}