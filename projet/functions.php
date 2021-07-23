<?php
include 'bdd.php';

class functions{

    function requeteSelect(){

        $continentArea = $_POST['continent_area'];

            //Prepare the SQL request :
        $sql    = "INSERT INTO `test` (`pseudo`) VALUES ('pseudo');";
        $req    = PDO::query($sql) or die("Error ! <br/>".$sql."<br/>".PDO::errorInfo());
        $data   = PDOStatement::fetch($req);

        echo $req;
    
        PDOStatement::closeCursor($req);
        $db = null; // Close database connection.
        
        function requeteInsert(){
            
            $pseudo = $_POST['pseudo'];

            $sql = 'INSERT INTO test VALUES("'.$pseudo.'")';
        }
    }

}