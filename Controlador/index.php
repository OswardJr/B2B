<?php
	$htaccess = $_SERVER {"REQUEST_URI"};

	include('../Modelo/vista.php');
	include('../Modelo/login.php');

	if (strpos($htaccess, "login") == true) {
		$indice = 'default';
	}elseif (strpos($htaccess, "menu") == true) {
		$indice = 'menu';
	}elseif (strpos($htaccess, "general") == true) {
		$indice = 'general';
	}elseif (strpos($htaccess, "inicio") == true) {
		$indice = 'inicio';	
	}elseif (strpos($htaccess, "perfil") == true) {
		$indice = 'perfil';
	}elseif (strpos($htaccess, "bloquear_pantalla") == true) {
		$indice = 'bloquear_pantalla';
	}elseif (strpos($htaccess, "agregar_referido")== true) {
		$indice = 'agregar_referido';
	}elseif (strpos($htaccess, "principio_lider")== true) {
		$indice = 'inicio_lider';
	}elseif (strpos($htaccess, "Referidos") == true) {
		$indice = 'Referidos';
	}elseif (strpos($htaccess, "pedidos") == true) {
		$indice = 'pedidos';
	}elseif (strpos($htaccess, "bonos_ganancias") == true) {
		$indice = 'bonos_ganancias';
	}elseif (strpos($htaccess, "profile_referido") == true) {
		$indice = 'profile_referido';
	}elseif (strpos($htaccess, "nuevo") == true) {
		$indice = 'nuevo';
	}

	$caso = $indice;
	$login = new login;
	$vista = new vista;

	switch ($indice) {
		case 'inicio':
			$html = $login->validar();
			echo $vista->html($html);
		break;

		case 'menu':
			echo $vista->html('index');
		break;

		case 'default':
			echo $vista->html('login');
		break;

		case $caso:
			echo $vista->html($indice);
		break;
	}
?>