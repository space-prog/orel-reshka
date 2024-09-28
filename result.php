<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Спроби закінчилися</title>
</head>
<body>
    <div class="overflow">
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg1">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg2">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg3">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg4">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg5">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg6">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg7">
        </picture>
        <picture>
            <img src="img/coin-794.svg" alt="" class="svg8">
        </picture>
        <div class="flex">
            <div class="filter">
                <h1>Спроби закінчилися!!!</h1>
                <?php
                $win = $_POST["wins"];
                $globalWins = $_POST["globalWins"];
                $level = $_POST["level"];
                $lose = 10-$win;
                echo "<p>Програшів: $lose</p>";
                echo "<p>Виграшів: $win</p>";
                if($win >= 5) {
                    echo "<p>Ви перемогли на рівні $level, Вам відкрито наступний рівень</p>";
                    if($level == "easy" && $globalWins == 0 || $level == "medium" && $globalWins == 1) {
                        $globalWins++;
                    }
                }
                ?>
                <form action="index.php" method="post">
                    <input type="hidden" name="globalWins" value="<?php echo($globalWins);?>">
                    <input type="hidden" name="level" value="<?php echo($level);?>">
                    <p><button type="submit">Грати далі</button></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>