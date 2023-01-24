<?php
include('conn.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donor Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .card img{
        height: 400px;
        object-fit: cover;
      }
      .header{
/*        display: flex;*/
        justify-content: center;
        width: 60%;
        margin-left: 20%;
      }
      .header h1{
        text-align: center;
      }
      .card{
        margin-left: 30%;
      }
    </style>
  </head>
  <body>
    <?php
      // $total_donors = $_SESSION['id'];
    ?>
  <div class="header">
    <h1>Donor Details</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="card mb-5" style="width: 28rem;">
    <img src="user-img/niru.jpg" class="img-thumbnail" alt="">
      <div class="card-body">
        <h5 class="card-title">Donor Name</h5>
        <span class="card-text">Blood Group</span ><br>
        <span class="card-text">Address</span ><br>
        <span class="card-text">Contact Number</span> <br>
        <span class="card-text">Active Status:</span ><br>
        <span class="card-text">Blood Report</span ><br>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>