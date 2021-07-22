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
