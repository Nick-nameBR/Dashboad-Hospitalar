<?php

   require_once ("..\CONEXAO SQL\classe\usuario.php");
   require_once("..\CONEXAO SQL\config.php");

   $user=new Usuario();

   $logado = $_SESSION['usuario'];
   if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
   {
      unset($_SESSION['usuario']);
      unset($_SESSION['senha']);
      header('location:..\LOGIN\login.php');
   }
   else 
   {
      $user->loadByLogin($logado);
      $user->delete();
      header('location:..\LOGIN\login.php');
   }
?>