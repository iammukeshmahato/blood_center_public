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
    .card img {
      height: 400px;
      object-fit: cover;
    }
    .header {
      justify-content: center;
      width: 60%;
      margin-left: 20%;
    }

    .header h1 {
      text-align: center;
    }

    .card {
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
  <div class="card mb-5" style="width:28rem;">

    <?php
    $res = mysqli_query($conn, "SELECT * FROM donors_information  inner join user on donors_information.user = user.id WHERE donors_information.donor_id = '{$_GET['id']}'");
    if (mysqli_num_rows($res) > 0) {
      $data = mysqli_fetch_assoc($res); ?>
      <img src="user-img/<?php echo $data['profile_pic'] ?>" class="img-thumbnail m-2" alt="">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <h5 class="card-title">Donor Name</h5>
            <span class="card-text">Address</span><br>
            <span class="card-text">Contact Number</span><br>
            <span class="card-text">Gender</span> <br>
            <span class="card-text">Weight</span><br>
            <span class="card-text">Blood Group</span><br>
            <span class="card-text">Diseases</span><br>
          </div>
          <div class="col-8">
            <h5 class="card-title"><?php echo $data['name'] ?></h5>
            <span class="card-text"><?php echo $data['address'] ?></span><br>
            <span class="card-text"><?php echo $data['contact_number'] ?></span><br>
            <span class="card-text"><?php echo $data['gender'] ?></span> <br>
            <span class="card-text"><?php echo $data['weight'] ?></span><br>
            <span class="card-text"><?php echo $data['age'] ?></span><br>
            <span class="card-text"><?php echo $data['blood_group'] ?></span><br>
            <span class="card-text"><?php echo $data['diseases'] ?></span><br>
            <a href="#" class="btn btn-primary">Send Request</a>
          </div>
        </div>
      </div>
    <?php } else {
      echo "No record found";
    }
    ?>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>