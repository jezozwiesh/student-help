<?php 
  include_once '../php/includes/db_handler.php';
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pomoc_uczniowska</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/forum.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Pomoc Uczniowska</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Forum</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Korepetycje</a>
                      </li>
                        <li class="nav-item dropdown nav-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Konto
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Profil</a></li>
                              <li><a class="dropdown-item" href="#">Terminarz</a></li>
                              <li><a class="dropdown-item" href="#">Ustawienia</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Wyloguj</a></li>
                            </ul>
                        </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </header>   
        <body>
            <div class="banner container-fluid">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 searchbar-bg p-1">
                        <input type="text" class="form-control fs-5" id="search" placeholder="Szukaj odpowiedzi na pytania...">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            <div class="container-fluid subject-bar"></div>
            <main class="container-fluid d-flex flex-row justify-content-center gap-4 flex-wrap">
                <div class="feed-container">
                    <form class="filter-bar d-flex flex-row" method="get" id="form-filter">
                      <select class="form-select" name="select-categories">
                        <option selected hidden>Kategorie</option>
                        <option value="1">Tutaj</option>
                        <option value="2">W zaleznosci od</option>
                        <option value="3">przedmiotu beda dzialy/tematy</option>
                      </select>
                      <select class="form-select" name="select-filter">
                        <option selected hidden>Sortuj</option>
                        <option value="latest">Od najnowszych</option>
                        <option value="hardest">Od najtrudniejszych</option>
                        <option value="easiest">Od najłatwiejszych</option>
                      </select>
                    </form>
                    <?php
                      include_once '../php/includes/post_load_handler.php';
                    ?>
                </div>
                <div>
                    <div class="info info-account"></div>
                    <div class="info info-bestuser"></div>
                </div>
            </main>
        </body>
        <script src="../js/post_filter_form.js"></script>
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>