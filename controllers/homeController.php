<?php   

class homeController extends controller{
	
	public function index(){
		$anuncios = new Anuncios();
		$usuarios = new Usuarios();

		$dados = array(
				'quant' => $anuncios->getQuantidade(),
				'usuario' =>  $usuarios->getUsuario(2)

		);
		
		// $this->loadView('home', $dados);
		$this->loadTemplate('home', $dados);
	}


	
	
}