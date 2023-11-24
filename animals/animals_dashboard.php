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
            <th scope="col">First</th>
            <th scope="col">Handle</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img class="rounded-circle shadow-sm" src='data:image/jpeg;base64,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' alt='' width='45px'></td>
            <td>Mark</td>
            <td>@mdo</td>
            <td>
              <div class='btn-group btn-group-sm me-4 my-1' role='group' aria-label='Basic mixed styles example'>
                <a href='../product/details.php' class='btn btn-dark'>Details</a>
                <a href='../product/update.php' class='btn btn-outline-dark'>Edit</a>
              </div>
              <a href='../product/delete.php' class='btn btn-sm btn-outline-danger my-1'>Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>