<?php

    define ('ROCK1',  "&#x1F91C;");
    define ('ROCK2',  "&#x1F91B;");
    define ('SCRS',  "&#x1F596;");
    define ('PAPER',    "&#x1F91A;" );


    function game() {
        $options = ["rock", "paper", "sciss"];
        return $options[array_rand($options)];
    }

   
    $result = "";

    $player1 = game();
    $player2 = game();

    if( $player1 === $player2 ) {
        $result = "Draw!";

    } elseif ($player1 === "rock" && $player2 === "paper" ||
              $player1 === "paper" && $player2 === "sciss" ||
              $player1 === "sciss" && $player2 === "rock") {
                $result = "Player 2 wins!";

    } else {
        $result = "Player 1 wins!";
    }

    
    $player1icon = $player1 === "rock" ? ROCK1 : ($player1 == "paper" ? PAPER : SCRS);
    $player2icon = $player2 === "rock" ? ROCK2 : ($player2 == "paper" ? PAPER : SCRS);;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jankenpon</title>

    <link rel="stylesheet" href="css/sytles.css">
</head>
<body>
    <p> Refresh to play again </p>
    <br>
    <div class="player-container">
        <div>
            <h2>Player 1</h2>
            <h1><?php echo $player1icon; ?></h1>
        </div>
        <div>
            <h2>Player 2</h2>
            <h1><?php echo $player2icon; ?></h1>
        </div>
        <div>
            <h1><?php echo $result?></h1>
        </div>
    </div>
</body>
</html>