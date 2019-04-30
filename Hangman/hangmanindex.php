<?php

echo $this->header;

?>

<!doctype html>
<html>
<head>
    <title>Hangman</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="Hangman/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Hangman | <strong>Stretch Projects</strong></h1>
    </div>

    <div class="col-md-2">
        <div id="hangman_img" class="image0"></div>
    </div>

    <div id="word" class="col-md-4 text-center">
        <h4>Das Wort ist:</h4>
        <p><strong id="targetWord"></strong></p>
    </div>

    <div id="guesses" class="col-md-4 text-center">
        <h4>Du hast geraten</h4>
        <p><strong id="previousGuesses"><em>leider nein.... rate weiter</em></strong></p>
    </div>

    <div class="row">
        <div id="guessInput" class="col-md-8 text-center">
            <br/>
            <br/>
            <br/>
            <input type="text" maxlength="1" id="guess" placeholder="Type a letter" />
        </div>
    </div>
</div>
<script src="Hangman/js/jquery.min.js" type="text/javascript"></script>
<script src="js/hangman.js" type="text/javascript"></script>
<div class="modal fade" id="endGameDialog" tabindex="-1" role="dialog" aria-labelledby="endGameDialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4><a onclick="resetGame();" class="close" data-dismiss="modal" aria-hidden="true">&times;</a></h4>
                <h4 id="endGameDialogTitle"></h4>
            </div>
            <div class="modal-body" id="endGameDialogContent"></div>
            <div class="modal-footer">
                <h4><a onclick="resetGame();" class="btn btn-primary" data-dismiss="modal">Reset</a></h4>
            </div>
        </div>
    </div>
</div>
<script src="Hangman/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>


<?php

echo $this->footer;

?>