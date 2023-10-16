<?php

include_once 'setting.php';


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected successfully.";
} 
catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>