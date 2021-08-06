<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Troca de Senha</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	</head>

	<body>
		<div id="corpo-form">
			<h1>Atualize sua Senha</h1>
			<form action="trocar.php" method="POST" >
			<input type="Login" name="login" title="Informe o seu usuario" placeholder=" Usuario">
			<input type="password" onpaste="return false" ondrop="return false" name="senha"  placeholder=" Nova Senha" minlength="6" maxlength="10">
			<input type="password" onpaste="return false" ondrop="return false" name="confsenha" placeholder=" Confirmar Nova Senha" minlength="6" maxlength="10">
			<input type="submit" title="Clique para confirmar alteração" value="Alterar">
		</div>
	</body>
</html>