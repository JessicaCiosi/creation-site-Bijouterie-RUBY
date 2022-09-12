<?php

class Model {

    const SERVER = "localhost";
    const USER = "id15964592_jessicabr";
    const PASSWORD = "Jessica04082001*";
    const BASE ="id15964592_bijouterieruby";

    private $connexion;
    private $requete;

    public function __construct(){

        try 
        {

            $this->connexion = new PDO("mysql:host=" . self::SERVER . ";dbname=" . self::BASE, self::USER, self::PASSWORD);

        } 
        catch (Exception $e) 
        {

            die('Erreur : ' . $e->getMessage());

        }
            

    }

    public function getList(){

        $requete = "SELECT * FROM counter_table ";
        $resultat = $this->connexion->query($requete);
        
        $list = array();

        if($resultat){

        $list = $resultat->fetchAll(PDO::FETCH_NUM);

        }

        return $list;

    }

    private function executeTryCatch(){
        try
        {

        $this->requete->execute();

        }
        catch (Exception $e)
        {

        die('Erreur : ' . $e->getMessage());

        }
        
        $this->requete->closeCursor();

    }
}

?>