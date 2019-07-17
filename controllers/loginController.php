<?php 
	class loginController extends controller {

		public function index(){
			$dados = array();
			
			$this->loadView('login', $dados);

		}		

		public function cadastrar(){
			$dados = array(
				'aviso' => ''
			);

			if (isset($_POST['email']) && !empty($_POST['email'])) {

				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);
				$nome = ucfirst(addslashes($_POST['nome']));
				$sobrenome = ucfirst(addslashes($_POST['sobre']));
				

				$u = new Usuarios();

				if ($u->contaExiste($email)) {
					$dados['aviso'] = "E-mail já cadastrado";
				}else{
					$u->Cadastrar($email, $senha, $nome, $sobrenome);
					header("Location: ".BASE);
				}
			}

			$this->loadView('cadastro', $dados);

		}

		public function logar(){
			 $dados = array('aviso' => '');

			if (isset($_POST['email']) && !empty($_POST['email'])){
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);

				$u = new Usuarios();

				$dados['aviso'] = $u->login($email, $senha);
				$this->loadView('login', $dados);
				
			}
			
		}

		public function sair(){
			unset($_SESSION['lgfb']);
			header("Location: ".BASE);
		}

	}

	/*

			if (isset($_POST['email']) && !empty($_POST['email'])) {

				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);
				$nome = addslashes($_POST['nome']);
				$sobrenome = addslashes($_POST['sobrenome']);
				

				$u = new Usuarios();

				if ($u->contaExiste($email)) {
					$dados['aviso'] = "E-mail já cadastrado";
					$this->loadView('login', $dados);
				}else{
					$u->Cadastrar($email, $senha, $nome, $sobrenome);
					header("Location: ".BASE);
				}

			}else{
				header("Location: ".BASE."login");
			}
	*/


 ?>