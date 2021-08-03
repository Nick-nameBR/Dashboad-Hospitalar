<?php 

	session_start();

	$localhost="localhost";
	$user="root";
	$password="";
	$DB="dashboard";

	global $pdo;

	try
	{
		$pdo = new PDO("mysql:dbname=".$DB.";host=".$localhost, $user, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "ERRO: " .$e->getMessage();
		exit;
	}
?>