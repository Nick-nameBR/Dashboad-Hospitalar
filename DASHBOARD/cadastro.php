<html lang="pt-br">
	<head>
      <?php
         session_start();
         if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
         {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location:LOGIN\login.php');
         }
         $logado = $_SESSION['usuario'];
      ?>
		<meta charset="utf-8"/>
		<title>Dashboard: Cadastro</title>
		<link rel="stylesheet" type="text/css" href="LOGIN\CSS\estilo.css">
    	<link rel="stylesheet" type="text/css" href="CSS\style.css"/>
      <link rel="stylesheet" type="text/css"  href="CSS\menu.css"/>
	</head>


   <header>
      <input type="checkbox" id="chec">
      <label for="chec">
         <img id="menu" src="logos\menu1.png">
      </label>
      <nav>
         <ul>
            <li><a href="index.php">Início</a></li>
            <!--<li><a href="cadastro.php">Cadastrar Usuário</a></li>-->
            <li><a href="LOGIN\alterar_senha.php">Alterar Senha</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a onclick="window.location.href='LOGIN/logout.php'">Sair</a></li>
         </ul>
      </nav>
      <div class="container">
         
         <div id="logado">
            <?php
               if ($logado == true){
                  echo "Usuário: $logado ";
               }
            ?>
         </div>
         <img id="logo" src="logos\logo4.png">
      </div>    
   </header>


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
      <!--ENCERRA AQUI-->
		
		<div id="corpo-form">
			<form action="MENU USUARIO\cadastrar.php" method="POST">
			<h1>CADASTRO</h1>
			<input type="Nome" name="nome" title="Digite seu Nome" placeholder=" Nome">
			<input type="login" name="usuario" title="Digite um Usuario (SOMENTE NÚMEROS)" placeholder=" Usuario">
			<input type="password" onkeypress="capLock(event)" onpaste="return false" ondrop="return false"  name="senha" title="Digite sua senha" placeholder=" Senha" minlength="6" maxlength="15" >
			<div id="divMayus" style="visibility: hidden">Caps Lock Ligado</div>
			<input type="submit" value="Cadastrar">	
		</div>
	</body>
</html>