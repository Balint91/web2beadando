<?php 
    $title = "DFF - ételek";
    require_once "includes/header.php"; 

echo listFood();
?>

            
<form action="includes/add.food.php" method="post">
    <p>
        <label for="megnevezes">Étel neve:</label>
        <input type="text" name="megnevezes" id="megnevezes">
    </p>
    <p>
        <label for="kategoria">Étel kategória:</label>
        <?php echo addFoodKategoria() ?>
    </p>
    <p>
        <label for="ertek">Ár:</label>
        <input type="text" name="ertek" id="ertek">
    </p>
    <input type="submit" value="Submit">
</form>