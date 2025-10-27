<?php
function findLogestWord($words) {
    $longest = "";
    foreach ($words as $word) {
        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }
    echo "Nejdelší slovo je: " . $longest;
}
$words=["jablko", "banán", "třešeň"];
findLogestWord($words);
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function sumEvenNumbers($numbers) 
{
   $choose=array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    $sum = array_sum($choose);
    echo "Součet sudých čísel je: " . $sum;
}
$words = "Byla velka bourka.";
    function reverseWords($words) {
        $words = explode(" ", $words);
        $reverse = array_reverse($words);
        $sentence = implode(" ", $reverse);
        echo "Obrácená věta: " . $sentence;
    }
    reverseWords($words);

$array = [1, 2, 3, 4, 5, 3, 6, 2];
function hasDuplicates($array)
 {
    $unique = array_unique($array);
    if (count($unique) < count($array)) {
        echo "Pole obsahuje duplicitní hodnoty.";
    } else {
        echo "Pole neobsahuje duplicitní hodnoty.";
    }
 }
  hasDuplicates($array);

  function uniqueLetters($string) 
  {
    $letters = str_split($string);
    $uniqueLetters = array_unique($letters);
    echo "Unikátní písmena ve slově: " . implode(", ", $uniqueLetters);
}
$string = "programování";
uniqueLetters($string);