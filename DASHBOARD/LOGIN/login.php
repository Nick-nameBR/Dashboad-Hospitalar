<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Dashboard: Login</title>
		<link rel="stylesheet" type="text/css" href="CSS\estilo.css">
	</head>

	<body>
		<div id="corpo-form">
			<img id="imagem" src="..\logos\logo4.png">
			<form action="logar.php" method="POST">
			<input type="login" name="usuario" title="Coloque seu Usuario" placeholder=" Usuario">
			<input type="password" onpaste="return false" ondrop="return false"  name="senha" title="Informe sua senha" placeholder=" Senha" minlength="6" maxlength="15">
			<input type="submit" value="Acessar">
			<b>Esqueceu a senha?<b>
			<a href="alterar_senha.php"><strong>Clique Aqui!</strong></a>
		</div>
	</body>
</html>