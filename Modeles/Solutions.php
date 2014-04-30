<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'Site/Infitex/Core/Modele.php');

class Solutions extends Modele {

	public function getAllSolutions() {
		$sql = 'SELECT * FROM Solution';
		
		return($this->executerRequete($sql));
	}

	public function getSolution($idSolution) {
		$sql = 'SELECT * FROM Solution WHERE id=?';
		$slt = $this->executerRequete($sql, array($idSolution));

		if ($slt->rowCount() == 1) {
			return ($slt->fetch());
		}
		else {
			throw new Exception("Aucune solution ne correspond à l'identifiant " . $idSolution);
		}
	}
}