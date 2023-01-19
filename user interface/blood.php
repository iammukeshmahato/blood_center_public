<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood</title>
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
    .container{
      margin-top: 20px;
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.25);
      border-radius: 10px;
      border: 2px rgba(193, 193, 193, 0.95);
    }
   /* container.col{
      border: 2px solid red;
    }
    .container .col{
      border: 2px solid black;
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);
    }*/
    .container .row{
      border: 2x solid black;
    }
    .container img{
      height: 100px;
      width: 100px;
      border-radius: 50%;
      object-fit: cover;
    }
    .container .btn{
      margin-top: 20px;
      float: right;
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
          <!--  <li class="nav-item">
            <a class="nav-link disabled">+977-9861697303|+977-9861697304</a>
          </li> -->
        </ul>
        <form class="d-flex w-50" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    	</div>
  	</nav>
  	<!-- <div class="container"> -->

      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="user-img/niru.jpg" class="img-thumbnail" alt="">
          </div>
        <div class="col-5">
          <h5 class="card-title">Donor Name</h5>
          <p>Blood Group</p>
          <p>Address</p>
        </div>
        <div class="col-4">
          <a href="donor-profile.php" class="btn btn-primary">View Details</a>
        </div>
        </div>
      </div>

</body>
</html>