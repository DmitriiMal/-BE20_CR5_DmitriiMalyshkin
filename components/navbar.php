

<?php
session_start();



$navbar = "
<nav class='navbar navbar-expand-sm bg-body-tertiary fixed-top shadow opacity-100' style='height: 4rem;'>
  <div class='container-fluid'>
    <a class='navbar-brand' href='/BE20_CR5_DmitriiMalyshkin/home.php'><i class='fa-solid fa-paw fa-xl me-2'></i>Home</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
     <div class='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
        <li class='nav-item'>
          <a class='nav-link' aria-current='page' href='/BE20_CR5_DmitriiMalyshkin/animals/animals_dashboard.php'>Animals</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='/BE20_CR5_DmitriiMalyshkin/animals/create.php'>Add</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='/BE20_CR5_DmitriiMalyshkin/user/logout.php'>Logout</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='/BE20_CR5_DmitriiMalyshkin/user/login.php'>Login</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='/BE20_CR5_DmitriiMalyshkin/user/register.php'>Register</a>
        </li>
        <li class='nav-item'>
        <a class='nav-link' href='/BE20_CR5_DmitriiMalyshkin/index.php'>My account</a>
        </li>
        </ul>
        
        <!-- </div> -->
        </div>
        </nav>
        
        ";
        
        // <li class='nav-item'>
        //   <a class='nav-link' href='/PHP-Day-8/user/user_dashboard.php'>Users</a>
        // </li>
        // <li class='nav-item'>
        // <a class='nav-link' href='/PHP-Day-8/user/update.php'>Update</a>
        // </li>