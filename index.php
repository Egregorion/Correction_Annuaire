<?php 
include 'functions.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annuaire</title>
</head>
<body>

    <?php 
        $stagiaires = getInternsList();
        //var_dump($stagiaires);
        
        foreach($stagiaires as $stagiaire){ 
            $internComputer = getInternComputer($stagiaire['id']);?>
            <h2><?php echo $stagiaire['lastname'] . " " . $stagiaire['firstname']?></h2>
            <p><?php echo $internComputer['brand'] ?></p>
        <?php } ?>
    
</body>
</html>