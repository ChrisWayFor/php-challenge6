<?php 
const BR = '<br />';

function writeSecretSentence($paramOne, $paramTwo) {
    $read = "$paramOne s'incline face à $paramTwo";
    return $read;
}
$numberOne = writeSecretSentence("La grenouille sauteuse", "la lapine garou du tibet");
$numberTwo = writeSecretSentence("Le sanglier maraudeur", "L'ours renard du japon");
$NumberThree = writeSecretSentence("LAISSE MOI PASSER !", "Alohomora ? Non ? toujours pas ?");

echo $numberOne . BR;
echo $numberTwo . BR;
echo $NumberThree . BR;

