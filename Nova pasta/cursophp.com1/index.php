<!DOCTYPE html>
<html>
<head>
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	<div class="loginbox">
		<img src="imagens/login.png" class="user">
		<h2>Logar no sistema</h2>
		<div>
			<form method="POST" action="App/model/login.php">
				<div>
					<label>Email</label>
					<input type="text" name="usuario" placeholder="Email">
				</div>
				<div>
					<label>Senha</label>
					<input type="password" name="senha" placeholder="Senha">
				</div>
				<input type="submit" name="entrar">
				<a href="#">Esqueci minha senha!</a>
			</form>
		</div>
	</div>
</body>
</html>