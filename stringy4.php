<?php
$text = "Ahoj";
$obraceny = strrev($text);
echo $obraceny; // Výstup: "johA"
$word="php";
$upraveny = ucfirst($word); 
echo $upraveny; // Výstup: "Php"
$sentence = "Byla velká bouřka.";
$soucet = 0;
$delka = strlen($sentence);

for ($i=0;$i<$delka;$i++) {
    if ($sentence[$i]=="a") {
                 $soucet++;
         }
        }
echo "Počet písmen 'a' ve větě: " . $soucet;
$slovo = "Laravel";
if (strpos($sentence,$slovo)==true) {   
    echo "Slovo bylo nalezeno ve větě.";
} else {
    echo "Slovo nebylo nalezeno ve větě.";
}

$novy = str_replace("e", "3", $sentence);


