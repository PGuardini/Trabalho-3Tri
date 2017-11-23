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
			echo "<div class='drop' id='drop1'><h3 id='click'>Login</h3></div>";
		}
		?>
 <?php
 if (!isset($_SESSION['login'])) {
 		echo "<div class'divider'></div>
		<div id='login' class='drop1 escondido'>
 				<form method='post' action='login.php'>
					<label for='login' class='labels'>Login:</label>
					<input type='text' name='login' class='inputs'>

					<br/>

					<label for='senha' class='labels'>Senha:</label>
					<input type='password' name='senha' class='inputs'>

					<br/>

					<input type='submit' name='enviar' class='submit' value='Entrar'>
				</form>
				<div id='cadastro'><a href='formUsuario.php'><h4>Cadastrar</h4></a></div>
			</div>";

 		}else{
			echo "<div id='ola'><h2>Olá ".$_SESSION['nome']."</h2><div>";
			if ($_SESSION['login']=='admin') {
				echo "<div id='login'>
								<div id='cadastro'><a href='formUsuario.php'><h4>Cadastrar</h4></a></div>
							</div>";
				echo "<a href='logout.php'><p>Desconectar</p></a>";
			}
		}
?>
	</header>
	<div class='divider'></div>
	<!-- menu -->

	<nav class="menu">
		<a href=""><section class="item menu" id="submenu1">Próximas tarefas</section></a>
		<a href=""><section class="item menu" id="submenu2">Todas Tarefas</section></a>
		<a href="listadisciplinas.php"><section class="item menu" id="submenu3">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu" id="submenu4">Tarefas por data</section></a>
		<a href="listaprofessores.php"><section class="item menu ativo" id="submenu5">Professores</section></a>
		<a href="listaalunos.php"><section class="item menu" id="submenu6">Colegas</section></a>
	</nav>

	<div class="divider"></div>

	<section class="submenu1 escondido" id="submenus">a</section>
  <section class="submenu2 escondido" id="submenus">d, e, f</section>
  <section class="submenu3 escondido" id="submenus">1info1 1info2 1info3</section>
  <section class="submenu4 escondido" id="submenus">j, k, l</section>
  <section class="submenu5 escondido" id="submenus">m, n, o</section>
  <section class="submenu6 escondido" id="submenus">p, q, r</section>

	<div class='divider'></div>

	<!-- colunas para centralizar -->
