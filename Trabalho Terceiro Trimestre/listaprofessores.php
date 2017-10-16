<?php
	include 'cabecalho.php';

	include 'professores.php';
	//a funcao retorna um array contendo os professores
	$lista= listaProfessores();
	foreach ($lista as $professor) {
		echo "<div class='professor'>";
		echo "<img src='".$professor['foto']."'>";
		echo('<a href="detalhaprofessor.php?cod='.$professor['siape'].'">'.$professor['nome'].'</a>');
		echo "</div>";
	}


	include 'rodape.php';
?>