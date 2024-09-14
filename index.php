<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <input type="radio" name="level" id="easy" value="easy" >
        <label for="easy">Легкий</label>
        <input type="radio" name="level" id="medium" value="medium"
        <?php
            if($globalWin == 0) {
                echo "disabled";
            }
        ?>>
        
        <label for="medium">Середній</label>
        <input type="radio" name="level" id="hard" value="hard" 
        <?php 
            if($globalWin !=2) {
                echo "disabled";
            }
        ?>>
        <label for="hard">Важкий</label>
        <input type="hidden" name="attempts" value="0">
        <input type="hidden" name="wins" value="0">
        <button type="submit">Грати</button>
    </form>
</body>
</html>