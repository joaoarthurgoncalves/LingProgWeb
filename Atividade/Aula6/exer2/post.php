<?php
echo "Dados recebidos por POST: <br>";

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$soma = $n1 + $n2 + $n3;

echo "Soma dos números: " .$soma. "<br>";

echo "Média Aritmética: " .$soma / 3 . "<br>"; 
