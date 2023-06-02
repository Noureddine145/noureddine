<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>deel 1</h1>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        echo $i . " ";
    }
    ?>

    <h2>deel 2</h2>
    <?php
    $mijnklas = array ("Noureddine","Moustafa","Marwan","Mohamed","Cagatay","Furkan","Amine","denny","masal","Anass");
    foreach($mijnklas as $naam) {
        echo $naam . "<br>";
    }
    ?>

    <h3>deel 3</h3>
    <?php

    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
    $aantalMaanden = count($maanden);

    for ($i = 0; $i <$aantalMaanden; $i++) {
    echo 'Maand' . ($i + 1) . 'is' . $maanden[$i] . '<br/>';
    }
    ?>

    <h4>deel 4</h4>
    <?php
    $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
    foreach($maanden as $aantalmaanden) {
        echo $aantalmaanden . "<br>";
    }
    ?>
</body>
</html>