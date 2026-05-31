<?php
$integerVar = 42;
$floatVar   = 3.14;
$stringVar  = "Benvenuto nel mondo PHP!";
$booleanVar = true;

echo "--- TIPO DI DATO DELLE VARIABILI ---\n";
var_dump($integerVar);
var_dump($floatVar);
var_dump($stringVar);
var_dump($booleanVar);

echo "\n------------------------------------\n\n";

const USER_AGE      = 42;
const PI_VALUE      = 3.14;
const WELCOME_TEXT  = "Benvenuto nel mondo PHP!";
const IS_APPROVED   = true;

echo "--- VALORE DELLE COSTANTI ---\n";
echo USER_AGE . "\n";
echo PI_VALUE . "\n";
echo WELCOME_TEXT . "\n";
echo IS_APPROVED . "\n"; 

?>