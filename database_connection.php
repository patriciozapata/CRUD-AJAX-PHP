<?php


try {
  $connect =  new PDO("mysql:host=localhost;dbname=test1", "root", "");

  //echo "Conectado";

//    foreach($pdo->query('SELECT * FROM  `colores` ')as $fila) {
    // code...
//    print_r($fila);
  //}

} catch (PDOException $e) {

  print"!Error!:".$e->getMessage()."<br/>";
  die();

}

?>
