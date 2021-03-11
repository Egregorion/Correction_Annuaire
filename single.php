<?php 

require 'functions.php';
include 'header.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$infos = getInternInfos($id);
$brand = getInternComputer($id);
$hobbies = getInternHobbies($id);
//var_dump($hobbies);

?>

<h1><?php echo $infos['lastname'] . " " . $infos['firstname'];?></h1> 
<h3><?php echo $brand['brand']; ?></h3>
<ul>
    <?php foreach($hobbies as $hobby){ ?>
        <li><?php echo $hobby['hobby']; ?></li>
    <?php } ?>
</ul>

<?php
include 'footer.php';