<?php 

require 'functions.php';
include 'header.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$sharedHobby = getSharedHobby($id);
var_dump($sharedHobby);

include 'footer.php';