<?php 

require 'functions.php';
include 'header.php';

if(!empty($_GET['id'])){
    $id = $_GET['id'];
}

$infos = getInternInfos($id);
$brand = getInternComputer($id);
$hobbies = getInternHobbies($id);
?>
<div class="nes-container with-title is-centered">
    <h1 class="title"><?php echo $infos['lastname'] . " " . $infos['firstname'];?></h1> 
    <h3><a class="nes-badge" href="archive_computer.php?id= <?php echo $brand['id']; ?>"><span class="is-primary"><?php echo $brand['brand']; ?></span></a></h3>
    <ul>
        <?php foreach($hobbies as $hobby){ ?>
            <li><a class="nes-btn" href="archive_hobby.php?id=<?php echo $hobby['id']; ?>"><?php echo $hobby['hobby']; ?></a></li>
        <?php } ?>
    </ul>
</div>
<?php
include 'footer.php';