<?php

class Test extends Dbh {

    public function getDolgozik() {
        $sql = "SELECT pincerek.nev, seged.asztal FROM pincerek INNER JOIN seged ON pincerek.nev = seged.nev; WHERE pincerek.dolgozik=1";
        $statement = $this->connect()->query($sql);
        while($row = $statement->fetch()) {
            echo '<td>'. $row['nev']. ": " .$row['asztal']. '</td>';
        }
    }
    public function getDolgozikSelect() {
        $sql = "SELECT * FROM pincerek WHERE dolgozik = 1";
        $statement = $this->connect()->query($sql);
        $i=0;
        while($row = $statement->fetch()) {
            echo '<option>'.$row['nev'].'</option>';
        }
    }

    public function getAsztalTab() {
        $sql = "SELECT * FROM asztalok WHERE foglalt = 1";
        $statement = $this->connect()->query($sql);
        $i= 0;
        while($row = $statement->fetch()) {
            if($i==0){
                echo '<li class="active"><a data-toggle="tab" href="#'.$row["asztal_id"].'">'.$row["asztal_nev"].'</a></li>';
            } else {
                echo '<li><a data-toggle="tab" href="#'.$row["asztal_id"].'">'.$row["asztal_nev"].'</a></li>';
            }
            $i++;
        }
    }

    public function getAsztalContent() {
        $sql = "SELECT * FROM asztalok WHERE foglalt = 1";
        $statement = $this->connect()->query($sql);
        $i=0;
        while($row = $statement->fetch()) {
            
            if($i==0){
                echo '<div id="'.$row["asztal_id"].'" class="tab-pane fade in active">';
                    
                echo '</div>';
            } else {
                echo '<div id="'.$row["asztal_id"].'" class="tab-pane fade">' 
                .'</div>';
            }
            $i++;
        }
    }

    public function getUsersStatement($name) {
        $sql = "SELECT * FROM pincerek WHERE dolgozik = 1";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$name]);
        $names = $statement->fetchAll();

        foreach ($names as $name) {
            echo $name['nev'] . '<br>';
        }
        
    }

    public function setPincerStatement($name, $erkezes, $tavozas, $dolgozik) {
        $sql = "INSERT INTO pincerek(nev, erkezes, tavozas, dolgozik) VALUES (?, ?, ?, ?)";
        $statement = $this->connect()->prepare($sql);
        $statement->execute([$name, $erkezes, $tavozas, $dolgozik]);
        
    }
}
//feltöltés: $testObj->setPincerStatement("ujgyerek", "", "", "");