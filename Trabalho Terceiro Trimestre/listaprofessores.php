<?php

	include 'cabecalho.php';

	include 'professores.php';
	//a funcao retorna um array contendo os professores
	$lista= listaProfessores();
?>
		<div class="coluna10">.</div>

		<!-- conteudo principal -->
		<article class="coluna80">
			<section class="lista">
				<ul>
<?php
	if (isset($_SESSION['login']) and $_SESSION['login']=='admin') {
		echo "<a href='formProfessor.php'><p>Novo Professor</p></a><br/>";
	}
	echo "<h2>Professores:</h2>";
	foreach ($lista as $professor) {
		echo '<li><a href="detalhaprofessor.php?cod='.$professor['siape'].'">'.$professor["nome"].'</a> -'.$professor["email"].'</li>';
	}
?>
				</ul>
			</section>
		</article>
<?php
	include 'rodape.php';
?>
