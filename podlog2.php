<?php
if $score>90 {
    echo "Výborně!";
} elseif ($score>60)&&($score<89) {
    echo "Dobře!";
} else {
    echo "Zkus to znovu.";
}
$X=5;

if ( $X%2==0 ) {
    echo "Číslo je sudé.";
} else {
    echo "Číslo je liché.";
   
}
$name="Petr";
if ($name[0]=="A") { 
    echo "Řetězec začíná na písmeno A.";
} else {
    echo "Řetězec nezačíná na písmeno A.";
    
}

$logedIn=false;
if (!$logedIn) {
    echo "Uživatel není přihlášen.";
} else {
    echo "Uživatel je přihlášen.";
}
$items=[" ", "  ", " "];
if (empty($items)) {
    echo "Pole je prázdné.";
} else {
    echo "Pole není prázdné.";
}
