<?php
//Making connection with Sql-Server named prac_crud using PDO
$server = "REBE-COMPUTER\MSSQLSERVER19";
$dbname = "prcrud";
$user = "sa";
$passcode = "rebe123$$$";
$spider = true;

//PDO Connection

try{
    $conn = new PDO("sqlsrv:server={$server}; Database=$dbname", $user, $passcode);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "Cool spiderR";

}catch(PDOException $e){
    echo "that one is our " . $e->getMessage();
}
?>