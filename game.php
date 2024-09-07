<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
    <?php 
    
    
    $attempts = $_POST["attempts"];
    echo $attempts;
    $win = $_POST["wins"];
    $level = $_POST["level"];

    if(isset($_POST["radio"])) {
        $coin = $_POST["radio"];
        $random = rand(0, 1); //Підк монети
        $_POST['attempts'] = ++$attempts;

        echo $level;

        //Присв сторони
        if($random == 0) {
            $side = 'Орел';
        } else {
            $side = 'Решка';
        }

        if($level == "easy") {
            if($random == $coin) {
                echo "<p>Виграш</p>";
                echo "Випала сторона $side";
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
                    echo "Випала сторона $side";
                    $win++;
                } else {
                    echo "<p>програли</p>";  
                    echo "Випала сторона $side";
                }
            }
        } else if($level == "medium") {
            if($random == $coin) {
                echo "<p>Виграш</p>";
                echo "Випала сторона $side";
                $win++;
            } else {
                echo "<p>програли</p>";  
                echo "Випала сторона $side";
            }
        } else {
            if($random == $coin) {
                $random = rand(0, 1); //Підк монети
                if($random == 0) {
                    $side = 'Орел';
                } else {
                    $side = 'Решка';
                }
                if($random == $coin) {
                    echo "<p>Виграш</p>";
                    echo "Випала сторона $side";
                    $win++;
                }
            } else {
                echo "<p>програли</p>";  
                echo "Випала сторона $side";
            }
        }
        
        
    } else {
        $coin = "";
    }
?>
<form action=" 
<?php 
    if($attempts < 10) {
        echo "result.php";
    } else {
        echo "game.php";
    }
?>" method="post">
        <input type='hidden' name='attempts' value='<?php echo($attempts);?>'>
        <input type='hidden' name='wins' value='<?php echo($win);?>'>
        <input type='hidden' name='level' value='<?php echo($level);?>'>
<?php 
    if($attempts < 10) {
        echo "
        <button type='submit' name='radio' value='1'>Решка</button>
        <button type='submit' name='radio' value='0'>Орел</button>
    ";
    } else {
        echo '<button type="submit">see results</button>';
    }
?>
</form>
</body>
</html>