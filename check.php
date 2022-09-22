<?php
session_start();

$randNum = $_SESSION['randNum'];
$userGuess=$_POST["userGuess"];

if (isset($randNum)) {
    if ($userGuess<$randNum) {
            echo "<center>Nah... too low!</center>";
            $_SESSION['randNum']++;
        }
    if ($userGuess>$randNum) {
            echo "<center>Nah... too high!</center>";
            $_SESSION['randNum']++;
        }
    if ($userGuess==$randNum) {
            echo "<center>Correct!</center>";
                         unset($_SESSION["randNum"], $_SESSION['guesses']);
    }
}
else {
    echo "Uh oh";
}

