<?php
    $hour = 8;
    $items = ["Diely","mazivá","nástroje"];
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cenník našich služieb</title>
</head>
<body>
    <?php if($hour<9):?>
        <p>Dobré ráno</p>
    <?php elseif($hour<18):?>
        <p>Dobrý deň</p>    
    <?php else:?>
        <p>Dobrý večer</p>
    <?php endif;?> 
    <!-- za podmienkou musi byt : a endif uzatvara kod php -->
<p>Cenník:</p>
    <ul>
        <?php foreach($items as $one_item ):?>
            <li><a href="#"><?php echo $one_item ?></a></li>
        <?php endforeach;?>
    </ul>
</body>
</html>
<!-- video 62-63 -->