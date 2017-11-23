<?php
	include 'cabecalho.php';
	include 'usuarios.php';
	//capturando dados enviados por POST
	$login=$_POST['login'];
	$senha=$_POST['senha'];
?>
<div class="coluna10">.</div>
<article class="coluna80">
	<div class="alinhamento">

<?php
	if ($login=='admin' and $senha=='admin') {
		//logou como administrador e acertou a senha
		echo "<h2>Olá, Administrador</h2>";

		$_SESSION['nome']="administrador";
		$_SESSION['login']="admin";

	}
?>
			</div>
		</article>
		<meta http-equiv="refresh" content="2;url=index.php">
<?php
	include 'rodape.php';
?>
