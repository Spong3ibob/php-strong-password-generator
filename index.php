<?php

function randomPassword() {
    $lunghezza = $_GET["langhtPassword"];
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#*?!$£&€-_<>=+[]{}()';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $lunghezza; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Password</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <div class="mypassword">
    <h2>La tua password è:</h2>
    <h3><?php echo randomPassword() ?></h3>
    </div>
    <div class="container">
        <form action="index.php" method="GET">
            <label for="langht">Lunghezza Password:</label>
            <input type="number" name="langhtPassword" id="langht" min="8" max="14" required>
            <button onclick="randomPassword()">Submit</button>
            <button type="reset" class="annulla">Annulla</button>
        </form>
    </div>
</body>
</html>