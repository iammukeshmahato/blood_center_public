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
      height: 80px;
/*      min-height: 80px;*/
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);

      background-color: rgba(0, 0, 0, 0.3);
/*      overflow: hidden;*/
      position: fixed;
      top: 0;
      
    }

    nav .collapse {
      margin-left: 25px;
      font-size: 19px;
    }
    .profile img{
      height: 40px;
      margin: 5px;
      width: 40px;
      object-fit: cover;
      border-radius: 50%;
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
/*      background: red;*/
      width: 90%;
      align-items: center;
      margin: 50px;
      border: 0px;
    }

    .card-header {
      font-size: 35px;
      text-align: center;
    }

    .card-body {
      text-align: justify;
      width: 90%;
    }
    .card img{
      height: 800px;
      width: 700px;
      border: 0px;
      align-items: center;
    }
    .container{
      width: 100%;
      background: black;
      color: white;
      margin: 0px;
      padding: 0px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light" id="navbar_top">
    <div class="container-fluid">

      <!-- <a class="navbar-brand" href="#">  -->
      <figure class="figure">
        <a href="index.php">
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
            <a class="nav-link" href="#activities">Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#whocandonate">Who can donate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
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
        </ul>
        <div class="profile">
        <img src="user-img/niru.jpg" class="float-end " alt="...">
        </div>
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
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
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
    <div class="card-header" id="activities">
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
    <div class="card">
    <div class="card-header" id="whocandonate">
      Who can donate?
    </div>
    <div class="card-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <br><br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      <img src="user-img/blood.png" class="rounded mx-auto d-block" alt="...">
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="contact">
      Contact
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
  <div class="container footer">
    <div class="row">
      <div class="col">
        <h3>Blood Center</h3>
        <h5>Overview</h5>
        <h5>Join as a team</h5>
      </div>
      <div class="col">
        <h3>Follow Us</h3>
      </div>
      <div class="col">
        Column
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>