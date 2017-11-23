<?php

	include 'cabecalho.php';
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<form method="post" action="gravarProfessor.php" enctype="multipart/form-data">

		<label for="siape" class="labels">SIAPE</label>
		<input type="text" name="siape" class="inputs">

		<br/>

		<label for="nome" class="labels">Nome</label>
		<input type="text" name="nome" class="inputs">

		<br/>

		<label for="email" class="labels">Email</label>
		<input type="text" name="email" class="inputs">

		<br/>

		<label for="foto" class="labels">Foto</label>
		<input type="file" name="foto" class="inputs">

		<br/>

		<label for="materia" class="labels">Matéria</label>
		<input type="text" name="materia" class="inputs">

		<br/>

		<input type="submit" name="gravar" value="Gravar" class="submit">

	</form>
</article>
<?php

	include 'rodape.php';

?>
