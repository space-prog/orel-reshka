<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Спроби закінчилися</title>
</head>
<body>
    <h1>Спроби закінчилися!!!</h1>
    <a href="index.php">Спробувати удачу ще раз</a>
</body>
<?php
    $win = $_POST["wins"];

    $lose = 10-$win;
    echo "<p>Програшів: $lose</p>";
    echo "<p>Виграшів: $win</p>";
?>
</html>