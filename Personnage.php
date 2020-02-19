<?php

class Personnage{

    private $nom;
    private $force;
    private $sante;

    public function __construct($nom, $force, $sante){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setSante($sante);
    }



// GETTER

/**
 * return $nom
 * type: string
 */
    public function getNom(){
        return $this->nom;
    }

/**
 * return $force
 * type: integer
 */
    public function getForce(){
        return $this->force;
    }

/**
 * return $sante
 * type: integer
 */
    public function getSante(){
        return $this->sante;
    }

// SETTER

/**
 * set value $nom
 * type: string
 */
    public function setNom(string $nom){
        $this->nom = $nom;
    }

/**
 * set value $force
 * type: integer
 */
    public function setForce(int $force){
        $this->force = $force;
    }

/**
 * set value $sante
 * type: integer
 */
public function setSante(int $sante){
    $this->sante = $sante;
}

// SPECIFIQUE METHODE

    public function seDeplacer(Personnage $personnage) //$personnage de type class Personnage
    {
        echo " je suis " . $personnage->getNom() . " et je me déplace";
    }
    public function parler(Personnage $personnage) //$personnage de type class Personnage
    {
        echo " je suis " . $personnage->getNom() . " et je parle";
    }
}

//  $kamel = new Personnage("kamel", 100, 100);
//  echo $kamel->getNom() . ' niveau de santé ' . $kamel->getSante() . '% et ' . $kamel->getForce() . '% de force';
//  $kamel->seDeplacer($kamel);
//  $kamel->parler($kamel);
