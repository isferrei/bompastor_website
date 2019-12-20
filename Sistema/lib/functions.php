<?php

function carrega_pagina($conn){
		$url = (isset($_GET['   '])) ? $_GET['pagina'] : 'index_sistema';
		$explode = explode('/', $url);
		$dir = "pags/";
		$ext = ".php";


		if(file_exists($dir.$explode['0'].$ext)){
			require_once($dir.$explode['0'].$ext);
		}else{
			echo "<div class='alert alert-danger'>Página não encontrada</div>";
		}
	}

	function gera_titulo($titulo){
		$url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'index_sistema.php';
		$explode = explode('/', $url);

		switch($explode['0']){
			case 'pags/gerenciador.php':
				$titulo = "Gerenciador - ".$titulo;
				break;

			case 'index_sistema.php':
				$titulo = "Login - ".$titulo;
                break;
                
            case 'pags/gerenciar_noticias.php':
                $titulo = "Noticias - ".$titulo;
                break;
		}
		return $titulo;
	}


	function protegePagina(){
    }

    ?>