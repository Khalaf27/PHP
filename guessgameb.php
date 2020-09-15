<?php
session_start();
if (isset($_SESSION["guesses"]))
{
    $_SESSION["guesses"] = $_SESSION["guesses"] + 1;
}
else  {
    $_SESSION["guesses"] = 1 ;
}
$number = $_POST["guessnumber"];
$submitbutton = $_POST["submit"];
$randomnummber = mt_rand(1,4);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guessgameb.php" method="POST">
    <p>
    <h1>Guess a number between 1 - 99</h1> 
    <h2>Made by Ahmed Khalaf</h2>
    <br>
    <br>
    <input type="text" name="guessnumber" size="30">
    <br>
    <br>
    <input type="submit" name="submit" value="try">
    <br>
    <br>
    </p>
    </form>
    <?php
if ($submitbutton) {
    if(($number > 11) && ($number < 99)){
        if ($number != $randomnummber){
            echo "Icecold, try agian!";
        }
}
if (($number > 7) && ($number < 12)) {
            if ($number != $randomnummber){
            echo "Lukewarm, try agian!";
            }
        }
        if (($number > 4) && ($number < 8)) {
             if ($number != $randomnummber){
            echo "Warm, try agian!";
            }
        }
        if ($number == $randomnummber)
            echo "$randomnummber is the correct guess!";


    }
 echo "<br/>";
 echo "<br/>";
 echo "Your total guesses : " . $_SESSION["guesses"];
?>
</body>
</html>


 