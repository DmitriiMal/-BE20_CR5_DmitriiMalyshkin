<?php

session_start();


require_once "components/db_connect.php";
require_once "components/navbar.php";

$sql = "SELECT * FROM `animals` WHERE `age` >= 8";
$result = mysqli_query($conn, $sql);

$cards = "";

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $cards .= "
    <div class='my-3'>
        <div class='card my-card shadow'>
          <img class='card-img-top object-fit-cover' src='pictures/$row[picture]' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text my-1'>$row[breed]</p>
            <p class='card-text my-1'>$row[age] years old</p>
            <p class='card-text'>$row[status]</p>
          </div>

          <div class='card-body pt-1'>
            <div class='btn-group btn-group-sm' role='group' aria-label='Basic mixed styles example'>
              <a href='animals/details.php?id=$row[id]' class='btn btn-dark'>Details</a>
              <a href='#' class='btn btn-outline-dark ";
    if ($row["status"] == "Adopted") {
      $cards .= "disabled";
    };
    $cards .= "'>Take me home</a>
            </div>
          </div>
        </div>
      </div>
    ";
  }
} else {
  $cards = "No data found.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/553d5d3b41.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
  <title>seniors</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5 pt-5">

    <div class='btn-group btn-group-sm' role='group' aria-label='Basic mixed styles example'>
      <a href='home.php' class='btn btn-outline-secondary'>All animals</a>
      <a href='seniors.php' class='btn btn-secondary'>Seniors only</a>
    </div>

    <div class="row row-cols-xs-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
      <?= $cards ?>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>