<?php 

require 'functions.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$infos = getInternInfos($id);
$brand = getInternComputer($id);
$hobbies = getInternHobbies($id);

require 'views/singleView.php';