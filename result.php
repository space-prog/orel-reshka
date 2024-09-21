<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Спроби закінчилися</title>
</head>
<body>
    <h1>Спроби закінчилися!!!</h1> 
<?php
    $win = $_POST["wins"];
    $globalWins = $_POST["globalWins"];
    $level = $_POST["level"];

    $lose = 10-$win;
    echo "<p>Програшів: $lose</p>";
    echo "<p>Виграшів: $win</p>";

    if($win >= 5) {
        echo "Ви перемогли на рівні $level, Вам відкрито наступний рівень";
        if($level == "easy" && $globalWins == 0 || $level == "medium" && $globalWins == 1) {
            $globalWins++;
        }
    }
?>

    <form action="index.php" method="post">
        <input type="hidden" name="globalWins" value="<?php echo($globalWins);?>">
        <input type="hidden" name="level" value="<?php echo($level);?>">
        <button type="submit">Грати далі</button>
    </form>
</body>
</html>