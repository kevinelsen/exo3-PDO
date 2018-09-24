<?php
/**
 * Création de la classe clients
 */
class shows{
    //Liste des attributs
    public $title;
    public $performer;
    public $date;
    public $startTime;
    
    /**
     * Méthode construct
     */
    public function __construct(){
        //On test les erreurs avec le try/catch 
        //Si tout est bon, on est connecté à la base de donnée
        try{
            $this->type = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'kevin', 'Narguile');
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
    public function getShows(){
        $PDOResult = $this->type->query('SELECT `title`, `performer`, `date`, `startTime` FROM `shows`');
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
