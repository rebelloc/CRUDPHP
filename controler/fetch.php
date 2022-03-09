<?php

include "conn.php";

    $query = "SELECT * FROM users";
    $stm = $conn->prepare($query);
    $stm->execute();
    // $stm->fetch();
    if($stm){
        while($filas = $stm->fetch(PDO::FETCH_ASSOC)){
          $return["fila"][] = $filas; 
          }
          echo json_encode($return);
    }
  
?>