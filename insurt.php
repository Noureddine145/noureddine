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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="POST" action ="">

        <input type="text" name="product_naam" placeholder="product_naam" required><br>

        <input type="number" name="prijs_per_stuk" placeholder="prijs_per_stuk" required><br>

        <input type="text" name="omschrijving" placeholder="omschrijving" required><br>
        
        <input type="submit" name="verstuur" placeholder="verzenden"><br>

    </form>


    <?php

  if(isset($_POST["verstuur"])) {
    $product_naam= $_POST['product_naam'];
    $prijs_per_stuk=$_POST['prijs_per_stuk'];
    $omschrijving=$_POST['omschrijving'];
  
   $data = [
      'product_naam' => $product_naam,
      'prijs_per_stuk' => $prijs_per_stuk,
      'omschrijving' => $omschrijving,
    ];
    $sql = "INSERT INTO product_naam (product_naam, prijs_per_stuk, omschrijving
    ) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute($data);
  }  
    ?>

</body>
</html>