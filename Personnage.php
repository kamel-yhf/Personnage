<?php

class Personnage{

    private $nom;
    private $force;
    private $sante;

//GETTER

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


    public function seDeplacer(){

    }
    public function parler(){

    }
}