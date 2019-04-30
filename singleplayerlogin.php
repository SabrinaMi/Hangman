<?php

echo $this->header;

?>
<div id="main">
    <div class="row">
        <h1 class="col-xs-12">Login</h1>
        <p class="col-xs-12">
            Melden Sie sich bitte an um den Dienst nutzen zu können. Sie besitzen noch keinen Account? Dann können Sie sich <a href="login#registrierung" class="registerOverlay">hier registrieren</a>.
        </p>

        <form method="post" action="login" class="form-horizontal col-xs-12">
            <?php if($this->errorPasswd == true): ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Benutzername und/oder Passwort sind falsch</h4>
                    <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="username" class="col-xs-12 col-md-2">Benutzername</label>
                <div class="col-xs-12 col-md-10">
                    <input type="text" name="username" id="username" class="text form-control" value="" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-xs-12 col-md-2">Passwort</label>
                <div class="col-xs-12 col-md-10">
                    <input type="password" name="password" id="password" class="text form-control" value="" placeholder="Passwort">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Anmelden</button>
            <input type="hidden" name="action" value="login">
        </form>
    </div>
</div>
<?php

echo $this->footer;

?>

