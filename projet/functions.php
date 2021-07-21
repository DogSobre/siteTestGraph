<?php
include 'bdd.php';

class functions{

    function requeteSelect(){

        $continentArea = $_POST['continent_area'];

            //Prepare the SQL request :
        $sql = 'SELECT continent_area FROM graph3 WHERE id=1';
        $req = PDO::query($sql) or die("Error ! <br/>".$sql."<br/>".PDO::errorInfo());
        $data = PDOStatement::fetch($req);
    
        PDOStatement::closeCursor($req);
        $db = null; // Clos
        
        function requeteInsert(){
            
            $pseudo = $_POST['pseudo'];

            $sql = 'INSERT INTO test VALUES("'.$pseudo.'")';
        }
    }

}