<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "BE20_CR5_animal_adoption_DmitriiMalyshkin";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if (!$conn) {
  echo "No connection";
}
