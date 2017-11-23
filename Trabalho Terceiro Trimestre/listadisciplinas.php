<?php
	include 'cabecalho.php';
	include 'disciplinas.php';
	include 'professores.php';

	for ($i=1; $i <4 ; $i++) {
		$ofertas=listaOfertas('2017','1info'.$i,'nome_disciplina');
			echo "<section class='lista'>
			<h2>1info".$i."</h2><ul>";
			foreach ($ofertas as $linha) {
				$prof = buscaProfessor($linha['cod_professor']);
				$disciplina= buscaDisciplinas($linha['cod_disciplina']);

				echo"<li>".$linha['cod_disciplina']." - ".$disciplina['nome']." - ".$prof['nome']."</li>";
			}
			echo "</ul></section>";

	}

	include 'rodape.php';
?>
