<?php

include "conn.php";


    $query = "SELECT * FROM users";

    $stm = $conn->prepare($query);
    $stm->execute();

    // foreach ($fila as $r){
    //     echo $r['nombre'];
    //     echo $r['lastname'];
    //     echo $r['passcode'];
    // }
    while($filas = $stm->fetch()){
      echo $filas['nombre'];
    }

?>