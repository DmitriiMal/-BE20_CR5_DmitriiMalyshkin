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
  <title>Login</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Login</h1>
    <form>
      <div class="mb-3">


        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="floatingInput" value="admin@admin.com" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="floatingPassword" value="admin" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <small class="d-block mb-4">
          <a class="link-secondary" href="#" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="¯\_(ツ)_/¯">
            Forgotten password?
          </a>
        </small>

        <button type="submit" class="btn btn-dark">Submit</button>
        <small class="text-secondary ms-4">Not registered yet? <a class="link-dark" href="register.php">Create your account here</a></small>
    </form>

    <div class="d-md-flex  justify-content-around my-5 pt-5">
      <div>
        <h6 class="text fw-lighter">Admin</h6>
        <p class="text fw-lighter mb-1">login: admin@admin.com</p>
        <p class="text fw-lighter">password: admin</p>
      </div>
      <div>
        <h6 class="text fw-lighter">User</h6>
        <p class="text fw-lighter mb-1">login: user@user.com</p>
        <p class="text fw-lighter">password: user</p>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
  </script>
</body>

</html>