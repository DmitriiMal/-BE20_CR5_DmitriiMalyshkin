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
  <title>Animals Dashboard</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Animals Dashboard</h1>

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pic</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Size</th>
            <th scope="col">Breed</th>
            <th scope="col">Vaccinated</th>
            <th scope="col">Location</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img class="rounded asp-1 shadow-sm" src='https://images.unsplash.com/photo-1433162653888-a571db5ccccf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' alt='' width='45px'></td>
            <td>Name</td>
            <td>Age</td>
            <td>Size</td>
            <td>Breed</td>
            <td>Vaccinated</td>
            <td>Location</td>
            <td>Status</td>
            <td>
              <div class='btn-group btn-group-sm me-4 my-1' role='group' aria-label='Basic mixed styles example'>
                <a href='details.php' class='btn btn-dark'>Details</a>
                <a href='#' class='btn btn-outline-dark'>Edit</a>
              </div>
              <a href='#' class='btn btn-sm btn-outline-danger my-1'>Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>