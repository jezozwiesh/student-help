<?php
  include_once '../php/includes/account_form_handler.php';
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zaloguj się</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
      <main class="form-signin w-100 m-auto shadow-sm border rounded">
          <form method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Nazwa użytkownika</label>
              <input type="text" class="form-control" id="username" name="nazwa_uzytkownika">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Hasło</label>
              <input type="password" class="form-control" id="pass" name="haslo">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-1" name="login">Zaloguj</button>
          </form>
          <div class="form-text text-info-subtle" id="change-form-text">Utwórz konto</div>
      </main>
    </body>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/form_switch.js"></script>
</html>