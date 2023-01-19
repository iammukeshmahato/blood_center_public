<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood Center</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.img">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .figure img {
      height: 100px;
      width: 100px;
      margin-top: 12px;
    }

    nav {
      /*        height: 80px;*/
      min-height: 80px;
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);

      background-color: rgba(0, 0, 0, 0.3);
    }

    nav .collapse {
      margin-left: 25px;
      font-size: 19px;
    }

    form .d-flex .form-control {
      font-size: 19px;
    }

    .carousel {
      width: 90%;
      border: 1px solid black;
      color: black;
    }

    .carousel h5,
    p {
      color: black;
    }

    .card {
      width: 90%;
      align-items: center;
      border: 0px;
    }

    .card-header {
      font-size: 25px;
    }

    .card-body {
      width: 90%;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

      <!-- <a class="navbar-brand" href="#">  -->
      <figure class="figure">
        <a href="index.html">
         <img src="user-img/blood-center.png" class="figure-img img-fluid rounded">
        </a>
      </figure>
      <!-- </a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Who can donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="signup.php">Sign-Up</a></li>
              <li><a class="dropdown-item" href="login.php">Log-In</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blood
            </a>
            <ul class="dropdown-menu">
              <li><a href="blood.php" class="dropdown-item">Find Donor</a></li>
              <li><a href="donate_form.php" class="dropdown-item">Donate Blood</a></li>
            </ul>
          </li>
          <!--  <li class="nav-item">
            <a class="nav-link disabled">+977-9861697303|+977-9861697304</a>
          </li> -->
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide m-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="user-img/first-slider.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="user-img/first-slider.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="user-img/first-slider.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="card">
    <div class="card-header">
      Our Activities
    </div>
    <div class="card-body">
      Blood central is a platform for providing the blood to the needy. It is specially designed for the certain group
      and organization who are involved to do social work. This is made for the dedicated people working for social
      service. Blood central is the center where both donor and seeker comes to visit. Blood donor can give there
      information to the system and can donote blood if the person meets the criteria for donating blood. And the seeker
      can visit the blood center and get the donor by checking the available donors list provided by the system. The
      main aim of the system is to make easier aviablity of blood in case of emergency . This system leads to saving the
      life of people. The motives of the system is to connect both the needy and the helping hands together .
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>