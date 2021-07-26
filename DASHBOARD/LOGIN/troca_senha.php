<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Troca de Senha</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	</head>

	<body>
		<div id="corpo-form">
			<h1>Trocar a Senha</h1>
			<form method="POST" action="processa.php">
			<input type="Login" name="usuario" title="Informe o seu usuario" placeholder=" Usuario">
			<input type="password" name="senha" placeholder=" Nova Senha" maxlength="10">
			<input type="password" name="confsenha" placeholder=" Confirmar Nova Senha" maxlength="10">
			<input type="submit" title="Clique para confirmar alteração" value="Alterar">
		</div>
	</body>
</html>