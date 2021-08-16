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
      <script language=javascript src="index.php"></script>
   </head>

   <header>
      <div class="container">
         <div id="sair">
            <?php
               if ($logado == true){
                  echo "Usuário: $logado";
               }
            ?>
            <button type="button" onclick="window.location.href='LOGIN/logout.php'">Sair</button>
         </div>
         <img src="logos\logo4.png">
      </div>
   </header>

   <body>
      <figure class="highcharts-figure">
         <div class="container8">
            <div id="container"></div>
            <div id="container3"></div>
            <div id="container4"></div>
            <div id="container2"></div>
         </div>
      </figure>
         
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>

      <script src="JS\GRAFICO_1.js"></script>
      <script src="JS\GRAFICO_2.js"></script>
      <script src="JS\GRAFICO_3.js"></script>
      <script src="JS\GRAFICO_4.js"></script>
      <script src="JS\GRAFICO_5.js"></script>
      
      <footer> Dashboard Hospitalar - Dados Neonatal <?php echo date("Y"); ?></footer>  
   </body>
</html>