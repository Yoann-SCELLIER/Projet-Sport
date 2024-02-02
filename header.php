<!-- rappel de "nav.php" -->
<?php require('nav.php') ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- changement de titre en PHP -->
  <title><?php echo (isset($title) ? $title : "nobody"); ?>Le studio/Accuil</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <header>

    <!-- bootstrap 5.3 navbar  -->

    <!------- DEBUT NAV ------->
    <nav class="navbar navbar-expand-lg position-absolute z-3 w-100 oswald" aria-label="Thirteenth navbar example ">
      <div class=" container-fluid position-absolute top-0">

        <button class="navbar-toggler fs-xx" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand  w-xx " href="index.php">
          <img class="img-fluid " src="assets/img/icons/logo.png" alt="">
        </a>

        <div class="collapse navbar-collapse d-lg-flex justify-content-around  ps-3 " id="navbarsExample11">

          <ul class="ps-2 navbar-nav justify-content-center align-items-start text-light ">
            <li class="nav-item h-75 d-flex align-items-end ">
              <a class="nav-link text-light  fs-xx   pt-2 mx-1  " aria-current="page" href="404.php" target="_blank">L'ÉQUIPE</a>
            </li>

            <li class="nav-item h-75 d-flex align-items-end position-relative">
              <a class="nav-link text-light fs-xx mx-1" href="#" data-bs-toggle="dropdown" aria-expanded="false">LES
                ACTIVITÉS</a>
              <ul class="dropdown-menu mt-0 start-0 position-absolute">
                <li class="dropdown-item fs-xx"><a class="text-light text-decoration-none" href="404.php" target="_blank">LE
                    CYCLING</a>
                </li>
                <li class="dropdown-item text-light fs-xx "><a class="text-light text-decoration-none" href="404.php" target="_blank">LE TRAINING FONCTIONNEL</a></li>
                <li class="dropdown-item text-light fs-xx"><a class="text-light text-decoration-none" href="404.php" target="_blank">LE CROSSFIT</a></li>
                <li class="dropdown-item text-light fs-xx"><a class="text-light text-decoration-none" href="404.php" target="_blank">PERSONNAL TRAINNING - COACH PERSONNEL</a></li>
              </ul>
            <li class="nav-item h-75  d-flex align-items-end">
              <a class="nav-link text-light fs-xx mx-1" href="contact.php">CONTACT</a>
            </li>
            <li class="nav-item h-75 d-flex align-items-end">
              <a class="nav-link text-light fs-xx mx-1" aria-current="page" href="404.php" target="_blank">NOS
                OFFRES</a>
            </li>
            <li class="nav-item h-75 d-flex align-items-end">
              <a class="nav-link text-light fs-xx mx-1" aria-current="page" href="404.php" target="_blank">PLANNING</a>
            </li>
            <li class="nav-item h-75 d-flex align-items-end">
              <a class="nav-link text-light fs-xx mx-1" aria-current="page" href="presentation.php">PRÉSENTATION</a>
            </li>
          </ul>

          <div class="text-light fs-xx d-flex align-items-center justify-content-start ">
            <i class="fa-solid fa-mobile-screen-button me-2"></i>
            05 59 47 84 18
          </div>


          <div class="d-flex align-items-center justify-content-start">

            <a href="https://www.facebook.com/" target="_blank" class="fs-5 me-3 fs-xx"><i class="fa-brands fa-square-facebook text-light"></i></a>
            <a href="https://www.instagram.com/" target="_blank" class="fs-5 me-3 fs-xx"><i class="fa-brands fa-instagram text-light"></i></a>
            <a href="https://www.tripadvisor.com/" target="_blank" class="mt-2"><img src="assets/img/icons/tripadvisor.png" alt=""></a>
          </div>
          <div>
            <img class="position-absolute top-0 end-0 me-2 w-bb" src="assets/img/icons/image_logo_EN1.gif" alt="banner-icon">
          </div>
        </div>
      </div>
      </div>
    </nav>
  </header>
  <main>