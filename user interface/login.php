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
        <div class="form-floating mb-3 mt-3">
          <input type="email" class="form-control" placeholder="name@example.com">
          <label>Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <label>Password</label>
        </div>
        <div class="mb-3 form-check float-right">
          <input type="checkbox" class="form-check-input">
          <label class="form-check-label">Remember Me</label>
        </div>
        <input type="submit" name="submit" value="L O G   I N" class="btn btn-outline-secondary btn-lg mb-3">
        <br>
        <a href="signup.php" class="card-link">Haven't an account?</a>
      </div>

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>