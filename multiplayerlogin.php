<?php

echo $this->header;

?>
    <h1 class="header text-center">Login</h1><p></p>
    <div class="container m-auto" id="login">
        <form action ="http://localhost/TicTacToe-Game/" class="form-signin mb-5 mt-0 p-5" method="get">
            <div class="form-group mt-5 p-3">
                <label for="Player">Spielername 1</label>
                <input type="text" class="form-control" id="Player" aria-describedby="nameHelp" placeholder="Bitte Namen eingeben">
            </div>
            <div id="passwordWrapper">
                <div class="passwordField">
                    <label for="password">Passwort Spieler 1 </label>
                    <input type="password" name="password" id="password" placeholder="Bitte geben Sie Ihr Passwort ein">
                </div>
                <div class="passwordFeedback">
                    <div class="strengthIndicator"></div>
                    <div class="error feedback">Ihr Passwort ist zu kurz</div>
                    <div class="warning feedback noSpecialSigns">Ihr Passwort enthält keine Sonderzeichen</div>
                    <div class="success feedback">Ihr Passwort entspricht den Anforderungen</div>
                </div>
            </div>

            <p></p>
            <div class="form-group mt-5 p-3">
                <label for="Player">Spielername 2</label>
                <input type="text" class="form-control" id="Player" aria-describedby="nameHelp" placeholder="Bitte Namen eingeben">
            </div>
            <div class="form-group p-3">
                <label for="exampleInputPassword1">Passwort Spieler 2</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Passwort">
            </div>
            <button type="submit" class="btn btn-primary" id="login">Login</button>

<?php

echo $this->footer;

?>