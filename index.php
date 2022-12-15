<?php
// $letters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
// $uppercase = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
// $number = [0,1,2,3,4,5,6,7,8,9];

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@#*?!$£&€-_<>=+[]{}()';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < "langhtPassword"; $i++) {
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
    <title>Password</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="langht">Lunghezza Password:</label>
        <input type="number" name="langhtPassword" id="langht" min="8" max="14" required>
        <button onclick="randomPassword()">Submit</button>
        <h3><?php echo randomPassword() ?></h3>
    </form>
</body>
</html>