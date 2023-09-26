<?php
// Dvojdimenzionalne Pole (pole v poli)

$Students = [
    [
        "first_name" => "Harry",
        "second_name" => "Potter",
        "age" => 15
    ],
    [
        "first_name" => "Hermiona",
        "second_name" => "Grangerova",
        "age" => 14
    ],
    [
        "first_name" => "Ron",
        "second_name" => "Weasley",
        "age" => 15
    ]
];  
// vypisanie   udajov
echo $Students[0]["first_name"];
echo "<br>";
echo $Students[2]["second_name"];
echo "<br>";
echo $Students[1]["age"];
echo "<br>";


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