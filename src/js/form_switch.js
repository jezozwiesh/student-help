const btn = document.getElementById("change-form-text");
const form = document.getElementsByTagName("form")[0];
let count = 0;
btn.addEventListener("click", () => {
    if(count == 0)
    {
        form.innerHTML = `
        <form method="post">
            <div class="mb-3">
              <label for="surname" class="form-label">Imię</label>
              <input type="text" class="form-control" id="surname" name="imie">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nazwa użytkownika</label>
              <input type="text" class="form-control" id="name" name="nazwisko">
            </div>
            <div class="mb-3">
              <label for="username" class="form-label"></label>
              <input type="username" class="form-control" id="username" name="nazwa_uzytkownika">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Adres email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
              <label for="pass" class="form-label">Hasło</label>
              <input type="password" class="form-control" id="pass" name="haslo">
            </div>
            <div class="mb-3">
              <label for="class" class="form-label">Klasa</label>
              <input type="number" class="form-control" id="class" name="klasa">
            </div>
            <div class="mb-3">
              <label for="profile" class="form-label">Kierunek</label>
              <input type="text" class="form-control" id="profile" name="kierunek">
            </div>
            <div class="form-control-sm form-check">
              <input type="checkbox" class="form-check-input" id="teacher_check" name="korepetytor">
              <label class="form-check-label" for="teacher_check">Korepetytor?</label>
            </div>
            <div class="form-control-sm form-check">
              <input type="checkbox" class="form-check-input" id="check1">
              <label class="form-check-label" for="check1">Rodo?</label>
            </div>
            <div class="mb-3 form-control-sm form-check">
              <input type="checkbox" class="form-check-input" id="check2">
              <label class="form-check-label" for="check2">Regulamin?</label>
            </div>
            <button name="register" type="submit" class="btn btn-primary w-100 mb-1">Utwórz konto</button>
          </form>`;
        btn.innerHTML = "Zaloguj się";
        count++;
    }
    else
    {
        form.innerHTML = `
        <form method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Nazwa użytkownika</label>
          <input type="text" class="form-control" id="username" name="nazwa_uzytkownika">
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Hasło</label>
          <input type="password" class="form-control" id="pass" name="haslo">
        </div>
        <button name="login" type="submit" class="btn btn-primary w-100 mb-1">Zaloguj</button>
      </form>`;
        btn.innerHTML = "Utwórz konto";
        count--;
    }
});