<?php 

require 'functions.php';
include 'header.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$sharedHobby = getSharedHobby($id);
$hobby = getHobbyName($id);
?>

<h1 class="align-center"><?php echo $hobby['hobby']; ?></h1>

<div class="row">
    <?php foreach($sharedHobby as $stagiaire){ ?>
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title"><?php echo $stagiaire['lastname'] . " " . $stagiaire['firstname']?></span>
            </div>
            <div class="card-action">
                <a href="single.php?id=<?php echo $stagiaire['id'];?>">Voir le profil</a>
            </div>
        </div>
    </div>
    <?php } ?> 
</div>

<?php
include 'footer.php';
?>