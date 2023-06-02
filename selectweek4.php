<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    $host = 'localhost:3307';
    $db   = 'winkel';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try 
    {
         $pdo = new PDO($dsn, $user, $pass, $options);
         echo "Connectie gemaakt!";
    } 
    catch (\PDOException $e) 
    {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>

<h3>deel 1</h3>

<?php
// hoe je alles selecteert in een query zonder variable
$stmt = $pdo->query("SELECT * FROM product_naam");
while ($row = $stmt->fetch()) {
    echo $row['product_naam']."<br />\n";
    echo $row['product_naam']."<br />\n";
    echo $row['prijs_per_stuk']."<br />\n";
    echo $row['omschrijving']."<br />\n";
}
?>

<h3>deel 2</h3>

<?php

// hoe je een single row selecteert met placeholders
$product_code = 1;
$stmt = $pdo->prepare("SELECT * FROM product_naam WHERE product_code=?");
$stmt->execute([$product_code]); 
$user = $stmt->fetch();
echo $product_code . "<br>";
?>

<h3>deel 3</h3>

<?php

// hoe je een single row selecteert met named parameters
$product_code = 1;
$stmt = $pdo->prepare("SELECT * FROM product_naam WHERE product_code =:product_code");
$stmt->execute(['product_code' => $product_code]); 
$user = $stmt->fetch();
echo $product_code . "<br>";
?>
</body>
</html>

