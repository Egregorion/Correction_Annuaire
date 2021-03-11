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

function getInternsList() {
    $connection = db_connect();
    $query = 'SELECT * FROM interns';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getInternInfos($id){
    $connection = db_connect();
    $query = 'SELECT id, lastname, firstname, birthday, gender
    FROM interns
    WHERE interns.id = ' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getInternComputer($id){
    $connection = db_connect();
    $query = 'SELECT brand FROM computers
    INNER JOIN interns ON computers.id = interns.computers_id
    WHERE interns.id =' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getInternHobbies($id){
    $connection = db_connect();
    $query = 'SELECT hobby FROM interns
    INNER JOIN intern_hobby ON intern_hobby.intern_id = interns.id
    INNER JOIN hobbies ON intern_hobby.hobby_id = hobbies.id
    WHERE interns.id = ' . $id;
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}


