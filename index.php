<?php
// podmienky
// = priradenie, == rovna sa?, === kontroluje aj datovy typ string/int
// != nerovna sa 

// elseif

$hour = 9;
$message = null;

if ($hour < 10) {
    $message = "Dobré ráno";
} elseif($hour <18) {
    $message = "Dobrý deň";
} else {
    $message = "Dobrý večer";
}

echo $message;

// video 38

?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training PHP sites</title>
</head>
<body>
    <header>
        
    </header>
    <main>
        
    </main>
    <footer>

    </footer>
</body>
</html>