<!doctype html>
<html lang="en">
<title>Sten Veski</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="#">
<body>
    <div class="container">
<?php
        if (isset($_GET ["admin"] )&&isset($_GET ["parool"])) {
            $cookie_name = $_GET ["admin"];
            $cookie_value = $_GET ["parool"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1
            header('Location: admin.php');
             }
        
            
            
        
        
    ?>

    
   
   </div>
   <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="KT1.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="KT1.php"></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="templates.php">Templates</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                  </li>
                </ul>
                    <i class="fa-brands fa-instagram " style="margin-right: 15px;"></i>
                    <i class="fa-brands fa-twitter" style="margin-right: 15px;"></i>
                    <i class="fa-brands fa-linkedin" style="margin-right: 15px;"></i>
                <form class="d-flex" role="search">
                </form>
              </div>
            </div>
          </nav>
    <div class="container">
        <div class="center">
            <h1><strong>LOGI SISSE<strong></h1>
            <form>
                <div class="form-outline mb-4">
                <input type="text" name="admin" id="username" class="form-control"
                placeholder="Username">
            </div>
            <div class="form-outline mb-4">
            <input type="password" name="parool" id="password" class="form-control"
            placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login">
            </div>
            </form>
            </div>
            </div>
</body>