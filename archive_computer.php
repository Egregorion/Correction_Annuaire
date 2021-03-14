<?php 

require 'functions.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}
$sharedComputer = getSharedComputer($id);
$brand = getComputerBrand($id);

require 'views/computerView.php';

