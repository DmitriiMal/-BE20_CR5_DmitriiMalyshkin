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
  <link rel="stylesheet" href="style/style.css">
  <title>Home</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
      <div>
        <div class='card my-card shadow' style="min-height: 30rem;">
          <img src='https://images.unsplash.com/photo-1531762834015-57aa765c6047?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZvcnJlc3R8ZW58MHx8MHx8fDA%3D' class='card-img-top object-fit-cover' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Card title</h5>
            <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
          <ul class='list-group list-group-flush'>
            <li class='list-group-item'>An item</li>
            <li class='list-group-item'>A second item</li>
            <li class='list-group-item'>A third item</li>
          </ul>
          <div class='card-body d-flex justify-content-between'>
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