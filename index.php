<?php 
    $title = "DFF - home";
    require_once "includes/header.php"; 

    /*$sql = "SELECT * FROM a_p_seged;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);*/
?>

<h3 class="text-center alcim">Enni vagy nem enni!</h3>
<table class="table table-bordered text-center">
    <tr>
        <?php  
            $testObj = new Test();
            echo $testObj -> getdolgozik();
        ?>
    </tr>
</table>




<?php require_once "includes/footer.php"; ?>

