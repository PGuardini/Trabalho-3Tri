<?php
	
	include 'cabecalho.php';
?>
	<form method="post" action="gravarProfessor.php">

		<label for="siape">SIAPE</label>
		<input type="text" name="siape">

		<label for="nome">Nome</label>
		<input type="text" name="nome">

		<label for="email">Email</label>
		<input type="text" name="email">

		<label for="foto">Foto (coloque a extensão)</label>
		<input type="text" name="foto">

		<label for="materia">Matéria</label>
		<input type="text" name="materia">

		<input type="submit" name="gravar" value="Gravar">

	</form>
<?php
	
	include 'rodape.php';

?>