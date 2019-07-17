<h1>Meu Perfil</h1>
<div class="container">
		<form method="POST">

			<div class="form-group">
				<input placeholder="Nome" class="form-control" type="text" value="<?php echo $info['nome']; ?>" name="nome">
			</div>
			<div class="form-group">
				<input placeholder="Sobrenome" class="form-control" type="text" value="<?php echo utf8_encode($info['sobrenome']); ?>" name="sobre">
			</div>		
			<div class="form-group">
				<textarea placeholder="Biografia" class="form-control" name="bio"><?php echo $info['bio']; ?></textarea>
			</div>	
			<div class="form-group">
				<input placeholder="E-mail" class="form-control" type="text" value="<?php echo $info['email']; ?>" name="email">
			</div>
			<div class="form-group">
				<input placeholder="Senha" class="form-control" type="password" name="senha">
			</div>
			<input type="submit" class="btn btn-primary" Value="Atualizar Dados">

		</form>
</div>