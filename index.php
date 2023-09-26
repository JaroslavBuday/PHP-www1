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
$name = "Harry";
$second_name = "Potter";

$student1 = [
    "first_name" => $name,
    "second_name" => $second_name,
    "college" => "Nebelvir",
    "age" => 15,
    "result" => null
];

echo $student1["first_name"];



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