<?php
//Making connection with Sql-Server named prac_crud using PDO
$server = "localhost";
$database = "crudtest";
$user = "rebe";
$passcode = "rebe123$$$";

//PDO Connection

try{
    $conn = new PDO("mysql:host={$server}; dbname=$database", $user, $passcode);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "Cool spiderR";

}catch(PDOException $e){
    echo "that one is our " . $e->getMessage();
}

?>