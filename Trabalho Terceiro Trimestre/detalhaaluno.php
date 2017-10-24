<?php
	include 'cabecalho.php';
	include 'alunos.php';

//recupera o cod enviado via metodo get
	$matricula=$_GET['cod'];

//chama a funcao, passando o codigo do aluno
	$aluno = buscaAluno($matricula);

?>
	<div class="coluna10">.</div>
	<article class="coluna80">
		<section class="foto">
			<img src=<?=$aluno['foto']?>>
		</section>

		<section class="dados">
			<p>Nome: <?=$aluno['nome']?></p>
			<p>Nome: <?=$aluno['turma']?></p>
			<p>Email: <?=$aluno['email']?></p>
		</section>
	</article>

<?php

	include 'rodape.php';