<?php 

require 'functions.php';
include 'header.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$sharedComputer = getSharedComputer($id);
var_dump($sharedComputer);

include 'footer.php';