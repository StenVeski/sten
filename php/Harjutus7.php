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
    <h1>Harjutus 7</h1>
    <h2>Tervitus</h2>
  <?php 
   #Harjutus 7, Sten Veski, 01.02.2023

    function tere(){
        return "TERE TILL!";
    }
    echo tere();

?>
  <h2>Liitu uudiskirjaga</h2>
<div class="container">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="valid1">Email*</label>
              <input type="text" class="form-control" id="valid1" placeholder="till@gmail.com" required>
              <div class="valid-feedback">Korras</div>
              <div class="invalid-feedback">Palun täida!</div>      
            <input type="submit" value="Saada">
            </form>
            </div>
        </div>
    </div>
  

  <h2>Kasutajanimi ja email</h2>
  <form action="harjutus7.php" method="get">
  <input type="text" name="p1">
  <input type="submit" value="Saada">
  </form>   
  <?php
  $knimi = $_GET['p1'];
  $t = strtolower($knimi);
  print_r($t."@hkhk.edu.ee");
  $SevenDigitRandomNumber = rand(1000000,9999999);
  echo "<br> Kood: ". "$SevenDigitRandomNumber <br>";
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo "Turvaline kood: ".password_generate(7)."\n";

?>
  <h2>Arvud</h2>
  <form action="harjutus7.php" method="get">
  Arv 1<input type="text" name="o1"><br>
  Arv 2<input type="text" name="l1"><br>
  Samm<input type="text" name="s1">
  <input type="submit" value="Saada">
  </form>   
  <?php
  if (!empty($_GET["o1"])&& !empty($_GET["l1"])){
  $number = $_GET['o1'];
  $number1 = $_GET['l1'];
  $samm = $_GET['s1'];
  foreach (range($number, $number1, $samm) as $number) {
    echo "$number,";
}
}
 
?>
<h2>Ristküliku pindala</h2>
<form action="harjutus7.php" method="get">
  Külg 1<input type="text" name="k11"><br>
  Külg 2<input type="text" name="k22">
  <input type="submit" value="Saada">
  </form>   
<?php
if (!empty($_GET["k11"])&& !empty($_GET["k22"])){
function pindala(){
  $k1 = $_GET['k11'];
  $k2 = $_GET['k22'];
  $pind = $k1*$k2;
  return $pind;
}
echo "Pindala: ",pindala();
}
?>
<h2>Isikukood</h2>
<form action="harjutus7.php" method="get">
  Isikukood<input type="text" name="isik"><br>
  <input type="submit" value="Saada">
  </form>   
<?php
if (!empty($_GET["isik"])){






}
?>

        


<script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>



</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>