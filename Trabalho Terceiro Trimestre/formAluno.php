<?php
	
	include 'cabecalho.php';
?>
	<form method="post" action="gravarAluno.php">

		<label for="matricula">Matrícula</label>
		<input type="text" name="matricula">

		<label for="nome">Nome</label>
		<input type="text" name="nome">
		
		<label for="turma">Turma</label>
		<select name="turma">
			<option value="1info1">1info1</option>
			<option value="1info2">1info2</option>
			<option value="1info3">1info3</option>
		</select>
		
		<label for="email">Email</label>
		<input type="text" name="email">

		<label for="foto">Foto (coloque a extensão)</label>
		<input type="text" name="foto">

		<input type="submit" name="gravar" value="Gravar">

	</form>
<?php
	
	include 'rodape.php';

?>