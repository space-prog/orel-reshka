<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php 
        
        if(isset($_POST["globalWins"])) {
            $globalWin = $_POST["globalWins"];
        } else {
            $globalWin = 0;
        }

    ?>

    <form action="game.php" method="post">
        <label>
            <input type="radio" name="level" id="easy" value="easy" class="real-radio">
            <span class="custom-radio"></span>
            <span class="name">Легкий</span>
        </label>
        <label>
            <input type="radio" name="level" id="medium" value="medium" class="real-radio"
            <?php
                if($globalWin == 0) {
                    echo "disabled";
                }
            ?>>
            <span class="custom-radio"></span>
            Середній
        </label>
        <label class="test">
            <input type="radio" name="level" id="hard" value="hard" class="real-radio"
            <?php 
                if($globalWin !=2) {
                    echo "disabled";
                }
            ?>>
            <span class="custom-radio"></span>
            Важкий
        </label>
        <input type="hidden" name="attempts" value="0">
        <input type="hidden" name="wins" value="0">
        <input type="hidden" name="globalWins" value="<?php echo($globalWin)?>">
        <button type="submit" class="button">Грати</button>
    </form>
</body>
</html>