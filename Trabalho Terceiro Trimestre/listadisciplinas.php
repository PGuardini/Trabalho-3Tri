<?php
	include 'cabecalho.php';
	include 'disciplinas.php';

	for ($i=1; $i <4 ; $i++) { 
		$ofertas=listaOfertas('2017','1info'.$i);
			echo "<section class='lista'>
			<h2>1info".$i."</h2><ul>";
			foreach ($ofertas as $linha) {
				echo"<li>".$linha['cod_disciplina']."</li>";
			}
			echo "</ul></section>";
		
	}

	include 'rodape.php';
?>