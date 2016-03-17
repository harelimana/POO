<?php

    use axxa\Documents\PDO\Model\Vehicule;

require_once(__DIR__ . "/vendor/autoload.php");

    /* $faker = faker\Factory; */

    try
    {
        $connexion = new PDO('mysql:host=127.0.0.1;dbname=poo_php', 'root', '');
        $statement = $connexion->query('SELECT * FROM vehicules');
        while ($data      = $statement->fetch(PDO::FETCH_ASSOC))
        {
           echo "<strong>", $data["id"], "</strong>"," ", $data["marque"], " ", $data["modele"], " ", $data["vitesse"], " ","</br>"; 
         
        }
    }
    catch (\PDOException $e)
    {
        echo "erreur";
        echo $e->getMessage();
    }
     
    
    