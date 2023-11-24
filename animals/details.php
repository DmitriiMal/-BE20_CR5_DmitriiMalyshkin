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
  <title>Details</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Name</h1>
    <div class="d-flex mb-4">
      <img class="w-50 rounded shadow-sm object-fit-cover me-4" src="https://images.unsplash.com/photo-1433162653888-a571db5ccccf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      <div class="border-start ps-4">
        <p>age</p>
        <p>size</p>
        <p>breed</p>
        <p>vaccinated</p>
        <p>location</p>
        <p>status</p>
      </div>
    </div>
    <a href='#' class='btn btn-outline-dark'>Take me home</a>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>