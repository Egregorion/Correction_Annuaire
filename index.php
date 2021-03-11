<?php 
require 'functions.php';
include 'header.php';

    $stagiaires = getInternsList();
    //var_dump($stagiaires);
        
    foreach($stagiaires as $stagiaire){ 
        $internComputer = getInternComputer($stagiaire['id']);?>
        <h2><a href="single.php?id=<?php echo $stagiaire['id'];?>"><?php echo $stagiaire['lastname'] . " " . $stagiaire['firstname']?></a></h2>
        <p><?php echo $internComputer['brand'] ?></p>
    <?php } 

include 'footer.php';
    
