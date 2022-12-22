<?php
    require("db.php");
    if (isset($_POST["submit"])) 
    {
        $flowerName = $_POST["flowerName"];
        $price = $_POST["price"];
        $descr = $_POST["descr"];
        $db->query("INSERT INTO flower (name, price, discr) VALUES ('$flowerName', '$price', '$descr')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="flowerName" placeholder="Название растения">
        <br>
        <br>

        <input type="number" name="price" placeholder="Цена">
        <br>
        <br>
        <input type="text" name="descr" placeholder="Описание">
        <br>
        <br>
        <button type="submit" name='submit'>Отправить</button>
    </form>
    
    <br>
    <a href="index.php">назад</a>
</body>
</html>