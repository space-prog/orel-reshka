<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
    <?php 
    if(isset($_POST["attempts"])) {
        $attempts = $_POST["attempts"];
    } else {
        $attempts = 0;
    }
if($_POST) {
    $random = rand(0, 1); //Підк монети
    $attempts++;
    //Присв сторони
    if($random == 0) {
        $side = 'Орел';
    } else {
        $side = 'Решка';
    }
    
    $coin = $_POST["radio"]; 

    if($random == $coin) {
        echo "<p>Виграш</p>";
        echo "Випала сторона $side";
    } else {
        echo "<p>програли</p>";  
        echo "Випала сторона $side";
    }
    echo "$attempts";
}
?>
<form action="index.php" method="post">
    <input type="radio" name="radio" id="rad1" value="0">
    <label for="rad1">Орел</label>
    <input type="radio" name="radio" id="rad2" value="1">
    <label for="rad2">Решка</label>
    <input type="hidden" name="attempts" value="<?php echo($attempts);?>">
    <button type="submit">submit</button>
</form>
</body>
</html>