<?php 
	class Usuarios extends model{

		public function verificarLogin(){
			if (!isset($_SESSION['lgfb']) || (isset($_SESSION['lgfb']) && empty($_SESSION['lgfb']))) {
				header("Location: ".BASE."login");
				exit;
			}
		}

		public function Cadastrar($email, $senha, $nome, $sobrenome){
			$sql = "INSERT into usuarios set email = '$email', senha = '$senha', nome = '$nome', sobrenome ='$sobrenome'";

			$this->db->query($sql);
		}

		public function contaExiste($email){
			$sql = "SELECT email from usuarios where email = '$email'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				return true;
			}else{
				return false;
			}
		}

		public function login($email, $senha){			

			$sql = "SELECT * from usuarios where email = '$email' and senha = '$senha'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				$_SESSION['lgfb'] = $sql['id'];

				header("Location: ".BASE);
			}else{
				return "E-mail e/ou senha errados";
			}		
		}

		public function getNome($id){
			$array = array();

			$sql = "SELECT nome, sobrenome from usuarios where id ='$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				$array['nome'] = $sql['nome'];
				$array['sobrenome'] = $sql['sobrenome'];
				
			}
			return $array;
		}

		public function getInfo($id){
			$array = array();

			$sql = "SELECT * from usuarios where id = '$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$array = $sql->fetch();
			}

			return $array;
		}

		public function updatePerfil($array = array()){
			if (count($array) > 0) {
				$sql = "UPDATE usuarios set ";

				$campos = array();

				foreach ($array as $campo => $valor) {

					$campos[] = $campo." = '".$valor."'";
				}

				$sql .= implode(', ', $campos);

				$sql .= " where id = '".($_SESSION['lgfb'])."'";

				$this->db->query($sql);
			}
		}
	}

 ?>