<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'Site/Infitex/Modeles/Solutions.php');
require_once($_SERVER['DOCUMENT_ROOT'] . 'Site/Infitex/Core/Vue.php');

class Controller {
	private $solution;

	public function __construct() {
		$this->solution = new Solutions();
	}

	public function actionAccueil() {
		echo 'toot';
		$view = new Vue("Accueil");
		$view->generer();
	}

	public function action() {
		echo 'titititititi';
		$slts = $this->solution->getAllSolutions();
		$view = new Vue("Solutions");
		$view->generer(array('solutions' => $slts));
	}
}