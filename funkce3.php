<?php
function greet($name) {
    return "Ahoj, " . $name . "!";
}
echo greet("Svět");
function add($a, $b) {
    return $a + $b;
}
$result = add(5, 10);
echo "Součet je: " . $result;

isEven($num)
{
    return $number % 2 == 0;
}
$number = 4;
if (isEven($number)) {
    echo $number . " je sudé číslo.";
} else {
    echo $number . " je liché číslo.";
}
countVowels($string)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú', 'y', 'ý'];
    $count = 0;
    $string = mb_strtolower($string);
    for ($i = 0; $i < mb_strlen($string); $i++) {
        if (in_array(mb_substr($string, $i, 1), $vowels)) {
            $count++;
        }
    }
    return $count;
}