<?php

	include('cabecalho.php');

	print("Gravado com sucesso");

	$dados= file("dados/alunos.csv");
	foreach ($dados as $linha) {
		$colunas = explode(",", $linha);
	}


	$matricula=($_POST['matricula']);

	$nome=($_POST['nome']);

	$turma=($_POST['turma']);

	$email=($_POST['email']);

	$foto=($_POST['foto']);




	$texto = $matricula.",".$nome.",".$turma.",".$email.",imagens/alunos".$foto;

	//abrir arquivo em modo de escrita
	$arquivo=fopen("dados/alunos.csv", "a+");
	
	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);
	
	//fechando o arquivo
	fclose($arquivo);

	include('rodape.php');

	//esse meta embaixo e pra redirecionar
?>
<meta http-equiv="refresh" content="4;URL=index.php">