﻿<?php

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

//SETTER

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


    public function seDeplacer(){

    }
    public function parler(){

    }
}