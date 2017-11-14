<?php
	
	include 'cabecalho.php';
	
    session_destroy();
    echo'<h2>Você foi deslogado</h2>';
    echo '<meta http-equiv="refresh" content="2;url=index.php">';

    include 'rodape.php';

?>