<?php 

function db_connect(){
    include 'connection.php';
    try 
    {
        $db = new PDO('mysql:host=localhost;dbname=dwwm', $user, $pass);
        return $db;
    } 
    catch(PDOException $e) 
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

function getInterns() {
    $connection = db_connect();
    $query = 'SELECT * FROM interns';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getInternComputer($id){
    $connection = db_connect();
    $query = 'SELECT brand FROM computers
    INNER JOIN interns ON computers.id = interns.computers_id
    WHERE interns.id =' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch();
    return $result;
}
