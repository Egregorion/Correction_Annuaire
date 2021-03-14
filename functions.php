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

function getComputersList() {
    $connection = db_connect();
    $query = 'SELECT * FROM computers';
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results; 
}

function getHobbiesList() {
    $connection = db_connect();
    $query = 'SELECT * FROM hobbies';
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
    $query = 'SELECT computers.id, brand FROM computers
    INNER JOIN interns ON computers.id = interns.computers_id
    WHERE interns.id = ' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getInternHobbies($id){
    $connection = db_connect();
    $query = 'SELECT hobbies.id, hobby FROM interns
    INNER JOIN intern_hobby ON intern_hobby.intern_id = interns.id
    INNER JOIN hobbies ON intern_hobby.hobby_id = hobbies.id
    WHERE interns.id = ' . $id;
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getHobbyName($id){
    $connection = db_connect();
    $query = 'SELECT hobby FROM hobbies
    WHERE hobbies.id = '. $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getSharedHobby($id) {
    $connection = db_connect();
    $query = 'SELECT interns.id, lastname, firstname
    FROM interns 
    INNER JOIN intern_hobby ON interns.id = intern_hobby.intern_id
    INNER JOIN hobbies ON intern_hobby.hobby_id = hobbies.id
    WHERE hobbies.id =' . $id;
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function getComputerBrand($id) {
    $connection = db_connect();
    $query = 'SELECT * FROM computers
    WHERE computers.id =' . $id;
    $stmt = $connection->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getSharedComputer($id) {
    $connection = db_connect();
    $query = 'SELECT interns.id, lastname, firstname
    FROM interns 
    INNER JOIN computers ON interns.computers_id = computers.id
    WHERE computers.id =' . $id;
    $stmt = $connection->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function addIntern($lastname, $firstname, $birthday, $computerId, $gender) {
    $connection = db_connect();
    $query = "INSERT INTO interns(id, lastname, firstname, birthday, computers_id, gender)
    VALUES (null, '$lastname', '$firstname', '$birthday', '$computerId', '$gender')";
    $connection->query($query);  
}   

function getLastIntern($lastname, $firstname, $birthday ){
    $connection = db_connect();
    $query = "SELECT id FROM interns
    WHERE lastname = '$lastname' AND firstname = '$firstname' AND birthday = '$birthday'";
    $stmt = $connection->query($query);
    $lastIntern = $stmt->fetch(PDO::FETCH_ASSOC);
    return $lastIntern['id'];
}

function setInternHobbies($id_hobby, $id_intern){
    $connection = db_connect();
    $query = "INSERT INTO intern_hobby(id, hobby_id, intern_id)
    VALUES (null, '$id_hobby', '$id_intern')";
    $connection->query($query);
}


