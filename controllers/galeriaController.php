<?php  
Class galeriaController extends controller{
	public function index(){
		$usuarios = new Usuarios();


		$dados = array(
			'qt' => $usuarios->getUsersAll()
		);
		
		$this->loadTemplate('galeria',$dados);
	}

	public function abrir($id){
		echo "Abrindo galeria: ".$id;
		echo "<br><a href='/home/index'>Voltar</a>";
	}
}