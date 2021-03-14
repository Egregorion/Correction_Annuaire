<?php
require 'functions.php';

if(isset($_POST)){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthday = $_POST['birthday'];
    $computerId = $_POST['computer'];
    $gender = $_POST['gender'];
    
    if($lastname != "" && $firstname != "" && $birthday != "" && $computerId != "" && $gender != "") {
        addIntern($lastname, $firstname, $birthday, $computerId, $gender);
        $last = getLastIntern($lastname, $firstname, $birthday);
        //var_dump($last);
        foreach($_POST as $key => $value){
            if(strpos($key, 'hobby')!== false){
                var_dump($value);
                setInternHobbies($value, $last);
            }
        }
    }
}

header('location:index.php');
