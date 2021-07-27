<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	</head>

	<body>
		<div id="corpo-form">
			<h1>Login Dashboard</h1>
			<form method="POST" action="usuario_login.php">
			<input type="login" name="usuario" title="Coloque seu Usuario" placeholder=" Usuario">
			<input type="password" onpaste="return false" ondrop="return false"  name="senha" title="Informe sua senha" placeholder=" Senha" minlength="6" maxlength="10">
			<input type="submit" value="Acessar">
			<a1>Esqueceu a senha?<a1>
			<a href="troca_senha.php"><strong>Clique Aqui!</strong></a>
		</div>
	</body>
</html>