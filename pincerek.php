<?php 
    $title = "DFF - pincérek";
    require_once "includes/header.php"; 

    
?>

<form class="alert-info wrapper pull-left" action="includes/simplelogin.php" method="post">
    <p class="">
        <label for="firstName">Belépés:</label>
        <?php echo selectNameNemDolgozik(); ?> 
    </p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<form class="alert-info wrapper pull-left" action="includes/simplelogout.php" method="post">
    <p class="form-group">
        <label for="firstName">Kilépés:</label>
        <?php echo selectNameDolgozik() ?>
</p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<form class="alert-info wrapper pull-left" action="includes/new.worker.php" method="post">
    <p class="form-group">
        <label for="firstName">Új dolgozó felvétele:</label>
        <input type="text" name="first_name" id="firstName">
</p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>

<form class="alert-info wrapper pull-left" action="includes/worker.delete.php" method="post">
    <p class="form-group">
        <label for="firstName">Dolgozó törlése:</label>
        <?php echo selectNameAll() ?>
</p>
    <input type="submit" class="btn btn-primary" value="Submit">
</form>



<?php require_once "includes/footer.php"; ?>