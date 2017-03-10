<main class="mdl-layout__content">
    <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--3-col info-content rejestracja-form">
            <form action="#" method="post">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="login">
                    <label class="mdl-textfield__label" for="login">
                        Login
                    </label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="password" class="mdl-textfield__input password" type="password">
                    <label class="mdl-textfield__label" for="password">
                        Hasło
                    </label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="password2" class="mdl-textfield__input password" type="password">
                    <label class="mdl-textfield__label" for="reppassword">
                        Potwierdz hasło
                    </label>
                </div>
                <i style="cursor:pointer;" id="show" class="material-icons show_password">remove_red_eye</i>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="password" id="email">
                    <label class="mdl-textfield__label" for="email">
                        E-mail
                    </label>
                </div>
                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="regulamin">
                    <input type="checkbox" id="regulamin" class="mdl-checkbox__input">
                    <span style="font-size:11px;" class="mdl-checkbox__label regulamin">Akceptuje wszystkie warunki regulaminu</span>
                </label>
                <button enabled style="margin-top:20px;" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                    Zarejestruj
                </button>
            </form>
        </div>
    </div>
</main>
<script>
 $(document).ready(function() {
  $('#show').on("click", function() {
    var fieldType = $('#password').attr("type");
    if (fieldType == "password") {
      $('#password').attr("type", "text");
        $('#password2').attr("type", "text");
    } else {
      $('#password').attr("type", "password");
        $('#password2').attr("type", "password");
    }
  })
});
</script>
