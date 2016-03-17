<?php

namespace root\pdo;

class Vehicule{
    private $id;
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesse;
    
    /* ======================== */
    /*   getters and setters    */
    /* ======================== */
    
    public function __construct(array $data){
        
        $this->setId($data['id']);
        $this->setMarque($data['marque']);
        $this->setModele($data['modele']);
        $this->setNbPortes($data['nbPortes']);
        $this->setVitesse($data['vitesse']);
        
    }
    
    function getId() {
        return $this->id;
    }

    function getMarque() {
        return $this->marque;
    }

    function getModele() {
        return $this->modele;
    }

    function getNbPortes() {
        return $this->nbPortes;
    }

    function getVitesse() {
        return $this->vitesse;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setModele($modele) {
        $this->modele = $modele;
    }

    function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    function setVitesse($vitesse) {
        $this->vitesse = $vitesse;
    }
}