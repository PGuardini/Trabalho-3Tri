<?php
	include 'cabecalho.php';

	//capturando dados enviados por POST
	$login=$_POST['login'];
	$senha=$_POST['senha'];

	if ($login=='admin' and $senha=='admin') {
		//logou como administrador e acertou a senha
		echo "<h2>Olá, Administrador</h2>";

		$_SESSION['nome']="administrador";
		$_SESSION['login']="admin";

		echo '<meta http-equiv="refresh" content="2;url=index.php">';
	}
	include 'rodape.php';
?>