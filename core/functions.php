<?php
/**felhasználók */
function selectNameAll(){
    require "core/config.php";
        $sql = "SELECT * FROM pincerek";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo '<select type="text" name="first_name" id="firstName">';
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option>" .$row['nev'] . "</option>";
                    }
                }
        echo '</select>';
}

    function selectNameDolgozik(){
        require "core/config.php";
        $sql = "SELECT * FROM pincerek WHERE dolgozik = 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo '<select type="text" name="first_name" id="firstName">';
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option>" .$row['nev'] . "</option>";
                    }
                }
        echo '</select>';
    }

    function selectNameNemDolgozik(){
        require "core/config.php";
        $sql = "SELECT * FROM pincerek WHERE dolgozik = 0;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo '<select type="text" name="first_name" id="firstName">';
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option>" .$row['nev'] . "</option>";
                    }
                }
        echo '</select>';
    }
        /**ételek  */
        function listFood(){
            require "core/config.php";
            $sql = "SELECT * FROM termekek;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            echo '<table class="table table-bordered text-center">';
                if ($resultCheck > 0) {
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td>" .$row['id'] . "</td>";
                            echo "<td>" .$row['megnevezes'] . "</td>";
                            echo "<td>" .$row['kategoria'] . "</td>";
                            echo "<td>" .$row['ertek'] . "</td>";
                            echo "</tr>";
                        }
                    }
            echo '</table>';
        }
        function addFoodKategoria(){
            require "core/config.php";
            $sql = "SELECT DISTINCT kategoria FROM termekek";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            echo '<select type="text" name="kategoria" id="kategoria">';
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option>" .$row['kategoria'] . "</option>";
                    }
                }
            echo '</select>';
        }
        /** */

    function selectAsztal(){
        include "core/config.php";
        $sql = "SELECT * FROM asztalok";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        echo '<select style="float:right;" type="text" name="asztal">';
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<option>" .$row['asztal_nev'] . "</option>";
                    }
                }
        echo '</select>';
    }

    function pincerAsztalseged(){
        include "core/config.php";
        $sql = "SELECT asztal FROM a_p_seged;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo $row['asztal'] ."<br>";
                    }
                }
    }

    
