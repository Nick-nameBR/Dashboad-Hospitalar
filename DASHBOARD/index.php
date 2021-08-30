<!DOCTYPE html>
   <html lang ="pt-br">

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
         <meta charset="utf-8">
         <script src="web.config"></script>
         <title>Dashboard | Neonatal</title>
         <link rel="stylesheet" type="text/css" href="CSS\style.css"/>
         <link rel="stylesheet" type="text/css"  href="CSS\menu.css" />
         <!--<script language=javascript src="index.php"></script>-->
      </head>


      <header>
         <input type="checkbox" id="chec">
            <label for="chec">
              <img id="menu" src="logos\menu1.png">
            </label>
            <nav>
               <ul>
                  <li><a href="index.php">Início</a></li>
                  <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                  <li><a href="login\alterar_senha.php">Alterar Senha</a></li>
                  <li><a href="MENU USUARIO\excluir.php">Excluir Usuário</a></li>
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

         <figure class="highcharts-figure">
            <div class="container8">
               <div id="container"></div>
               <div id="container3"></div>
               <div id="container4"></div>
               <div id="container2"></div>
               <div id="container6"></div>
            </div>
         </figure>
            
         <script src="https://code.highcharts.com/highcharts.js"></script>
         <script src="https://code.highcharts.com/modules/export-data.js"></script>
         <script src="https://code.highcharts.com/modules/accessibility.js"></script>
         <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
         <script src="https://code.highcharts.com/modules/exporting.js"></script>
         <script src="https://code.highcharts.com/highcharts.js"></script>
         <script src="https://code.highcharts.com/highcharts-3d.js"></script>
         <script src="https://code.highcharts.com/modules/exporting.js"></script>
         <script src="https://code.highcharts.com/modules/export-data.js"></script>
         <script src="https://code.highcharts.com/modules/accessibility.js"></script>

         <script src="JS\GRAFICO_1.js"></script>
         <script src="JS\GRAFICO_2.js"></script>
         <script src="JS\GRAFICO_3.js"></script>
         <script src="JS\GRAFICO_4.js"></script>
         <script src="JS\TAXA_VIVOS.js"></script>
         
         <footer> Dashboard Hospitalar - Dados Neonatal <?php echo date("Y"); ?></footer>  
      </body>
   </html>