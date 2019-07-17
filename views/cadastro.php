<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/css.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Login</title>
<style type="text/css">
	body{
		background-color: #333;
	}
	.form{
	margin: auto;
	width: 500px;
	height: 400px;
	margin-top: 100px;
	background-color: #ddd;
	border-radius: 5px;
	padding: 30px;
}
</style>
</head>
	<body>

	<div class="container">
		<form method="POST">
				<div class="form">	
					<?php if(!empty($aviso)): ?>
						<div class="bg-danger">
							<?php echo $aviso; ?>
						</div>
					<?php endif; ?>
					<div class="form-group">
						<input placeholder="Nome" class="form-control" type="text" name="nome">
					</div>
					<div class="form-group">
						<input placeholder="Sobrenome" class="form-control" type="text" name="sobre">
					</div>			
					<div class="form-group">
						<input placeholder="E-mail" class="form-control" type="text" name="email">
					</div>
					<div class="form-group">
						<input placeholder="Senha" class="form-control" type="password" name="senha">
					</div>
					<input type="submit" class="btn btn-primary" Value="Cadastrar">
			</form>
			</div>
	</div>	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
