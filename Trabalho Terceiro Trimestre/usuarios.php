<?php

	function buscaUsuario($codigo){
		$usuario = array();
//abrir arquivo
		$dados = file("dados/usuarios.csv");
//percorrer
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0]==$codigo) {
				$usuario['cod']=$colunas[0];
				$usuario['login']=$colunas[1];
				$usuario['senha']=$colunas[2];
				$usuario['tipo']=$colunas[3];
			}
		}




		return $usuario;
	}	

	function listaUsuarios(){
		$usuarios = array();

		//abrir arquivo
		$dados = file("dados/usuarios.csv");
		//percorrer
		foreach ($dados as $posicao => $linha) {
			if ($posicao!=0) {
				$colunas = explode(",", $linha);
				$usuario['cod']=$colunas[0];
				$usuario['login']=$colunas[1];
				$usuario['senha']=$colunas[2];
				$usuario['tipo']=$colunas[3];

				$usuarios[] = $usuario;	
			}
			
		}

		return $usuarios;
	}
	


?>