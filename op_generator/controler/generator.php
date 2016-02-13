<?php

    require_once(dirname(__FILE__) . '/OperationsGenerator.php');
    require_once(dirname(__FILE__) . '/OperationSolver.php');
    require_once(dirname(__FILE__) . '/generator.php');
            const NBOP = 12;
    $operators = ['+', '-', '*', '/'];
    //   $nbrOp = $this->$generator;  // nombre d'opérations à générer

    for ($i = 0; $i < NBOP; $i++)
    {
        $opd1[$i] = rand(1, 3); // randomize the first operand
        $optr[$i] = $operators[array_rand($operators, 1)];
        $opd2[$i] = rand(1, 4); // radomize the second operand

        $operations = "$opd1[$i]" . "$optr[$i]" . "$opd2[$i]"; //concatenate the exp in a single string
        
        /*================================*/
        /*      instanciation             */
        /*================================*/

        $operationGen[$i] = new OperationsGenerator($optr[$i], $operations);
        $opSolver[$i]     = new OperationSolver($operations);
        
        /*================================*/
        /* calls of the 'display' methods */
        /* but they do nothing here 'cause the display happens from the OperationSolver object.
        /*================================*/
        
        $operationGen[$i]->afficherOperator($optr[$i]);

        $operationGen[$i]->afficherResultat($operations);
    }
    