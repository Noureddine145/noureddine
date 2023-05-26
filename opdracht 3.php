<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>deel 1</h3>
    <?php
        $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
        $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein','boot'];

        echo count($myArray);
    ?>

    <h3>deel 2</h3>
    <?php
        $myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
        echo "Het array heeft ".count($myArray)." elementen";

        $myArray[]"boot";
        echo "Het array heeft ".count($myArray)." elementen";
    ?>

    <h3>deel 3</h3>
    <?php
        echo regel 2 "bar"
        echo regel 5 "4"
        echo regel 8 "Toyota"
        echo regel 9 "volvo,BMW,toyota"
        echo regel 12 "5"
        echo regel 19 "4"
    ?>

    <?php
        $cijfersPHP = [4.4, 4.6, 5.6, 6.1, 7.2];

        // bereken gemiddelde door alle cijfers op te tellen en te delen door het aantal//

        $gemiddelde = array_sum ($cijfersPHP) / count($aantalCijfers);

        echo " Gemiddelde is: ". $gemiddelde;
        echo(round($gemiddelde). "<br>");

        // ik vind het beter omdat het korter is //
    ?>

     
</body>
</html>