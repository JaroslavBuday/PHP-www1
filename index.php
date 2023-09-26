<?php
// Cyklus ForEach

$Students = ["Harry","Hermiona","Ron"];  

// vypisanie   udajov

foreach ($Students as $index => $one_student){
    // $index = $index +1;  
    // $index += 1;
    $index++; // predosle moznosti sa mozu zvysovat aj o ine cisla
    echo $index.". ".$one_student;     
    echo "<br>";
}





?>
<p></p>

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