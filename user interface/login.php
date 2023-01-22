<?PHP
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body{
      background: rgba(249, 248, 248, 0.9);
    }
    .figure img{
      margin-top: 100px;
    }
    .col {
       margin-top: 20px;
      max-width: 350px;
box-shadow: 2px 4px 4px rgba(173, 162, 162, 0.50);

    }
    .error-msg{
      display: block;
      font-size: 20px;
      color: black;
      border-radius: 5px;
      background: crimson;

    }

  </style>
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <figure class="figure">
          <img src="user-img/log.png" class="figure-img img-fluid rounded">
        </figure>
      </div>
      <div class="col">
        <form method="post" action="authenticate_user.php">
           <?php
           if(isset($_SESSION['loginerror'])) {
            echo '<span class="error-msg">'.$_SESSION['loginerror'].'</span>';
            unset($_SESSION['loginerror']);
           }
          ?>
          <div class="form-floating mb-3 mt-3">
          <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
          <label>Email address</label>
        </div>
        <div>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <label>Password</label>
        </div>
        <!-- <div class="mb-3 form-check float-right">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label">Remember Me</label>
        </div> -->
        <input type="submit" name="submit" value="L O G   I N" class="btn btn-outline-secondary btn-lg mb-3">
        <br>
        <a href="signup.php" class="card-link">Haven't an account?</a>
      </form>
      </div>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>