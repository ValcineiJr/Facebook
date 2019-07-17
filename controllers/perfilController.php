<?php 
	class perfilController extends controller {

		public function __construct(){

			$u = new Usuarios();
			$u->verificarLogin();			
		}

		public function index(){
			$dados = array('usuarioNome' => '');

			$id = $_SESSION['lgfb'];
			$u = new Usuarios();

			if (isset($_POST['nome']) && !empty($_POST['nome'])) {

				$nome = ucfirst(addslashes($_POST['nome']));
				$sobre = ucfirst(addslashes($_POST['sobre']));
				$bio = ucfirst(addslashes($_POST['bio']));

				$array = array(
					'nome' 	=> $nome,
					'sobrenome' => $sobre,
					'bio' 	=> $bio
				);

				$u->updatePerfil($array);

				if (isset($_POST['senha']) && !empty($_POST['senha'])) {
					$senha = md5($_POST['senha']);

					$u->updatePerfil(array('senha' => $senha));
				}
			}

						

			$dados['usuarioNome'] = implode(' ', $u->getNome($id));
			$dados['info'] = $u->getInfo($id);

			$this->loadViewTemplate('perfil', $dados);

		}		

	}


 ?>