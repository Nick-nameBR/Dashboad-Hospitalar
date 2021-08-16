<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Dashboard: Login</title>
		<link rel="stylesheet" type="text/css" href="CSS\estilo.css">
	</head>

	<body>
		<!--VERIFICA SE O CAPSLOCK ESTÁ ATIVADO-->
		<script language="Javascript">
			function capLock(e){
 				kc = e.keyCode?e.keyCode:e.which;
 				sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);
 				if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk))
  				document.getElementById('divMayus').style.visibility = 'visible';
 				else
  				document.getElementById('divMayus').style.visibility = 'hidden';
			}
		</script>
		
		<div id="corpo-form">
			<img id="imagem" src="..\logos\logo4.png">
			<form action="logar.php" method="POST">
			<input type="login" name="usuario" title="Digite seu Usuario" placeholder=" Usuario">
			<input type="password" onkeypress="capLock(event)" onpaste="return false" ondrop="return false"  name="senha" title="Digite sua senha" placeholder=" Senha" minlength="6" maxlength="15" >
			<div id="divMayus" style="visibility: hidden">Caps Lock Ligado</div>
			<input type="submit" value="Acessar">
			<b>Esqueceu a senha?<b>
			<a href="alterar_senha.php"><strong>Clique Aqui!</strong></a>
		</div>
	</body>
</html>