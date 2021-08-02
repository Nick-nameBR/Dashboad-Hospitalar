<html>
   <head>
      <title>DASHBOARD HOSPITALAR</title>
      <link rel="stylesheet"  href="CSS\GRAFICO_1.css" /> 
      <link rel="stylesheet"  href="CSS\GRAFICO_2.css" /> 
      <link rel="stylesheet"  href="CSS\GRAFICO_3.css" />
   </head>

   <body>
      <script src="web.config"></script>
      <input name="Sair" type="button" id="botao-sair" onclick="LOGIN\sair_login.php" value="Sair" />
      <hr class="hr3"></hr>
      <figure class="highcharts-figure">
         <div id="container1"></div>
         <hr class="hr3"></hr>
         <div id="container2"></div>
         <hr class="hr3"></hr>
         <div id="container3"></div>
      </figure>

      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>

      <script src="JS\GRAFICO_1.js"></script>
      <script src="JS\GRAFICO_2.js"></script>
      <script src="JS\GRAFICO_3.js"></script>

   </body>
</html>
