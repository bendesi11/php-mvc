<?php
class advertisements{
    function getAlladvertisementsWhithUsers() {
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
        $query = "SELECT * FROM `advertisements` INNER JOIN users ON users.id=advertisements.userid";//all elements of the table
        $statment = $db->prepare($query);
        $statment->execute();
        $assignments = $statment->fetchAll();
        $statment->closeCursor();

        return $assignments;
    }
}