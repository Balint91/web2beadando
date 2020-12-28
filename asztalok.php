<?php 
    $title = "DFF - asztalok";
    require_once 'includes/header.php'; 

    $sql = "SELECT * FROM pincerek WHERE dolgozik = 1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    $sql2 = "SELECT * FROM asztalok, seged WHERE foglalt = 1;";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);   

?>


    



<h3 class="text-center alcim">Rendelések</h3>

<div class="container">
    <ul class="nav nav-tabs">
        <?php  
            $testObj = new Test();
            echo $testObj -> getAsztalTab();
        ?>
        <li><a data-toggle="tab" href="#addUser">Hozzáadás</a>

        </li>
    </ul>

    
        <?php
        echo '<div class="tab-content">';
            if ($resultCheck2 > 0) {
                $i=0;
                while($row2 = mysqli_fetch_assoc($result2)) {
                    if($i == 0){
                        echo '<div id="'.$row2["asztal_id"].'" class="tab-pane fade in active">';
                        echo 'első';
                        echo $row2["nev"].'<br>';
                       // echo selectAsztal().'<br>';
                       // echo '<button type="submit" name="submit">Hozzáad</button>';
                        echo '</div>';
                        
                    } else {
                        echo '<div id="'.$row2["asztal_id"].'" class="tab-pane fade">';
                        echo "többi";
                        echo $row2["nev"].'<br>';
                      //  echo selectAsztal().'<br>';
                       // echo '<button type="submit" name="submit">Hozzáad</button>';
                        echo '</div>';
                    }
                    $i++;
                }
            }
            echo '<div id="addUser" class="tab-pane fade">';
            echo '<form action="includes/add.asztal.php" method="post">
                    <p>
                        '. selectNameDolgozik().'   
                        <label for="nev">Válassz pincért:</label>
                        
                    </p>
                    <p style="float: right;">
                    '.selectAsztal().'
                        <label for="asztal">Válassz asztalt:</label>
                        
                    </p>
                    <input type="submit" value="Submit">
                </form>';

            //echo '<div action="includes/singup.inc.php" method="POST">';
            //echo  selectName().'<br>';
            //echo selectAsztal().'<br>';
            //echo '<button type="submit" name="submit">Hozzáad</button>';
            //echo '</div>';
            echo "</div>";
        echo '</div>';
        ?>
    
    



<?php require_once "includes/footer.php"; ?>