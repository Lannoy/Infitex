<?php

class Vue {

	private $fichier;
	private $titre;

	public function __construct($action) {
		$this->fichier = $_SERVER['DOCUMENT_ROOT'] . "Site/Infitex/Vues/Vue" . $action . ".php";
	}

	public function generer($donnees) {
		$vue = $this->genererFichier($this->fichier, $donnees);
		echo $vue;
	}

	private function genererFichier($fichier, $donnees) {
		if (file_exists($fichier)) {
			// Rend les éléments du tableau $donnees accessibles dans la vue
			if ($donnees != null)
				extract($donnees);
			// Démarrage de la temporisation de sortie
			ob_start();
			// Inclut le fichier vue
			// Son résultat est place dans le tampon de sortie
			require $fichier;
			// Arrêt de la temporisation et renvoi du tampon de sortie
			return ob_get_clean();
		}
		else {
			throw new Exception("Fichier '$fichier' introuvable");
		}
	}
}