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
  <title>Add an animal</title>
</head>

<body>
  <?= $navbar ?>

  <div class="container my-5">
    <h1 class="text-center my-4">Add an animal</h1>
    <form method="POST" enctype="multipart/form-data">

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Nane">
        <label for="name">Name</label>
      </div>

      <div class="form-floating mb-3">
        <input type="number" step="0.1" class="form-control" id="age" name="age" placeholder="Age">
        <label for="age">Age</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="size" name="size" aria-label="Floating label select example">
          <option value="small">small</option>
          <option selected value="medium">medium</option>
          <option value="large">large</option>
        </select>
        <label for="size">Size</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="breed" name="breed" placeholder="Breed">
        <label for="breed">Breed</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="vaccinated" name="vaccinated" aria-label="Floating label select example">
          <option selected value="no">choose...</option>
          <option value="yes">yes</option>
          <option value="no">no</option>
        </select>
        <label for="vaccinated">Vaccinated</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="location" name="location" placeholder="Location">
        <label for="location">Location</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="status" name="status" aria-label="Floating label select example">
          <option selected value="adopted">choose...</option>
          <option value="available">Available</option>
          <option value="adopted">Adopted</option>
        </select>
        <label for="status">Availability</label>
      </div>

      <div class="form-floating mb-3">
        <input type="file" class="form-control" id="picture" name="picture" placeholder="picture">
        <label for="picture">Picture</label>
      </div>
      <button type="add" class="btn btn-dark px-5">Add</button>
    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>