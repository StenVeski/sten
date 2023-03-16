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
    <h1>Harjutus 2</h1>
  <?php 
    #Harjutus 2, Sten Veski, 24.01.2023

    $x = 21;
    $y = 6;

    $liitm = $x + $y;
    $lahut = $x - $y;
    $korrut = $x * $y;
    $jagam = $x / $y;
    $jaak = $x % $y;
    echo "$x + $y = $liitm<br>";
    echo "$x - $y = $lahut<br>";
    echo "$x * $y = $korrut<br>";
    echo "$x / $y = $jagam<br>";
    echo "$x % $y = $jaak<br>";

    $i = 6.36;
    $j = 10;
    $l = 1000;
    $k = $i / $j;
    $g = $i / $l;
    $vormindatud = sprintf('Vastus: %0.3f cm<br>', $k);
    echo $vormindatud;
    $vormindatud1 = sprintf('Vastus: %0.2f m<br>', $g);
    echo $vormindatud1;

    $k1 = 4;
    $k2 = 5;
    $k3 = 6;
    $h = 2;
    $umber = $k1 + $k2 + $k3;
    echo "Ümbermõõt on $umber cm.<br>";
    $pindala = $k1 * $h /2;
    echo "Pindala on $pindala cm2.<br>";

?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>