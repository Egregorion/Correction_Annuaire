<?php include 'partials/header.php';?>

<div class="container">
    <h1 class="text-center"><?php echo $hobby['hobby']; ?></h1>
    <div class="row">
        <?php foreach($sharedHobby as $stagiaire){ ?>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-title">
                    <span><?php echo $stagiaire['lastname'] . " " . $stagiaire['firstname']?></span>
                </div>
                <div class="card-body">
                    <a href="single.php?id=<?php echo $stagiaire['id'];?>">Voir le profil</a>
                </div>
            </div>
        </div>
        <?php } ?> 
    </div>
</div>

<?php include 'partials/footer.php';?>