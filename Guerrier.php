<?php

include('Personnage.php');

class Guerrier extends Personnage{

    private $muscle;

    public function __construct($nom, $sante, $force, $muscle){
        parent::__construct($nom, $sante, $force);
        $this->setMuscle($muscle);
    }

//GETTER
/**
 * return $muscle
 * type: string
 */
    public function getMuscle(){
        return $this->muscle;
    }

//SETTER
/**
 * set value $muscle
 * type: string
 */
    public function setMuscle(string $muscle){
        $this->muscle = $muscle;
    }

//SPECIGIQUE METHODE
    public function seBattre(Guerrier $guerrier){
        echo "je suis " . $guerrier->getNom() . " et je me bats ";
    }
}

// $korva = new Guerrier('korva',100,100,'solide');
// echo $korva->getNom() . ' niveau de santé ' . $korva->getSante() . '% et ' . $korva->getForce() . '% de force <br>';
// echo "j'ai des muscle " . $korva->getMuscle() . $korva->seBattre($korva);
