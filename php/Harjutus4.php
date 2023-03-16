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
    <h1>Harjutus 4</h1>
    <form action="harjutus4.php" method="get">
    Arv 1 <input type="text" name="a1"><br>
    Arv 2 <input type="text" name="a2"><br>
    <input type="submit" value="Saada">
    </form>

  <?php 

    #Harjutus 4, Sten Veski, 24.01.2023
    if (!empty($_GET["a1"])&& !empty($_GET["a2"])){
        $a1 = $_GET['a1'];
        $a2 = $_GET['a2'];

    if ($a2 == 0){
        echo "Nulliga ei saa jagada!!";
    }
        
    
    else{
        $jaga = $a1 / $a2;
        echo "Vastus: $jaga<br>";
    }
        
 
    }

?>
<h3>........................................</h3>
    <form action="harjutus4.php" method="get">
    Vanus 1 <input type="text" name="v1"><br>
    Vanus 2 <input type="text" name="v2"><br>
    <input type="submit" value="Saada">
    </form>

<?php
    if (!empty($_GET["v1"])&& !empty($_GET["v2"])){
        $v1 = $_GET['v1'];
        $v2 = $_GET['v2'];


    if ($v1 == $v2){
        echo "Ühevanused";
    }
        
    else if($v1 >= $v2){
        echo "Esimene kutt on vanem<br>";
    }
        
    else{
        echo "Teine kutt on vanem<br>";
    }

}


?>
<h3>........................................</h3>
<form action="harjutus4.php" method="get">
    Külg 1 <input type="text" name="kulg1"><br>
    Külg 2 <input type="text" name="kulg2"><br>
    <input type="submit" value="Saada">
    </form>

<?php
    if (!empty($_GET["kulg1"])&& !empty($_GET["kulg2"])){
        $kulg1 = $_GET['kulg1'];
        $kulg2 = $_GET['kulg2'];

    if ($kulg1 == $kulg2){
        echo "See on ruut <br>";
        echo "<img src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKkAAACiCAMAAAANzB3eAAAABlBMVEX///8AAABVwtN+AAABhElEQVR4nO3d4Y6CMBAAYfv+L32X83LhjKXaHZbFziSSKIl+Qinww3i7mdnate/ONmza4bTfR4nuyuecduuvy29PU0q6y1A61eWkTzWloOMDqs6E+jNldqT1Jv6zCWZg7azelw5fOCalfCtJs84YC0jbw/PDW2Cbzr/BZFFp3hXYMtLEi9qQNPXqOyLNvUuYlebfXE1IT7oFBK5QklLKp5RPKZ9SPqV8SvmU8inlU8qnlE8pn1I+pXxK+ZTyKeVTyqeUTymfUj6lfEr5lPIp5VPKp5RPKZ9SPqV8SvmU8inlU8qnlE8pn1I+pXxK+ZTyKeVTyqeUTynfR0sv9svYfGxg7ydbQ+M0lRo7ojKpwWM/kRqdpfKo4fk0jTotbf+fHl/8HJVFVcq3kjSL+tHSszrg29u94fYts/Hb36K3vgr1MtK2WXbWV5EOxmkh6WbZWX0RaZ2pd186GsWvfQTyVV/Y+VEpNID29+7D/UjgY8LvkFGdkT6o0Owx6DrSan/wYWa9vgCKEwKK+fu96wAAAABJRU5ErkJggg== />";
    }
        
    
    else{
        echo "See on ristkülik <br>";
        echo "<img src=data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANMAAACUCAMAAAA+hOw/AAAAElBMVEX///8AAAAzMzNmZmbMzMyZmZlJOgviAAABPUlEQVR4nO3czYrCQBAA4fTPvP8rr+NpjcSwEHRrrO8gSHvoMk4QD26bJEl6oyA6a3rLO3ctmxhsYrCJwSYGmxhsYrCJwSYGmxhsYrCJwSYGmxhsYrCJwSYGmxhsYtjv3P16TrDfOer1nOALmjrW++xVVEQezxGem3qLcThH2O2c8ziNPJwjPO7c91tELdY0H7OO5gyPO9d82mudp5o5udZ9L0bebuV9OGd42nn3hW+Jpj/O/yObGGxisInBJgabGGxisInBJgabGGxisInBJgabGGxisInBJgabGGxisInBJgabGGxisInBJgabGGxisInBJobTJqA8aZIkSZIkSd8pp08vca2O6s46fyHImDmrXahRo9a6Tp2RNX7/lw3f/R+UBvE33mPzJN2u1afXuNSIWvBeXqO3pY6TrvMDlucDYL3jGg8AAAAASUVORK5CYII= />";
    }
        
 
    }

?>
<h3>........................................</h3>
<form action="harjutus4.php" method="get">
    Vanus <input type="text" name="vanus"><br>
    <input type="submit" value="Saada">
    </form>

<?php
    if (!empty($_GET["vanus"])&& !empty($_GET["vanus"])){
        $vanus = $_GET['vanus'];

        if($vanus%5 == 0){

            echo "Juubel";
        }
        else{
            echo "Pole juubel";
        }
    }
?>
<h3>........................................</h3>
<form action="harjutus4.php" method="get">
    Punktid <input type="text" name="p1"><br>
    <input type="submit" value="Saada">
    </form>


<?php
    if (!empty($_GET["p1"])){
        $punktid = $_GET['p1'];
        switch ($punktid){
            case ($punktid >= 10):
                echo "SUPER!";
                break;
            case ($punktid >= 5):
                echo "TEHTUD!";
                break;
            case ($punktid <= 5):
                echo "KASIN!";
                break;
        

    }
}
else{
    echo "SISESTA OMA PUNKTID";
}

?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>