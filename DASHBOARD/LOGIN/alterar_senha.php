<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Dashboard: Alteração de Senha</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
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
			<img id="imagem" src="../logos/logo4.png">
			<form action="processa.php" method="POST" >
			<input type="Login" name="usuario" title="Informe o seu usuario" placeholder=" Usuario">
			<input type="password" onkeypress="capLock(event)" onpaste="return false" ondrop="return false" name="senha"  placeholder=" Nova Senha" minlength="6" maxlength="15">
			<input type="password" onkeypress="capLock(event)" onpaste="return false" ondrop="return false" name="confsenha" placeholder=" Confirmar Nova Senha" minlength="6" maxlength="15">
			<div id="divMayus" style="visibility: hidden">Caps Lock Ligado</div>
			<input type="submit" title="Clique para confirmar alteração" value="Alterar">
		</div>
	</body>
</html>