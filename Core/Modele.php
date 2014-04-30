<?php
abstract class Modele {

    private static $bdd;

    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = self::getBdd()->query($sql);
        }
        else {
            $resultat = self::getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private static function getBdd() {
        if (self::$bdd === null) {
            self::$bdd = new PDO('mysql:host=localhost;dbname=Infitex;charset=utf8', 'root',
                                'jrcyardicta', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }
}