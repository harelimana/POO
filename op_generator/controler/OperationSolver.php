<?php

    /* Créez une seconde classe "OperationSolver" avec une méthode statique "solve" ​
      prenant en paramètre un "tableau d’opérations" sous formes de "chaine de caractère" et dont l’objectif est de
      résoudre les opérations et de renvoyer un "tableau associatif".
      exemple : array(‘operation’ => solution) */

    class OperationSolver
    {

        public function __construct($operations)
        {
            $this->solve($operations);
        }

        static function solve($operations)
        {
            echo $operations . " " . " = "; //afficher l'operation
            
            eval('$operations = (' . $operations . ');');  // evaluate the string
            
            echo $operations  . "\n"; //affichage du resultat

            return $operations;
        }

       
    }
    