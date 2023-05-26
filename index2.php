<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="verwerking.php">
    <input type="text" name="name" placeholder="naam" required> <br>

    <input type="text" name="achternaam" placeholder="achternaam" required> <br>

    <input type="text" name="leeftijd" placeholder="leeftijd" required> <br>

    <input type="email" name="email" placeholder="email" required> <br>

    <input type="text" name="adres" placeholder="adres" required> <br>

    <input type="submit" value="verstuur">

</form>

<p>Get methode<br>
GET requests can be cached <br>
GET requests remain in the browser history <br>
GET requests can be bookmarked<br>
GET requests should never be used when dealing with sensitive data <br>
GET requests have langth restrictions <br>
GET requests are only used to request data (not modify) <br>

POST METHODE <br>
POST requests are never cached <br>
POST requests do not remain in the browser history <br>
POST requests cannot be bookmarked <br>
POST requests have no restrictions on data length <br>
</p>
</body>
</html>