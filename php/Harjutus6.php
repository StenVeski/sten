<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Harjutus 6</h1>
    <h2>Genereeri</h2>
  <?php 
   #Harjutus 6, Sten Veski, 31.01.2023

    for ($number = 1; $number <= 100; $number++){
      echo  $number .".\n";
    
    if ($number %10 == 0){
      echo "<br>";
    }
    }
    ?>


    <h2>Rida</h2>
    <?php
      for($veerg=1; $veerg<=5; $veerg++){ 
          echo '*';	
        }
    ?>

    <h2>Rida II</h2>

  <?php
    for($rida=1; $rida<=5; $rida++){ 
      echo '*<br>';
    }

  ?>

    <h2>Ruut</h2>
    <form action="harjutus6.php" method="get">
    <input type="text" name="r1">
    <input type="submit" value="Saada">
    </form>
  <?php
  $number = $_GET['r1'];
  for ($i=0; $i < $number ; $i++) { 
      echo str_repeat("*",$number);
      if($number >= 0){
        echo "<br>";
      }
  } 

  
?>

  <h2>Kahanev</h2>
  <?php
  
  $numb = 0;

  while ($numb < 10){
  $numb += 2;
  echo $numb . "\n <br>";
  }


?>

  <h2>Kolmega jagunevad</h2>
  <?php

  $numb = 0;

  while ($numb < 100){
  $numb += 3;
  echo $numb . "\n.";
  }

?>

  <h2>Massiivid ja tsüklid</h2>

  <?php

$tudrukud = array("Tatjana","Tiina","Roger","Sandra","Liisu","Tross");
$poisid = array("Joosep","Martin","Till","Volli","Lokk","Kummik");

echo $tudrukud[0].", ".$poisid[0]."<br>";
echo $tudrukud[1].", ".$poisid[1]."<br>";
echo $tudrukud[2].", ".$poisid[2]."<br>";
echo $tudrukud[3].", ".$poisid[3]."<br>";
echo $tudrukud[4].", ".$poisid[4]."<br>";
echo $tudrukud[5].", ".$poisid[5]."<br>";



?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>