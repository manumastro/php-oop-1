<?php

require_once __DIR__ . './class/Movie.php';


?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
</head>
<body>
  

  <ul>
    <li>nome: <?php echo $matrix->name ?></li>
    <li>anno: <?php echo $matrix->year ?></li>
    <li>voto: <?php echo $matrix->vote ?></li>
    <li>durata: <?php echo $matrix->duration ?></li>
    <li><?php echo $matrix->getAllData() ?></li>
  </ul>


  <ul>
    <li>nome: <?php echo $jurassicPark->name ?></li>
    <li>anno: <?php echo $jurassicPark->year ?></li>
    <li>voto: <?php echo $jurassicPark->vote ?></li>
    <li>durata: <?php echo $jurassicPark->duration ?></li>
    <li><?php echo $jurassicPark->getAllData() ?></li>

  </ul>

  

</body>
</html>