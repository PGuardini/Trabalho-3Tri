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