<?php
$numbers = [1, 2, 3, 4, 5];
function double($num) {
    return $num * 2;
}
$changeNumbers = array_map('double', $numbers); 
print_r($changeNumbers);

$names=["Eva", "Jana", "Eva", "Petr"];
$uniqueNames = array_unique($names);
print_r($uniqueNames);

$a=[1, 2];
$b=[3, 4];
$merged = array_merge($a, $b);
print_r($merged);

$najdi = "Jan";
if (in_array($najdi, $names)) {
    echo "$najdi je v poli.";
} else {
    echo "$najdi není v poli.";
}
$numbers2 = [9,2,5,1];
sort($numbers2);
print_r($numbers2);

