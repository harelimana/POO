<?php

    namespace root\pdo;

    class Adresse
    {
        private $rue;
        private $numero;
        private $localite;
        private $codepostal;
        private $pays;

        /* ======================== */
        /*   constructeur           */
        /* ======================== */

        public function __construct(array $data)
        {
            $this->setId($data['id']);
            $this->setRue($data['rue']);
            $this->setLocalite($data['localite']);
            $this->setCodePostal($data['codepostal']);
            $this->setPays($data['pays']);
        }

        /* ======================== */
        /*   method hydrate         */
        /* ======================== */
/*
        public function hydrate($data)
        {
            foreach ($data as $key => $value)
            {
                $method = 'set' . ucfirst($key);
                if (method_exists($this, $method))
                {
                    $this->$method($value); // $this->setId($id) par ex.
                }
            }
        } */

        /* ======================== */
        /*   getters                */
        /* ======================== */

        function getId()
        {
            return $this->id;
        }

        function getRue()
        {
            return $this->rue;
        }

        function getLocalite()
        {
            return $this->localite;
        }

        function getCodePostal()
        {
            return $this->codepostal;
        }

        function getPays()
        {
            return $this->pays;
        }

        /* ======================== */
        /*   setters                */
        /* ======================== */

        function setId($id)
        {
            $this->id = $id;
        }

        function setRue($rue)
        {
            $this->rue = $rue;
        }

        function setLocalite($localite)
        {
            $this->localite = $localite;
        }

        function setCodePostal($codepostal)
        {
            $this->codepostal = $codepostal;
        }

        function setPays($pays)
        {
            return $this->pays = $pays;
        }

        /* ======================== */
        /*  methode afficher        */
        /* ======================== */

        function afficher()
        {
            $this->getId();
            $this->getRue();
            $this->getLocalite();
            $this->getCodePostal();
            $this->getPays();
        }

    }
    