<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      background: rgba(249, 248, 248, 0.9);
    }

    .figure img {
      margin-top: 100px;
    }

    .col {
      margin-top: 20px;
      /*      border: 2px solid black;*/
      box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);
      max-width: 400px;
    }

    input {
      outline: none;
    }
  </style>
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <figure class="figure">
          <img src="user-img/log.png" class="figure-img img-fluid rounded" alt="...">
        </figure>
      </div>
      <div class="col">
        <form method="post" action="store-user.php">

          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fname" placeholder="FirstName">
            <label>First Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="lname" placeholder="LastName">
            <label>Last Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
            <label>Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="phone_number" placeholder="Number">
            <label>Phone Number</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <label>Password</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <label>Confirm Password</label>
          </div>
          <div class="input-group mb-3">
            <input type="file" class="form-control" name="profile_picture" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
          </div>
          <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label" >Remember Me</label>
  </div> -->
          <input type="submit" name="submit" value="S i g n  U p" class="btn btn-outline-secondary btn-lg mb-3">
        </form>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>