<?php
require_once "components/db_connect.php";
require_once "components/navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/553d5d3b41.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
  <title>Home</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
      <div>
        <div class='card my-card shadow'>
          <img class='card-img-top object-fit-cover' src='https://images.unsplash.com/photo-1433162653888-a571db5ccccf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Name</h5>
            <p class='card-text mt-3 mb-1'>Breed</p>
            <p class='card-text'>Availability</p>
          </div>

          <div class='card-body pt-1'>
            <div class='btn-group btn-group-sm' role='group' aria-label='Basic mixed styles example'>
              <a href='animals/details.php' class='btn btn-dark'>Details</a>
              <a href='#' class='btn btn-outline-dark'>Take me home</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>