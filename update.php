<?php 

require ("db.php");

// 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // 
    $id = $_GET["id"];
    // 
    $flower = $db->query("SELECT * FROM flower WHERE id=$id")->fetchAll();


    $flower = $flower[0];
    
    
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['flowername'];
    $price = $_POST['price'];
    $descr = $_POST['descr'];

    $db->query("UPDATE flower SET name='$name', price='$price', discr='$descr' WHERE id=$id");
    echo '<script>
    alert("wdtnjr успешно обновлен");
    location.href = "index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="flowername"  value="<?php echo $flower["name"]?>">
        <br>
        <br>
        <input type="number" name="price" value="<?php echo $flower["price"]?>">
        <br>
        <br>
        <input type="text" name="descr" value="<?php echo $flower["discr"]?>">

        <input type="hidden" name="id" value="<?php echo $flower["id"]?>">
        <br>
        <br>
        <button type="submit" name="submit">Обновить</button>

    </form>
    <br>
    <br>
    <a href="index.php">Назад</a>
</body>
</html>