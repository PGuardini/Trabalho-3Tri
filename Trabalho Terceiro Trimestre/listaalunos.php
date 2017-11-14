<?php
	include 'cabecalho.php';

	include 'alunos.php';
	//a funcao retorna um array contendo os alunos
	$lista1 = listaAlunosTurma('1info1');
	$lista2 = listaAlunosTurma('1info2');
	$lista3 = listaAlunosTurma('1info3');
?>
		<div class="coluna10">.</div>

		<!-- conteudo principal -->
		<article class="coluna80">			

<?php
	if (isset($_SESSION['login']) and $_SESSION['login']=='admin') {
		echo "<div class='forms'><a href='formAluno.php'<p>Novo Aluno</p></a></div>";
	}

	echo "<section class='lista'><ul>";
	echo"<h2>1info1</h2>";
	foreach ($lista1 as $aluno1) {
		echo '<li><a href="detalhaaluno.php?cod='.$aluno1['matricula'].'">'.$aluno1["nome"].'</a> - '.$aluno1["email"].'</li>';
	}	
	echo "</ul></section>";
	echo "<section class='lista'><ul>";
	echo"<h2>1info2</h2>";
	foreach ($lista2 as $aluno2) {
		echo '<li><a href="detalhaaluno.php?cod='.$aluno2['matricula'].'">'.$aluno2["nome"].'</a> - '.$aluno2["email"].'</li>';
	}
	echo "</ul></section>";
	echo "<section class='lista'><ul>";
	echo"<h2>1info3</h2>";
	foreach ($lista3 as $aluno3) {
		echo '<li><a href="detalhaaluno.php?cod='.$aluno3['matricula'].'">'.$aluno3["nome"].'</a> - '.$aluno3["email"].'</li>';
	}
	echo "</ul></section>";
?>

		</article>
<?php
	include 'rodape.php';
?>