<?php

//variáveis em php
//começam com $

/*
$nome = 'José <br>';
echo $nome;
$nome = 'Maria';
echo $nome;
*/

/*
$nome = 'Caio';
$sobrenome = 'Silva';

echo $nome . ' ' . $sobrenome;
echo '<br>';

echo "$nome $sobrenome";
*/
function soma($numero1, $numero2) {
    return $numero1+$numero2;
}


$numero01 = 2;
$numero02 = 2;
$soma = soma($numero01, $numero02);
echo $soma . '<br>';

$numero01 = 3;
$numero02 = 6;
$soma = soma($numero01, $numero02);
echo $soma . '<br>'; 

echo soma(100, 20);