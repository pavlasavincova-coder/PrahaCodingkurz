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
function sumEvenNumbers($numbers) {
   $choose=array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    $sum = array_sum($numbers);
    echo "Součet sudých čísel je: " . $sum;