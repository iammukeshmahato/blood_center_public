<?php
session_start();
include('conn.php');
?>
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
    .search{

    }
    nav {
      height: 80px;
/*      min-height: 80px;*/
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);

      background-color: rgba(0, 0, 0, 0.3);
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
    .container .donor{
      width: 100%;
      margin-top: 20px;
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.25);
      border-radius: 10px;
/*      border: 2px rgba(193, 193, 193, 0.95);*/
    }
   /* container.col{
      border: 2px solid red;
    }
    .container .col{
      border: 2px solid black;
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);
    }*/
    .container img{
      height: 100px;
      width: 100px;
      border-radius: 50%;
      object-fit: cover;
      float: right;
    }
    .container .btn{
      margin-top: 50px;
      float: right;
    }
    .donorsearch{
      margin-top: 5px;
      border:2px rgba(233, 233, 233, 0.3);
      box-shadow: 2px 2px 2px 2px rgba(162, 162, 162, 0.11);
    }
     </style>
</head>
<body>

          
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
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
          </ul>
             <div class="profile">
        <img src="user-img/niru.jpg" class="float-end " alt="...">
        </div>
          
      </div>
    </div>
  </nav>

   <?php

                $donor_sql = "SELECT  * from donors_information";
                    $res = mysqli_query($conn, $donor_sql);
                     $total_donors =$_SESSION['id'];

                        if (mysqli_num_rows($res) > 0) {
      while ($data = mysqli_fetch_assoc($res)) {
    ?>

<div class="container">
  <div class="row">
    <div class="col-10">
      <!-- <div class="container donor"> -->
        <div class="row donor">
          <div class="col-2">
            <img src="user-img/niru.jpg" class="img-thumbnail" alt="">
          </div>
          <div class="col-5">
            <h5 class="card-title"><?php echo $data['name']; ?></h5>
            <p>(<?php echo $data['blood_group']; ?>)</p>
            <p><?php echo $data['contact_number']; ?></p>
            <p><?php echo $data['address']; ?></p>
          </div>
          <div class="col-4">
            <a href="user_profile.php" class="btn btn-primary">View Details</a>
          </div>
        </div>
      </div>
    <!-- </div> -->
        <?php 
          }
          }
        ?>
    <div class="col donorsearch">
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-12">
          <label for="validationCustom01" class="form-label">Address</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="Kathmandu" required>
            <div class="valid-feedback">
              Address
            </div>
        </div>
        <div class="col-md-12">
          <label for="validationCustom04" class="form-label">Blood Group</label>
          <select class="form-select" id="validationCustom04" required>
            <!-- <option selected disabled value="">Choose...</option> -->
            <option>A+</option>
            <option>A-</option>
            <option>AB+</option>
            <option>AB-</option>
            <option>B+</option>
            <option>B-</option>
            <option>O+</option>
            <option>O-</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
           </div>
        </div>
        <div class="col-md-8 mb-2">
    <button class="btn btn-primary form-control" type="submit">Search</button>
  </div>
    </form>
    </div>
  </div>
</div>



  	<!-- <div class="container"> -->

      
            <?php

      //           $donor_sql = "SELECT  * from donors_information";
      //               $res = mysqli_query($conn, $donor_sql);
      //                   if (mysqli_num_rows($res) > 0) {
      // while ($data = mysqli_fetch_assoc($res)) {
    
      // }

            ?>
          

</body>
</html>