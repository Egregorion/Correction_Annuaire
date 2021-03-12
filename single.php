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

<div class="container">
    <div class="col s12 m8 mr-auto">
      <div class="card">
        <div class="card-title">
            <?php echo $infos['lastname'] . " " . $infos['firstname'];?>
            <a class="btn-floating btn-large waves-effect waves-light red right-align"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
        <a href="archive_computer.php?id= <?php echo $brand['id']; ?>"><span class="is-primary"><?php echo $brand['brand']; ?></span>
            <ul>
                <?php foreach($hobbies as $hobby){ ?>
                    <li><a href="archive_hobby.php?id=<?php echo $hobby['id']; ?>"><?php echo $hobby['hobby']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
      </div>
    </div>
  </div>
            
<?php
include 'footer.php';