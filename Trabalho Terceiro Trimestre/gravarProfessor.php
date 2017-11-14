<?php

	include('cabecalho.php');

	print("Gravado com sucesso");

	$dados= file("dados/professores.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$siape=($_POST['siape']);

	$nome=($_POST['nome']);

	$email=($_POST['email']);

	$foto=($_POST['foto']);

	$materia=($_POST['materia']);



	$texto = $siape.",".$nome.",".$email.",imagens/professores".$foto.",".$materia;

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/professores.csv", "a+");
	
	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);
	
	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="4;URL=index.php">