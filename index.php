<?php
    require("db.php");
    $flower = $db->query("SELECT * FROM flower")->fetchAll();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Магазин цветов</title>
</head>
<body>
    <h1>Магазин цветов</h1>
    <hr>

    <h2>популярные цветы:</h2>
    <div class="flowers">
        <?php
            foreach ($flower as $flower) {
        ?>
            <div class="flower">
                <div class="name"><?php echo $flower["name"]?></div>
                <div class="price"><?php echo $flower["price"]?></div>
                <div class="descr"><?php echo $flower["discr"]?></div>
                <br>
                <a href="update.php?id=<?php echo $flower["id"]?>">Обновить</a>
                <a href="delete.php?id=<?php echo $flower["id"]?>">Удалить</a>
            </div>
        <?php } ?>
    </div>
    
    <br>

    <a href="create.php">Добваить новое растение</a>
</body>
</html>