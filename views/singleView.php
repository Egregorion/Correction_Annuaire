<?php include 'partials/header.php'; ?>

<div class="container">
    <h1 class="text-center"><?php echo $infos['lastname'] . " " . $infos['firstname'];?></h1>
    
    <div class="row text-center">

        <div class="col-6 text-center">
            <div id="computer">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-laptop-code fa-4x"></i>
                    </div>
                    <h2><a href="archive_computer.php?id= <?php echo $brand['id']; ?>"><?php echo $brand['brand']; ?></a></h2>
                </div>   
            </div>
            <div id="birthdate">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-birthday-cake fa-4x"></i>
                    </div>
                    <h3><?php echo $infos['birthday'];?></h3>
                </div>
            </div>
            <div id="hobbies">
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-heart fa-4x"></i>
                    </div>
                    <ul class=list-unstyled>
                        <?php foreach($hobbies as $hobby){ ?>
                            <li><a href="archive_hobby.php?id=<?php echo $hobby['id']; ?>"><?php echo $hobby['hobby']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-6">
            <?php if($infos['gender'] === 'M'){ ?>
                <i class="fas fa-mars fa-10x"></i>
            <?php }else if($infos['gender'] === 'F'){ ?>
                <i class="fas fa-venus fa-10x"></i>
            <?php } ?>
        </div>
        
    </div>
    
    
</div>
         
<?php include 'partials/footer.php'; ?>