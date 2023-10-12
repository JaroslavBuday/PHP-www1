<?php
// podmienky
// = priradenie, == rovna sa?, === kontroluje aj datovy typ string/int
// != nerovna sa 

// Logicke operatory and a or

$age = 69;
$message = null;

if ($age >= 18 and $age < 65) {
    $message = "Dospelý, nie je v dôchodovom veku";
} elseif($age <18) {
    $message = "Mládež";
} else {
    $message = "Dôchodca";
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