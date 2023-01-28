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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    .figure img {
      height: 100px;
      width: 100px;
      margin-top: 12px;
    }

    nav {
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);
      background-color: rgba(0, 0, 0, 0.3);
    }

    nav .collapse {
      margin-left: 25px;
      font-size: 19px;
    }

    .profile img {
      height: 40px;
      margin: 5px;
      width: 40px;
      object-fit: cover;
      border-radius: 50%;
    }

    .container .donor {
      border: 0.2px solid #C6C6C6;
      border-radius: 5px;
    }

    .container img {
      height: 100px;
      width: 100px;
      border-radius: 50%;
      object-fit: cover;
      float: right;
    }

    .container .btn {
      /*      margin-top: 50px;*/
      float: right;
    }

    .donorsearch {
      border: 2px rgba(233, 233, 233, 0.3);
      box-shadow: 4px 4px 2px rgba(162, 162, 162, 0.11);
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
              Blood
            </a>
            <ul class="dropdown-menu">
              <li><a href="blood.php" class="dropdown-item">Find Donor</a></li>
              <li><a href="donate_form.php" class="dropdown-item">Donate Blood</a></li>
            </ul>
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
        </ul>
        <div class="profile">
          <!-- <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
  Tooltip on bottom
</button> -->

          <a href="edit_profile.php"><img src="user-img/niru.jpg" class="float-end" alt="..."></a>
        </div>
      </div>
    </div>
  </nav>
  <div class="col donorsearch justify-content-center align-items-center mb-2">
    <form class="row g-3 needs-validation" novalidate method="post">
      <div class="col-md-2 mb-4">
        <label for="validationCustom01" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Kathmandu" name="address" required>
        <div class="valid-feedback">
          Address
        </div>
      </div>
      <div class="col-md-2">
        <label for="validationCustom04" class="form-label">Blood Group</label>
        <select class="form-select" id="validationCustom04" name="blood_group" required>
          <option selected value="">SELETCT</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-1">
        <!-- <label></label> -->
        <button class="btn btn-primary form-control mt-5" type="submit" name="search">Search</button>
      </div>
    </form>
  </div>

  <?php
  if (isset($_POST['search'])) {
    $address = $_POST['address'] == "" ? null : $_POST['address'];
    // echo "$address";
    $blood_group = $_POST['blood_group'] == "" ? null : $_POST['blood_group'];
    // echo "$blood_group";
    $search = "";

    if ($address && $blood_group) {
      $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id WHERE blood_group='{$blood_group}' and address like '%$address%' ";
      $search = "<b>$address</b> and blood group <b>$blood_group</b>";
    } else if ($address || $blood_group) {
      if ($address) {
        $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id WHERE address like '%$address%' ";
        $search = "address <b>$address</b>";
      } elseif ($blood_group) {
        $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id WHERE blood_group='{$blood_group}' ";
        $search = "blood group <b>$blood_group</b>";
      } else {
        $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id";
        $search = "<b>$address</b> and blood group <b>$blood_group</b>";
      }
    } else {
      $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id";
      $search = "<b>$address</b> and blood group <b>$blood_group</b>";
    }
    
    // echo "$sql";
    // $res = mysqli_query($conn, $sql);
    
  } else {
    $sql = "SELECT * FROM donors_information left join user on donors_information.donor_id = user.id";
    $search = "<b>$address</b> and blood group <b>$blood_group</b>";
  }
  $res = mysqli_query($conn, $sql);
  if (mysqli_num_rows($res) > 0) {
    // $sn = 1;
    while ($data = mysqli_fetch_assoc($res)) {

  ?>



      <div class="container mb-2 justify-content-center align-items-center">
        <div class="row">
          <div class="col-10">
            <div class="row donor">
              <div class="col-2">
                <img src="user-img/<?php echo $data['profile_pic'] ?>" class="img-thumbnail mx-2 my-2" alt="">
              </div>
              <div class="col-4 mb-2">
                <h4 class="card-title mt-2"><?php echo $data['name']; ?></h4>
                <span>(<?php echo $data['blood_group']; ?>)</span><br>
                <span><?php echo $data['contact_number']; ?></span><br>
                <span><?php echo $data['address']; ?></span>
              </div>
              <div class="col-4 my-4 mx-2">
                <a href="user_profile.php?id=<?php echo $data['donor_id'] ?>" class="btn btn-primary p-2 m-2 text-white shadow rounded-2">View Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- </div> -->

      </div>
  <?php
    }
  }else{
    echo "no record found for $search";
  }
  ?>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>