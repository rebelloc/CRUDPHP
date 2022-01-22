<?php
//  include 'conn.php'; 

 if($_POST['name']){
  $nm = $_POST['name'];
  $lsname = $_POST['lsname'];
  $pass = $_POST['pass'];

  //  $query = "INSERT INTO users(name, lastname, passcode)VALUES('$nm', '$lsname', '$pass')"; 
  //  $stm = $conn->prepare($query);
  //  $stm = $stm->execute();
   
  if($nm){
    $rs['msn'] = "What´s up man";
  }
  echo json_encode($rs);
 }
?>