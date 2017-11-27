<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/geral.css">
	<title>Agenda de Tarefas</title>
	<meta charset="utf-8">
</head>
<body onload="moveClock()">
	<!-- cabeçalho -->
	<header>
		<a href="index.php"><img src="imagens/logo.png" id="logo"/></a>
		<h1 id="nome_site">Agenda de tarefas</h1>
		<?php
		if (!isset($_SESSION['login'])) {
//o drop do login ta bom menos o conteudo dele
			echo "<div class='drop' id='drop1'><h3>Login</h3></div>";
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

	<span class="pesquisa">
		<form method="GET" action="http://www.google.com/search">
			<!--<A HREF="http://www.google.com/"></A><br>-->
			<input type='search' name='q' id="pesquisa">
			<input type='submit' name='btnG' value="Pesquisa" class="submit">
		</form>
	</span>

	<div class="divider"></div>

	<!-- menu -->

	<nav class="menu">
		<section class="item menu" id="submenu1">Próximas tarefas</section>
		<section class="item menu" id="submenu2">Todas Tarefas</section>
		<section class="item menu" id="submenu3">Disciplina</section>
		<section class="item menu" id="submenu4">Tarefas por data</section>
		<section class="item menu" id="submenu5">Professores</section>
		<section class="item menu" id="submenu6">Colegas</section>
		<section class="item menu">
			<form name="form_clock">
				<input type="text" name="clock" size="10" id='clock'>
			</form>
	</section>
	</nav>

	<div class="divider"></div>

	<section class="submenu1 escondido submenus">
		<a href=''>Próximas Tarefas</a>
		<br/>
		<a href="">Tarefas Correntes</a>
		<br/>
		<a href="">Tarenfas Anteriores</a>
	</section>
  <section class="submenu2 escondido submenus"><a href="">Tarefas</a></section>
  <section class="submenu3 escondido submenus"><a href="listadisciplinas.php">Todas Disciplinas</a></section>
  <section class="submenu4 escondido submenus"><a href="">Datas</a></section>
  <section class="submenu5 escondido submenus"><a href="listaprofessores.php">Todos Professores</a></section>
  <section class="submenu6 escondido submenus"><a href='listaalunos.php'>Colegas</a></section>

	<div class='divider'></div>

	<!-- colunas para centralizar -->
