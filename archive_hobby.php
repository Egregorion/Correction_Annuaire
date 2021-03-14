<?php 

require 'functions.php';

if(!empty($_GET['id'])){     
    $id = $_GET['id'];
}

$sharedHobby = getSharedHobby($id);
$hobby = getHobbyName($id);

require 'views/hobbyView.php';
