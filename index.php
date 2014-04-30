<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'Site/Infitex/Core/Controller.php');
require_once($_SERVER['DOCUMENT_ROOT'] . 'Site/Infitex/Vues/VueAccueil.php');


if (isset($_GET['action'])) {
	$action = $_GET['action'];
	$controller = new Controller();

	if ($action == 'Solutions') {
		$controller->action();
	}
	else {
		$controller->actionAccueil();
	}
}