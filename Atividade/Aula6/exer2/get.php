<?php

echo "Dados recebidos por GET: <br>";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];

$soma = $n1 + $n2 + $n3;

echo "Soma dos números: " .$soma. "<br>";

echo "Média Aritmética: " .$soma / 3 . "<br>"; 
