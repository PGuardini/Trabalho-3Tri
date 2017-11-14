<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<link rel="stylesheet" type="text/css" href="css/profs.css">
	<title>Agenda de Tarefas</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<a href="index.php"><img src="imagens/logo.png" id="logo"/></a>
		<h1 id="nome_site">Agenda de tarefas</h1>

 <?php
 if (!isset($_SESSION['login'])) {
 		echo "<div id='login'>
 				<form method='post' action='login.php'>
					<label for='login' class='login_labels'>Login:</label>
					<input type='text' name='login' class='login_inputs'>

					<label for='senha' class='login_labels'>Senha:</label>
					<input type='password' name='senha' class='login_inputs'>

					<input type='submit' name='enviar' id='submit' value='Entrar'>
				</form>
			</div>";

 		}else{
			echo "<h2>Olá ".$_SESSION['nome']."</h2>";
			echo "<a href='logout.php'><p>Desconectar</p></a>";
		}
?>
	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href="listadisciplinas.php"><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="listaprofessores.php"><section class="item menu ativo">Professores</section></a>
		<a href="listaalunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->