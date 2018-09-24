<?php
/**
 * Création de la classe clients
 */
class clients{
    //Liste des attributs
    private $connexion;
    public $id;
    public $lastName;
    public $firstName;
    public $birthDate;
    public $card;
    public $cardNumber;
    /**
     * Méthode construct
     */
    public function __construct(){
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try{
            $this->connexion = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'kevin', 'Narguile');
        }
        //Autrement, un message d'erreur est affiché
        catch(Exception $e){
            die($e->getMessage());
        }
    }
    /**
     * Méthode getClientsList pour récupérer le résultat de la requête
     * @return type
     */
    public function getClientsList(){
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients`');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
    }
    public function getClientsListTwenty(){
        $result = array();
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `cients` LIMIT 20');
        if(is_object($PDOResult)){
           $result = $PDOResult->fetchAll(PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function getClientsListID(){
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName` FROM `clients` INNER JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber` WHERE `cards`.`cardTypesId` = "1"');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
   }
    public function getClientsListOrder(){
        $PDOResult = $this->connexion->query('SELECT `lastName` FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY lastName');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
   }
   public function getClientsListAllL(){
        $PDOResult = $this->connexion->query('SELECT `lastName`, `firstName`, `birthDate`, `cardTypesId`, `cards`.`cardNumber` FROM `clients` LEFT JOIN `cards` ON `clients`.`cardNumber` = `cards`.`cardNumber`');
        return $PDOResult->fetchAll(PDO::FETCH_OBJ);
   }
    /**
     * Méthode destruct
     */
    public function __destruct(){
        ;
    }
}
?>