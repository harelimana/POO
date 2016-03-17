<?php

    namespace root\pdo;

    use \PDO\Model\Adresse;
    use \PDO;

    class AdresseManager
    {
        /* ========================== */
        /*     stmts area             */
        /* ========================== */

        private $connexionDb = null;

        public function __construct($connexionDB)
        {
            $this->setConnexionDB($connexionDB);
        }

        /* ========================== */
        /*     connexion area         */
        /* ========================== */
        /*
          public static function connect()
          {
          if (null == self::$connexionDb)
          { */

        function create(Adresse $adr)
        {
            try
            {
                $connexion      = new PDO('mysql:host=127.0.0.1;dbname=poo_adresse', 'root', '');
                $adresseManager = new AdresseManager($connexion);

                function getConnexion()
                {
                    return $this->connexion;
                }

                function setConnexion($connexion)
                {
                    $this->connexion = $connexion;
                }

                // create an object $adresse 
                $adr = new Adresse(array(
                    ':rue' => 'Rue de la Citadell',
                    ':numero' => '125',
                    ':codepostal' => '4000',
                    ':localite' => 'Liege',
                    ':pays' => 'Belgique'
                ));

                $adresseManager->create($adr);

                /* ========================== */
                /*   the CRUD area            */
                /* ========================== */

                $connex = $this->getConnexion();
                $stmt   = $connex->prepare("INSERT INTO adresse SET id=:id, rue=:rue, codepostal=:codepostal, localite:=localite");
                while ($result = $stmt->fetch(PDO::FETCH_BOUND))
                {
                    //  $stmt->bindValue(':id', $adr->getId(), PDO::PARAM_INT);
                    $stmt->bindValue(':rue', $adr->getRue(), PDO::PARAM_STR);
                    $stmt->bindValue(':numero', $adr->getNumero(), PDO::PARAM_INT);
                    $stmt->bindValue(':codepostal', $adr->getCodePostal(), PDO::PARAM_STR);
                    $stmt->bindValue(':localite', $adr->getLocalite(), PDO::PARAM_STR);
                    $stmt->bindValue(':pays', $adr->getPays(), PDO::PARAM_STR);
                }

                $this->Execute();
            }
            
            catch (PDOException $e)
            {
                die($e->getMessage());
            }
            return self::$connexionDb;
        }

        /*    } */

        /* ========================== */
        /*   the update method        */
        /* ========================== */

        function update(Adresse $adr)
        {
            $connex = $this->getConnexion();
            $stmt   = $connex->prepare("UPDATE adresse SET id=:id, rue=:rue, codepostal=:codepostal, localite:=localite");
            while ($result = $stmt->fetch(PDO::FETCH_BOUND))
            {
                //  $stmt->bindValue(':id', $adr->getId(), PDO::PARAM_INT);
                $stmt->bindValue(':rue', $adr->getRue(), PDO::PARAM_STR);
                $stmt->bindValue(':numero', $adr->getNumero(), PDO::PARAM_INT);
                $stmt->bindValue(':codepostal', $adr->getCodePostal(), PDO::PARAM_STR);
                $stmt->bindValue(':localite', $adr->getLocalite(), PDO::PARAM_STR);
                $stmt->bindValue(':pays', $adr->getPays(), PDO::PARAM_STR);
            }

            $this->Execute();
        }

        public function read()
        {
            $adresse  = array();
            $stmt = $this->$db->query('SELECT id , rue , numero, codepostal, localite , pays FROM adresse ORDER BY rue');

            while ($data = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $adresse[] = new Adresse($data);
            }

            return $adresse;
        }

        /* ========================== */
        /*   the delete method        */
        /* ========================== */

        public function delete(Adresse $adr)
        {
            $this->$db->exec('DELETE FROM adresse WHERE id = ' . $adr->geIid());
        }

        public static function disconnect()
        {
            self::$connexionDb = null;
        }

    }
    