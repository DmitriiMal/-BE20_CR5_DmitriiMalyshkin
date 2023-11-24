<?php
require_once "../components/db_connect.php";
require_once "../components/navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/553d5d3b41.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style/style.css">
  <title>Register</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Register</h1>
    <form>
      <div class="mb-3">

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
          <label for="first_name">First Name</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
          <label for="last_name">Last Name</label>
        </div>

        <div class="form-floating mb-3">
          <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Phone">
          <label for="phone_number">Phone</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="address" name="address" placeholder="address">
          <label for="address">Address</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password confirm</label>
        </div>
        <div class="form-floating mb-3">
          <input type="file" class="form-control" id="picture" name="picture" placeholder="picture">
          <label for="picture">Picture</label>
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
        <small class="text-secondary ms-4">Already have an account? <a class="link-dark" href="login.php">Log in here</a></span>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>