<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
        <style>
            .jumbo{
                height: 700px;
                width: 100%;
                background-color: #666666;
                background-image: url('https://picsum.photos/1752/804');
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
                color: #fff;
                text-align: center;
    
        }
        .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
        }
        i {
        background-color: #eee;
        border-radius: 50%;
        border: 1px grey;
        padding: 10px;
        }
        </style>
</head>

    <body>
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook"></i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="KT1.php">Home</a>
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
                <div class="padding-3">
                    <i class="fa-brands fa-instagram" class="btn btn-outline-secondary"></i>
                    <i class="fa-brands fa-twitter" class="btn btn-outline-secondary"></i>
                    <i class="fa-brands fa-linkedin" class="btn btn-outline-secondary"></i>
                    </div>
                <form class="d-flex" role="search">
                <a href="login.php">Login</a>
                </form>
              </div>
            </div>
          </nav>
            <div class="bg-light">
            <div class="p-5 mb-4 bg-light rounded-0 jumbo">
            <div class="container-fluid py-5">
            <h1 class="display-1 text-dark">Hero title top center</h1>
            <p class="col fs-4 lead">Sub-heading. Header 100% height with bottom align items</p></div>
            <form class="text-center" role="search">
                  <button class="btn bg-primary text-white fs-4" type="submit">Get Started Now></button>
                </form>
            </div>
            <div class="bg-light">
            <div class="container">
            <div class="bg-light">
                <p class="text-primary">B l u e p r i n t s a p p<p>
                <div class="col-8">
                <h2>Bootstrap 4, Fontawesome and bootstwatch - all in one simple to use app interface</h2>
                <p class="lead">Your clients have a hard time imagining how a site is going to work</p>
            </div>  
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body shadow p-3 p-4">
                    <div class="row">
                    <div class="col-2 p-3">
                    <i class="fa-solid fa-droplet text-primary fs-4"></i></div>
                    <div class="col-9">
                      <h5 class="card-title">RESPONSIVE</h5>
                      <h6 class="card-subtitle"></h6>
                      <p class="card-text">Praesent mollis, massa in auctor molestie</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body shadow p-3 p-4">
                    <div class="row">
                    <div class="col-2 p-3">
                    <i class="fa-solid fa-lock text-primary fs-4"></i></div>
                    <div class="col-9">
                      <h5 class="card-title">BOOTSTRAP 4</h5>
                      <h6 class="card-subtitle"></h6>
                      <p class="card-text">Praesent mollis, massa in auctor molestie</p></div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body shadow p-3 p-4">
                    <div class="row">
                    <div class="col-2 p-3">
                    <i class="fa-solid fa-mobile text-primary fs-4"></i></div>
                    <div class="col-9">
                      <h5 class="card-title text">READY TO USE</h5>
                      <h6 class="card-subtitle"></h6>
                      <p class="card-text">Praesent mollis, massa in auctor molestie</p>
                    </div>
                  </div>
                </div>
              </div>
      </div>
        <div class="container">
        <form class="text-center" role="search">
                  <button class="btn bg-primary text-white fs-5 mt-5 mb-5" type="submit">Lorem ipsum</button>
                </form>
                </div>
      </div>
      </div>
      </div>
      <div class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-6">
          <img class="rounded-2 mt-5 shadow" src="failid/pilt.jpg" width="600" height="300"></div>
          <div class="col-sm-5">
          <h2 class="mt-5">Starting up with ready-made templates and blocks</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo.</p>
          <div class="row">
          <div class="card mt-3">
            <div class="card-body shadow p-3">
            <div class="row">
            <div class="col-3">  
            <img class="rounded-1" src="failid/pilt.jpg" width="120" height="80"></div>
            <div class="col-9">
              <p class="card-title text-primary">Lorem ipsum efficitur</p>
              <p class="card-text lead fs-6">Etiam sed iaculis libero, at euismod massain venenatis ligula.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card mb-5 mt-5"style="width:600px;">
                    <div class="card-body shadow p-3">
                      <h6 class="card-subtitle"></h6>
                      <p class="card-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis obcaecati ducimus, recusandae possimus architecto, dolorum est tempora laudantium provident corrupti consequuntur dolore asperiores? Magni quo placeat eos laboriosam. Fuga, deleniti."</p>
                      <div class="row">
                      <div class="col-1">
                      <img class="rounded-circle" src="failid/pilt.jpg" width="50" height="50"></div>
                      <div class="col-10">
                      <h6 class="mt-1 p-2"> Person Name</h6>
                    </div>
                  </div>
                  </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-5 mt-5" style="width:600px;">
                    <div class="card-body shadow p-3">
                    <div class="col-3"></div>
                    <div class="col-12">
                      <h6 class="card-subtitle"></h6>
                      <p class="card-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis obcaecati ducimus, recusandae possimus architecto, dolorum est tempora laudantium provident corrupti consequuntur dolore asperiores? Magni quo placeat eos laboriosam. Fuga, deleniti."</p>
                      <div class="row">
                      <div class="col-1">
                      <img class="rounded-circle" src="failid/pilt.jpg" width="50" height="50"></div>
                      <div class="col-10">
                      <h6 class="mt-1 p-2"> Person Name</h6>
                      </div>
                    </div>
                    </div>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
              

      </div>
      </div>
      <div class="bg-light">
            <div class="container" style="padding-left:300px; padding-right:300px;">
            <div class="bg-light">
            <div class="row">
                <h1 class="text-center mt-5"><strong>Never miss an update</strong></h1>
                <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas, incidunt! Inventore sequi voluptate temporibus doloremque distinctio odio.</p>
                <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="example@gmail.com" aria-label="example" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <a class="btn btn-primary text-light"  type="submit" href="#">Subscribe</a></div>
                </div>
                <div class="row">
                <p class="text-center mb-5"><small>Your email is safe with us. We never share your email address.<small></p>
              
</div>     
</div>
</div>
</div>
   </div>
   </div>
   </div>
   </div>
    





           









    </body>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>