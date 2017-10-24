<?php
	include 'cabecalho.php';
	include 'professores.php';

//recupera o cod enviado via metodo get
	$siape=$_GET['cod'];

//chama a funcao, passando o codigo do professor
	$professor = buscaProfessor($siape);

?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$professor['foto']?>">
		</section>

		<section class="dados">
			<p>Nome: <?=$professor['nome']?></p>
			<p>Email: <?=$professor['email']?></p>
		</section>
	</article>

<?php

	include 'rodape.php';