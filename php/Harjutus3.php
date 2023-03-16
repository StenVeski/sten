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
    <h1>Harjutus 3</h1>

  <?php 

    #Harjutus 3, Sten Veski, 24.01.2023

    //lisab vormist saadud andmed muutujasse
	$k1 = $_GET['k1'];
	$k2 = $_GET['k2'];
	$korgus = $_GET['korgus'];
    $romb = $_GET['romb'];

    $pindala = $k1 + $k2 /2 * $korgus;
    $umber = 4 * $romb;
	
    $vormindatud = sprintf('Trapetsi pindala: %0.1f cm2<br>', $pindala);
    echo $vormindatud;
    $vormindatud1 = sprintf('Rombi ümbermõõt: %0.1f cm<br>', $umber);
    echo $vormindatud1;
	
	

 

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>