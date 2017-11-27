<?php

	include('cabecalho.php');

	print("Gravado com sucesso");

	$dados= file("dados/usuarios.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$cod=($_POST['cod']);

	$nome=($_POST['nome']);

	$login=($_POST['login']);

	$senha=($_POST['senha']);

	$tipo=($_POST['tipo']);


	$texto = $cod.",".$nome.",".$login.",".$senha.",".$tipo;

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/usuarios.csv", "a+");

	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);

	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="4;URL=index.php">
