<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $soma = $numero1 + $numero2;

    echo "Número 1: " . $numero1 . "<br>";
    echo "Número 2: " . $numero2 . "<br>";
    echo "Soma: " . $soma;
}



if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];

    $soma = $numero1 + $numero2;

    echo "Número 1: " . $numero1 . "<br>";
    echo "Número 2: " . $numero2 . "<br>";
    echo "Soma: " . $soma;
}

?>