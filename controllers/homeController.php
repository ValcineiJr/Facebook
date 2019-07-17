<?php 
	class homeController extends controller {

		public function __construct(){

			$u = new Usuarios();
			$u->verificarLogin();			
		}

		public function index(){
			$dados = array('usuarioNome' => '');
			
			$u = new Usuarios();
			$dados['usuarioNome'] = implode(' ', $u->getNome($_SESSION['lgfb']));

			$this->loadViewTemplate('home', $dados);

		}		

	}


 ?>