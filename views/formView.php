<?php include 'partials/header.php';?>

<div class="container">
    <h1 class=text-center>Add new intern</h1>
    <form action="traitement.php" method="post">
        <div class="row">
            <div class="col-6 mb-2">
                <label for="lastname">Last Name</label>
                <input class="form-control" id="lastname" type="text" class="validate" name="lastname">
            </div>
            <div class="col-6 mb-2">
                <label for="firstname">First Name</label>
                <input class="form-control" id="firstname" type="text" class="validate" name="firstname">
            </div>
            <div class="col-6 mb-2">
                <label for="birthday">Birthday</label>
                <input class="form-control" type="date" name="birthday" id="birthday">       
            </div>
            <div class="col-6 mb-2">
                <label>Computer brand</label>
                <select class="form-control" name="computer" id="computer">
                <?php 
                foreach($computerList as $computer){ ?>
                    <option value="<?php echo $computer['id'];?>"><?php echo $computer['brand'];?></option>
                <?php } ?>    
                </select>
            </div>
            <div class="col-6 mb-2">
                <h6>Hobbies</h6>
                <?php 
                foreach($hobbiesList as $hobby){ ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobby_<?php echo $hobby['hobby']; ?>" value="<?php echo $hobby['id'];?>" id="defaultCheck<?php echo $hobby['id'];?>">
                        <label class="form-check-label" for="defaultCheck<?php echo $hobby['id'];?>">
                            <?php echo $hobby['hobby']; ?>
                        </label>
                    </div>
                <?php } ?>
            </div>
        
            <div class="col-6 mb-2">
                <h6>Gender</h6>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="M">
                    <label class="form-check-label" for="male">
                        Man
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                    <label class="form-check-label" for="female">
                        Woman
                    </label>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <input class="btn btn-primary" type="submit">
        </div>
    </form>
</div>

<?php include 'partials/footer.php';?>