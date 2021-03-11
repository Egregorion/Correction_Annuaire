<?php 
require 'functions.php';
include 'header.php';

    $stagiaires = getInternsList();
        
    foreach($stagiaires as $stagiaire){ 
        $internComputer = getInternComputer($stagiaire['id']);?>
        <div class="nes-container is-centered">
            <h2><a  href="single.php?id=<?php echo $stagiaire['id'];?>"><?php echo $stagiaire['lastname'] . " " . $stagiaire['firstname']?></a></h2>
        </div>
    <?php } 

include 'footer.php';
    
