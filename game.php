<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="game.css">
        <title>Document</title>
    </head>
    <body>
        <span class="circle1"></span>
        <span class="circle2"></span>
        <span class="circle3"></span>
            <div class="block">
            
            
            <?php
            
            
            $attempts = $_POST["attempts"];
            $win = $_POST["wins"];
            $level = $_POST["level"];
            $globalWin = $_POST["globalWins"];
            
            if(isset($_POST["radio"])) {
                $coin = $_POST["radio"];
                $random = rand(0, 1); //Підк монети
                $attempts++;
            
                echo "<p>Використано спроб: $attempts</p>";
                echo "<p>Рівень: $level</p>";
                //Присв сторони
                if($random == 0) {
                    $side = 'Орел';
                } else {
                    $side = 'Решка';
                }
                if($level == "easy") {
                    if($random == $coin) {
                        echo "<p>Виграш</p>";
                        echo "<p>Випала сторона $side</p>";
                        $win++;
                        if($random == 0) {
                            $side = 'Орел';
                        } else {
                            $side = 'Решка';
                        }
                    } else {
                        $random = rand(0, 1); //Підк монети
                        if($random == 0) {
                            $side = 'Орел';
                        } else {
                            $side = 'Решка';
                        }
                        if($random == $coin) {
                            echo "<p>Виграш</p>";
                            echo "<p>Випала сторона $side</p>";
                            $win++;
                        } else {
                            echo "<p>програли</p>";
                            echo "<p>Випала сторона: $side</p>";
                        }
                    }
                } else if($level == "medium") {
                    if($random == $coin) {
                        echo "<p>Виграш</p>";
                        echo "<p>Випала сторона $side</p>";
                        $win++;
                    } else {
                        echo "<p>програли</p>";
                        echo "<p>Випала сторона $side</p>";
                    }
                } else if($level == "hard"){
                    if($random == $coin) {
                        $random = rand(0, 1); //Підк монети
                        if($random == 0) {
                            $side = 'Орел';
                        } else {
                            $side = 'Решка';
                        }
                        if($random == $coin) {
                            echo "<p>Виграш</p>";
                            echo "<p>Випала сторона $side</p>";
                            $win++;
                        }
                    } else {
                        echo "<p>програли</p>";
                        echo "<p>Випала сторона $side</p>";
                    }
                }
            
            
            } else {
                $coin = "";
            }
            ?>
                
            <form action=" 
            <?php 
                if($attempts < 10) {
            echo "game.php";
                } else {
            echo "result.php";
                }
            ?>" method="post">
            <input type='hidden' name='attempts' value='<?php echo($attempts);?>'>
            <input type='hidden' name='wins' value='<?php echo($win);?>'>
            <input type='hidden' name='level' value='<?php echo($level);?>'>
            <input type="hidden" name="globalWins" value="<?php echo($globalWin)?>">
            <?php 
                if($attempts < 10) {
            echo "
            <p>
                <button type='submit' name='radio' value='1'>Решка</button>
                <button type='submit' name='radio' value='0'>Орел</button>
            </p>
                ";
                } else {
            echo '<p><button type="submit">see results</button></p>';
                }
            ?>
            </form>
            </div>
</body>
</html>