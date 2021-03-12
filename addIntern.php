<?php 

require 'functions.php';
$computerList = getComputersList();
//var_dump($computerList);
?>

<div class="row">
    <form class="col s12" action="traitement.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="firstname">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lastname">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
            <input type="date" name="birthday" id="birthday">
            <label for="birthday">Birthday</label>
        </div>
        <div>
            <select name="computer" id="computer">
            <?php 
            foreach($computerList as $computer){ ?>
                <option value="<?php echo $computer['id'];?>"><?php echo $computer['brand'];?></option>
            <?php } ?>    
            </select>
        </div>
      </div>
      <input type="submit">
    </form>
</div>
