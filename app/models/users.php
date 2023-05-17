<?php
class users{

    function getAllUser() {
        include_once('config.php');
        $dsn = 'mysql:host=' . $database['host'] . ';dbname=' . $database['dbname'] . '';
        $username = $database['username'];
        try{
            $db = new PDO($dsn,$username);
        }catch(PDOExeption $e){
            $error = "Database error: ";
            $error .= $e->getMessage();
            exit();
        }
        $query = "SELECT * FROM `users`";//all elements of the table
        $statment = $db->prepare($query);
        $statment->execute();
        
        $assignments = $statment->fetchAll();
        $statment->closeCursor();

        return $assignments;
    }
}