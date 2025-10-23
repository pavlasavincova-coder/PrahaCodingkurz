<?php
$jmena = ["Jan", "Petr", "Eva", "Anna", "Karel"];
$jmeno = $_POST["jmeno"];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  echo "Formulář byl odeslán!";
}
if (in_array($jmeno, $jmena)) {
    echo '<p class="text-green-600 font-bold text-xl">Jméno je platné.</p>';
} else {
    echo '<p class= "text-red-600 font-bold text-xl">Jméno není platné.</p>';
}
?>
