<?php
// Asociativne Pole 

$Students = [
    "jedna" => "Harry", // pridelenie indexu string
    "šesť" => "Ron", 
    "sedem" => "Hermiona"  // hermiona ma nasledujuci index tj.sedem
];    


var_dump($Students);
echo "<br>";

echo "<br>";
echo $Students["jedna"];
echo "<br>";
echo $Students["šesť"];
echo "<br>";
echo $Students["sedem"];
echo "<br>";

// priklad pouzitia

$student1 = [
    "first_name" => "Harry",
    "second_name" => "Potter",
    "college" => "Nebelvir",
    "age" => 15
];

echo $student1["college"];



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