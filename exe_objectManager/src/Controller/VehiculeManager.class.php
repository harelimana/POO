<?php

    class VehiculeManager
    {

        private $db; //objet (instance) PDO

        public function __construct($db)
        {
            $this->setDb($db);
        }

        // setters

        public function setDb(PDO $db)
        {
            $this->db = $db;
        }

        // methode d'insertion

        public function add(Vehicule $vehicule)
        {
            $query = $this->db->prepare('INSERT INTO vehicules SET marque = : marque');
            $query->bindvalue(':marque', $vehicule->marque());
            $query->execute();

            $vehicule->hydrate(array('id' => $this->db->lastInsertId(), 'degats' => 0,));
        }

        // methode d'update

        public function update(Vehicule $vehicule)
        {
            $query = $this->db->prepare('UPDATE vehicules SET marque = :marque WHERE id = : id ');
            $query -> bindValue(': marque', $vehicule -> marque(), PDO::PARAM_INT);
            $query -> bindValue(': id ', $vehicule->id(), PDO :: PARAM_INT);
        }

        // methode de suppression

        public function delete(Vehicule $vehicule)
        {
            $this->db->exec('DELETE FROM vehicules WHERE id = ' . $vehicule->id());
        }

    }
    