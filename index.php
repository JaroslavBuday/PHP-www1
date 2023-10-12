<?php
// podmienky
// = priradenie, == rovna sa?, === kontroluje aj datovy typ string/int
// != nerovna sa 

// Logicke operatory and a or
$password = 12345;
$message = null;

if ($password === 12345 or $password === 24565) {
    $message = "Dvere sa otvárajú môžete vstúpiť";
} else {
    $message = "Neplatný kód. Skúste to prosím znovu";
}
echo $message;

// and - a zároveň              or - alebo
// true, true = true            true, true = true
// true, false = false          true, false = true
// false, true = false          false, true = true
// false, false = false         false, false = false
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