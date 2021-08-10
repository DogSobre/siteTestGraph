<?php


$dbhost     = "localhost";
$dbname     = "siteTestGraph";
$dbusername = "root";
$dbpassword = "root";
$dboption   = array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Connection to database :
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword, $dboption);
}
catch(PDOException $e)
{
    echo "Connection failed: ".$e->getMessage();
}


// $sql = "INSERT INTO test (pseudo)
// VALUES ('lol')";

// if ($db->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $db->error;
// }

// $db->close();
